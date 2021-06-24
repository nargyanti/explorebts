@extends('layouts.app')
@include('layouts.navigation')
@section('content')
<!-- Profile card -->
<div class="mt-3">
    @include('layouts.success')
</div>

<div class="card mx-auto text-center mb-3" style="width: 600px">
    <h4 class="card-title mt-3">{{ $user->name }}</h4>
    <img style="width: 100px; height: 100px" src="{{ asset('storage/'.$user->profile_picture ) }}" class="mx-auto d-block card-img-top" alt="Profile picture">
    <div class="card-body">                 
        <p>Username: {{ $user->username }}</p>
        <p>Phone: {{ $user->phone }}</p>
        <p>Email: {{ $user->email }}</p>  
    </div>
    <div class="card-footer">                            
        <div class="row">
            <div class=col>
                <a href="{{ route('profile.edit', $user->id)}}"><button type="button" class="btn btn-success">Edit Account</button></a>
            </div>
            <div class=col>
                <a href="{{ route('change_password')}}"><button type="button" class="btn btn-success">Change Password</button></a>
            </div>
            <div class=col>                                                
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteAccount">
                Delete Account
            </button>   
            </div>
        </div>                                                                
    </div>     
</div>                    

<!-- delete modal -->
<div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteConfirmationLabel">Delete Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Are you sure to delete this account?
        </div>
        <div class="modal-footer">                        
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            <form action="{{ route('profile.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')                            
                <a href="{{ route('profile.destroy', $user->id) }}"><button type="submit" class="btn btn-primary">Delete Account</button></a>
            </form>                          
        </div>
        </div>
    </div>
</div>
<!-- delete modal -->   
@endsection