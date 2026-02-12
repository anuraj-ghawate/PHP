<?php
$fruits=["Apple","Banana","Mango","Orange"];
echo "Orignal Array:";
print_r($fruits);
echo "<br>";
$fruits=implode(",",$fruits);
echo "Available Fruits: ".$fruits;
?>