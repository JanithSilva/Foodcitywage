@extends('layouts.app')

@section('content')

    <a href="/centres" class="btn btn-warning">Back to centres</a>
    <br></br>

    <h1>Add Centre</h1>


    {!! Form::open(['action' => 'CentresController@store', 'method' => 'POST']) !!}

    <div class = "form-group">
        {{Form::label('Name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Centre name', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Income Rs. ', 'Income')}}
        {{Form::text('income', '', ['class' => 'form-control', 'placeholder' => 'Income', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Target Sale Rs. ', 'Target Sale')}}
        {{Form::text('target', '', ['class' => 'form-control', 'placeholder' => 'Target Sale', 'required'])}}

    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
