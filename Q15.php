<?php
$a=10;
$b="10";

echo "Comparing Only Value<br>";
if($a==$b) // Comparision Using ==
    {
        echo "$a==$b:TRUE<br>";
    } else 
    {
        echo "$a==$b:FALSE<br>";
    }

echo "<br>";

echo "Comparing Value And Datatype<br>";

if($a===$b) // comparing using ===
    {
        echo "$a===$b:TRUE<br>";
    }
    else
        {
            echo "$a===$b:FALSE<br>";
        }
?>