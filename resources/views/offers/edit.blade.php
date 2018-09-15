@extends('layouts.app')

@section('content')
    <h1>Edit Offer</h1>
    <br>

    {!! Form::open(['action' => ['OffersController@update', $offer->id], 'method' => 'POST']) !!}

    <div class = "form-group">
        {{Form::label('Name', 'Name')}}
        {{Form::text('name', $offer->name, ['class' => 'form-control', 'placeholder' => 'Name', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Percentage', 'Percentage')}}
        {{Form::text('percentage', $offer->percentage, ['class' => 'form-control', 'placeholder' => 'Percentage', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Price', 'Price')}}
        {{Form::text('price', $offer->price, ['class' => 'form-control', 'placeholder' => 'Price', 'required'])}}

    </div>

    {{form::hidden('_method', 'PUT')}}
    {{form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
