<html>
<?php
if(!isset($_POST['submit']))
{
?>
<h2>Send a post with your details</h2>
<form method="post" action="contactform.php">
<p>Enter your name :<input type="text" name="name">
<br>
Number : <input type="text" name="num">
<br>
Email : <input type="text" name="email">
<br>
Any comments to post:<br><textarea rows="3" cols="40" name="comments"></textarea>
<br>
<input type="submit" name="submit" value="Sumbit Details">
</form>
<?php
}
else
{
	$name=$_POST['name'];
	$num=$_POST['num'];
	$mail=$_POST['email'];
	$com=$_POST['comments'];
	echo "Your Details and comments :: <br><br>name :".$name."<br>";
	echo "Number :".$num."<br>"."Email :".$mail."<br>"."Comments :"."$com"."<br>";
}
#iam not adding any styles to this
?>
</html>
