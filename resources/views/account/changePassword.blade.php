@extends('layouts.app')
@include('layouts.navigation')
@section('content')
    <h1>Change Password</h1>
    <div class="card container">
        <div class="card-body">
            <form action="{{ route('reset_password', $user->id) }}">    
            @csrf            
                <div class="mb-3">
                    <label for="oldPassword" class="form-label">Old Password</label>
                    <input type="password" class="form-control" name="oldPassword" required>                                
                </div>     
                <div class="mb-3">
                    <label for="newPassword" class="form-label">New Password</label>
                    <input type="password" class="form-control" name="newPassword" required>                                
                </div>          
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>    
    </div>
@endsection