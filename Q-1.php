<?php
// 1 Write a PHP program to enter marks of five subjects Physics, Chemistry, 
    // Biology, Mathematics and Computer, calculate percentage and grade by if else condition
    $phy=80;
    $che=80;
    $bio=80;
    $math=70;
    $com=65;
    $total=($phy+$che+$bio+$math+$com);
    $per=$total*100/500;
     echo "The percentage is:$per";
     echo "<br>";
     if($per>=85){
        echo "A-Grade";
     }elseif($per>=70){
        echo "B-Grade";
     }elseif($per>=60){
        echo "C-Grade";
     }elseif($per>=50){
        echo "D-Grade";
     }else {
        echo"Fail";
     }
      echo "<br>";
    // write a PHP program for find "Thursday"in week using switch Function. 

    $ch="Thu";
    switch ($ch) {
        case "Mon":
            echo "Monday";
            break;
        case "Tue":
            echo "Tuesday";
            break;
        case "Wed":
            echo "Wednesday";
            break;
        case "Thu":
            echo "Thursday";
            break;
        case "Fri":
            echo "Friday";
            break;
        default:
            echo "Weekend";
            break;
    }






?>