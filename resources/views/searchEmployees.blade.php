@extends('app')



@section('content')
    <div class="container">
        <div class="mt-3 card">
            <div class="card-body">
                <form method="POST" action="{{ route('employee.displayResults') }}">
                    @csrf
                    <label>Employee ID</label>
                    <input type="text" class="m-1 form-control" name="id">
                    <button type="submit" class="m-1 btn btn-primary btn-lg btn-block">Search</button>
                </form>
            </div>
        </div>
        @isset($employees)
            <div class="mt-3 card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Employee ID</th>
                                <th scope="col">First Names</th>
                                <th scope="col">Last Name</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        @foreach($employees as $employee)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $employee->employee_id }}</th>
                                    <td>{{ $employee->first_names }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td><a href="{{ route('employee.show', ['id' => $employee->employee_id])  }}" class="btn btn-primary" role="button">View Employee</a></td>
                                </tr>
                            </tbody>
                    </table>
                @endforeach
                </div>
            </div>
        @endisset
    </div>
@endsection