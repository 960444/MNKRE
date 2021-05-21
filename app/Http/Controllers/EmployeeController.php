<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    /**
     * Display a view for searching employees
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('searchEmployees');
    }

    /**
     * Display employee search results
     *
     * @return \Illuminate\Http\Response
     */
    public function displayResults(Request $request)
    {   
        //Get id from HTTP request
        $id = $request->input('id');
        //Find an employee
        $employees = DB::table('employees')->where('employee_id', $id)->get();
        //Render the view along with results
        return view('searchEmployees', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addEmployee');
    }

    /**
     * Store a newly created employee in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Initiate a new employee
        $employee = new Employee();
        //Set attributes based on form input
        $employee->employee_id = $request->input('id');
        $employee->first_names = $request->input('firstNames');
        $employee->last_name = $request->input('lastName');
        $employee->address = $request->input('address');
        $employee->phone_number = $request->input('phone');
        $employee->date_of_birth = $request->input('dateOfBirth');
        //Save the employee in the database
        $employee->save();
        return view('searchEmployees');
    }

    /**
     * Display the specified employee.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Retrieve the employee from the database
        $employee = Employee::where('employee_id', '=', $id)->firstOrFail();
        //Render the view along with employee data
        return view('showEmployee', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified employee.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Retrieve the employee from the database
        $employee = Employee::where('employee_id', '=', $id)->firstOrFail();
        //Render the view along with employee data
        return view('editEmployee', ['employee' => $employee]);
    }

    /**
     * Update the specified employee in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Retrieve the employee from the database
        $employee = Employee::where('employee_id', '=', $id)->firstOrFail();
        //Update the employee attribute based on user input
        $employee->first_names = $request->input('firstNames');
        $employee->last_name = $request->input('lastName');
        $employee->address = $request->input('address');
        $employee->phone_number = $request->input('phone');
        $employee->date_of_birth = $request->input('dateOfBirth');
        //Save the updated employee to the database
        $employee->save();
        //Render employee profile
        return view('showEmployee', ['employee' => $employee]);
    }

    /**
     * Remove the employee resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find and delete the specified employee
        DB::table('employees')->where('employee_id', $id)->delete();
        //Redirect to add employee page
        return view('addEmployee');
    }
}
