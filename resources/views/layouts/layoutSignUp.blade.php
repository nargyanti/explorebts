<!doctype html>
<html lang="en">
    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="shortcut icon" href="assets/logo-bts.png" type="image/x-icon">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/css/styleLogin.css" rel="stylesheet" />
        <style>
            .navbar{
                background-color: #f4623a;
            }
            h1{
                text-align: center;
                padding-top: 25px;
                padding-bottom: 10px;
                color: white;
            }
            body{
                background: linear-gradient(to bottom, #f4623a 0%, #343a40 100%);   
                color: #343a40;
            }
            input[type=button], input[type=submit], input[type=reset]{
                border: 1px;
                color: #343a40;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
            }
            .card-body{
            font-weight : bold;
         }
        </style>
    </head>
    <body>
          <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-2" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="landingPage.html#page-top">Explore BTS</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0" style="align-items: center ;">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="btn btn-light js-scroll-trigger" style="width:auto;" href="{{route('home')}}">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="py-2 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy;  2020 - Group 1 Web Programming Design TI-2H</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>             
    </body>
</html>