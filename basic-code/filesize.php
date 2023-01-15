<?php
if (file_exists('data.txt')) 
{
	echo 'File is ' . filesize('data.txt') . ' bytes.';
} else 
{
	echo 'Named file does not exist. ';
}
?>
