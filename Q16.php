<?php
$string="My WORLD php";

echo "Orignal String:  $string<br>";
$lower=strtolower($string); //convert whole string in lowercase
echo "strtolower:  $lower<br>";

$upper=strtoupper($string); //convert whole string in uppercase
echo "strtoupper:  $upper<br>";

$ucf=ucfirst($string); //convert first character in uppercase
echo "ucfirst: $ucf<br>";

$lcf=lcfirst($string); //convert first character in lowercase
echo "lcfirst: $lcf<br>";

$ucw=ucwords($string); //convert first character of each word in uppercase
echo "ucwords: $ucw<br>";

?>