<?php
$arr=array(10,20,30,40,50);
$num=$_GET['num'];

if(in_array($num,$arr)) //first parametr is num then array
    {
        echo "$num Is Present In Array";
    } else {
        echo "$num Is Not Present";
    }
?>