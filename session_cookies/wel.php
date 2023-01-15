<?php
session_start();
$_SESSION["name"]=$_POST['name'];
$_SESSION["age"]=$_POST['age'];
echo "hai".$_SESSION["name"];
echo "<a href='logout.php'>click</a>";
?>
