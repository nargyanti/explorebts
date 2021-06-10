@extends('layouts.layout')

@section('content')

@include('layouts.navigation')
<div class="col-lg-9">
@include('layouts.carousel')
<div class="container">
    <h1>Welcome, {{ Auth::user()->username }}!</h1>
    <!-- search -->
    <form action="search.php" method="GET" class="form-inline justify-content-center pt-4">
        <input class="form-control mr-sm-2 w-50" type="search" placeholder="Search" name="keyword">
    <button class="btn my-2 my-sm-0 search-button" type="submit" style="background-color:#f4623a; color:white">Search</button>
    </form><br>
    <!-- /.search -->
    <h3>Recommended</h3>
        <br>
</div>

<div class="row">
    <!-- product card 1 -->

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
        <img class="card-img-top" src="{{ asset('assets/img/no-picture.png') }}" alt="">
            <div class="card-body">
            <h5 class="card-title">Product Name</h5>
            <h5>Rp 100.000</h5>
            </div>
            <div class="card-footer">                            
            <a href="#"><button type="button" class="btn btn-primary">Booking!</button></a>
            </div>
        </div>
        </div>
    <!-- /.product card -->   
    <!-- product card 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="{{ asset('assets/img/no-picture.png') }}" alt="">
            <div class="card-body">
            <h5 class="card-title">Product Name</h5>
                <h5>Rp 100.000</h5>
            </div>
            <div class="card-footer">                            
            <a href="#"><button type="button" class="btn btn-primary">Booking!</button></a>
            </div>
        </div>
        </div>
    <!-- /.product card -->  
</div>
<!-- /.row -->
@endsection
