<?php
$string="CodeGpt";
$result=strrev($string);
echo "Reversed String Is: ".$result;
echo "<br>";

$result=str_repeat($string,3);
echo "Repeated String Is: ".$result;

echo "<br>";

$result=str_pad($string,10,"*",STR_PAD_LEFT);
echo "Padded String From Left Side IS: ".$result;
echo "<br>";

$result=str_pad($string,10,"$",STR_PAD_RIGHT);
echo "Padded String From Right Side IS: ".$result;
echo "<br>";

$result=str_pad($string,10,"#",STR_PAD_BOTH);
echo "Padded String From Both Side IS: ".$result;


?>