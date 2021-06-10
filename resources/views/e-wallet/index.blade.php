@extends('layouts.app')
@include('layouts.navigation')
@section('content')    
@include('layouts.success')
@include('layouts.failed')
    
    <h1>Balance: {{ $user->balance }}</h1>    
    <br>
    <h2>History</h2>
    @foreach($transactions as $transaction)
        @if($transaction->category == 'Top-up')
        <p style="color:green">+ Top-up: {{ $transaction->amount }}</p>
        @else
        <p style="color:red">- Withdrawal: {{ $transaction->amount }}</p>
        @endif
    @endforeach

    <a href="{{ route('top-up') }}"><button class="btn btn-success">Top-Up</button></a>
    <a href="{{ route('withdrawal') }}"><button class="btn btn-danger">Withdrawal</button></a>
@endsection