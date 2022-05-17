<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
echo "question1";
$cars = array( "Swift"=>"Maruthi", "Polo"=>"volkswagen", "Baleno"=> "Maruthi", "i10"=>"hyundai", "i20"=>"hyundai") ;

foreach($cars as $carName => $combany){
      echo "The manufacturing of ".$carName." is ".$combany."\n<br>";
      

}

echo "question2 \n<br>";
$array = array(1, 2, 3, 4, 5);
$len=count($array);
for($i=0;$i< $len;$i++){
    if($array[$i]==3){
        array_splice($array,$i,1);
        $len-=1;
        
    }

}
print_r ($array);



echo "question 3 \n<br>";
$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "ascending order sort by value\n<br>";
asort($array2);
print_r ($array2);
echo " ascending order sort by Key \n<br>";
ksort($array2);
print_r($array2);
echo "descending order sorting by Value\n<br>";
arsort($array2);
print_r($array2);
echo "descending order sorting by Key \n<br>";
krsort($array2);
print_r($array2);



echo "question 4 \n<br>";
$sample=array("hello","test","hi","length","a","longest");
$len=0;
foreach($sample as $values){
if($len<strlen($values)){
    $len=strlen($values);
    $long=$values;
}
}
echo"longest element=$long \n<br>";
foreach($sample as $values){
    if($len>strlen($values)){
        $len=strlen($values);
        $short=$values;
    }
}
echo"shortest element=$short \n<br>";



echo "question5\n<br>";
echo implode("\n", range(10, 23));
echo "\n<br>";


echo "question 6\n<br>";
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo "Values are in lower case\n<br>";
foreach($Color as $keys=>$values){
    $Color[$keys]=strtolower($values);
}
print_r ($Color)."\n<br>";
echo "Values are in upper case\n<br>";
foreach ($Color as $keys=>$values){
    $Color[$keys]=strtoupper($values);
}
print_r($Color)."\n<br";



echo"question 7\n<br>";
$avg=array(  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$total=0;
foreach($avg as $marks){
    $total+=$marks;
}
$cnt=count($avg);

$avgMark=$total/$cnt;
echo "Average mark=".$avgMark."\n<br>";
?>