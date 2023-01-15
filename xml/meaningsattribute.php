<?php
$xml=simplexml_load_file("meanings.xml") or die("Not able to load");
foreach($xml->word as $mean)
{
	echo "Word ::: ".$mean->title."<br>";
	echo "Telugu meaning ===>".$mean->telugu."<br>";
}
?>
