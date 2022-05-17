<?php
$domain="w3schools.com";
if(getmxrr($domain,$mx_details)){
  foreach($mx_details as $key=>$value){
    echo "$key => $value <br>";
  }
}
?> 