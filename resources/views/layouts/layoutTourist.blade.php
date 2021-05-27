<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ asset('assets/img/logo-bts.png') }}" type="image/x-icon">

  <title>HomeBTS</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/bootstrap/css/bootstrap-grid.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/shop-homepage.css') }}" rel="stylesheet">

  <style>
    .navbar{
        background-color: #f4623a;
    }
    </style>
</head>
<body>
    @include('layouts.navigation');
      <!-- Page Content -->
    <div class="container">

    <div class="row">
    <!-- sidemenu -->
    <div class="col-lg-3">
        <img src="{{ asset('assets/img/logo-bts.png') }}" width="75%">
        <div class="list-group">
        <a href="myOrder.php" class="list-group-item">My Order</a>

        <div class="list-group-item">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Services
            </a>
            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item list-group-item" href="#">Inn</a>
            <a class="dropdown-item list-group-item" href="#">Jeep</a>
            <a class="dropdown-item list-group-item" href="#">Trip</a>
            <a class="dropdown-item list-group-item" href="#">Camp Tools</a>
            </div>
            
        </div>
    </div>
    <!-- /.sidemenu -->
    </div>
    <!-- /.col-lg-3 -->
    @yield('content')
    

    </div>
    <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2021 - Group 5 Advanced Web Programming TI-2H</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>    
</body>

</html>