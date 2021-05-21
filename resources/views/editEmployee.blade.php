
@extends('app')


@section('content')
    <div class="container">
        <div class="mt-5 card">
            <div class="card-body">
                <form method="POST" action="{{ route('employee.update', ['id' => $employee->employee_id]) }}">
                    @csrf
                    @method('PUT')
                    <label>Employee ID</label>
                    <input type="text" class="m-1 form-control" name="id" value="{{ $employee->employee_id }}">
                    <label>First Names</label>
                    <input type="text" class="m-1 form-control" name="firstNames" value="{{ $employee->first_names }}">
                    <label>Last Name</label>
                    <input type="text" class="m-1 form-control" name="lastName" value="{{ $employee->last_name }}">
                    <label>Address</label>
                    <input type="text" class="m-1 form-control" name="address" value="{{ $employee->address }}">
                    <label>Phone Number</label>
                    <input type="text" class="m-1 form-control" name="phone" value="{{ $employee->phone_number}}">
                    <label>Date of Birth</label>
                    <input type="text" class="m-1 form-control" name="dateOfBirth" value="{{ $employee->date_of_birth }}">
                    <small class="m-1 form-text text-muted">day/month/year format e.g. 19/06/1987.</small>
                    <button type="submit" class="m-1 btn btn-primary btn-lg btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection