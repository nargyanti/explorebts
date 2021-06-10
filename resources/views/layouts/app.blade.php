<!doctype html>
<html lang="en">
    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">            
        <link rel="shortcut icon" href="{{ asset('assets/img/logo-bts.png') }}" type="image/x-icon">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Explore BTS</title>        
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">         -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
        @if (Route::is('landing-page'))  
            <link href="{{ asset('assets/css/styleLogin.css') }}" rel="stylesheet" />
        @endif                
    </head>
    <body>      
        @if (Route::is('landing-page'))  
            <div>
        @else
            <div class="container">
        @endif                
            @yield('content')                
        </div> 
        <footer class="bg-dark text-light p-3">            
            <div class="small text-center">Copyright © 2021 - Group 5 Advanced Web Programming TI-2H</div>            
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->        
        @if (Route::is('landing-page'))  
            <script src="{{ asset('assets/js/scripts.js') }}"></script>
        @endif
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </body>
</html>