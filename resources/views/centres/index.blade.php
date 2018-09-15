@extends('layouts.app')

@section('content')

    <head>
        <script href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
        <script href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    </head>


    <a href="/adminPanel" class="btn btn-warning btn-lg">Back to dashboard</a>
    <hr>

    <h1 class="display-4">Centres</h1>

    <a href="centres/create" class="btn btn-primary btn-lg float-right">+ Add Centre</a>

    <br></br>

    @if(count($centres)>0)
        <br>

        <div class="table-responsive table-fit">
            <table id="myTable" class="table table-striped">
                <thead class="thead-dark">

                <th scope="col">Name</th>
                <th scope="col">Income</th>
                <th scope="col">Operations</th>

                </thead>
                <tbody>

                @foreach($centres as $centre)
                    <tr>

                        <th scope="row">{{$centre->name}}</th>
                        <th>Rs. {{$centre->income}}</th>

                        <th>

                            {!!Form::open(['action' => ['CentresController@destroy', $centre->id], 'method' => 'POST' ,'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            <a href="/centres/{{$centre->id}}/edit" class="btn btn-warning">Edit</a>
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}

                        </th>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


        <br>
        {{$centres->links()}}
    @else
        <p>Oops! No items found</p>
    @endif

@endsection

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
