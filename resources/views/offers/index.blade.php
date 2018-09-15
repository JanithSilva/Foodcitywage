@extends('layouts.app')

@section('content')



    <a href="/adminPanel" class="btn btn-warning btn-lg">Back to dashboard</a>
    <hr>

    <h1 class="display-4">Offers</h1>

    <a href="offers/create" class="btn btn-primary btn-lg float-right">+ Add Offers</a>

    <br></br>

    @if(count($offers)>0)
        <br>

        <div class="table-responsive table-fit">
            <table class="table table-striped" id="myTable">
                <thead class="thead-dark">

                <th scope="col">Name</th>
                <th scope="col">Percentage</th>
                <th scope="col">Price</th>

                <th scope="col">Operations</th>

                </thead>
                <tbody>

                @foreach($offers as $offer)
                    <tr>

                        <th scope="row">{{$offer->name}}</th>
                        <th>{{$offer->percentage}}% off</th>
                        <th>Rs. {{$offer->price}}</th>

                        <th>

                            {!!Form::open(['action' => ['OffersController@destroy', $offer->id], 'method' => 'POST' ,'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            <a href="/offers/{{$offer->id}}/edit" class="btn btn-warning">Edit</a>
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </th>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


        <br>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
        </script>
    @else
        <p>Oops! No items found</p>
    @endif

@endsection
