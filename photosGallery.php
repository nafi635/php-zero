<html>
<style type="text/css">
ul {
	list-style-type: none;
}
li {
float: left;
padding: 10px;
margin: 10px;
font: bold 10px Verdana, sans-serif;
}
img 
{
display: block;
border: 1px solid #333300;
margin-bottom: 5px;
}
</style>
<body>
<h2>Image Gallery</h2>
<ul>
<?php
$photosDir = '/home/nafi/Pictures';
$photosExt = array('gif', 'jpg', 'jpeg', 'tif', 'tiff', 'bmp', 'png');
$photosList = array();
if (file_exists($photosDir))
{
	$dp = opendir($photosDir) or die ('ERROR: Cannot open directory');
	while ($file = readdir($dp))
	 {
		if ($file != '.' && $file != '..') 
		{
		$fileData = pathinfo($file);
		if (in_array($fileData['extension'], $photosExt)) 
			{
				$photosList[] = "$photosDir/$file";
			}
		}
	}
	closedir($dp);
} 
else 
{
	die ('ERROR: Directory does not exist.');
}
if (count($photosList) > 0)
 {
	for ($x=0; $x<count($photosList); $x++) 
	{
?>
<li>
<img height="150" width="200"src="<?php echo $photosList[$x]; ?>" />
<?php echo basename($photosList[$x]); ?><br/>
<?php echo round(filesize($photosList[$x])/1024) . ' KB'; ?>
</li>
<?php
}
} else
 {
	die('ERROR: No images found in directory');
}
?>
</ul>
</body>
</html>
