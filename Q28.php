<?php   //this prgram contains ans of que 28 and 29
$element=$_GET['ele']; 
$operation=$_GET['operation'];
$stk=array(1,2,3,4,5,6);
$que=array(11,12,13,14,15);
switch($operation)
{
    case 1:
        echo "Inserting Element Into Stack";
        array_push($stk,$element);
        echo "<br>";
        print_r($stk);
        break;
    case 2:
        echo "deleting Element from Stack";
        array_pop($stk);
        echo "<br>";
        print_r($stk);
        break;
    case 3:
        echo "Display elements of stack";
        print_r($stk);
        break;
    case 4:
        echo "Inserting Element Into Queue";
        array_unshift($que,$element);
        echo "<br>";
        print_r($que);
        break;
    case 5:
        echo "deleting Element from Queue";
        array_shift($que);
        echo "<br>";
        print_r($que);
        break;
    case 6:
        echo "Display elements of que";
        print_r($que);
        break;
}

?>