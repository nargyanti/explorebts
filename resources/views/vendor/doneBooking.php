<?php    
    include "connection.php";    
    $booking_id = $_GET['booking_id'];
    
    $query = "SELECT * FROM bookings WHERE booking_id = $booking_id";    
    $rowBooking = mysqli_fetch_array(mysqli_query($connect, $query));
    $quantity = $rowBooking['quantity'];
    $product_id = $rowBooking['product_id'];

    $query = "SELECT * FROM products WHERE product_id = $product_id";
    $rowProduct = mysqli_fetch_array(mysqli_query($connect, $query));
    $currentStock = $rowProduct['product_stock'];

    $newStock = $currentStock + $quantity;
    
    $query = "UPDATE bookings SET booking_status = 'DONE' WHERE booking_id = $booking_id;";      
        
    if (mysqli_query($connect, $query)) {                
        $query = "UPDATE products SET product_stock = $newStock WHERE product_id = $product_id;";
        if (mysqli_query($connect, $query)) {            
            echo "<script>alert('Update Successfull '); window.location.href='listOrdered.php'</script>";
        } else {
            echo "<script>alert('Update Failed." .  mysqli_error($connect) . "'); window.location.href='listOrdered.php'</script>";
        }
    } else {            
        echo "<script>alert('Cannot Proceed ." .  mysqli_error($connect) . "'); window.location.href='listOrdered.php'</script>";
    }
    
?>
