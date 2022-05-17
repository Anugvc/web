<?php
echo "Question 1\n";
$value=0;
$carSales=array();
$sales = array( 'MONDAY' => array('Swift' => array(3, 9, 7), 'Alto' => array(2, 4, 2, 8)), 'TUESDAY' => array('Swift' => array(5, 3, 8), 'Verna' => array(4, 1, 4)), 'WEDNESDAY' => array('Polo' => array(6, 9), 'Swift' => array(2, 3, 5, 2)), 'THURSDAY' => array('Polo' => array(5, 3, 3, 2), 'Nexon' => array(4, 9, 8, 5)), 'FRIDAY' => array('Alto' => array(8, 5), 'Verna' => array(3, 9, 7)));
// foreach ($sales as $key1 => $value1){
//     foreach ($value1 as $carName=>$saleArray){
//         $carSales[$carName]=0;
//     }
// }

foreach ($sales as $key1 => $value1) {
    foreach ($value1 as $carName=>$saleArray) {
        if (!isset($carSales[$carName])){
            $carSales[$carName]=0;
        }
            foreach ($saleArray as $saleValue) {
                $carSales[$carName]+=$saleValue;
            }
            
        
            
        
    }
}
echo "sales of cars=\n";
print_r ($carSales);


echo"\n\n\nQuestion 2\n";
echo $body = "This is a sentence has 2 email id. You have to find rahul@zoondia.in and midhun@zoondia.in in it";

preg_match_all("/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i", $body, $matches);
    foreach ($matches as  $keys=>$value) {
        foreach ($value as $email) {
            echo "\nfound email id in the string:\n $email\n";
        }
    }
$body = preg_replace("/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i", "EMAIL", $body);
echo $body;

// PHP program to build a class and store the data of the car with tyre size,weight,company and year along with Constructor 
// and function to estimate cost of car based on conditions
// swift:7000(price)
// baleno:5999
// alto:4000
// polo:6100
// est cost calculation = price*(tyre size/4.0)+price*(weight/1.0)+price*(year/1.0)+0.05*price

echo"\n\n\nQuestion 3\n";

class car{
   public $priceArray=array("swift"=>7000,"baleno"=>5999,"alto"=>4000,"polo"=>6100);
    public $carName,$carSales,$price,$tyreSize,$weight,$year;
    
    
    
    
    

   public function __construct($carName,$tyreSize,$weight,$year){
       $this->carName=$carName;
       $this->tyreSize=$tyreSize;
       $this->weight=$weight;
       $this->year=$year;
       $price=$this->priceArray[$this->carName];
       return $this->costCalc();
       

   }
   public function costCalc()
   {    
       $price=$this->priceArray[$this->carName];
       
       $cost=$price*($this->tyreSize/4.0)+$price*($this->weight/1.0)+$price*($this->year/1.0)+0.05*$price;
   
       echo "\nestimated cost of $this->carName = Rs $cost\n";
            
   }

}
$swift=new car("swift",18,1800,2010);
$polo=new car("polo",19,2000,2015);
$baleno=new car("baleno",15,1500,2013);
$alto=new car("alto",12,1100,2016);



?>