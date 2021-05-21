@extends('app')



@section('content')
        <div class="container">
            <div class="mt-3 card">
                <div class="card-body">
                    <p><b>Employee ID:</b> {{ $employee->employee_id }}</p>
                    <p><b>First Name:</b> {{ $employee->first_names }}</p>
                    <p><b>Last Name:</b> {{ $employee->last_name }}</p>
                    <p><b>Address:</b> {{ $employee->address }}</p>
                    <p><b>Phone Number:</b> {{ $employee->phone_number }}</p>
                    <p><b>Date of birth:</b> {{ $employee->date_of_birth }}</p>
                    <p>
                    <form action="{{ route('employee.destroy', ['id' => $employee->employee_id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                    </p>
                   <a href="{{ route('employee.edit', ['id' => $employee->employee_id])  }}" class="btn btn-success" role="button">Edit</a>
                </div>
            </div>
        </div>
@endsection