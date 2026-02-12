<?php
$string1=$_GET['str1'];
$string2=$_GET['str2'];
$option=$_GET['option'];

switch($option)
{
    case 1:
        if($string1==$string2)
            {
                echo "Both Strings Are Equal";
            } else {
                echo "Both Are Not Equal";
            }
            break;
    case 2:
        if(strcmp($string1,$string2)==0)
            {
            echo "Both Strings Are Equal";
            } else {
                echo "Both Are Not Equal";
            }
            break;
    case 3:
        echo "Concatenated Strings Are: ".$string1.$string2;
        break;
    case 4:
        $result=strrev($string1);
        echo "reversed String is: ".$result;
        break;

}
?>