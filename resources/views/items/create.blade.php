@extends('layouts.app')

@section('content')

    <a href="/items" class="btn btn-warning">Back to items</a>
    <br></br>

    <h1>Create Item</h1>


    {!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class = "form-group">
            {{Form::label('Name', 'Name')}}
            {{Form::text('Name', '', ['class' => 'form-control', 'placeholder' => 'Item name', 'required'])}}

        </div>

        {{--<div class = "form-group">
            {{Form::label('Dealer', 'Dealer')}}
            {{Form::text('dealer', '', ['class' => 'form-control', 'placeholder' => 'Dealer name', 'required'])}}

        </div>--}}

        <div class="form-group">
            {{Form::label('Dealer', 'Dealer')}}
            <select class="form-control" name="dealer">
                @foreach ($centres as $centre)
                    <option >{{ $centre->name }}</option>
                @endforeach

            </select>
        </div>

        <div class = "form-group">
            {{Form::label('price', 'Price')}}
            {{Form::number('price', '', ['class' => 'form-control', 'placeholder' => 'Item price', 'required'])}}

        </div>

        <div class = "form-group">
                {{Form::label('size', 'Size')}}
                {{Form::text('size', '', ['class' => 'form-control', 'placeholder' => 'size', 'required'])}}

        </div>

        <div class = "form-group">
            {{Form::label('qty', 'Qty')}}
            {{Form::number('qty', '', ['class' => 'form-control', 'placeholder' => 'qty', 'required'])}}

        </div>

        <div class = "form-group">
            {{Form::label('Insert Image', 'Insert Image')}}
            {{Form::file('item_image')}}

        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection
