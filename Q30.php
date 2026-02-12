<?php
$menu=$_GET['menu'];
$arr1=array(2,3,4,5);
$arr2=array(4,5,6,7);
$arr3=array(2,3,4,5,6,7,8);

function even($arr3)
{
    if($arr3 % 2 == 0)
        {
            return 1;
        } else {
            return 0;
        }
}

switch($menu)
{
    case 1:
        echo "orignal array is :";
        print_r($arr1);
        echo "<br>";
        print_r($arr2);
        echo "<br>";
        echo "Array After Union Is:";
        $ans=array_unique(array_merge($arr1,$arr2)); //merge 2 array remove duplicates
        print_r($ans);
        echo "<br>";
        echo "array after intersection is:";
        $ans=array_intersect($arr1,$arr2); //gives only same elemnts from both array remove duplicates
        print_r($ans);
        echo "<br>";
        echo "array after difference is:";
        $ans=array_diff($arr1,$arr2); //gives only the number from arr1 which are not present in arr2 but present in arr1
        print_r($ans);
        echo "<br>";
        break;
    case 2:
        echo "even numbers in the are array are:";
        echo "<br>";
        $ans=array_filter($arr3,'even'); //return even num from array
        print_r($ans);
        echo "<br>";
        break;
    case 3:
        echo "Array Before Sort:";
        print_r($arr1);
        echo "<br>";
        print_r($arr2);
        echo "<br>";
        echo "Array After Sort:";
        array_multisort($arr1,SORT_DESC,$arr2); //sort array asc or dsc
        print_r($arr1);
        echo "<br>";
        print_r($arr2);
        break;
}
?>