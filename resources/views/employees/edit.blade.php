@extends('layouts.app')

@section('content')

    <a href="/employees" class="btn btn-warning">Back to employees</a>
    <br></br>

    <h1>Add employee</h1>


    {!! Form::open(['action' => ['EmployeesController@update', $employee->id], 'method' => 'POST']) !!}

    <div class = "form-group">
        {{Form::label('Name', 'Name')}}
        {{Form::text('name', $employee->name, ['class' => 'form-control', 'placeholder' => 'Employee name', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Address', 'Address')}}
        {{Form::text('address', $employee->address, ['class' => 'form-control', 'placeholder' => 'Address', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Designation', 'Designation')}}
        {{Form::text('designation', $employee->designation, ['class' => 'form-control', 'placeholder' => 'Designation', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Phone', 'Phone')}}
        {{Form::text('phone', $employee->phone, ['class' => 'form-control', 'placeholder' => 'phone', 'required'])}}

    </div>

    {{form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
