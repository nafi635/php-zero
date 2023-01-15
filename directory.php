<?php
$dit = new DirectoryIterator('/home/nafi/Desktop');//call Directory Iterator

//here dot means same directory in which is your file exsisted
while($dit->valid())   //how long directories long
{
	if (!$dit->isDot())    //isDot() ::filter out entries
	{
			echo $dit->getFilename() . "<br>";
	}
	$dit->next();
}
unset($dit);
?>
