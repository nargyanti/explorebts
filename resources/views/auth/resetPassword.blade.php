@extends('layouts.app')
@include('layouts.navigationCommon')
@section('content')
<h3 class="pt-3">Forgot Password</h3>
<div class="container border mb-4"> 
    <form action="{{ route('reset_password', $user->id) }}" class="p-5">
        @csrf
        <label for="new-pass">Input Your New Password</label>
        <input class="form-control" type="password" placeholder="New Password" name="password" id="new-pass"><br>                    
        <label for="pass-confirm">Re-Input Your New Password</label>
        <input class= "form-control" type="password" placeholder="Confirm New Password" name="confirm_password" id="pass-confirm"><br>
        <button type="submit" class="btn btn-primary float-right">Confirm</button>
    </form>        
</div>
@endsection