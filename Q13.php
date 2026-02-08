<?php 
include "Q13.inc";
$string=$_GET['string'];
$menu=$_GET['options'];

if($menu=='countv')
    {
        countv($string);
    } elseif($menu=='countocc')
    {
        occurrences($string);
    } else {
        palindrome($string);
    }
    ?>