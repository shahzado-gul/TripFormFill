<?php
$str = "shahzado gul";
echo $str;

$lenn = strlen($str);
echo "<br> the length of this string is: ". $lenn;
echo "<br> This will count word in string: " . str_word_count($str);
echo "<br> this is reverse string: ". strrev($str);
echo "<br> the postion of this string is: ". strpos($str, "g");
echo "<br>this will replace the word in string: ". str_replace("g","gg",$str);


?>