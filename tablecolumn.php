<html>
<body>
<style>
table
{
	text-align:center;
	background-color:bisque;
}
h2
{
	text-align:center;
	color:blue;
}
form
{
	text-align:center;
	color:red;
}
</style>
<?php
if(!isset($_GET['show']))
{
?>
<form align="center" action="tablecolumn.php" method="get">
<h2>Enter rows and columns to check the places</h2>
</br>
Row<input type="text" size="3" name="row">
Column<input type="text" size="3" name="column">
<input type="submit" name="show" value="show">
<?php
}
else
{
	$ro=$_GET['row'];
	$colu=$_GET['column'];
	echo "<table border=\"1\"  >";
	for ($row=1; $row<=$ro; $row++) 
	{
		echo "<tr>";
		for ($col=1; $col<=$colu; $col++)
		 {
		echo "<td>R $row, C $col</td>";
		}
		echo "</tr>";
	}
echo "</table>";
}
?>
</body>
</html>
