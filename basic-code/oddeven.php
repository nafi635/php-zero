<html>
<style>
h2,form
{
	text-align:center;
	color:red;
}
</style>
<head>
</head>
<body>
<h2>Odd/Even Number Tester</h2>
<?php
if (!isset($_POST['submit']))                //it means when form is not submitted only it will be execuete when submitted it will go to else
 {
?>
<form method="post" action="oddeven.php">
Enter value: <br />
<input type="text" name="num" size="3" />
<p>
<input type="submit" name="submit" value="Submit" />
</form>
<?php
} 
else {
$num = $_POST['num'];
if (($num % 2) == 0) {
echo 'You entered ' . $num . ', which is an even number.';
} else {
echo 'You entered ' . $num . ', which is an odd number.';
}
}
?>
</body>
</html>
