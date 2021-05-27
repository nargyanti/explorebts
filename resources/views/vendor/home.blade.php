@extends('layouts.layoutVendor')

@section('content')

@include('layouts.carousel')

<div class="container">
<!-- Kore no Login Session Mo Onegaishimasu ne *bow* -->
    <h1>Welcome, {{ Auth::user()->username }}!</h1>
    <!-- search -->
    <form action="search.php" method="GET" class="form-inline justify-content-center pt-4">
        <input class="form-control mr-sm-2 w-50" type="search" placeholder="Search" name="keyword">
    <button class="btn my-2 my-sm-0 search-button" type="submit" style="background-color:#f4623a; color:white">Search</button>
    </form>
    
    <br>    
    @if ($message = Session::get('success'))
        <div class="alert alert-success" style="height:50px">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- /.search -->
    <br><h3>Your Services</h3> <br>
</div>

<div class="row">
    @foreach($products as $product)                                
    <!-- product card -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <img class="card-img-top" src="{{ asset('storage/'.$product->picture ) }}" alt="{{ $product->name }}">            
            <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <h5>{{ $product->unit_price }}</h5>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $product->id }}">Check ></button>
            </div>
        </div>
    </div>
    <!-- /.product card -->
    <!-- modal -->
    <div id="modal{{ $product->id }}" class="modal fade" role="dialog" >
        <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">{{ $product->name }}</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
            <!-- Modal body -->
            <div class="modal-body" style="align-items: center;">
            <img class="card-img-top" src="{{ asset('storage/'.$product->picture) }}" alt="{{ $product->name }}">
            {{ $product->description }}
            </div>
    
            <!-- Modal footer -->
            <div class="modal-footer">
            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route('product.update', $product->id) }}"><button type="button" class="btn btn-primary" >Update Item</button></a>
                <a href="{{ route('product.destroy', $product->id) }}"><button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete Item</button></a>                                            
            </form>            
            </div>
    
        </div>
        </div>
    </div>    
    <!-- /.modal -->
    @endforeach        
</div>
<!-- /.row -->

@endsection
