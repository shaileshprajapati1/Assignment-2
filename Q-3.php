<?php
// Write a PHP program to find the largest of three numbers using ternary Operator.

$x=55;
$y=100;
$z=40;

$max=($x>$y)?($x>$z? $x:$z):($y>$z?$y:$z);
    echo "largest number".$x.",".$y.",".$z."is".$max;

?>