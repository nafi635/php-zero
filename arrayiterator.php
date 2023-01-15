<?php
// define array
$cities = array(
"United Kingdom" => "London",
"United States" => "Washington",    //rewind........valid...........current.........next
"France" => "Paris",
"India" => "Delhi"
);
// create an ArrayIterator object
$iterator = new ArrayIterator($cities);
// rewind to beginning of array
$iterator->rewind();
while($iterator->valid())    //if next element is valid only it will enter
{
print $iterator->current() ."is in".$iterator->key().". \r\n";
$iterator->next();
}
?>
