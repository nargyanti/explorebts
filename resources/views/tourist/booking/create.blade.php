@extends('layouts.app')
@include('layouts.navigation')
@section('content') 
    <h1>Booking Page</h1>
    <div class="card container">
        <div class="card-body">
            @include('layouts.failed')
            <form action="{{ route('booking.store', $product_id) }}" method="POST">                
            @csrf
                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Booking Date</label>
                    <input type="date" class="form-control" name="start_date" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" required>                                
                </div>
                <div class="mb-3">
                    <label for="total_days" class="form-label">Total Days</label>
                    <input type="number" class="form-control" name="total_days" required>                                
                </div>
                <div class="mb-3">                    
                    <input type="hidden" class="form-control" name="product_id" value="{{ $product_id }}">                                
                </div>
                                    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>    
    </div>   
@endsection        