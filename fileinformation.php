<?php
if (file_exists('data.txt')) 
{
	$file=pathinfo('data.txt');
	foreach($file as $key=>$value)
	{
		echo $value."<br>";
	}
} 
else 
{
	echo 'Named file does not exist. ';
}
?>
