<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Render create employee view
Route::get('/', [EmployeeController::class, 'create'])->name('employee.create');

//Render employee search view
Route::get('/search', [EmployeeController::class, 'index'])->name('employee.search');

//Employee search handle
Route::post('/search', [EmployeeController::class, 'displayResults'])->name('employee.displayResults');

//Create a new employee handle
Route::post('employee', [EmployeeController::class, 'store'])->name('employee.store');

//Render employee profile 
Route::get('employee/{id}', [EmployeeController::class, 'show'])->name('employee.show');

//Update employee handle
Route::put('employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');

//Render edit employee view
Route::get('employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');

//Delete employee handle
Route::delete('employee/{id}/delete', [EmployeeController::class, 'destroy'])->name('employee.destroy');


