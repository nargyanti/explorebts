@extends('layouts.layoutSignUp')

@section('content')
        <br>
        <h1>Sign Up</h1>
        <div class="card container">
            <div class="card-body">
                <form action="{{ route('register') }}" method="POST">    
                <!-- <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data"> -->
                    @csrf     
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role" required>
                            <option selected disabled hidden>Select Role</option>
                            <option value="Vendor">Vendor</option>
                            <option value="Tourist">Tourist</option>                            
                        </select>
                    </div>       
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>                        
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required>                        
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                               
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                            
                    </div>                    
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>                                                
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                         
                    </div>                      
                    <!-- <div class="mb-3">
                        <label for="profile_picture" class="form-label">Profile Picture</label>
                        <input class="form-control" type="file" name="profile_picture">
                    </div> -->
                    <button type="submit" class="btn btn-primary">Submit</button>                    
                </form>
            </div>    
        </div>
        <br>
        <br>
        <br>
        <br>
@endsection
