<?php
    include "connection.php";
    session_start();    
    $product_id = $_GET['product_id'];
    $product_name = $_POST['product_name'];
    $product_pict = $_FILES['product_pict']['name'];
    $category_code = $_POST['category_code'];
    $unit_price = $_POST['unit_price'];
    $product_stock = $_POST['product_stock'];
    $vendor_id = $_SESSION['user_id'];
    $product_desc = $_POST['product_desc'];    

    if(empty($product_pict)) {
        $query = "SELECT product_pict FROM products WHERE product_id = $product_id";
        $rowProduct = mysqli_fetch_array(mysqli_query($connect, $query));
        $product_pict = $rowProduct['product_pict'];
    } 

    $target_path="uploads/product_pict/";
    $target_path = $target_path . basename($product_pict);

    move_uploaded_file($_FILES['product_pict']['tmp_name'], $target_path);    

    $query = "UPDATE products SET product_name = '$product_name', product_pict = '$product_pict', 
                category_code = '$category_code', unit_price = $unit_price, product_stock = $product_stock, 
                vendor_id = $vendor_id, product_desc = '$product_desc' WHERE product_id = $product_id;";
    
    if (mysqli_query($connect, $query)) {                     
        echo "<script>alert('Update Successfull '); window.location.href='homeVendor.php'</script>";
    } else {                
        echo "<script>alert('Update Failed <br>" .  mysqli_error($connect) . "'); window.location.href='createProduct.html'</script>";
    }
?>