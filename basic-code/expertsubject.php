<html>
<body>
<?php
if(!isset($_POST['submit']))
{
?>
<h2>Selectors array</h2>
<form method="post" action="expertsubject.php">
Select if u are expert in that <br />
<input type="checkbox" name="toppings[]" value="c">C</input>
<input type="checkbox" name="toppings[]" value="c++">c++</input>
<input type="checkbox" name="toppings[]" value="java">Java</input>
<input type="checkbox" name="toppings[]" value="android">android</input>
<input type="checkbox" name="toppings[]" value="html">html</input>
<input type="checkbox" name="toppings[]" value="css">css</input>
<input type="checkbox" name="toppings[]" value="javascript">javascript</input>
<input type="checkbox" name="toppings[]" value="php">php</input>
<input type="checkbox" name="toppings[]" value="python">python</input>
<input type="checkbox" name="toppings[]" value="boostrap">boostrap</input>
<input type="checkbox" name="toppings[]" value="sql">sql</input>
<p>
<input type="submit" name="submit" value="Submit" />
</form>
<ul>
<?php
}
else
{
	echo "<h2>You Expert in</h2>";
	echo "<table border=\"1\">";
	foreach ($_POST['toppings'] as $t) 
	{
		echo "<li>$t</li> \r\n";
	}
	echo "</table>";
}
?>
<ul>
</body>
</html>
