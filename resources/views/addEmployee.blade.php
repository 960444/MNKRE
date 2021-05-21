
@extends('app')


@section('content')
    <div class="container">
        <div class="mt-5 card">
            <div class="card-body">
                <form method="POST" action="{{ route('employee.store') }}"">
                    @csrf
                    <label>Employee ID</label>
                    <input type="text" class="m-1 form-control" name="id">
                    <label>First Names</label>
                    <input type="text" class="m-1 form-control" name="firstNames">
                    <label>Last Name</label>
                    <input type="text" class="m-1 form-control" name="lastName">
                    <label>Address</label>
                    <input type="text" class="m-1 form-control" name="address">
                    <label>Phone Number</label>
                    <input type="text" class="m-1 form-control" name="phone">
                    <label>Date of Birth</label>
                    <input type="text" class="m-1 form-control" name="dateOfBirth">
                    <small class="m-1 form-text text-muted">day/month/year format e.g. 19/06/1987.</small>
                    <button type="submit" class="m-1 btn btn-primary btn-lg btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
