<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<td><a class="btn btn-primary"  href="login.php?logout=1" role="button">Logout</a></td>
<div class="container">
	<div class="col-lg-8
		m-auto d-block">
		<form id="form" name="form" method="POST" action="addproductform.php" enctype="multipart/form-data">
		<div class="form-group">
			<label for ="productName">
				product name:
			</label>
			<input type="text"
					name="productName" id="productName"
					class="form-control">
			
		</div>


		<div class="form-group">
			<label for="description">
					description:
			</label>
			<input type="text"name="description"
				id="description" required
				class="form-control" >
               
			
		</div>

		<div class="form-group">
			<label for="price">
					price:
			</label>
			<input type="text" name="price"
				id="price" class="form-control">
			
		</div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Select product pic</label>
        <input class="form-control" type="file" id="formFile" name="product">
        </div>
	

		<input type="submit" id="submitbtn"
			value="Add product" name="submit" >
		</form>
	</div>
	</div>



</body>
</html>


<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName=$_POST['productName'];
    $productPrice=$_POST['price'];
    $productDescription=$_POST['description'];
    
    //process image

    if (isset($_POST['submit'])) {
        $file=$_FILES["product"];
        $fileName=$_FILES["product"]["name"];
         $fileTmpName=$file['tmp_name'];    
         $fileError=$file['error'];
         $fileType=$file['type'];
        $fileSize=$file['size'];
        // print_r ($_FILES);
        $fileExt=explode('.', $fileName);
        $fileActualExt=strtolower(end($fileExt));
        $allowed=array("jpg","png","jpeg","pdf");
    if(in_array($fileActualExt,$allowed)){
        if (($fileError) === 0) {
                if ($fileSize<500000) {
                    $fileNameNew=uniqid("",TRUE).'.'.$fileActualExt;
                    // echo $fileNameNew,$fileTmpName;
                    $fileDestination='/var/www/html/project/'.$fileNameNew;
                    if(move_uploaded_file($fileTmpName, $fileDestination));{
                       
                        echo "file upload success";
                        $productImage="./".$fileNameNew;
                        $productArray=array();
                        $productArray['data']=array();
                        $productArray['data']['productName']=$productName;
                        $productArray['data']['productPrice']=$productPrice;
                        $productArray['data']['productDescription']=$productDescription;
                        $productArray['data']['productImage']=$productImage;
                        print_r("product array=".$productArray);
                        $restInput=json_encode($productArray);
                        print_r ("arreay=:".$restInput);
                        header("location: addproduct.php?data=".$restInput);
                    }
                    
                }
                else{
                    echo "file was too big!";
                }
        }
        else{
            echo "there was an error uploading your file";
        }
    }
    else{
        print_r ($fileActualExt);
        echo " not a valid format";
    }
    }

}

?>
