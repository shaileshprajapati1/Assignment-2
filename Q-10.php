<?php
//Write program to remove duplicate values from array




$array = [1=>"red", 2=>"blue", 3=>"red", 4=>"yellow"];


$uniqueArray = array_unique($array);



echo "<pre>";
print_r($uniqueArray);
echo "</pre>";


$arr=array("a"=>100,"b"=>200,"c"=>250,"d"=>200,"e"=>500,"f"=>100,"g"=>100,);

$uniq= array_unique($arr);

echo "<pre>";
print_r($uniq);
echo "</pre>";




?>