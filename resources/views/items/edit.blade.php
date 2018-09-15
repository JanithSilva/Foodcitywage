@extends('layouts.app')

@section('content')
    <h1>Edit Item</h1>
    <br>

    {!! Form::open(['action' => ['ItemsController@update', $item->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <div class = "form-group">
        {{Form::label('Name', 'Name')}}
        {{Form::text('Name', $item->Name, ['class' => 'form-control', 'placeholder' => 'Name', 'required'])}}

    </div>

    {{--<div class = "form-group">
        {{Form::label('Dealer', 'Dealer')}}
        {{Form::text('dealer', $item->dealer, ['class' => 'form-control', 'placeholder' => 'Dealer', 'required'])}}

    </div>--}}

    <div class="form-group">
        {{Form::label('Dealer', 'Dealer')}}
        <select class="form-control" name="dealer">
            <option value="{{$item->dealer}}">{{$item->dealer}}</option>
            @foreach ($centres as $centre)
                <option >{{ $centre->name }}</option>
            @endforeach

        </select>

    </div>

    <div class="form-group">

    </div>

    <div class = "form-group">
        {{Form::label('Price', 'Price')}}
        {{Form::number('price', $item->price, ['class' => 'form-control', 'placeholder' => 'Price', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('Qty', 'Qty')}}
        {{Form::number('qty', $item->qty, ['class' => 'form-control', 'placeholder' => 'Qty', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::label('size', 'Size')}}
        {{Form::text('size', $item->size, ['class' => 'form-control', 'placeholder' => 'Size', 'required'])}}

    </div>

    <div class = "form-group">
        {{Form::file('item_image')}}

    </div>

    {{form::hidden('_method', 'PUT')}}
    {{form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
