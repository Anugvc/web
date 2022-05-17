<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
// set_error_handler("var_dump");
session_start();
include "connect.php";




class Product{
        private $connect;
        private $tables='products';

        //post properties
        public $id;
        public $productName;
        public $productPrice;
        public $productDescription;
        public $productImage;
        
        //database passing
        public function __construct($db){
            $this->connect=$db;
            echo "enter databse";
        }
        //get product
        // public function read(){
        //     echo "enter read()";
        //     $query='SELECT 
        //             c.name AS category_name,
        //             p.id,
        //             p.name,
        //             p.price,
        //             p.description,
        //             p.category_id,
        //             p.created
        //             FROM
        //             products p
        //             LEFT JOIN 
        //             categories c on p.category_id=c.id
        //             ORDER BY
        //             p.created DESC;';
        //     //prepare statement
        //     // $stmt=$this->connect->prepare($query);
        //     $output=mysqli_query($this->connect,$query);
        //     if ($output){
        //         echo "query success";
        //         return $output;
        //     }
        //     else{
        //         echo "query failed";
        //     }
                   
                    
        // }

        
       
           // create product
        public function create(){
             // sanitize
             $this->productName=htmlspecialchars(strip_tags($this->productName));
             
             $this->productPrice=htmlspecialchars(strip_tags($this->productPrice));
             $this->productDescription=htmlspecialchars(strip_tags($this->productDescription));
             $this->productPrice=htmlspecialchars(strip_tags($this->productPrice));
             $this->productImage=htmlspecialchars(strip_tags($this->productImage));
             $price=(int)$this->productPrice;
            // query to insert record
            //  $query = "INSERT INTO
            //             products
            //         SET

            //          name=" . $this->name . ", price=" . $this->price . ", description=" . $this->description . ", category_id=" . $this->categoryId . ", created=" . $this->created . "";
  
                $query= "INSERT INTO productTable SET product_name='$this->productName', product_price='$price', product_description='$this->productDescription',product_image='$this->productImage' ";
  
               
                if (mysqli_query($this->connect,$query)) {
                    return true;
                }
                return false;


    }
}
?>