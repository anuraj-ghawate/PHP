<?php
$str1="HelloWorld";
$str2="helloworld123";

$result=strcmp($str1,$str2); //case sensitive comparision of entire string
if($result==0)
    {
        echo "Both String Are Exactly Equal";
    } elseif($result<0)
    {
        echo "$str1 Is Less Than $str2";
    } else {
        echo "$str1 Is Greater Than $str2";
    }
    echo "<br>";

$result=strncmp($str1,$str2,5); //case sensitive comparision of first N characters
if($result==0)
    {
        echo "First 5 Characters Of Both String Are Exactly Equal";
    } elseif($result<0)
    {
        echo "First 5 Characters Of $str1 Is Less Than $str2";
    } else {
        echo "First 5 Characters Of $str1 Is Greater Than $str2";
    }
    echo "<br>";

$result=strncasecmp($str1,$str2,5);
if($result==0)
    {
        echo "First 5 Characters Of Both String Are Exactly Equal";
    } elseif($result<0)
    {
        echo "First 5 Characters Of $str1 Is Less Than $str2";
    } else {
        echo "First 5 Characters Of $str1 Is Greater Than $str2";
    }

?>