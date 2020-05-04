@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employees</div>

                <div class="card-body">
                    @if(count($employees) > 0)
                    <table class="table table-hover table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Employee ID</th>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Birth date</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Hire date</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                          <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->birth_date }}</td>
                            <td>{{ $employee->gender }}</td>
                            <td>{{ $employee->hire_date }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Actions
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href="{{ route("employees.create") }}">
                                            <button type="button" class="btn btn-success btn-sm">Create employee</button>
                                        </a>
                                        <a href="{{ route("employees.edit", $employee->id) }}">
                                            <button type="button" class="btn btn-primary btn-sm">Update employee</button>
                                        </a>
                                        <form action="{{ route("employees.destroy", $employee->id) }}" method="POST"> 
                                            {{ csrf_field() }}
                                            {{ method_field("DELETE") }}
                                            <button type="submit" class="btn btn-danger btn-sm">Delete employee</button>
                                        </form>
                                    </div>
                                  </div>
                                
                            </td>
                          </tr>
                            @endforeach
                        </tbody>
                      </table>
                        <a href="{{ route("employees.truncate") }}">
                            <button type="button" class="btn btn-warning btn-sm">Truncate employee</button>
                        </a>
                        <div class="d-flex justify-content-center">
                            {{ $employees->links() }}
                        </div>
                    @else 
                        <div class="container">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        No employees yet!
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ route("employees.create") }}">
                                            <button type="button" class="btn btn-success btn-sm">Create employee</button>
                                        </a>
                                        <a href="{{ route("employees.truncate") }}">
                                            <button type="button" class="btn btn-warning btn-sm">Truncate employee</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection