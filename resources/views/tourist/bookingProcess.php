<?php
    session_start();     
    include "connection.php";
    $username = $_SESSION['username']; 
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connect, $query);
    $rowUser = mysqli_fetch_assoc($result);
    
    $tourist_id = $rowUser['user_id'];        
    $booking_date = $_POST['booking_date'];
    $product_id = $_GET['product_id'];
    $quantity = $_POST['quantity'];
    $booking_days = $_POST['booking_days'];

    $query = "SELECT * FROM products WHERE product_id = $product_id";
    $rowProduct = mysqli_fetch_array(mysqli_query($connect, $query));
    $currentStock = $rowProduct['product_stock'];

    $modifiedStock = $currentStock - $quantity;
    
    if($modifiedStock >=0){
        $query = "INSERT INTO bookings (tourist_id, booking_date, product_id, quantity, booking_days) VALUES
                    ($tourist_id, '$booking_date', $product_id, $quantity, $booking_days);";          

        if (mysqli_query($connect, $query)) {                
            $query = "UPDATE products SET product_stock = $modifiedStock WHERE product_id = $product_id;";
            
            if (mysqli_query($connect, $query)) {            
                echo "<script>alert('Transaction Successfull '); window.location.href='myOrder.php'</script>";
            } else {
                echo "<script>alert('Cannot Connect ." .  mysqli_error($connect) . "'); window.location.href='myOrder.php'</script>";
            }
        } else {            
            echo "<script>alert('Cannot Proceed ." .  mysqli_error($connect) . "'); window.location.href='homeUser.php'</script>";
        }
    } else {
        echo "<script>alert('Sorry, you cannot edit the quantity because the stock is not enough ." .  mysqli_error($connect) . "'); window.location.href='homeUser.php'</script>";
    }       
?>
