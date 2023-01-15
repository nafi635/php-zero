<html>
<body>
<table border='1'>
<?php
//simple way..open directory..read into file..close it
$home="home";
$nafi="nafi";
$desktop="Desktop";
$dire="/$home/$nafi/$desktop";
$dp = opendir($dire) or die ('ERROR: Cannot open directory');
while ($file = readdir($dp)) 
{
	if ($file!= '.' && $file != '..') 
	{
		echo "<tr><td>$file</td></tr>";
	}
}
closedir($dp);
?>
</table>
</body>
</html>
