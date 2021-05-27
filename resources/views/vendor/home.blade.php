@extends('layouts.layoutVendor')

@section('content')

@include('layouts.carousel')

<div class="container">
<!-- Kore no Login Session Mo Onegaishimasu ne *bow* -->
    <h1>Welcome, Username !</h1>
    <!-- search -->
    <form action="search.php" method="GET" class="form-inline justify-content-center pt-4">
        <input class="form-control mr-sm-2 w-50" type="search" placeholder="Search" name="keyword">
    <button class="btn my-2 my-sm-0 search-button" type="submit" style="background-color:#f4623a; color:white">Search</button>
    </form>
    <!-- /.search -->
    <br><h3>Your Services</h3> <br>
</div>

<div class="row">
    <!-- product card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('assets/img/no-picture.png') }}" alt="">
                <div class="card-body">
                <h5 class="card-title">Product Name</h5>
                <h5>Rp 100.000</h5>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">Check > </button>
                </div>
            </div>
        </div>
    <!-- /.product card -->
    <!-- modal -->
    <div id="modal1" class="modal fade" role="dialog" >
        <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Product Name</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
            <!-- Modal body -->
            <div class="modal-body" style="align-items: center;">
            <img class="card-img-top" src="{{ asset('assets/img/no-picture.png') }}" alt="">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima temporibus quae consectetur. Exercitationem eos totam nobis culpa! Assumenda commodi necessitatibus quae nulla molestiae adipisci cum voluptatum, facere recusandae in ipsam?
            </div>
    
            <!-- Modal footer -->
            <div class="modal-footer">
            <a href="#"><button type="button" class="btn btn-primary" >Update Item</button></a>
            <a href="#"><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete Item</button></a>
            </div>
    
        </div>
        </div>
    </div>

    </div>
<!-- /.row -->

@endsection
