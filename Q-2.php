<?php
//Write a PHP program to check Leap years between 1901 to 2016 Using nested if.
    $year=2012;
    if($year%4==0){
        if($year>=1901 && $year<=2016){
            echo "This is Leap Year";
        }else {
            echo "This is Not Leap Year";
        }
    }else{
        echo "<br>";
    }
?>