<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/logo-bts.png" type="image/x-icon">

  <title>Ordered List - Explore BTS</title>

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
  include 'components/navbarVendor.php';
  ?>

  <h1>Ordered List</h1>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <?php
            include 'components/sideMenuVendor.php';
        ?>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <div class="row">
          <?php
              session_start();
              include "connection.php";
              $vendor_id = $_SESSION['user_id'];
              $query = "SELECT DISTINCT b.product_id, p.product_pict, p.product_name, p.unit_price, p.product_desc,
                        p.product_stock
                        FROM bookings b 
                        INNER JOIN products p 
                        ON p.product_id = b.product_id 
                        WHERE p.vendor_id = $vendor_id";
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $row['product_id']; ?>">Check > </button>
                      </div>
                </div>
            </div>
            <!-- /.product card -->
            <!-- modal -->
            <div id="modal<?php echo $row['product_id'];?>" class="modal fade" role="dialog" >
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title"><?php echo $row['product_name'];?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body" style="align-items: center;">
                    <img class="img-fluid" style="width: 200px" src="uploads/product_pict/<?php echo $row['product_pict'];?>" alt=""> <br><br>
                    <?php echo $row['product_desc']; ?>
                    <br><br>
                    <p>Product Stock : <?php echo $row['product_stock']; ?></p>
                    <h6>Ordered by : </h6>                    
                    <?php
                      $product_id = $row['product_id'];

                      $sql = "SELECT b.booking_id, b.tourist_id, b.booking_date, b.quantity, 
                              b.booking_days, b.booking_status, u.fullname, u.phone, p.product_stock,
                              (b.quantity * b.booking_days * p.unit_price) AS total_price
                              FROM bookings b INNER JOIN products p
                              ON b.product_id = p.product_id
                              INNER JOIN users u
                              ON u.user_id = b.tourist_id
                              WHERE b.product_id = $product_id";                              
                      $query = mysqli_query($connect, $sql);?>
                      <table border='1' cellpadding='4'>
                        <tr style='background-color:#f4623a; color:white;'>
                          <th>Full Name</th>
                          <th>Phone</th>
                          <th>Booking Date</th>
                          <th>Qty</th>
                          <th>Days</th>
                          <th>Total Price</th>
                          <th>Status</th>
                          <th>Settings</th>
                        </tr>
                      
                      <?php
                      //print data
                      if(mysqli_num_rows($query) > 0){
                        while($rowResult = mysqli_fetch_assoc($query)){                                     
                      ?>
                        <tr>
                          <td><?php echo $rowResult["fullname"];?></td>
                          <td><?php echo $rowResult["phone"];?></td>
                          <td><?php echo $rowResult["booking_date"];?></td>
                          <td><?php echo $rowResult["quantity"];?></td>
                          <td><?php echo $rowResult["booking_days"];?></td>
                          <td><?php echo $rowResult["total_price"];?></td>
                          <td><?php echo $rowResult["booking_status"];?></td>
                          <?php
                          if ($rowResult["booking_status"] == 'BOOKED') {?> 
                              <td><a href="cancelBooking.php?booking_id=<?php echo $rowResult['booking_id'];?>"><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to cancel this booking?')">Cancel</button></a>
                              <a href="doneBooking.php?booking_id=<?php echo $rowResult['booking_id'];?>"><button type="button" class="btn btn-success">Done</button></a></td>
                          <?php
                          } else { ?>
                            <td></td>
                          <?php
                          }
                          ?>
                          </tr>                                                                                                     
                      <?php                        
                        }
                      }    
                      ?>     
                      </table>       
                  </div>
                </div>
              </div>
            </div>
            <!-- /.modal -->
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