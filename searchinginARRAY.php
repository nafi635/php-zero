<?php
// define array
$cities = array('London', 'Paris', 'Barcelona', 'Lisbon', 'Zurich');
echo "SIngle-->".in_array('Barcelona', $cities)."<br>";
$cities = array(
"United Kingdom" => "London",
"United States" => "Washington",
"France" => "Paris",
"India" => "Delhi"
);
echo "multi dimensional-->".array_key_exists('India', $cities);
?>
