<?php 
// ini_set('display_errors',1);
// error_reporting(E_ALL);
// set_error_handler("var_dump");
require "connect.php";
require "control.php";
$userId = $_SESSION['userId'];
echo "userid=".$userId;
$intUserId=(int)$userId;

if (isset($_GET['show_cart']) && $_GET['show_cart']==1) {
    echo "inside show cart";
    $sqlCart="SELECT p.product_name as productName,
                     p.product_price as productPrice,
                     c.cart_id as cart_id,
                     c.userid,
                     c.product_id as pid  
                     FROM
                    productTable p
                    LEFT JOIN 
                    cart c on p.product_id=c.product_id
                    WHERE c.userid=$intUserId ";
$product=mysqli_query($con,$sqlCart);
$product2=mysqli_query($con,$sqlCart);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show Cart</title>
</head>
<body>
<td><a class="btn btn-primary"  href="homepage.php" role="button">Back Home</a></td>
<div class="container">


  <?php 
     if ($product) {
         $id=array();
         $price=0;
        if(mysqli_num_rows($product)>0){
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            
            echo '<th scope="col">Product Name</th>';
            echo '<th scope="col">Product Price</th>';
            echo '<th scope="col">Total Price</th>';
            echo ' </tr>';
            echo '</thead>';
            echo '<tbody>';
                while ($row=(mysqli_fetch_array($product))){
                    $id[$row['pid']]+=1;
                    $price+=$row['productPrice'];
                    // if ($row) {
                    //     echo '<tr>';
                    // echo '<td>'.$row['productName'].'</td>';
                    // echo '<td>'.$row['productPrice'].'</td>';
                    // }
                    
                }
                // echo '<td>'.$price.'</td>';
                print_r($id);
                
                
                
    }
          
}
if ($product2) {
    
    
   if(mysqli_num_rows($product2)>0){
     
        
           // echo '<td>'.$price.'</td>';
          
             while ($row2=(mysqli_fetch_array($product2))){
            if ($id[$row2['pid']]==1) {
                echo '<tr>';
                echo '<td>'.$row2['productName'].'</td>';
                echo '<td>'.$row2['productPrice'].'</td>';
                

            }
            else if($id[$row2['pid']] != 0){
                echo '<tr>';
                echo '<td>'.$row2['productName'].'<b>(Quantity='.$id[$row2['pid']].')</b></td>';
                echo '<td>'.$row2['productPrice'].'</td>';
                $id[$row2['pid']]=0;
            }
        }
        echo '<td>Total price=Rs.'.$price.'</td>';
           
           
           
}
     
}






else{
    echo "show query fail";
}
  

  ?>
  </tbody>
</table>
</div>  
</body>
</html>




<?php
}
else{
   
$productId=$_GET['id'];
echo $productId;
$sqlCart="INSERT INTO cart SET userid='$userId', product_id='$productId' ";
$product=mysqli_query($con,$sqlCart);
if ($product) {
    echo "cart added";
    header ("location:homepage.php?addedtocart");
}
else{
    echo "cart add fail";
}

}





?>