@extends('layouts.app')
@include('layouts.navigation')
@section('content')
<h3 class="py-3">Edit Account</h3>
<div class="card container mb-4">
    @include('layouts.success')
    @include('layouts.error')
    <div class="card-body">
        <form method="POST" action="{{ route('profile.update', $user->id)}}" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')          
            <div class="mb-3">
                <label for="profile-pict" class="form-label">Profile Picture</label>
                <input class="form-control" type="file" name="profile_picture" value="{{ $user->profile_picture }}">
            </div> 
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>                                
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="{{ $user->username }}" required>                                
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" required>                                
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>                                
            </div>                                                                                                     
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
</div>           
@endsection