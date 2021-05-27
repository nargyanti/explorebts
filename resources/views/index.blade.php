@extends('layouts.layoutLandingPage')

@section('content')
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Explore BTS</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0" style="align-items: center ;">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-light js-scroll-trigger"
                            onclick="document.getElementById('login-modal').style.display='block'"
                            style="width:auto;">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Explore Bromo Tengger Semeru</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Get your information and start your journey at Bromo
                        and Semeru </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">About Bromo</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">Mount Bromo, is an active volcano and part of the Tengger massif, in
                        East Java, Indonesia. At 2,329 meters (7,641 ft) it is not the highest peak of the massif, but
                        is the best known. The massif area is one of the most visited tourist attractions in East Java,
                        Indonesia. The volcano belongs to the Bromo Tengger Semeru National Park.</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#condition">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Condition -->
    <section class="page-section bg-dark text-white" id="condition">
        <div class="container text-center">
            <h2 class="mb-4">Condition of Mount Bromo and Semeru</h2>
            <!-- <div class="col-lg-3 col-md-6 text-center"> -->
            <img class="img-fluid" src="{{ asset('assets/img/Label-danger-semeru.png') }}" height="50px" width="150px"
                style="margin-right: 100px;">
            <!-- </div> -->
            <!-- <div class="col-lg-3 col-md-6 text-center"> -->
            <img class="img-fluid" src="{{ asset('assets/img/Label-danger-bromo.png') }}" height="50px" width="150px"
                style="margin-left: 100px;"><br><br>
            <p class="text-white-75 font-weight-light mb-5">Sorry but you can't visit Bromo Tengger Semeru yet</p>
            <!-- </div> -->
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">Our Service</h2>
            <hr class="divider my-2" />
            <div class="row" style="justify-content: center;">
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-campground text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Camping Tools</h3>
                        <p class="text-muted mb-0">Provide your camp needs!</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-car-alt text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Jeep Car</h3>
                        <p class="text-muted mb-0">Rent a jeep car to exploring Bromo Tengger Semeru (Driver included)
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-bed text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Inn</h3>
                        <p class="text-muted mb-0">Book a home stay to keep you close with Bromo Tengger Semeru</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-shuttle-van text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Trip</h3>
                        <p class="text-muted mb-0">Ready to pick you up and take you back to home after exploring Bromo
                            Tengger Semeru</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">Ready to start your journey with us? Give us a call or send us an email
                        and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>+62 (341) 123-4567</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:meutizari87@gmail.com">Meuti Zari Annisa</a>
                    <a class="d-block" href="mailto:nargyanti@gmail.com">Nabilah Argyanti Ardyningrum</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Login page -->
    <div id="login-modal" class="modal">
        <form class="modal-content animate" action="{{ route('login') }}" method="post">
            @csrf
            <div class="imgcontainer">
                <span onclick="document.getElementById('login-modal').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="{{ asset('assets/img/logo-bts.png') }}" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="username"><b>Username</b></label>                
                <input id="username" type="username" placeholder="Enter Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label for="password"><b>Password</b></label>                
                <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <input type="checkbox" onclick="showPassword()">Show Password
                <button type="submit">Login</button><br>
                <span class="sign-up text-muted">Don't have an account? <a href="{{ route('sign-up') }}">Sign Up</a></span>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('login-modal').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <span class="password"><a href="{{ route('forgot-password') }}">Forgot password?</a></span>
            </div>
        </form>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('login-modal');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection