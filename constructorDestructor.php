<?php
class machine
{
	function _construct()
	{
		echo "hurray..machine is starting";
	}
	function _destruct()
	{
		echo "OMG..destructing";
	}
$m = new machine();
unset($m);
}
?>
