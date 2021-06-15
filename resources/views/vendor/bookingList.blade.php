@extends('layouts.app')

@include('layouts.navigation')
@section('content')
<h1 class="text-center my-3">Booked List</h1>
@include('layouts.success')         
<div class="row">   
    @foreach($products as $product)                                
    <!-- product card -->
    <div class="col-3 mb-4">
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
                    <img class="img-fluid float-left mr-3" style="width: 200px" src="{{ asset('storage/'.$product->picture ) }}"alt="{{ $product->name }}">                    
                    <p>{{ $product->description }}</p>                                        
                    <p>Stock: {{ $product->stock }} </p>
                </div>
                <div class="modal-body">
                    <h5><b>Booking List</b></h5>
                    <table class="table table-striped table-sm text-center table-bordered">
                        <tr class="table-primary">                            
                            <th>Tourist</th>
                            <th>Phone</th>
                            <th>Start Date</th>
                            <th>Qty</th>
                            <th>Days</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                        @foreach($bookings as $booking)
                            @if($booking->product->id == $product->id)
                                <tr>                                                       
                                    <td>{{ $booking->user->name }}</td>                        
                                    <td>{{ $booking->user->phone }}</td>                        
                                    <td>{{ $booking->start_date }}</td>
                                    <td>{{ $booking->quantity }}</td>
                                    <td>{{ $booking->total_days }}</td>
                                    <td>{{ $booking->total_price }}</td>                                  
                                    <td>{{ $booking->status }}</td>
                                    @if($booking->status == "BOOKED")
                                        <td>                                    
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#cancel{{ $booking->id }}" data-dismiss="modal">Cancel</button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#done{{ $booking->id }}" data-dismiss="modal">Done</button>
                                        </td>
                                    @endif
                                </tr>
                            @endif
                        @endforeach
                    </table>    
                </div>                
            </div>
        </div>
    </div>

    <!-- Done Confirmation Modal -->
    <div id="done{{ $booking->id }}" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to mark the booking status as 'DONE'?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                <form action="{{ route('booking.done') }}" method="POST">
                    @csrf                
                    <input type="hidden" class="form-control" name="booking_id" value="{{ $booking->id }}">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- Cancel Confirmation Modal -->
    <div id="cancel{{ $booking->id }}" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to mark the booking status as 'CANCELED'?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                <form action="{{ route('booking.cancel') }}" method="POST">
                    @csrf                
                    <input type="hidden" class="form-control" name="booking_id" value="{{ $booking->id }}">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>  
            </div>
            </div>
        </div>
    </div>

    @endforeach             
</div>
@endsection