<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/logo-bts.png" type="image/x-icon">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styleLogin.css" rel="stylesheet" />
        <style>
            .navbar{
                background-color: #f4623a;
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
            .card-body{
            font-weight : bold;
         }
        </style>
</head>
<body>
    <!-- Navigation -->

    <?php 
        include 'components/navbarGeneral.php';
    ?> 
    <!-- Page Content -->
    <br><br>
    <h1>Forgot Your Password?</h1>
    <br>
    <div class="card container">
        
        <div class="card-body">
            <form method="POST" action="forgotPasswordProcess.php">                
                <div class="mb-3">
                    <label for="username" class="form-label">Username or Email</label>
                    <input type="text" class="form-control" name="userKeyword" required>                                
                </div>     
                <div class="mb-3">
                    <label for="newPassword" class="form-label">New Password</label>
                    <input type="password" class="form-control" name="newPassword" required>                                
                </div>          
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>    
    </div>
    <?php 
        include 'components/footer.php';
    ?> 
    
</body>
</html>