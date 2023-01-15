<html>
<body>
<h2> Reading And Writing Configuration Files</h2>
<?php
$configFile = 'configurations.txt';
if (!isset($_POST['submit'])) 
{
	$data = array();
	$data['AdminEmailAddress'] = null;
	$data['DefAuthor'] = null;
	$data['NumPosts'] = null;
	$data['NumComments'] = null;
	$data['NotifyURL'] = null;
	if (file_exists($configFile)) 
	{
		$lines = file($configFile);
		foreach ($lines as $line)
		 {
			$arr = explode('=', $line);
			$i = count($arr) - 1;
			$data[$arr[0]] = $arr[$i];
		}
	}
?>
<form method="post" action="writingconfigurations.php">
Administrator email address:<br />
<input type="text" size="50" name="data[AdminEmailAddress]" value="<?php echo $data['AdminEmailAddress']; ?>"/>
<p>
Default author name: <br/>
<input type="text" name="data[DefAuthor]" value="<?php echo$data['DefAutho']; ?>"/>
<p>
Number of posts on index page: <br />
<input type="text" size="4" name="data[NumPosts]" value="<?php echo$data['NumPosts']; ?>"/>
<p>
Number of anonymous comments: <br />
<input type="text" size="4" name="data[NumComments]" value="<?php echo$data['NumComments']; ?>"/>
<p>
URL for automatic notification of new posts: <br />
<input type="text" size="50" name="data[NotifyURL]" value="<?php echo$data['NotifyURL']; ?>"/>
<p>
<input type="submit" name="submit" value="Submit" />
</form>
<?php
} else 
{	
	$config = $_POST['data'];
	if ((trim($config['NumPosts']) != '' && (int)$config['NumPosts'] <= 0) ||(trim($config['NumComments']) != '' && (int)$config['NumComments'] <= 0)) 
	{
		die('ERROR: Please enter a valid number');
	}
	$fp = fopen($configFile, 'w+') or die('ERROR: Cannot open configurationfile for writing');
	flock($fp, LOCK_EX) or die('ERROR: Cannot lock configuration file forwriting');
	foreach ($config as $key => $value)
	 {
		if (trim($value) != '') 
		{
			fwrite($fp, "$key=$value\n") or die('ERROR: Cannot write [$key] toconfiguration file');
		}
	}
	flock($fp, LOCK_UN) or die ('ERROR: Cannot unlock file');
	fclose($fp);
	echo 'Configuration data successfully written to file.';
}
?>
</body>
</html>
