<?php

//Use a for loop to total the contents of an integer array called numbers which has five elements.
//Store the result in an integer called total. 

$numbers = [25,80,70,60,30,60];
$total = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $total=$total+ $numbers[$i];
}

echo "The total is: " . $total."<br>";


$num=array(30,35,40,45,60,70,80,90);
$total=0;

for ($i=0; $i < count($num) ; $i++) { 
    $total=$total+$num[$i];
}

echo "The total is".$total;
?>