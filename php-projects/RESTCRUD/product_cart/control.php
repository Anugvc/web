<?php
  session_start();

  if(!(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == TRUE )) {
    header("Location: login.php?loginfailed");
    exit;
}
else{
    echo "loggedin";
}
?>