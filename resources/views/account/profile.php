<!doctype html>
<html lang="en">
    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">            
        <link rel="shortcut icon" href="assets/logo-bts.png" type="image/x-icon">
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
        <title>Profile</title>                
    </head>
    <body>                
        <?php
            include "connection.php";
            session_start();                
            $user_id = $_SESSION['user_id'];
            $query = "SELECT * FROM users WHERE user_id = $user_id;";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_assoc($result);
                                    
            if($_SESSION['role_id'] == 2) {
                include "components/navbarVendor.php"; 
            } else if($_SESSION['role_id'] == 3) {
                include "components/navbarUser.php"; 
            }
        ?>        
            <!-- Profile card -->
            <br>
            <div class="card mx-auto text-center mb-3" style="width: 600px; height: 442px" >
                <h4 class="card-title mt-3"><?php echo $row['fullname'];?></h4>
                <img style="width: 100px; height: 100px" src="uploads/profile_pict/<?php echo $row['profile_pict'];?>" class="mx-auto d-block card-img-top" alt="Profile picture">
                <div class="card-body">                    
                    <p>Username: <?php echo $row['username'] ?></p>
                    <p>Address: <?php echo $row['address'] ?></p>
                    <p>Phone: <?php echo $row['phone'] ?></p>
                    <p>Email: <?php echo $row['email'] ?></p>  
                </div>
                <div class="card-footer">                            
                    <div class="row">
                        <div class=col>
                            <a href="editAccount.php?user_id=<?php echo $row['user_id'];?>"><button type="button" class="btn btn-success">Edit account</button></a>
                        </div>
                        <div class=col>
                            <a href="changePassword.php?user_id=<?php echo $row['user_id'];?>"><button type="button" class="btn btn-success">Change password</button></a>
                        </div>
                        <div class=col>                                                
                            <button type="button" class="btn btn-danger" onclick="deleteConfirmation();">Delete account</button>
                        </div>
                    </div>                                                                
                </div>     
            </div>                    
            <script>
                function deleteConfirmation() {
                    var deleteConfirm = confirm("Are you sure to delete this account?");
                    if (deleteConfirm) {
                        window.location = "deleteAccountProcess.php?user_id=<?php echo $row['user_id'];?>";
                    } else {
                        window.location = "profile.php";
                    }
                }        
            </script>
        <?php
            include 'components/footer.php';
        ?>    
    </body>
</html>
