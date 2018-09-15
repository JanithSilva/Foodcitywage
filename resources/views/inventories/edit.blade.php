@extends('layouts.app')

@section('content')
    <h1>Edit Item</h1>
    <br>

    {!! Form::open(['action' => ['InventoryController@update', $inventory->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class = "form-group">
        {{Form::label('Name', 'Name')}}
        {{Form::text('name', $inventory->name, ['class' => 'form-control', 'placeholder' => 'Item name', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('qty', 'Qty')}}
        {{Form::text('qty', $inventory->qty, ['class' => 'form-control', 'placeholder' => 'Quantity', 'required'])}}

    </div>

    {{form::hidden('_method', 'PUT')}}
    {{form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
