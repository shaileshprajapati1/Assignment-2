<?php

//  Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,34

  $x=1;
  $y=0;
   echo "Fibonacci series:";
for($i=0;$i<10;$i++){
    echo "$y,";
    $sum=$x+$y;
    $x=$y;
    $y=$sum;
}

?>