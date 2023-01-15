
<?php
/*
sort    :: single array
asort   ::multi arrays sorted by key 
ksort	:: according to key values
Reverse sort:
rsort	
arsort
krsort
*/
// define array
$data = array(15,81,14,74,2);

sort($data);
echo "single";
print_r($data);
echo "<br>";
$profile = array(
"fname" => "Susan",
"lname" => "Doe",
"sex" => "female",
"sector" => "Asset Management"
);
asort($profile);      
print_r($profile);
?>
?>
