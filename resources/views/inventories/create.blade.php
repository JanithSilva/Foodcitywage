@extends('layouts.app')

@section('content')

    <a href="/items" class="btn btn-warning">Back to items</a>
    <br></br>

    <h1>Create Item</h1>


    {!! Form::open(['action' => 'InventoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class = "form-group">
        {{Form::label('Name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Item name', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('qty', 'Qty')}}
        {{Form::text('qty', '', ['class' => 'form-control', 'placeholder' => 'Quantity', 'required'])}}

    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
