@extends('layouts.app')
@include('layouts.navigation')
@section('content')    
    <div class="card mt-3">
        <div class="card-body text-center">               
            <h2><u>My Balance:</u></h2>    
            <h3>Rp {{ $user->balance }}</h3>            
            <a href="{{ route('top-up') }}"><button class="btn btn-success mr-4 mt-3">Top-Up</button></a>
            <a href="{{ route('withdrawal') }}"><button class="btn btn-danger mt-3">Withdrawal</button></a>            
        </div>        
    </div>
    <br>
    <h3>History</h3>
    <div>
        @include('layouts.success')
        @include('layouts.failed') 
    </div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-transaction-tab" data-toggle="tab" href="#nav-transaction" role="tab" aria-controls="nav-transaction" aria-selected="true">Transaction</a>
            <a class="nav-item nav-link" id="nav-payment-tab" data-toggle="tab" href="#nav-payment" role="tab" aria-controls="nav-payment" aria-selected="false">Payment</a>            
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-transaction" role="tabpanel" aria-labelledby="nav-transaction-tab">
            <table class="table table-striped">
                <tr>
                    <th>Date & Time</th>
                    <th>Transaction</th>
                    <th>Sender / Receiver</th>
                    <th>Amount</th>
                </tr>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->created_at }}</td>                        
                        <td>{{ $transaction->category }}</td>                        
                        <td>{{ $transaction->account_no }} ({{ $transaction->account_bank}}) </td>
                        @if($transaction->category == 'Top-up')
                            <td style="color:green">+ Rp {{ $transaction->amount }}</td>
                        @else
                            <td style="color:red">- Rp {{ $transaction->amount }}</td>
                        @endif                        
                    </tr>
                @endforeach
            </table>    
        </div>
        <div class="tab-pane fade" id="nav-payment" role="tabpanel" aria-labelledby="nav-payment-tab">        
            <table class="table">
                <tr>
                    <th>Date & Time</th>
                    <th>Payment</th>
                    <th>Sender / Receiver</th>
                    <th>Amount</th>
                </tr>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->created_at }}</td>                        
                        <td>{{ $payment->booking->product->name }}</td>      
                        <!-- "BOOKED" -->
                        @if($payment->receiver->role == "Vendor")
                            @if(Auth::user()->role == "Tourist")
                                <td>{{ $payment->receiver->name }}</td>
                                <td style="color:red">- Rp {{ $payment->amount }}</td>
                            @else
                                <td>{{ $payment->sender->name }}</td>                                
                                <td style="color:green">+ Rp {{ $payment->amount }}</td>                            
                            @endif
                        @else
                        <!-- "CANCELED" -->                        
                            @if(Auth::user()->role == "Tourist")
                                <td>{{ $payment->sender->name }}</td>
                                <td style="color:green">+ Rp {{ $payment->amount }}</td>                                                            
                            @else
                                <td>{{ $payment->receiver->name }}</td>
                                <td style="color:red">- Rp {{ $payment->amount }}</td>
                            @endif
                        @endif
                    </tr>
                @endforeach
            </table>    
        </div>    
    </div>        
@endsection