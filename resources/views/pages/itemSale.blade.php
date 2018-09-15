
@extends('layouts.app')


@section('contentSuper')


   {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="/storage/back_images/img1.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>අමරබන්දු රූපසි‍හ.</h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="/storage/back_images/img2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Food city වගේ!</h1>
                        <p>කඩේට යන ගමන්.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="/storage/back_images/img3.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>පුන්නක්කු flavour</h1>
                        <p>ගහෙන් වටුනු ගොනාට මිනිහා ඇන්නා වගේ.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>--}}

<style type="text/css">
    #bgimg {
        background-image: url('/storage/app/public/item_images/noimage.jpg');
    }

</style>

   <div class="jumbotron text-center">
       <div class="container" id="bgimg">
           <h1 class="jumbotron-heading">Food city වගේ </h1>
           <p class="lead text-muted">All your needs, from one place<p>
               <a href="#" class="btn btn-primary my-2">Show me offers</a>
               <a href="#" class="btn btn-secondary my-2">I need a loyalty card</a>
           </p>
       </div>
   </div>


<div class="album py-1 ">
        <div class="container">

            @foreach($items->chunk(4) as $itemChunk)

            <div class="row">
                @foreach($itemChunk as $item)
                <div class="col-md-3">
                    <div class="card mb-3 box-shadow" >
                        <img class="card-img-top img-fluid" src="/storage/item_images/{{$item->item_image}}" >
                        <div class="card-body">
                            <h3 class="card-text font-weight-bold ">{{$item->Name}}</h3>
                            <h4 class="card-text text-danger">{{$item->dealer}}</h4>
                            <hr>
                            <h4 class="card-title font-weight-bold ">Rs. {{$item->price}}</h4>
                            <a class="btn btn-sm btn-outline-success float-right">Add to cart</a>
                        </div>
                    </div>
                </div>

                    @endforeach
            </div>
                @endforeach
        </div>
    </div>

@endsection


