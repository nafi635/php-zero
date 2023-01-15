<html>
<body>
<h2>Enter a year</h1>
<?php
if(!isset($_POST['find']))
{
?>
<form action="leapyear.php" method="post">
Enter year<input type="text" name="year" size="8">
<input type="submit" value="find" name="find">
</form>
<?php
}
else
{
	$year = $_POST['year'];
	if (($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))) 
		{
			echo "$year is a leap year.";
		} 
	else {
		echo "$year is not a leap year.";
		}
}		
?>
</body>
</html>
