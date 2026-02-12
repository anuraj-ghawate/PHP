<?php
$menu=$_GET['menu'];
$arr1=array("anuraj","om","mangesh","pratik","abhishek","hrushikesh","anushka");
$arr2=array("a"=>"omkar","b"=>"aniket","c"=>"avadhut","d"=>"shivraj");
switch($menu)
{
    case 1: //on index array
        echo "array before sort<br>";
        print_r($arr1);
        echo "<br>";
        sort($arr1); //sort in ascending
        print("Array After Sorting");
        echo "<br>";
        print_r($arr1);
        break;
    case 2: //on associative array by value
        echo "array before sort<br>";
        print_r($arr2);
        echo "<br>";
        asort($arr2); //sort in acending by value
        print("Array After Sort In Ascending Order By value");
        echo "<br>";
        print_r($arr2);

        echo "<br>";
        arsort($arr2); //sort in decending by value
        print("Array After Sort In decending Order By value");
        echo "<br>";
        print_r($arr2);
        break;

    case 3:  //assciative array by key
        echo "array before sort<br>";
        print_r($arr2);
        echo "<br>";
        ksort($arr2); //sort in acending by key
        print("Array After Sort In Ascending Order By key");
        echo "<br>";
        print_r($arr2);

        echo "<br>";
        krsort($arr2); //sort in decending by key
        print("Array After Sort In decending Order By key");
        echo "<br>";
        print_r($arr2);
        break;
    case 4:
        echo "array before merging are:<br>";
        print_r($arr1);
        echo "<br>";
        print_r($arr2);
        echo "<br>";
        $ans=array_merge($arr1,$arr2);  //mergening two arrays
        echo "array after merging is :";
        echo "<br>";
        print_r($ans);
        break;
}

?>