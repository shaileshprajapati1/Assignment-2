<?php

//How can you declare the array (all type) in PHP? Explain with example Covert a JSON string to array.

// Using array() function
$array1 = array("apple", 123, 3.14, true);

echo "<pre>";
print_r($array1)."<br>";
echo "</pre>";

// Using shorthand [] syntax 
$array2 = ["banana", 456, 2.71, false];

echo "<pre>";
print_r($array2)."<br>";
echo "</pre>";

// index array satrt index [0] to incresed [1].

$array3 =array(10,20,30,40,50,80);

echo "<pre>";
print_r($array3)."<br>";
echo "</pre>";

//associate array key and pair value

$array4=array("x"=>"red","y"=> "yellow",1=>"green",2=>"white");

echo "<pre>";
print_r($array4)."<br>";
echo "</pre>";

// multidimensional array  [[[[]]]]

$array5=array("school"=> array("10th"=> array("shailesh"=>array("maths"=>60,"guj"=>65,"eng"=>70,"science"=>65),"pradeep"=>array("maths"=>70,"guj"=>80,"eng"=>75,"science"=>85))));

echo "<pre>";
print_r($array5)."<br>";
echo "</pre>";

echo "<pre>";
print_r($array5["school"]["10th"]["pradeep"]["eng"])."<br>";
echo "</pre>";

// json string convert to array
$jsonString = '{"name":"shailesh","age":30,"isStudent":true}';

// Convert JSON string to array by json_decode
$array = json_decode($jsonString,true);



echo "<pre>";
var_dump($array);
echo "<br>";
print_r($array);
echo "</pre>";

// array convert to jason string by json_encode

$arry=array("school"=> array("10th"=> array("shailesh"=>array("maths"=>60,"guj"=>65,"eng"=>70,"science"=>65),"pradeep"=>array("maths"=>70,"guj"=>80,"eng"=>75,"science"=>85))));

$string= json_encode($arry);

echo "<pre>";
var_dump($string);
echo "<br>";
print_r($string);
echo "</pre>";
?>
