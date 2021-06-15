<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/logo-bts.png" type="image/x-icon">
  <title>My Order - Explore BTS</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <style>
    .navbar{
        background-color: #f4623a;
    }
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php session_start(); 
    include 'components/navbarUser.php';
    ?> 
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <!-- sidemenu -->
      <div class="col-lg-3">
        <?php
        include 'components/sideMenuUser.php';
        ?>
      </div>
      <!-- /.sidemenu -->
      </div>
      <!-- /.col-lg-3 -->

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
              <img class="d-block img-fluid" src="assets/slider-jumbotron-1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="assets/slider-jumbotron-2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="assets/slider-jumbotron-3.png" alt="Third slide">
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
        <?php if($_SESSION['login']){ ?>
            <h1>Welcome, <?php echo $_SESSION['username']; ?> !</h1> <br>
            <?php } ?>
            <h3>Your Order</h3> <br>
        </div>
        
        <div class="row">
            <?php
                include "connection.php";
                $user_id = $_SESSION['user_id'];
                $query = "SELECT booking_id, tourist_id, booking_date, b.product_id, p.product_pict, p.product_name, p.unit_price,
                          product_desc, quantity, booking_days, booking_status, 
                          (quantity * booking_days * p.unit_price) AS total_price
                          FROM bookings b INNER JOIN products p
                          ON b.product_id = p.product_id
                          WHERE tourist_id = '$user_id'";
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $row['product_id']; ?>">See Your Order </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.product card -->    
                    <!-- modal -->
                        <div id="modal<?php echo $row['product_id'];?>" class="modal fade" role="dialog" >
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h5 class="modal-title"><?php echo $row['product_name'];?></h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                        
                            <!-- Modal body -->
                            <div class="modal-body" >
                                <img class="img-fluid" src="uploads/product_pict/<?php echo $row['product_pict'];?>">
                                <br><br>
                                <?php echo $row['product_desc']; ?>
                                <br><br>
                                <table>
                                    <tr>
                                        <td>Order For</td>
                                        <td>: <?php echo $row['booking_date']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td>: <?php echo $row['quantity']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Length Booking</td>
                                        <td>: <?php echo $row['booking_days']; ?> days</td>
                                    </tr>
                                    <tr>
                                        <td>Total Price</td>
                                        <td>: Rp <?php echo $row['total_price']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <a href="updateBookingUser.php?booking_id=<?php echo $row['booking_id'];?>&product_id=<?php echo $row['product_id'];?>"><button type="button" class="btn btn-primary" >Update Bookings</button></a>
                              <a href="deleteBookingProcess.php?booking_id=<?php echo $row['booking_id'];?>"><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Cancel Order</button></a>
                            </div>
                    
                            </div>
                        </div>
                        </div>
                    <!-- /.modal -->                
            <?php
                    }
                } else {
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
    include "components/footer.php"
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
