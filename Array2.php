<?php 

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

asort($temperatures);
$average = array_sum($temperatures)/count($temperatures);

	echo "Average Temperature is:" . " " . $average;
	echo "<br>";
	echo "<br>";
	echo "List of seven lowest temperatures:" . $first = current($temperatures) . ",". 
	$second = next($temperatures) . ",".  $third = next($temperatures).",".  $fourth = next($temperatures) . ",".  $fifth = next($temperatures);
	echo "<br>";
	echo "<br>";
	echo "List of seven highest temperatures:" . $final = end($temperatures) . ",".  $final2 = prev($temperatures) . ",".  $final3 = prev($temperatures) . ",".  $final4 = prev($temperatures) . ",". $final5 = prev($temperatures);
 ?>