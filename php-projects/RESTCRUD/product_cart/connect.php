<?php 

$server="localhost";
$username="anu";
$password="Anugrah@123";
$dbName="productDB";

$con=new mysqli($server,$username,$password,$dbName);
if($con->connect_error){
    die ("connection failed" . $con->connect_error);
}


?>