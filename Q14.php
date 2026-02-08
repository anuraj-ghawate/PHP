<?php
$num1=$_GET['int1'];
$num2=$_GET['int2'];
$operation=$_GET['operation'];

function add($num1,$num2)
{
    return $num1+$num2;
}

function sub($num1,$num2)
{
    return $num1-$num2;
}

function multi($num1,$num2)
{
    return $num1*$num2;
}

function div($num1,$num2)
{
    return $num1/$num2;
}

if($operation=='add')
    {
        echo"Addition Is:".add($num1,$num2);
    }
    elseif($operation=='sub')
        {
            echo "Substraction Is:".sub($num1,$num2);
        }
    elseif($operation=='multi')
        {
            echo "Multiplication Is:".multi($num1,$num2);
        }
    elseif($operation=='div')
        {
            echo "Division Is:".div($num1,$num2);
        }
    
?>