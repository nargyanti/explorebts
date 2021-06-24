@extends('layouts.app')
@include('layouts.navigation')
@section('content') 
    <h3 class="py-3">Top Up</h3>
    <div class="card mb-3">    
        <form action="{{ route('add-balance') }}" method="post" class="card-body">
            @csrf
            <label for="account_no">Account No</label>
            <input type="text" name="account_no" class="form-control" required>
            <label for="account_bank" class="my-3">Bank</label>
            <input type="text" name="account_bank" class="form-control" required>
            <label for="amount" class="my-3">Amount</label>
            <input type="number" name="amount" class="form-control" required>
            <button type="submit" class="btn btn-primary mt-3">Top-Up</button>        
        </form>
    </div>
@endsection