<?php
/*
two ways...file(),file_get_contents();...file means it reads into array but another not
*/
$content=file_get_contents('php.txt') or die("Error:Not found Bhayya");   //single quotes and .....file_get_contents not content
echo $content;
$read=file('php.txt') or die("Not found bhayya");
foreach($read as $r)
{
	echo $r;
}
// reading remote means site files
$arr = file('http://www.google.co.in') or die('ERROR: Cannot find file');
foreach ($arr as $line)
 {
	echo $line;
}
// read file into array (chunks) means like parts
$str = '';
$fp = fopen('http://www.google.com', 'r') or die('ERROR:Cannot open file');  //remote r=read,w=write,a=append
while (!feof($fp)) 
	{
		$str.= fgets($fp,512); //512 is bytes
	}
	fclose($fp);
	echo $str;
?>
