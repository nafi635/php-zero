<?php
$variable = "name";
$literally = 'My $variable will not print!\\n';
print($literally);
$literally = "My $variable will print!\\n";//double quotes makes diffrence
//variable value will print if the string in double quotes when variable exsists
print($literally);
?>
