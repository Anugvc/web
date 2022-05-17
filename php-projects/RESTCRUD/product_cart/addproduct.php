<?php 

include "connect.php";
include "restapi_product.php";
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$db=$con;
$product= new Product($db);

echo "abc";
$input=$_GET['data'];
// print_r("132");
// print_r($input);
$data = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $input), true );

print_r($data);
if(
    !empty($data['data']['productName']) &&
    !empty($data['data']['productPrice']) &&
    !empty($data['data']['productDescription']) &&
    !empty($data['data']['productImage'])
){
    $product->productName = $data['data']['productName'];
    
    $product->productPrice =$data['data']['productPrice'];
    $product->productDescription = $data['data']['productDescription'];
    $product->productImage = $data['data']['productImage'];
    

    if($product->create()){
  
        // tell the user
        echo json_encode(array("message" => "Product was created."));
        $_SESSION['product']=1;
        header("location: addproductform.php?product%created");
    }
    else{
        // tell the user
        echo json_encode(array("message" => "Unable to create product."));
    }
}
else{

     // tell the user
     echo json_encode(array("message" => "Unable to create product.Data incomplete"));
}



?>





