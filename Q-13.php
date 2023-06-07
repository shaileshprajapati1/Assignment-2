<?php

//Declare a Multi Dimensioned array of floats called balances having Three rows and five columns.

$balance=array(
    array(10.5,10.6,10.7,10.8,10.9),
    array(12.5,12.6,12.7,12.8,12.9),
    array(15.5,15.6,15.7,15.8,15.9));

    // balance array access [2]index row and [3]index in column and index start with [0]..
    echo "multidimensional array row[2] index and column[3] index value is:";
    print_r($balance[2][3]);
    echo "<br>";
    echo "multidimensional array row[0] index and column[0] index value is:";
    print_r($balance[0][0]);
    echo "<br>";




?>