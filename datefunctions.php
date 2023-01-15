<?php
/*

*/
$str = 'July 7 2008';
echo date('d M y', strtotime($str))."<br>";
echo date('d M y', strtotime('today'))."<br>";
echo date('d M y', strtotime('tomorrow'))."<br>";
echo date('d M y', strtotime('next Friday'))."<br>";
echo date('d M y', strtotime('48 hours ago'))."<br>";
echo date('d My',strtotime("next Saturday"));
?>
