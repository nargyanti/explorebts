@extends('layouts.app')
@include('layouts.navigation')
@section('content')
        <div class="card container">
            <h2 class="mt-5 text-center">Edit Account</h2>
            <div class="card-body">
                <form method="POST" action="{{ route('profile.update', $user->id)}}" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')          
                    <div class="mb-3">
                        <label for="profile-pict" class="form-label">Profile Picture</label>
                        <input class="form-control" type="file" name="profile_pict" value="{{ $user->profile_picture }}">
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