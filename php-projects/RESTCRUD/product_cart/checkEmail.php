<?php 



require_once "connect.php";



		// check if request is post and action is save
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save']) && $_POST['save'] == 1) {

		

			$email 		= 		$_POST['email'];

			

			$save 		= 		$_POST['save'];

			
	
      //check for email in database
      $sql="SELECT * FROM `user` WHERE email='".$email."'";
      $result=mysqli_query($con,$sql);
			
		

		
			
			// return success response
			if($result) {
        if (mysqli_num_rows($result)>0){
          while ($row=(mysqli_fetch_array($result))){
            echo "Email already exists";
            die();
          }

        }
        else{
          echo "ok";
        }
				
			}

			// return error response
		
		}	


   
 
?>