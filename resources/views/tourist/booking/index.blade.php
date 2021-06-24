@extends('layouts.app')

@include('layouts.navigation')
@section('content')
<h1 class="text-center my-3">Booked List</h1>
@include('layouts.success')         
<div class="container">
    <table class="table table-striped table-sm text-center table-bordered">
        <tr class="table-primary">  
            <th>Service</th>
            <th>Start Date</th>
            <th>Qty</th>
            <th>Days</th>
            <th>Price</th>
            <th>Status</th>
            <th>Option</th>
        </tr>
        @foreach($bookings as $booking)
                <tr>                                                           
                    <td>{{ $booking->product->name }}</td>                        
                    <td>{{ $booking->start_date }}</td>
                    <td>{{ $booking->quantity }}</td>
                    <td>{{ $booking->total_days }}</td>
                    <td>{{ $booking->total_price }}</td>                                  
                    <td>{{ $booking->status }}</td>
                    @if($booking->status == "BOOKED")
                        <td>                                    
                            <a href="{{ route('print_pdf', ['id' => $booking->id]) }}"><button type="button" class="btn btn-secondary" href>Invoice</button></a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancel{{ $booking->id }}">Cancel</button>
                        </td>
                    @endif
                </tr>
                    <!-- cancel modal -->
                    <div id="cancel{{ $booking->id }}" class="modal fade" role="dialog">
                    <!-- <div id="cancel{{ $booking->id }}" class="modal fade" tabindex="-1" role="dialog" > -->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cancel Booking</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>To cancel the booking, you need to call the vendor</p>
                                    <p>You can call {{ $booking->product->user->name }} in {{ $booking->product->user->phone }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">OK</button>                                    
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach
    </table> 
</div>
@endsection 