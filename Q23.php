<?php
$string="apple,banana,cherry,mango";
$fruits_explode=explode(",",$string); //convert string into array
print_r($fruits_explode);

echo "<br>";

$string_implode=implode(";",$fruits_explode); //convert array into string
echo "$string_implode";
?>