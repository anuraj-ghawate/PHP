<?php
$sentence="PHP is a powerful server-side scripting language";
$result=explode(" ",$sentence); //converting string into array
$count=count($result); // counting the size of array

for($i=0;$i<$count;$i++)
    {
        echo "Word $i is :".$result[$i];
        echo "<br>";
    }
?>