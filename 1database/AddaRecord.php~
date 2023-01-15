<?php
$user_name = "root";
$password = "";
$database = "CEO";
$server = "localhost";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) 
{
	$SQL = "insert into login (username,password)values('nafi','admin')";
	$result = mysql_query($SQL);
	mysql_close($db_handle);
	print "Record added";
}
else
 {
	print "Database NOT Found ";
	mysql_close($db_handle);
}

?>
