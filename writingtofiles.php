<?php
$data = "A fish \n out of \n water\n";
file_put_contents('output.txt', $data) or die('ERROR: Cannot write file');
echo 'Data written to file';
$data = "A fish \n out of \n water\n";
file_put_contents('output.txt', $data, FILE_APPEND) or die('ERROR: Cannot write file');   //the data content already exsisted so..u can use FILE_APPEND
echo 'Data written to file';

