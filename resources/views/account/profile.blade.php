@extends('layouts.app')
@include('layouts.navigation')
@section('content')
<!-- Profile card -->
@include('layouts.success')
<br>
            <div class="card mx-auto text-center mb-3" style="width: 600px; height: 442px" >
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
                            <a href="{{ route('profile.edit', $user->id)}}"><button type="button" class="btn btn-success">Edit account</button></a>
                        </div>
                        <div class=col>
                            <a href="{{ route('change_password')}}"><button type="button" class="btn btn-success">Change password</button></a>
                        </div>
                        <div class=col>                                                
                            <button type="button" class="btn btn-danger" onclick="deleteConfirmation();">Delete account</button>
                        </div>
                    </div>                                                                
                </div>     
            </div>                    
            <script>
                function deleteConfirmation() {
                    var deleteConfirm = confirm("Are you sure to delete this account?");
                    if (deleteConfirm) {
                        window.location = "";
                    } else {
                        window.location = "{{ route('profile.index')}}";
                    }
                }        
            </script>
@endsection