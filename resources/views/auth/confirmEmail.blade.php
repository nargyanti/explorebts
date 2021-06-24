@extends('layouts.app')
@include('layouts.navigationCommon')
@section('content')
@include('layouts.failed')    
    <h3 class="pt-3">Forgot Password</h3>
    <div class="container border mb-4"> 
        <form action="{{ route('check_email') }}" class="p-5">
            @csrf
            <label for="email-confirm">Input Your E-mail For Confirmation</label>
            <input class= "form-control" name="email" type="text" placeholder="E-mail" id="email-confirm"><br>
            <button type="submit" class="btn btn-primary float-right">Confirm</button>
        </form>
    </div>            
@endsection