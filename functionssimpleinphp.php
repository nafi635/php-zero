<?php
function calcAverage() 
{
	$args = func_get_args();     //inbuilt functions
	$count = func_num_args();
	$sum = array_sum($args);
	$avg = $sum / $count;
	return $avg;
}
echo calcAverage(3,6,9);
echo calcAverage(100,200,100,300,50,150,250,50);
?>
