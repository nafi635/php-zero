<html>
<body background="aw.jpg">
<style>
h2
{
	color:orange;
	text-align:center;
}
h3
{
	color:red;
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
</style>
<div>

<?php

if(!isset($_POST['submit']))
{

?>
<h2>Fill this form to send gmail</h2>
<strong>
<form method="post" action="Direct_email_writer.php">
Name: <br />
<input type="text" name="name" size="50" />
<p>
Address: <br />
<textarea name="address" rows="5" cols=40"></textarea>
<p>
Age: <br />
<input type="text" name="age" size="3" />
<p>
phone:<br /><input type="text" name="number" size="50">
<p>
Professional Mail<br /><input type="text" name="mail" size="50">
<p>
Background Branch:
<select name="branch" >
<option value="cse">Cse</option>
<option value="Ece">Ece</option>
<option value="Mechanical">Mech</option>
<option value="chemical">chem</option>
<option value="civil">civil</option>
<option value="Mme">Mme</option>
</select>
<br>
Achievements: <br />
<textarea name="ach" rows="5" cols=40"></textarea>
<p>
Aim :<br />
<input type="text" name="aim" size="50" />
<p>
<input type="submit" name="submit" value="Submit" />
</form>
</strong>
<?php
}
else
{
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
		echo "Hello Sir,". "<br>"."Iam $name from $address.My background branch is $branch .I would like to be $profession.My achievements are $ach.I would like to do job in your company."."Please try to send gmail to me if you have any offline drives.";
		echo "<br>"."My details :: "."<br>"."Age : $age"."<br>"."phone number : $phone"."<br>"."Professional Mail:$mail";
		echo "<br>"."<br>"."Thanks and Regards,"."<br>"."$name."."<br>";
		if(mail($to, $subject, $body, "From: $from"))
		 {
		echo 'Thank you for your application.';
		} 
		else 
		{
		echo "<br>"."<h3>Bug : Mail delivery error</h3>";
		}
}
?>		
<input type="button" name="print" value="print" onclick="window.print();">	
</div>
</body>
</html>
