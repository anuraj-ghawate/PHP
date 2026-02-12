<?php

$a=$_GET['txt1'];

$b=$_GET['txt2'];

$c=$_GET['txt3'];

$d=$_GET['txt4'];

$code=explode(";",$a);

$name=explode(";",$b);

$unit=explode(";",$c);

$rate=explode(";",$d);

$total=0;


echo "<table border=1><caption>Bill</caption>

<tr>

<th>Item No</th>

<th>Name</th>

<th>Unit</th>

<th>Rate</th>

<th>Total</th>

</tr>";


for($i=0; $i<count($code); $i++)

{

echo "<tr>

<td>$code[$i]</td>

<td>$name[$i]</td>

<td>$unit[$i]</td>

<td>$rate[$i]</td>";


$amt=$rate[$i]*$unit[$i];

echo "<td>$amt</td></tr>";


$total=$total+$amt;

}


echo "<tr><td colspan=4>Grand Total</td>

<td>$total</td></tr></table>";

?>