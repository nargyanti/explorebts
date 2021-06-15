@extends('layouts.app')
@include('layouts.navigation')
@section('content') 
    <h1>Payment</h1>
    <div class="card container">
        <div class="card-body">
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