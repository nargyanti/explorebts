<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/assets/logo-bts.png" type="image/x-icon">
  
  <title>HomeBTS</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
        <a class="navbar-brand" href="#">Explore BTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="homeVendor.php">Home
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
      <!-- Page Content -->
    <div class="container">

        <div class="row">
        <!-- Sidebar -->
            <div class="col-lg-3">
                <img src="assets/assets/logo-bts.png" width="75%">
                <div class="list-group">
                    <a href="uploadService.html" class="list-group-item">Add Services</a>
                    <a href="homeVendor.php" class="list-group-item">My Services</a>
                    <a href="listOrdered.php" class="list-group-item">Ordered Services</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->
            <!-- Content -->
            <div class="col-lg-9">
            @yield('content')
            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-3 bg-dark">
        <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy;  2021 - Group 5 Advanced Web Programming TI-2H</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>