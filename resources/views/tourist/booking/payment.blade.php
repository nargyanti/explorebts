@extends('layouts.app')
@include('layouts.navigation')
@section('content') 
    <h1>Payment Summary</h1>
    <div class="card container">
        <div class="card-body">
        <h2>Tourist Information </h2><br>
        <h5>Name : {{ $booking->user->name }}</h5><br>
        <h5>Phone : {{ $booking->user->phone }}</h5><br>
        <hr>
        <h2>Vendor Information </h2><br>
        <h5>Name : {{ $booking->product->user->name }}</h5><br>
        <h5>Phone : {{ $booking->product->user->phone }}</h5><br>
        <hr>
        <h2>Service Information</h2><br>
        <h5>Product Name : {{ $booking->product->name }}</h5><br>
        <h5>Product Price : {{ $booking->product->unit_price }}</h5><br>
        <h5>Quantity : {{ $booking->quantity }}</h5><br>
        <h5>Total Days: {{ $booking->total_days }}</h5><br>
        <h3>Total Price : {{ $booking->total_price }}</h3> <br> 
<!-- Semua di tabel buking -->
            <form action="{{ route('payment.store') }}" method="POST">
            @csrf                                        
                <div class="mb-3">
                                
                    <input type="hidden" class="form-control" name="booking_id" value="{{ $booking->id }}">                                
                </div>
                <div class="mb-3">                    
                    <input type="hidden" class="form-control" name="sender_id" value="{{ $booking->tourist_id }}">                                
                </div>
                <div class="mb-3">                    
                    <input type="hidden" class="form-control" name="amount" value="{{ $booking->total_price }}">
                </div>
                <div class="mb-3">                    
                    <input type="hidden" class="form-control" name="product_id" value="{{ $booking->product->id }}">
                </div>
                                    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>    
    </div>   
@endsection        