<html>
<body background="aw3.jpg">
<style>
h2
{
	color:orange;
	
}
h3
{
	color:CCCC66;
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
	width:200px;
	height:300px;
}
</style>
<div>
<?php
if(!isset($_POST['proceed']))
{
?>
<fieldset>

<h2>phOne bOOk</h2>

<form action="phonebook.php" method="post">
<strong><i>Enter Name:</i></strong>&nbsp;<input type="text" size="15" name="name">
<br>
<strong><i>Choose :</i></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="ch">
		<option value="Number">Phone Number</option>
		<option value="email">Email</option>
		</select>
		<br>
		<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Proceed" name="proceed">
		
<?php
}
else
{
	$name=$_POST['name'];
	$ch=$_POST['ch'];
	$phonebook = array(
	array(
	'name' => 'ramgoud',
	'Number ' => '9703204911',
	'email' => 'ramgoudbalusani55@gmail.com',
	),
	array(
	'name' => 'nilesh',
	'Number' => '9652637263',
	'email' => 'b121636@gmail.com',
	),
	array(
	'name' => 'nafi',
	'Number' => '9652598983',
	'email' => 'nafi.rockz10@gmail.com',
	),
	array(
	'name' => 'srikanth',
	'Number' => '9652598983',
	'email' => 'margamsrikanth7@gmail.com',
	),
	array(
	'name' => 'vignan',
	'Number' => '9848729610',
	'email' => 'kamtamvignaneswarkrishna@gmail.com',
	),
	array(
	'name' => 'srinu merugu',
	'Number' => '7680824082',
	'email' => 'srivmerugu@gmail.com',
	)
	);
	$counter=0;
	for($i=0;$i<count($phonebook);$i++)
	{
		if(!strcmp($phonebook[$i]['name'],$name))
		{
			$index=$i;
			$kn=$phonebook[$index][$ch];
			echo "<fieldset><h3><i>$name's $ch is $kn</i> </h3></fieldset>";
			break;
		}
		else
		{
			$counter++;
			continue;
		}
	}
	if($counter==count($phonebook))
	{
		echo "<fieldset><i><h2>Not Found</h2></i></fieldset>";
	}
}
?>	
</fieldset>
</div>
<body>
</html>
