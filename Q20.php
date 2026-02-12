<?php
$string=$_GET['string'];
$substring=$_GET['substring'];
$menu=$_GET['option'];

switch($menu)
{
    case 1:
        $result=stripos($string,$substring);
        echo "First Ocuurence Found At:".$result;
        echo "<br>";

        $result=strripos($string,$substring);
        echo "Last Ocuurence Found At:".$result;
        break;
    
    case 2:
        $result=substr_count($string,$substring);
        echo "Substring Found $result Times In Orgnal String";
        break;
    
    case 3:
        $result=substr_replace($string,$substring,6);
        echo "Replaced Substring Is:$result";
        break;
      
}
?>