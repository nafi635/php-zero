<html>
<body style="background-color:FFFFCC">
<style>
h1
{
	color:#800000;
	text-align:center;
	
}
th, td {
    padding: 15px;
    text-align: left;
}
th
{
	background-color:CC00CC;
}
tr:nth-child(even) {background-color: #f2f2f2}
h3
{
	color:green;
}
h4
{
	color:green;
	text-align:right;
}
div
{
	margin:0px 350px;
	border-radius:5px;
	width:700px;
}
input 
{
	color:blue;
	padding:10px;
	background-color:#f9f9f9;
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
	margin:50px 50px;
	padding:30px;
	width:100px;
	height:700px;
}
input[type=submit]
{
	color:white;
	padding:14px;
	margin:0px 90px;
	
	width:160px;
	background-color:663399;
}
input[type=submit].a
{
	color:red;
	padding:10px;
	margin:-37px 270px;
	width:160px;
	background-color:663399;
	 background-image: url("google.jpeg");
}
tr:hover {background-color: FFCC66}
</style>
<h1>Total words</h1>
<?php
     $user_name="root";
     $password="rgukt123";
     $database="Dictionary";
     $server="localhost";
     $db_handle = mysql_connect($server, $user_name, $password);
     $db_found=mysql_select_db($database,$db_handle);
     if($db_found)
         {      
     		$sql="select * from studentEng";
     		$res=mysql_query($sql);
     		$num=mysql_num_rows($res);
     		echo "<h4>Count : ".$num."</h4>";
     		if(mysql_num_rows($res)>0)
     		{
     			echo "<table border='1'>";
     			echo "<tr><th>Word</th><th>English</th><th>Telugu</th><th>Others</th>";
     			while($f=mysql_fetch_assoc($res))
     			{
				echo "<tr><td>".$f['word']."</td><td>".$f['english']."</td><td>".$f['telugu']."</td><td>".$f['other']."</td></tr>";		
     			}
     			echo "</table>";
     		}
     		else
     		{
     			die("No dictionary");
     		}
     	}
     	else
		echo "DB not found";
	mysql_close($db_handle);	
?>
</body>
</html>
