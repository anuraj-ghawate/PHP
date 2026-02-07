<?php
$a=75;
$b=30;

function CalculateSum()
{
    global $a;
    global $b;

    $sum=$a+$b;
    echo "Sum Is:".$sum;

}

    CalculateSum();
?>