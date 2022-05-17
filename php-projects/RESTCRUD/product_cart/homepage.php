<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);
// set_error_handler("var_dump");
require "connect.php";
require "control.php";
$sqlFetch="SELECT * FROM productTable";
$product=mysqli_query($con,$sqlFetch);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>home</title>
</head>
<body>
<a class="btn btn-primary"  href="login.php?logout=1" role="button">Logout</a>
<a class="btn btn-primary"  href="addcart.php?show_cart=1" role="button">Show Cart Contents</a>
<h1 class="text-center text-success">
		Welcome 
	</h1>
    <div class="container">
    <?php 
    if ($product) {
        if(mysqli_num_rows($product)>0){
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">Product Number</th>';
            echo '<th scope="col">Product Name</th>';
            echo '<th scope="col">Product Image</th>';
            echo '<th scope="col">Product Description</th>';
            echo '<th scope="col">Product Price</th>';
            echo '<th scope="col"></th>';
            echo ' </tr>';
            echo '</thead>';
            echo '<tbody>';
                while ($row=(mysqli_fetch_array($product))){
                    echo '<tr>';
                    echo '<td>'.$row['product_id'].'</td>';
                    echo '<td>'.$row['product_name'].'</td>';
                    // echo '<td><img src="./60deedc67e8db2.13247971.png" alt="Not found" border=3 height=100 width=100></img></td>';

                    echo '<td><img src="'.$row['product_image'].'" alt="Not found" border=3 height=100 width=100></img></td>';
                    echo '<td>'.$row['product_description'].'</td>';
                    echo '<td>'.$row['product_price'].'</td>';
                    echo '<input type="hidden" name="productId" value="'.$row['product_id'].'">';
                    echo '<td><a class="btn btn-primary"  href="addcart.php?id='.$row['product_id'].'" role="button">Add to cart</a></td>';

                }

    }
}
    
    ?>

  </tbody>
</table>
    </div>
</body>
</html>