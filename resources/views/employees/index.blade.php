@extends('layouts.app')

@section('content')


    <a href="/adminPanel" class="btn btn-warning btn-lg">Back to dashboard</a>
    <hr>

    <h1 class="display-4">Employees</h1>

    <a href="employees/create" class="btn btn-primary btn-lg float-right">+ Add Employee</a>

    <br></br>

    @if(count($employees)>0)

        <br>

        <div class="table-responsive table-fit">
            <table class="table table-striped">
                <thead class="thead-dark">

                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Operations</th>

                </thead>
                <tbody>

                @foreach($employees as $employee)
                    <tr>

                        <th scope="row">{{$employee->name}}</th>
                        <th>{{$employee->designation}}</th>
                        <th>{{$employee->address}}</th>
                        <th>{{$employee->phone}}</th>
                        <th>

                            {!!Form::open(['action' => ['EmployeesController@destroy', $employee->id], 'method' => 'POST' ,'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            <a href="/employees/{{$employee->id}}/edit" class="btn btn-warning">Edit</a>
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </th>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


        <br>
        {{$employees->links()}}
    @else
        <h3>Oops! No items found</h3>
    @endif

@endsection



