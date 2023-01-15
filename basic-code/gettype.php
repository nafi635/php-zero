<?php
// define string variable
$whoami = 'Sarah';
// output: 'string'
echo gettype($whoami)."<br>";
// assign new integer value to variable
$whoami = 99.8;
// output: 'double'
echo gettype($whoami)."<br>";
$new=(integer) $whoami;
echo gettype($new)."<br>";
// destroy variable
unset($whoami);
// output: 'NULL'
echo gettype($whoami)."<br>";
//check functions ....is_bool(),is_string,is_array,is_object
$numer=is_int(10);

echo $numer;
?>
