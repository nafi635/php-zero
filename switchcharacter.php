<html>
<body>
<?php
if(!isset($_POST['check']))
	{
?>
	<form action="switchcharacter.php" method="post">
	Enter Ur Name<input type="text" size="10" name="name">
				<input  type="submit" value="check" name="check">
	</form>
<?php
	}
	else
	{
		$name=$_POST['name'];
		switch($name)
		{
			case 'ramu':
					echo "$name is a  sycho";
					break;
			case 'vignan':
					echo "$name is a bugga";
					break;
			case 'nilesh':
					echo "$name is a thindibothu";
					break;
			case 'margam':
					echo "$name is a bokka gaadu";
					break;
			case 'yashwanth':
					echo "$name is good person";
					break;
			case 'nafi':
					echo "Such a wonderful person i have ever seen";
					break;
			default:									
					echo "$name is a good boy";
		}			
	}
?>	
</body>
</html>
