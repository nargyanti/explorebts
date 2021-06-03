@extends('layouts.app')

@section('content')
@include('layouts.navigation')
<div class="row">
    @include('layouts.sidebar')
    <div class="col-lg-9">
        <h1 class="text-center my-5">Booked List</h1>
        <!-- Page Content -->
        <div class="container">
            <div class="row">            
                @foreach($products as $product)                                
                <!-- product card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('storage/'.$product->picture ) }}" alt="{{ $product->name }}">            
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <h5>Rp {{ $product->unit_price }}</h5>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $product->id }}">Check ></button>
                        </div>
                    </div>
                </div>
                <!-- /.product card -->
                <!-- modal -->
                <div id="modal{{ $product->id }}" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">                            
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">{{ $product->name }}</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        
                            <!-- Modal body -->
                            <div class="modal-body" style="align-items: center;">
                                <img class="img-fluid" style="width: 200px" src="{{ asset('storage/'.$product->picture ) }}"alt="{{ $product->name }}"><br><br>
                                {{ $product->description }}
                                <br><br>
                                <p>Product Stock : {{ $product->stock }} </p>
                                <h6>Ordered by : </h6>                                                        
                            </div>
                        </div>
                    </div>
                </div>             
                @endforeach      
            </div>        
        </div>
    </div>
</div>
@endsection