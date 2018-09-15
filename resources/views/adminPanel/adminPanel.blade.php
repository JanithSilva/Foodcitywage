@extends('layouts.app')

@section('content')



<div class="container">

    <h1>Your admin privileges &nbsp; <a class="badge badge-success" href="/sales" >View current Sales</a></h1>
    <br>


    <div class="card-deck mb-3 text-center">

        <div class="card mb-4 box-shadow">
            <div class="card-header text-white bg-dark">
                <h4 class="my-0 font-weight-normal">Item Management</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">You have <br><span class="badge badge-danger"><div class="counter" data-count="{{count($items)}}"></div></span><br> active items <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Manage items on your database</li>
                </ul>

                <a href="/items" class="btn btn-primary btn-lg">Manage Items &nbsp<span class="badge badge-light">{{count($items)}}</span></a>
            </div>
        </div>

        <div class="card mb-4 box-shadow">
            <div class="card-header text-white bg-dark ">
                <h4 class="my-0 font-weight-normal">Employee Management</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">You have <br><span class="badge badge-danger"><div class="counter" data-count="{{count($employees)}}"></div></span><br> active employees <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Manage employees on your workplace</li>
                </ul>
                <a href="/employees" class="btn btn-primary btn-lg">Manage Employees &nbsp<span class="badge badge-light">{{count($employees)}}</span></a>
            </div>
        </div>

        <div class="card mb-4 box-shadow">
            <div class="card-header text-white bg-dark">
                <h4 class="my-0 font-weight-normal">Offer Management</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">You have <br><span class="badge badge-danger"><div class="counter" data-count="{{count($offers)}}"></div></span><br> active offers <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Manage offers on your website</li>
                </ul>
                <a href="/offers" class="btn btn-primary btn-lg">Manage Offers &nbsp<span class="badge badge-light">{{count($offers)}}</span></a>
            </div>
        </div>
    </div>
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header text-white bg-dark">
                <h4 class="my-0 font-weight-normal">Centre Management</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">You have <br><span class="badge badge-danger">{{count($centres)}}</span><br> active centres <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Manage centres around the country</li>
                </ul>
                <a href="/centres" class="btn btn-primary btn-lg">Manage centres &nbsp<span class="badge badge-light">{{count($centres)}}</span></a>
            </div>
        </div>

        <div class="card mb-4 box-shadow">
            <div class="card-header text-white bg-dark">
                <h4 class="my-0 font-weight-normal">User Management</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">You have <br><span class="badge badge-danger">{{count($centres)}}</span><br> active users <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Manage user of your website</li>
                </ul>
                <a href="/centres" class="btn btn-primary btn-lg">Manage users &nbsp<span class="badge badge-light">{{count($centres)}}</span></a>
            </div>
        </div>

        <div class="card mb-4 box-shadow">
            <div class="card-header text-white bg-dark">
                <h4 class="my-0 font-weight-normal">Stock Management</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">You have <br><span class="badge badge-danger">{{count($centres)}}</span><br> active items in your stock <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Manage stock of your business</li>
                </ul>
                <a href="/stocks" class="btn btn-primary btn-lg">Manage inventory &nbsp<span class="badge badge-light">{{count($centres)}}</span></a>
            </div>
        </div>

    </div>

    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header text-white bg-dark">
                <h4 class="my-0 font-weight-normal">Centre Management</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">You have <br><span class="badge badge-danger">{{count($centres)}}</span><br> active centres <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Manage centres around the country</li>
                </ul>
                <a href="/centres" class="btn btn-primary btn-lg">Manage centres &nbsp<span class="badge badge-light">{{count($centres)}}</span></a>
            </div>
        </div>

        <div class="card mb-4 box-shadow">
            <div class="card-header text-white bg-dark">
                <h4 class="my-0 font-weight-normal">Loyality Card Management</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">You have <br><span class="badge badge-danger">{{count($centres)}}</span><br> active centres <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Manage centres around the country</li>
                </ul>
                <a href="/centres" class="btn btn-primary btn-lg">Manage centres &nbsp<span class="badge badge-light">{{count($centres)}}</span></a>
            </div>
        </div>

        <div class="card mb-4 box-shadow">
            <div class="card-header text-white bg-dark">
                <h4 class="my-0 font-weight-normal">Other</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">You have <br><span class="badge badge-danger">{{count($centres)}}</span><br> active centres <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Manage centres around the country</li>
                </ul>
                <a href="/centres" class="btn btn-primary btn-lg">Manage centres &nbsp<span class="badge badge-light">{{count($centres)}}</span></a>
            </div>
        </div>

    </div>

</div>
@endsection