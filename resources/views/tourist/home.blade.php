@extends('layout.layoutUser')

@section('content')


      <div class="col-lg-9">
        <!-- carousel -->
        <div id="myCarousel" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="assets/assets/slider-jumbotron-1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="assets/assets/slider-jumbotron-2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="assets/assets/slider-jumbotron-3.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- /.carousel -->
        <div class="container">
        <!-- Kore no session mo onegaishimasu -->
            <h1>Welcome, Username!</h1>
            <!-- search -->
            <form action="search.php" method="GET" class="form-inline justify-content-center pt-4">
              <input class="form-control mr-sm-2 w-50" type="search" placeholder="Search" name="keyword">
            <button class="btn my-2 my-sm-0 search-button" type="submit" style="background-color:#f4623a; color:white">Search</button>
            </form><br>
            <!-- /.search -->
            <h3>Recommended</h3>
             <br>
        </div>
        
        <div class="row">
            <!-- product card 1 -->

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <img class="card-img-top" src="assets/uploads/product_pict/pictexample.jpg" onerror="this.src='assets/uploads/product_pict/no-picture.png'" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Product Name</h5>
                    <h5>Rp 100.000</h5>
                  </div>
                  <div class="card-footer">                            
                    <a href="#"><button type="button" class="btn btn-primary">Booking!</button></a>
                  </div>
                </div>
              </div>
            <!-- /.product card -->   
            <!-- product card 2 -->
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/uploads/product_pict/pictexample.jpg" onerror="this.src='assets/uploads/product_pict/no-picture.png'" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Product Name</h5>
                      <h5>Rp 100.000</h5>
                  </div>
                  <div class="card-footer">                            
                    <a href="#"><button type="button" class="btn btn-primary">Booking!</button></a>
                  </div>
                </div>
              </div>
            <!-- /.product card -->  
        </div>
      <!-- /.row -->
@endsection
