@extends('layouts.app')

@section('content')


    <a href="/adminPanel" class="btn btn-warning">Back to dashboard</a>


    <hr>

    <h1 class="display-4">Items</h1>

    <div class="row">
        <div class="col-sm-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header h2 text-center">Sale items</div>
                <div class="card-body">
                    <h1 class="card-title"><div class="counter text-center" data-count="{{count($items)}}"></div></h1>
                    </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header h2 text-center">Inventory Items</div>
                <div class="card-body">
                    <h1 class="card-title"><div class="counter text-center" data-count="{{count($inventories)}}"></div></h1>
                    </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header h2 text-center">Ending soon</div>
                <div class="card-body">
                    <h1 class="card-title text-center">{{$min}}</h1>
                    </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header h2 text-center">Stock full</div>
                <div class="card-body">
                    <h1 class="card-title text-center">{{$max}}</h1>
                    </div>
            </div>
        </div>

    </div>
    <div class="wrapper">
        <div class="container">

            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

                <ul id="myTab" class="nav nav-tabs nav-tabs-responsive justify-content-center" role="tablist">
                    <li role="presentation">

                        <button href="#home" id="home-tab"  role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true" class="btn btn-lg btn-block btn-outline-success">
                            <span class="text">Sale Items</span>
                        </button>

                    </li>
                    <li role="presentation" class="next">
                        <button href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" class="btn btn-lg btn-block btn-outline-success">
                            <span class="text">Inventory Items</span>
                        </button>

                    </li>
                </ul>


                <div id="myTabContent" class="tab-content">


    @if(count($items)>1)
        <br>
<div id="myTabContent" class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
        <div class="table-responsive table-fit">
            <a href="items/create" class="btn btn-primary float-right">+ Add Item</a>
            <br><br>

            <table class="table table-striped" id="myTable">
            <thead class="thead-dark">

                <th scope="col">Name</th>
                <th scope="col">Dealer</th>
                <th scope="col">Price</th>
                <th scope="col">Size</th>
                <th scope="col">Qty</th>


                <th scope="col">Operations</th>

            </thead>
            <tbody>

            @foreach($items as $item)
                <tr>

                    <th scope="row">{{$item->Name}}</th>
                    <th>{{$item->dealer}}</th>
                    <th>Rs. {{$item->price}}</th>
                    <th>{{$item->size}}</th>
                    <th>{{$item->qty}}</th>

                    <th>

                        {!!Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST' ,'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        <a href="/items/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </th>

                </tr>
            @endforeach
            </tbody>
        </table>
        </div>

        @else
        <p>Oops! No items found</p>
        @endif

    </div>

    <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
        <div class="table-responsive table-fit">
            <a href="inventories/create" class="btn btn-primary float-right">+ Add Inventory Item</a>
            <br><br>
            <table class="table table-striped" id="myTable">
                <thead class="thead-dark">

                <th scope="col">Name</th>
                <th scope="col">Item ID</th>
                <th scope="col">Quantity</th>

                <th scope="col">Operations</th>

                </thead>
                <tbody>

                @foreach($inventories as $inventory)
                    <tr>

                        <th scope="row">{{$inventory->name}}</th>
                        <th>{{$inventory->id}}</th>
                        <th>{{$inventory->qty}}</th>

                        <th>

                            {!!Form::open(['action' => ['InventoryController@destroy', $inventory->id], 'method' => 'POST' ,'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            <a href="/inventories/{{$inventory->id}}/edit" class="btn btn-warning">Edit</a>
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </th>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
                </div>
            </div>
        </div>
    </div>
