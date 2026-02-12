<?php
$string="The quick brown fox jumps over the lazy dog";
echo "Orignal string Is:".$string;

echo "<br>";

$result=substr($string,4,16); // used to give some part of string req start & end
echo "Extracted Substring Using substr is:".$result;

echo "<br>";

$result=substr_count(strtolower($string),"the"); //count substring in given string case insensitive
echo "The substring THE occured in given string $result times";

echo "<br>";

$result=substr_replace($string,"active",-8,-4);
echo "Replaces Substrin is:".$result;
?>