@extends('layouts.app')
@include('layouts.navigationCommon')
@section('content')
@include('layouts.failed')
    <div class="container vertical-center" style="margin:11rem 1rem 13rem 1rem">
        <div class="container border" style="padding:75px"> 
            <form action="{{ route('check_email') }}">
                @csrf
                <label for="email-confirm">Input Your E-mail For Confirmation</label>
                <input class= "form-control" name="email" type="text" placeholder="E-mail" id="email-confirm"><br>
                <button type="submit" class="btn btn-primary float-right">Confirm</button>
            </form>
        </div>            
    </div>
@endsection