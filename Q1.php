<?php
$count=10;

function IncrementCount()
{
    global $count;
    $count=$count+5;
}
    IncrementCount();
    echo"Updated Value Is:".$count;
?>