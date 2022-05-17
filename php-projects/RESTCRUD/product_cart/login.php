<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);
// set_error_handler("var_dump");
session_start();
include "connect.php";
// if (isset($_GET['logout']) && $_GET['logout'] == 1 && $_SESSION['loggedIn']!= TRUE) {

//     session_unset();
//     session_destroy();
//     $_GET['logout'] == 0;
//     echo "<script>alert('logged out successfully');</script>";

// }

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SESSION['formSubmit'] == 0 ) {
    



    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    echo $userName;
    echo $email;
    echo $password;
    $sqlInsert="INSERT INTO user (username, email, user_password)VALUES ('$userName', '$email','$password')";
    if ($con->query($sqlInsert) === TRUE) {
        echo "<br> New record inserted successfully";
        $_SESSION['formSubmit']=1;

    //send mail to registred user 
        $header = "From: noreply@example.com\r\n";
        $header.= "MIME-Version: 1.0\r\n";
        $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $header.= "X-Priority: 1\r\n";  
        $msg = "Dear '.$userName.'\n You have successfully created your account for product site";
        $subject = "Account creation";
        if(mail($email,$subject,$msg,$header)){
            echo '<script>alert("Registration success! Please check your email");</script>';
        }
        else{
            echo "mail failed";
        }

      } else {
        echo "Error: " . $sqlInsert . "<br>" . $con->error;
        
      }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="" method="POST" id="loginForm" name="loginForm">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="email" required="required">
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" id="submitLogin" name="submitLogin" class="btn btn-primary btn-block">Log in</button>
        </div>
            <div class="form-group"><a class="btn btn-primary"  href="createuser.php" role="button">Register</a></div>
    </form>
    <!-- <p class="text-center"><a href="#">Create an Account</a></p> -->
</div>
</body>
</html>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitLogin'])) {
            echo "submitted";
            $email = $_POST['email'];
            $password = $_POST['password'];
            echo $email.$password;
            $sqlCheck="SELECT * FROM `user` WHERE email='".$email."' AND user_password='".$password."' LIMIT 1";
            $result= mysqli_query($con,$sqlCheck);
            if (mysqli_num_rows($result)==1) {
                echo "user found";
                while ($row=(mysqli_fetch_array($result))){
                $_SESSION['loggedIn']= TRUE;
                $_SESSION['userId']=$row['id'];
                $redirect="homepage.php?user=".$row['username'];
                }
            }
            else{
                echo "user not found";
                $redirect="login.php";
            }
            header("location: $redirect");
        
    }

?>
