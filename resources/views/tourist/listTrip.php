<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/logo-bts.png" type="image/x-icon">

  <title>List Trip - Explore BTS</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <style>
    .navbar{
        background-color: #f4623a;
    }

    h1{
        padding-top: 25px;
        text-align: center;
        padding-bottom: 25px;
        color: #404040;
        background: linear-gradient(to bottom, #cccccc 0%, #ffffff 100%);
    }

    </style>
</head>

<body>

  <!-- Navigation -->
  <?php
  include 'components/navbarUser.php';
  ?>

  <h1>Trip</h1>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <img src="assets/logo-bts.png" width="75%">
        <div class="list-group">
          <a href="myOrder.php" class="list-group-item">My Order</a>
          <div class="list-group-item">
            <a class="dropdown-toggle" href="" data-toggle="dropdown">Services<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li role="presentation"></li><a href="listInn.php" class="list-group-item">Inn</a></li>
              <li role="presentation"></li><a href="listJeep.php" class="list-group-item">Jeep</a></li>
              <li role="presentation"></li><a href="listTrip.php" class="list-group-item">Trip</a></li>
              <li role="presentation"></li><a href="listCampTools.php" class="list-group-item">Camp Tools</a></li>
            </ul>
          </div>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="row">
          <?php
                include "connection.php";
                $query = "SELECT * FROM products WHERE category_code LIKE '%TRIP%'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <!-- product card -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <img class="card-img-top" src="uploads/product_pict/<?php echo $row['product_pict'];?>" alt="">
                      <div class="card-body">
                          <h5 class="card-title"><?php echo $row['product_name'];?></h5>
                          <h5>Rp <?php echo $row['unit_price'];?></h5>
                      </div>
                      <div class="card-footer">                            
                          <a href="booking.php?product_id=<?php echo $row['product_id'];?>"><button type="button" class="btn btn-primary">Booking!</button></a>
                      </div>
                </div>
            </div>
          <!-- /.product card -->
          <?php
                    }
                } else{
                    echo "0 result";
                }
            ?>
           
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  
  <!-- Footer -->
    <?php
        include 'components/footer.php';
    ?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>