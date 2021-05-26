<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/assets/logo-bts.png" type="image/x-icon">

  <title>HomeBTS</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap-grid.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/shop-homepage.css" rel="stylesheet">

  <style>
    .navbar{
        background-color: #f4623a;
    }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="{{route('homeUser')}}">Explore BTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="homeUser.php">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logoutSession.php">Log Out</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- /.nav -->
      <!-- Page Content -->
    <div class="container">

    <div class="row">
    <!-- sidemenu -->
    <div class="col-lg-3">
        <img src="assets/assets/logo-bts.png" width="75%">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>