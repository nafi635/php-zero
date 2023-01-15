<?php
$xml = simplexml_load_file('address.xml') or die ("Unable to load XML!");
echo "City: " . $xml->city->name . "\n";
echo "Postal code: " . $xml->city->zip . "\n";
echo "<br> count ".count($xml->city);
?>
