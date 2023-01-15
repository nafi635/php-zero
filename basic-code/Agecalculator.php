<html">
<body background="aw2.jpg">
<style>
h2
{
	color:orange;
	
}
h3
{
	color:CCCC66;
}
strong
{
	color:CCFF33;
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
	width:300px;
	height:350px;
}
i
{
	color:9966FF;
}

</style>
<div>


<?php
if (!isset($_POST['submit'])) {
?>
<fieldset>
<h2>Age Calculator</h2>
<form method="post" action="Agecalculator.php">
<strong>Enter your date of birth, in mm/dd/yyyy format: </strong><br />
<input type="text" name="dob" />
<p>
<input type="submit" name="submit" value="Submit" />
</form>
<?php
} 
else
	 {
	$dateArr = explode('/', $_POST['dob']);
	$dateTs = strtotime($_POST['dob']);
	$now = strtotime('today');
	if (sizeof($dateArr) != 3) 
	{
		die('<fieldset><i>ERROR: Please enter a valid date of birth</i></fieldset>');
	}
	if (!checkdate($dateArr[0], $dateArr[1], $dateArr[2]))
	 {
		die('<fieldset><i>ERROR: Please enter a valid date of birth</i></fieldset>');
	}
	if ($dateTs >= $now)
	 {
		die('<fieldset>ERROR: Please enter a date of birth earlier than today</i></fieldset>');
	}
	$ageDays = floor(($now - $dateTs) / 86400);
	$ageYears = floor($ageDays / 365);
	$ageMonths = floor(($ageDays - ($ageYears * 365)) / 30);
	echo "<fieldset><i>You are approximately $ageYears years and $ageMonths months old.<i></fieldset>";
	}
?>
</fieldset>
</div>
</body>
</html>
