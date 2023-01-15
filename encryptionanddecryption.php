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
}
?>
