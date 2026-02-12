<?php
/*
strpos() is used to find position of first occurence in case sensitive manner
stripos() us ised to find position of first occrence in case insensitive manner
strrpos() is used to find position of last occurence in case sensitive manner
strripos() is used to find the position of last occu in case insensitive manner
strstr() return string from specific string we need to specify start string then it gives
            till end in case sensitive manner

stristr() same as strstr but in case insensitve
strchr() (alias of strstr) same as strstr
*/

$string="Hello,this is a simple example string.Hello again!";

$position=strpos($string,"Hello"); 
if($position!==FALSE)
    {
        echo "Element Found At Position".$position;
    } else {
        echo "Element Not Found";
    }
        echo "<br>";

$position=stripos($string,"hello");
if($position!==FALSE)
    {
        echo "Element Found At Position".$position;
    } else {
        echo "Element Not Found";
    }
        echo "<br>";

$position=strrpos($string,"Hello");
if($position!==FALSE)
    {
        echo "Element Found At Position".$position;
    } else {
        echo "Element Not Found";
    }
        echo "<br>";

$position=strripos($string,"hello");
if($position!==FALSE)
    {
        echo "Element Found At Position".$position;
    } else {
        echo "Element Not Found";
    }
        echo "<br>";

$position=strstr($string,"simple");
if($position!==FALSE)
    {
        echo "String From Given String Is:".$position;
    } else {
        echo "Element Not Found";
    }
        echo "<br>";

$position=stristr($string,"Simple");
if($position!==FALSE)
    {
        echo "String From Given String Is:".$position;
    } else {
        echo "Element Not Found";
    }
        echo "<br>";

$position=strchr($string,"example");
if($position!==FALSE)
    {
        echo "String From Given String Is:".$position;
    } else {
        echo "Element Not Found";
    }

?>