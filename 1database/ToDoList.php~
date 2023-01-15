<html>
<style type="text/css">
div#message {
text-align:center;
margin-left:auto;
margin-right:auto;
width:40%;
border: solid 2px green
}
</style>
<body>
<h2>Personal To-Do List</h2>
<h3>Add New Task</h3>
<?php
if (!isset($_POST['submit']))
{
?>
<form method="post" action="ToDoList.php">
Description:<br/>
<input type="text" name="name" />
<p>
Date due (dd/mm/yyyy): <br />
<input type="text" name="dd" size="2" />
<input type="text" name="mm" size="2" />
<input type="text" name="yy" size="4" />
<p>
Priority: <br />
<select name="priority">
<option name="High">High</option>
<option name="Medium">Medium</option>
<option name="Low">Low</option>
</select>
<p>
<input type="submit" name="submit" value="Save" />
</form>
<?php
} 
else 
{
	$server="localhost";
	$user_name="root";
	$password="";
	$database="Student";
	$db_handle=mysql_connect($server,$user_name,$password);
	$result=mysql_select_db($database,$db_handle);
	$name=$_POST['name'];
	$date=$_POST['dd'];
	$month=$_POST['mm'];
	$year=$_POST['yy'];
	$prior=$_POST['priority'];
	$sql="insert into ToDolist value('$name','$date','$month','$year','$prior')";
	$rs=mysql_query($sql);
	if($rs)
	{
		echo "Successfully Inserted";
	}
	else
	{
		die("Wrong inserting");
	}
}
?>
</body>
</html>
