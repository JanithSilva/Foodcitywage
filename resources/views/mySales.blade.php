@extends('layouts.app')

@section('content')


    <a href="/adminPanel" class="btn btn-warning btn-lg">Back to dashboard</a>
    <hr>

    <h1 class="display-4">Items</h1>

    <a href="items/create" class="btn btn-primary btn-lg float-right">+ Add Item</a>

    <br></br>

    @if(count($centres)>0)
        <br>

        <div class="table-responsive table-fit">
            <table class="table table-striped">
                <thead class="thead-dark">


                <th scope="col">Centre</th>
                <th scope="col">Income</th>
                <th scope="col">Progress</th>


                </thead>
                <tbody>

                @foreach($items as $item)
                    <tr>

                        <th scope="row">{{$centre->name}}</th>
                        <th>{{$centre-> income}}</th>
                        <th>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </th>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


        <br>
        {{$items->links()}}
    @else
        <p>Oops! No items found</p>
    @endif

@endsection
