<html>
<body>
<style>
body
{
	background-color:#F5F5DC;
}
h2
{
	color:orange;
	
}
h3
{
	color:CCCC66;
	text-align:center;
	margin:150px 350px;
}
div
{
	margin:0px 350px;
	border-radius:5px;
	width:700px;
}
input 
{
	color:green;
	padding:10px;
	background-color:#f9f9f9;
}
a
{
	text-decoration:none;
	margin: 10px 550px;
}
textarea
{
	background-color:#f9f9f9;
}
input:hover
{
	background-color:Gainsboro;
}
textarea:hover
{
	background-color:Gainsboro;
}
select
{
	background-color:99CCFF;
	padding:8px 15px ;
}
option
{
	padding:8px 15px ;
}
fieldset
{
	margin:100px 170px;
	padding:50px;
	width:200px;
	height:300px;
}
</style>
<?php
$config="data.txt";
if(!isset($_POST['Save']))
{
	$data=array();
        $data['Name']=null;	
	$data['Address']=null;
	$data['Phone']=null;
	$data['RguktId']=null;
	$data['Branch']=null;
	$data['Aim']=null;
	$data['Achievements']=null;
	$data['Email']=null;
	$data['FacebookId']=null;	
	if (file_exists($config)) 
	{
		$lines = file($config);
		foreach ($lines as $line)
		 {
			$arr = explode('=', $line);
			$i = count($arr) - 1;
			$data[$arr[0]] = $arr[$i];
		}
	}
?>
<div>
<form method="post" action="DataWriter.php">
<h2>Save Your Details into Textfile</h2>
Name:<br />
<input type="text" size="30" name="data[Name]" value="<?php echo $data['Name']; ?>"/>
<p>
Address:<br/>
<textarea rows="5" cols=40" name="data[Address]" value="<?php echo$data['Address']; ?>"/></textarea>
<p>
Phone Number:<br />
<input type="text" size="13" name="data[Phone]" value="<?php echo$data['Phone']; ?>"/>
<p>
Rgukt Id:<br />
<input type="text" size="10" name="data[RguktId]" value="<?php echo$data['RguktId']; ?>"/>
<p>
Branch:<br />
<input type="text" size="50" name="data[Branch]" value="<?php echo$data['Branch']; ?>"/>
<p>
Aim:<br />
<input type="text" size="30" name="data[Aim]" value="<?php echo$data['Aim']; ?>"/>
<p>
Achievements:<br />
<textarea rows="5" cols=40" name="data[Achievements]" value="<?php echo$data['Achievements']; ?>"/></textarea>
<p>
Email :<br />
<input type="text" size="30" name="data[Email]" value="<?php echo$data['Email']; ?>"/>
<p>
Facebook Id:<br />
<input type="text" size="30" name="data[FacebookId]" value="<?php echo$data['FacebookId']; ?>"/>
<p>
<input type="submit" name="Save" value="Save"/>
</form>
<?php
} 
else 
{	
	$configure = $_POST['data'];
	$fp = fopen($config, 'w+') or die('ERROR: Cannot open configurationfile for writing');
	flock($fp, LOCK_EX) or die('ERROR: Cannot lock configuration file for writing');
	foreach ($configure as $key => $value)
	 {
		if (trim($value) != '') 
		{
			fwrite($fp,"$key=$value\n") or die('ERROR: Cannot write [$key] toconfiguration file');
		}
	}
	flock($fp, LOCK_UN) or die ('ERROR: Cannot unlock file');
	fclose($fp);
	echo '<h3>Your data successfully written to file.</h3>';
	?>
	<label><a href="file:///opt/lampp/htdocs/php/data.txt">Do you wanna Text file</a></label>	
<?php
}
?>
</div>
</body>
</html>
