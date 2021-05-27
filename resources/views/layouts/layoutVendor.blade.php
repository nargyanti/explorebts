<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ asset('assets/img/logo-bts.png') }}" type="image/x-icon">
  
  <title>Explore BTS</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">  

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/css/shop-homepage.css') }}" rel="stylesheet">

  <style>
    .navbar{
        background-color: #f4623a;
    }
    </style>
</head>

<body>
    @include('layouts.navigation')
      <!-- Page Content -->
    <div class="container">

        <div class="row">
        <!-- Sidebar -->
            <div class="col-lg-3">
                <img src="{{ asset('assets/img/logo-bts.png') }}" width="75%">
                <div class="list-group">
                    <a href="{{ route('product.create') }}" class="list-group-item">Add Product</a>                    
                    <a href="{{ route('product.index') }}" class="list-group-item">Ordered Product</a>
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
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>

</body>

</html>