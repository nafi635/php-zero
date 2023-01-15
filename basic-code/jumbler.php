<html>
<body>
<h2>Encrypting Text</h2>
<?php
class Jumbler 
{
	public $key;
	public function setKey($key) 
	{
		$this->key = $key;
	}

	public function getKey() 
	{
		return $this->key;
	}
	public function encrypt($plain) 
		{
			for ($x=0; $x<strlen($plain); $x++) 
			{
			$cipher[] = ord($plain[$x]) + $this->getKey() + ($x * $this->getKey());
			}
		return implode('/', $cipher);
		}
	public function decrypt($cipher)
	 {
		$data = explode('/', $cipher);
		$plain = '';
		for ($x=0; $x<count($data); $x++)
		 {
			$plain .= chr($data[$x] - $this->getKey() - ($x * $this->getKey()));
		}
		return $plain;
	}
}
?>
<?php
if (!isset($_POST['submit'])) 
{
?>
<form method="post" action="jumbler.php">
Enter:
<input type="radio" name="type" value="P" checked>Plaintext</input>
<input type="radio" name="type" value="C">Ciphertext </input>
<br />
<textarea name="text" rows="6" cols="40" wrap="soft"></textarea>
<p>
Enter numeric key: <br />
<input type="text" name="key" size="6" />
<p>
<input type="submit" name="submit" value="Submit" />
</form>
<?php
} else 
{
	$type = $_POST['type'];
	$text = $_POST['text'];
	$key = (int)$_POST['key'];
	$j = new Jumbler;
	$j->setKey($key);
	if ($type == 'C')
	 {
		echo $j->decrypt($text);
	} else 
	{
		echo $j->encrypt($text);
	}
}
?>
</body>
</html>
