@extends('layouts.app')

@section('content')

    <a href="/employees" class="btn btn-warning">Back to employees</a>
    <br></br>

    <h1>Add employee</h1>


    {!! Form::open(['action' => 'EmployeesController@store', 'method' => 'POST']) !!}

    <div class = "form-group">
        {{Form::label('Name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Employee name', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Address', 'Address')}}
        {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Designation', 'Designation')}}
        {{Form::text('designation', '', ['class' => 'form-control', 'placeholder' => 'Designation', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Phone', 'Phone')}}
        {{Form::number('phone', '', ['class' => 'form-control', 'placeholder' => 'phone', 'required', 'pattern' => '[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}'])}}

    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
