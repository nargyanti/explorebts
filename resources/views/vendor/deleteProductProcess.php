<?php
    include "connection.php";
    
    $product_id = $_GET['product_id'];
        
    $query = "DELETE FROM bookings WHERE product_id = $product_id;";
    
    mysqli_query($connect, $query);
    
    if (mysqli_query($connect, $query)) {                     
        $query = "DELETE FROM products WHERE product_id = $product_id;";
        if (mysqli_query($connect, $query)) {                                             
            echo "<script>alert('Delete Success! '); window.location.href='homeVendor.php'</script>";
        } else {                
            echo "<script>alert('Delete Failed <br>" .  mysqli_error($connect) . "'); window.location.href='homeVendor.php'</script>";
        }        
    } else {                
        echo "<script>alert('Delete Failed <br>" .  mysqli_error($connect) . "'); window.location.href='homeVendor.php'</script>";
    }
?>