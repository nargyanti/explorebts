@extends('layouts.app')
@include('layouts.navigationCommon')
@section('content')
    <div class="container">
        <div class="container border" style="padding:75px"> 
            <form action="{{ route('reset_password', $user->id) }}">
                @csrf
                <label for="new-pass">Input Your New Password</label>
                <input class="form-control" type="password" placeholder="New Password" name="password" id="new-pass"><br>                    
                <label for="pass-confirm">Re-Input Your New Password</label>
                <input class= "form-control" type="password" placeholder="Confirm New Password" name="confirm_password" id="pass-confirm"><br>
                <button type="submit" class="btn btn-primary float-right" style="">Confirm</button>
            </form>        
        </div>
    </div>
@endsection