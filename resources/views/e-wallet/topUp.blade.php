@extends('layouts.app')
@include('layouts.navigation')
@section('content') 
    <form action="{{ route('add-balance') }}" method="post" class="mt-3">
        @csrf
        <label for="account_no">Account No</label>
        <input type="text" name="account_no" class="form-control" required>
        <label for="account_bank">Bank</label>
        <input type="text" name="account_bank" class="form-control" required>
        <label for="amount">Amount</label>
        <input type="number" name="amount" class="form-control" required>
        <button type="submit" class="btn btn-primary">Top-Up</button>        
    </form>
@endsection