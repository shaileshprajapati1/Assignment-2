<?php
// Write a program for this Pattern: 
//     ***** 
//     *
//     *
//     *
//     *****


for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
        if ($i == 1 || $i == 5) {
            echo "* ";
        }elseif ($j==1 || $j==5){
            echo "*<br>";
        }else{
            echo " ";
        }
    } 
} 
