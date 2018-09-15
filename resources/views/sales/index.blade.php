@extends('layouts.app')

@section('content')

    <a href="/adminPanel" class="btn btn-warning btn-lg">Back to dashboard</a>
    <hr>

    <h1 class="display-4">Sales overview</h1>

    @if(count($centres)>1)
        <br>

        <div class="table-responsive table-fit">
            <table class="table table-striped">
                <thead class="thead-dark">

                <th scope="col">Centre</th>
                <th scope="col">Income</th>
                <th scope="col">Target</th>
                <th scope="col">Target coverage</th>

                </thead>
                <tbody>

                @foreach($centres as $centre)
                    <tr>
                        <th scope="row">{{$centre->name}}</th>
                        <th>Rs. {{$centre->income}}</th>
                        <th>Rs. {{$centre->target}}</th>
                        <th>

                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="{{(($centre -> income) / ($centre ->target)) * 100}}" aria-valuemin="0" aria-valuemax="100" style="max-width: {{(($centre -> income) / ($centre ->target)) * 100}}%">{{round((($centre -> income) / ($centre ->target)) * 100,2)}}%</div>

                            </div>
                        </th>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    @else
        <p>Oops! No items found</p>
    @endif

@endsection
