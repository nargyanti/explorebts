<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="assets/logo-bts.png" type="image/x-icon">

        <title>Upload Service - Explore BTS</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">
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
            }
            body{
                background: linear-gradient(to bottom, #f4623a 0%, #343a40 100%);   
                color: white;
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
        <!-- navbar -->
            <?php
                include 'components/navbarVendor.php';
                include "connection.php";
                $id = $_GET['product_id'];
                $query = "SELECT * FROM products WHERE product_id = '$id'";
                $result = mysqli_query($connect, $query);
            ?>
        <h1>Update Service</h1>
          <!--form!-->
        <div class="container">
            <br>
        <form action="editProductProcess.php?product_id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
            <table>
            <?php
                while($row = mysqli_fetch_array($result)){
                $selectedCategories = $row['category_code'];
                $options = array("CMP", "INN", "JEEP", "TRIP");
            ?>
            <tr>
                <td>
                    Product Name    
                </td>
                <td>
                    <input type="text" name="product_name" placeholder="Product Name" value="<?php echo $row['product_name']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    Category 
                </td>
                <td>
                    <select class="form-control" id="exampleFormControlSelect1" name="category_code" required>
                        <option value="CMP">CMP</option>
                        <option value="INN">INN</option>
                        <option value="JEEP">JEEP</option>
                        <option value="TRIP">TRIP</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Unit Price 
                </td>
                <td>
                    <input type="number" name="unit_price" placeholder="Unit Price" value="<?php echo $row['unit_price']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    Product Stock 
                </td>
                <td>
                    <input type="number" name="product_stock" placeholder="Product Stock" value="<?php echo $row['product_stock']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    Product Description 
                </td>
                <td>
                    <input type="textarea" name="product_desc" placeholder="Product Description" value="<?php echo $row['product_desc']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    Product Photos 
                </td>
                <td>
                    <input type="file" name="product_pict" value="<?php echo $row['product_pict']?>">
                </td>
            </tr>
            <?php
                }
            ?>
            </table>
            <input type="submit">
        </form>
    </div>
        <!-- Footer -->
        <footer class="fixed-bottom py-2 bg-dark">
            <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy;  2020 - Group 1 Web Programming Design TI-2H</p>
            </div>
        </footer>
    </body>
</html>