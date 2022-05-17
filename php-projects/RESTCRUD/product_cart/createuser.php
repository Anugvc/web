<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);
set_error_handler("var_dump");
session_start();
$_SESSION['formSubmit'] = 0;
require_once "connect.php";


?>
<!DOCTYPE html>
<html>
<head>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href=
	"https://maxcdn.bootstrapcdn.com/bootstrap/
	4.0.0/css/bootstrap.min.css"> -->
	<!-- jQuery library -->
	<!-- <script src=
	"https://ajax.googleapis.com/ajax/libs/
	jquery/3.3.1/jquery.min.js">
	</script> -->
	<!-- Popper JS -->
	<!-- <script src=
	"https://cdnjs.cloudflare.com/ajax/libs/
	popper.js/1.12.9/umd/popper.min.js">
	</script> -->
	<!-- Latest compiled JavaScript -->
	<!-- <script src=
	"https://maxcdn.bootstrapcdn.com/bootstrap/
	4.0.0/js/bootstrap.min.js">
	</script> -->
</head>
<body>
<br>
	<h1 class="text-center text-success">
		Registration Form
	</h1>

	<p class="text-center">
	Please Enter User Info:
	</p>

  <div class="container" style="height:500px; width:500px;"> 
  <form action="login.php" id="form" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" >
  </div>
  <div id="userErr" style=" color: red;"></div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email"  >
  </div>
  <div id="emailErr" style=" color: red;"></div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  <div id="passErr" style=" color: red;"> </div>
  
  <button type="button" class="btn btn-primary" name="submitbtn" id="submitbtn">Submit</button>
  <td><a class="btn btn-primary"  href="login.php?logout=1" role="button">Login</a></td>
</form>
  
  </div>
	<!-- <div class="col-lg-8
		m-auto d-block">
		<form id="form" name="form" method="POST" action="login.php">
		<div class="form-group">
			<label for ="user">
				Username:
			</label>
			<input type="text"
					name="username" id="username"
					class="form-control">
			
		</div>


		<div class="form-group">
			<label for="user">
					Email:
			</label>
			<input type="email"  name="email"
				id="email" required
				class="form-control" >
                <div id="emailCheck" name="emailCheck" style=" color: red;"></div>
			
		</div>

		<div class="form-group">
			<label for="password">
					Password:
			</label>
			<input type="password" name="pass"
				id="password" class="form-control">
			
		</div>

	

		<input type="button" id="submitbtn"
			value="Submit" >
		</form>
	</div> -->

<!-- <input type="submit" value="Submit">  -->

<!-- <script>
        $( document ).ready(function() {
         
        
       
});



</script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    
    $(document).ready(function() {
       
        
      
            
            
             email = document.getElementById("email").value;
             
            function checkUser() {
              username = document.getElementById("username").value;
              if(username ==""){
              
              $('#userErr').html("please enter username ");
              return false;
             }
             else{
               
              $('#userErr').html("");
               return true;
             }
            }

            function checkEmail() {
              email = document.getElementById("email").value;
              if(email == ""){
                $('#emailErr').html("please enter email ");
                return false;
              }
              else if(!(email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))){
                $('#emailErr').html("please enter a valid email ");
                return false;
              }
              else{
                $('#emailErr').html("");
                return true;
              }
              
            }
            function checkPassword() {
              password = document.getElementById("pass").value;
              if(password == ""){
                $('#passErr').html("please enter password");
              return false;
              }
              else if(password.length<3){
                $('#passErr').html("password length should be more than 3");
                return false;
              }
              else{
                $('#passErr').html("");
                return true;
              }
              
            }
            $("#username").keyup(function(){
              checkUser();
            });
            $("#email").on('keyup', 'blur', function(){
              checkEmail();
            });
  
            $("#pass").on('keyup', 'blur', function(){
              checkPassword();
            });


             $('#submitbtn').on('click', function () {
         
              var emailResult=checkEmail();
              var userResult=checkUser();
              
              var passResult=checkPassword();
              if(checkEmail){
                email = document.getElementById("email").value;
              
                       $.ajax({

                            url: 'checkEmail.php',   // sending ajax request to this url
                            type: 'post',
                            data: {
                                
                                  'email': email,
                                  
                                  'save' : 1
                              },

                            // before ajax request


                            // on success response
                            success:function(response) {
                              
                              
                                $("#emailErr").html(response);
                                if(response == "ok"){
                                  $('form#form').submit();
                                }
                              
                              
                              // reset form fields after submit
                              // $("#regForm")[0].reset();
                            },

                            // error response
                            error:function(e) {
                              $("#emailErr").html("Some error encountered.");
                              
                            }

                            });

                    
              
              }
            

            
        });


});

</script>

</body>
</html>
