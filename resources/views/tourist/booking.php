<html lang="en">
    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/logo-bts.png" type="image/x-icon">
        <link href="css/shop-homepage.css" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="css/styleLogin.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <title>Booking Page - Explore BTS</title>
        <style>
            .navbar{
                background-color: #f4623a;
            }

            td{
                padding-right: 25px;
                padding-bottom: 10px;
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
        </style>
    </head>
    <body>
    <h1>Booking Page</h1>
    <div class="card container">
            <div class="card-body">
                <form action="bookingProcess.php?product_id=<?php echo $_GET['product_id']?>" method="POST">                
                    <div class="mb-3">
                        <label for="booking_date" class="form-label">Booking Date (yyyy-mm-dd)</label>
                        <input type="text" class="form-control" name="booking_date" required>                                
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" class="form-control" name="quantity" required>                                
                    </div>
                    <div class="mb-3">
                        <label for="booking_days" class="form-label">Booking Days (Length of Days)</label>
                        <input type="text" class="form-control" name="booking_days" required>                                
                    </div>
                                        
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>    
        </div>   
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </body>
</html>