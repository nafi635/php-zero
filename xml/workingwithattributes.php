<?php
// load XML file
$xml = simplexml_load_file('library.xml') or die ("Unable to load XML!");
// access XML data
// for each book
// retrieve and print 'genre' and 'rating' attributes
// output: 'The Shining \n Genre: horror \n Rating: 5 \n\n ...'
foreach ($xml->book as $book) 
{
	if($book->title=='hai')
	{
		echo $book->author;
	}
}
?>
