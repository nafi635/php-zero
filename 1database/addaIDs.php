<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Adding Ids to database</title>
<style type="text/css">
div#message 
{
	text-align:center;
	margin-left:auto;
	margin-right:auto;
	width:500px;
	height:30px;
	border: solid 2px green
}
</style>
<h3>Add Your Id's</h3>
<?php
if (isset($_POST['submit'])) 
{
	$mysqli = new mysqli("localhost", "root", "", "student");
	if ($mysqli === false) 
			die("ERROR: Could not connect to database. " . mysqli_connect_error());
	echo '<div id="message">';
	$inputError = false;
	if (trim($_POST['stdid'])=='') 
	{
		echo 'ERROR: Please enter a valid Student Id';
		$inputError = true;
	} 
	else
	 {
		$id = $mysqli->escape_string($_POST['stdid']);
	}
	if ($inputError!= true && empty($_POST['stdname'])) 
	{
		echo 'ERROR: Please enter a valid Student Name';
		$inputError = true;
	} 
	else
	 {
		$name = $mysqli->escape_string($_POST['stdname']);
	}
if ($inputError != true) 
	{
		$sql = "INSERT INTO Student (Id, Name) VALUES ('$id', '$name')";
		if ($mysqli->query($sql) == true) 
		{
				echo 'New student record added with ID: ' . $mysqli->insert_id;
		} else
		 {
				echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
		}
	}
echo '</div>';
$mysqli->close();
}
?>
</div>
<form action="addaIDs.php" method="post">
Student Id<br />
<input type="text" name="stdid" size="40" />
<p/>
Student Name<br />
<input type="text" name="stdname" size="40" />
<p/>
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>
