<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//variable in php

$variable1= 20;
$variable2 = 30;

$sum = $variable1 + $variable2;

echo "this is addition of two variables $sum";

// these are the operators in php
//arthametic operators
// +,-,*,/,%
echo "<br>";
echo $variable1 + $variable2;

//this is assginment operator
$newvar  = $variable1;
$newvar += 10;
echo "<br>";
echo $newvar;

//comparison operator
// ==, ===, !=, <>, !==, >, <, >=, <=
echo "the value of 1==2 is ";
var_dump(1==2);

echo "<br>";
echo "the value of 1===2 is ";
var_dump(1===2);

echo "<br>";
echo "the value of 1!==2 is ";
var_dump(1!==2);

echo "<br>";
echo "the value of 1!=2 is ";
var_dump(1!=2);

echo "<br>";

$variable3 = "shahzado gul";
var_dump($variable3);


echo "<br>";

#increment and decrement operator
$variable4 = 10;
echo $variable4++;
// echo $variable4--;
// echo --$variable4;
// echo ++$variable4;
echo "<br>";
echo $variable4;

#logical operator
// and(&&), or(||), xor, !

// echo "<br>";
// $variable5 = (true and true);
// var_dump($variable5);
// echo "<br>";
// $variable6 = (true or false);
// var_dump($variable6);
echo "<br>";

$variable7 = (false xor true);
var_dump($variable7);
echo "<br>";


$variable8 = !(false and false);
var_dump($variable8);

#datatypes in php
// string
// integer
// float
// boolean
// array
// object
// nullability
// null
// resource 
#what is string
$var1= "shahzado gul";
var_dump($var1);
?>


</body>
</html>