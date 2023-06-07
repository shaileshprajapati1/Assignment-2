<?php
// Write a program to find whether a number is Armstrong or not Write a program to print the below format : 
// 5 9 
// 2610 
// 3711 
// 4812 
if($_POST){
    $num=$_POST['number'];
    $a=$num;
    $sum=0;
    while($a!=0){
        $rem=$a%10;
        $sum=$sum+($rem*$rem*$rem);
        $a=$a/10;
    }if($num==$sum){
        echo "Yes $num an armstrong number";
    } else{
        echo "$num is not an armstrong number ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong number </title>

</head>

<body>

    <form method="post">
        <label for="number">Enter Number</label>
        <input type="number" name="number" id="number"><br><br>
        <input type="submit" value="submit" name=submit>
    </form>

</body>

</html>