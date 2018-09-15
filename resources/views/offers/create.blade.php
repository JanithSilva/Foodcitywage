@extends('layouts.app')

@section('content')

    <a href="/offers" class="btn btn-warning">Back to offers</a>
    <br></br>

    <h1>Create Offer</h1>


    {!! Form::open(['action' => 'OffersController@store', 'method' => 'POST']) !!}

        <div class = "form-group">
            {{Form::label('Name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Offer name', 'required'])}}

        </div>

        <div class = "form-group">
            {{Form::label('Percentage', 'percentage')}}
            {{Form::text('percentage', '', ['class' => 'form-control', 'placeholder' => 'percentage', 'required'])}}

        </div>

        <div class = "form-group">
            {{Form::label('price', 'price')}}
            {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Item price', 'required'])}}

        </div>



        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
