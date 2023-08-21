@extends('player.layouts.app')

@section('content')

<div class="mt-1 w-100">

    <div class="row">

        <div class="col-md-6 mt-1  col-sm-12">
            <h5 class ="ml-2" style="color:yellow">  SABONG WORLD WIDE</h5>
            <p class="text-light tex-center ml-2"><b>Tuesday, July 25. 2023</b></p>
            <iframe width="100%" height="100%" class="ml-2" src="https://www.youtube.com/embed/jfKfPfyJRdk" frameborder="0" allowfullscreen></iframe>

        </div>

        <div class="col-md-6 mt-1 col-sm-12">

            <div class="card bg-dark p-2">
                <a href="#" class="btn bg-warning w-100" style="color:black !important">Payout of 120 should be cancelled</a>

                <table class="table table-bordered mt-2">
                    <thead>
                        <tr>
                        <th scope="col" class="text-light text-center">Betting</th>
                        <th scope="col" class="text-light text-center">Figth # 3: <span class="badge badge-secondary"> WALA</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row" class="text-light text-center"> <span class="badge badge-danger">CLOSED</span></th>
                        <td class="text-center" style="color:yellow"><b>4</b></td>
                        </tr>
                        <tr>
                    </tbody>
                    </table>

                    <div class="row">
                        <div class="col-6 rounded">
                            <div class="card m-1 bg-dark border border-warning rounded  bg-dark" >
                                <div class="" style="background-color:red">
                                    <h5 class="text-light text-center" >Meron</h5>
                                </div>
                                <div class="">
                                    <h5 class ="text-center" style="color:yellow"> 0</h5>
                                    <h6 class ="text-light text-center"> PAYOUT= <span style="color:yellow"> 0%</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card m-1 bg-dark border border-warning rounded  bg-dark" >
                                <div class="" style="background-color:blue">
                                    <h5 class=" text-center text-light text-center" >Wala</h5>
                                </div>
                                <div class="">
                                    <h5 class ="text-center" style="color:yellow"> 0</h5>
                                    <h6 class ="text-center text-light"> PAYOUT= <span style="color:yellow"> 0%</span></h6>
                                </div>
                            </div>
                        </div>

                        <h5 class ="text-light ml-3" >Current Points:  <span style="color:yellow"> <i class="fas fa-money-check-alt" style="color: #yellow;"></i> 4000.00</span> </h5>

        
                    </div>

                    <div class="row">
                        <div class="col-12 " >
                            <input type="number" class="form-control " placeholder="Bet Amount" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="row m-0 p-0">
                        <div class="col-2 mt-1 m-0 p-0" >
                            <button type="button" class="btn btn-outline-warning w-100 rounded-0">20</button>
                        </div>
                        <div class="col-2 mt-1 m-0 p-0" >
                            <button type="button" class="btn btn-outline-warning w-100 rounded-0">50</button>
                        </div>
                        <div class="col-2 mt-1 m-0 p-0" >
                            <button type="button" class="btn btn-outline-warning w-100 rounded-0">100</button>
                        </div>
                        <div class="col-2 mt-1 m-0 p-0" >
                            <button type="button" class="btn btn-outline-warning w-100 rounded-0">500</button>
                        </div>
                        <div class="col-2 mt-1 m-0 p-0" >
                            <button type="button" class="btn btn-outline-warning w-100 rounded-0">1000</button>
                        </div>
                        <div class="col-2 mt-1 m-0 p-0" >
                            <button type="button" class="btn btn-outline-warning w-100 rounded-0">5000</button>
                        </div>
                    </div>

            </div>

            <div class="card bg-dark p-2">
                <div class= "row p-2">

                    <h6 class="text-light float-right"> DRAW WINS X 8. MAX bet 100 per fight
                    <h6 class ="float-right text-light ml-5"> 0.00 = 0.00 </h6>
                </div>
            </div>



    </div>
</div>

@endsection