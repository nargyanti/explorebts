@extends('layouts.app')
@include('layouts.jumbotron')
@include('layouts.navigation')
@section('content')                   
        <h3 class="text-center py-3">Products</h3>        
        <div class="dropdown justify-content-end d-flex">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Our Services
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('list-product', ['id' => 'Jeep']) }}">Jeep</a>
                <a class="dropdown-item" href="{{ route('list-product', ['id' => 'Inn']) }}">Inn</a>
                <a class="dropdown-item" href="{{ route('list-product', ['id' => 'Trip']) }}">Trip</a>
                <a class="dropdown-item" href="{{ route('list-product', ['id' => 'Camping Tools']) }}">Camping Tools</a>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)                                
            <!-- product card -->
            <div class="col-4 mb-4">
                <div class="card">
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

            <!-- product modal -->
            <div id="modal{{ $product->id }}" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-md" role="document">
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
                            <form action="{{ route('booking.create', $product->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-primary" name="product_id">Booking</button>
                            </form>                            
                        </div>                
                    </div>
                </div>
            </div>    
            <!-- /.product modal -->            
            @endforeach                    
        </div>
        <div class="d-flex">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
<!-- /.row -->
@endsection
