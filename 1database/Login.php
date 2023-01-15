<html>
<style>
body
{
	background-color:#F5F5DC;
}
h2
{
	color:CC0066;
	margin:10px 100px;
	
}
h3
{
	color:CCCC66;
	text-align:center;
	margin:150px 350px;
}
div
{
	margin:150px 440px;
	background-color:#C0C0C0;
	border-radius:10px;
	width:500px;
}
input[type=text],[type=password] 
{
	color:green;
	margin:0px 100px;
	padding:10px;
	width:300px;
	background-color:#f9f9f9;
}
a
{
	text-decoration:none;
	margin: 10px 550px;
}
input[type=submit]
{
	color:000066;
	
	padding:14px;
	margin:0px 90px;
	width:160px;
	background-color:006666;
}
label
{
	margin:0px 100px;
	color:#780000 ;
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
marquee
{
	color:
}
</style>
<body>
<div>
<?php
if(!isset($_POST['login']))
{
?>
<h2>LogIn</h2>
<form name ="f1" action="Login.php" method="post">
<label>Username :<br><input type="text" size="40" name="username">
<p>
<label>Password :<br><input type="password" size="40" name="pwd">
<p>
<input type="submit" value="login" name="login">
<?php
}
else
{
	$name=$_POST['username'];
	$pwd=$_POST['pwd'];
	$user_name = "root";
	$password = "";
	$database = "Student";
	$server = "localhost";
	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database,$db_handle);
	if ($db_found) 
	{
			$SQL = "select username,password from Details where username='$name' and password='$pwd'";		
			$result= mysql_query($SQL);
			if(mysql_num_rows($result)>0)
			{
				echo "<marquee>Succefully Login</marquee>"."<br>"."<label>Your Data is <label>";
				$sql1="Select * from Details where username='$name'";
				$result1=mysql_query($sql1);
				while ( $field = mysql_fetch_assoc($result1) )
				 {
					echo "<table border='1'>";
					echo "<tr><td>FirstName</td><td>".$field['firstname']."</td></tr>";
					echo "<td>td>LastName</td><td>".$field['lastname']."</td></tr>";
					echo "<td>td>Email Id</td><td>".$field['email']."</td></tr>";
					echo "<td>td>Phone Number</td><td>".$field['phone']."</td></tr>";
					echo "</table>";
					
					
				}
?>
			
<?php				
			}
			else
			{
				die("Not exists your account...Try to Register");
			}
			mysql_close($db_handle);
	}
	else 
	{
		print "Database NOT Found ";
		mysql_close($db_handle);

	}
}
?>
</div>
</body>
</html>
