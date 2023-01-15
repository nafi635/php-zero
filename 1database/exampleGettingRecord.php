<?php
$user_name = "root";
$password = "";
$database = "CEO";
$server = "localhost";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) 
{
	$SQL = "SELECT * FROM company";
	$result = mysql_query($SQL);
	while($db_fields=mysql_fetch_assoc($result))
	{
		print $db_fields['Name']."-->".$db_fields['Ceo']."<br>";
	}
	mysql_close($db_handle);
}
else
 {
	print "Database NOT Found ";
	mysql_close($db_handle);
}

?>
