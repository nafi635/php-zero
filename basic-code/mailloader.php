<html>
<head>
<script>
</script>
</head>
<style>
h2
{
	color:blue;
}
h3
{
	color:red;
}
</style>
<?php
$name = $_POST['name'];
$address = $_POST['address'];
$age = $_POST['age'];
$profession = $_POST['aim'];
$phone=$_POST['number'];
$ach=$_POST['ach'];
$mail=$_POST['mail'];
if (empty($name)) 
{
	die('ERROR: Please provide your name.');
}
if (empty($address)) 
	{
		die('ERROR: Please provide your address.');
	}
if (empty($age)) 
	{
		die('ERROR: Please provide your age');
	}
else if ($age < 18 || $age > 60) 
	{
	die('ERROR: Membership is only open to those between 18 and 60 years.');
	}
if (empty($profession))
 	{
	die('ERROR: Please provide your profession.');
	}
if (empty($ach)) 
	{
		die('ERROR: Please provide your achievements');
	}
$to = 'nafi.rockz10@gmail.com.';
$from = 'ramgoudbalusani55@gmail.com.';
$subject = 'Application for membership.';
$body = "Name: $name\r\nAddress: $address\r\n
Age: $age\r\nphone number :$phone
Achivements : $ach \r\nAim: $profession\r\n";
echo "<h2>Gmail:</h2>";
echo "<strong>To : $to"."<br>"."From : $from"."<br>"."Subject : $subject"."<br>";
echo "Hello Sir,". "<br>"."Iam $name from $address.I would like to be $profession.My achievements are $ach.I would like to do job in your company."."Please try to send gmail to me if you have any offline drives.";
echo "<br>"."My details :: "."<br>"."Age : $age"."<br>"."phone number : $phone"."<br>"."Professional Mail:$mail";
echo "<br>"."<br>"."Thanks and Regards,"."<br>"."$name."."<br>";
if(mail($to, $subject, $body, "From: $from"))
 {
echo 'Thank you for your application.';
} 
else 
{
echo "<br>"."<h3>But : Mail delivery error</h3>";
}
?>
<input type="button" name="print" value="print" onclick="window.print();">
</body>
</html>
