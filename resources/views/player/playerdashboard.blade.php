@extends('player.layouts.app')

@section('content')


<div class="container">

    <div class="row">

        <div class="col-md-12 m-1 col-sm-12">
            <h1 class="text-light float-left"> Today's Event </h1>
            <h5 class ="float-right mt-4" style="color:yellow">  Your Points: 4000.00 </h5>

        </div>  

        
    <div>

    <hr style="background-color: white">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <img class="card-img-top" src="/assets/dist/img/cover1.jpeg" style="height: 18rem;"  alt="Card image cap">
                <div class="card-body" style="height: auto; background-color:rgb(26, 25, 25) !important">
                    <h5 class ="" style="color:yellow">  SABONG WORLD WIDE</h5>
                    <b class="text-light">Tuesday, July 25. 2023</b>
                    <p class="text-light" > Fight #5 <p>
                    <a href="/playermain" class="btn btn-outline-warning w-100">Enter event</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="card">
                <img class="card-img-top" src="/assets/dist/img/cover2.jpg" style="height: 18rem;"  alt="Card image cap">
                <div class="card-body" style="height: auto; background-color:rgb(26, 25, 25) !important">
                    <h5 class ="" style="color:yellow">  DIAMOND SABONG</h5>
                    <b class="text-light">Tuesday, July 25. 2023</b>
                    <p class="text-light" > Fight #4 <p>
                    <a href="/playermain" class="btn btn-outline-warning w-100">Enter event</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="card" >
                <img class="card-img-top" src="/assets/dist/img/cover3.jpg" style="height: 18rem;" alt="Card image cap">
                <div class="card-body" style="height: auto; background-color:rgb(26, 25, 25) !important">
                    <h5 class ="" style="color:yellow">  COCKFIGHT</h5>
                    <b class="text-light">Tuesday, July 25. 2023</b>
                    <p class="text-light" > Fight #7 <p>
                    <a href="/playermain" class="btn btn-outline-warning w-100">Enter event</a>

                </div>
            </div>
        </div>

    </div>
</div>


@endsection


