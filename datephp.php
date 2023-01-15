<?php
$now=getdate();
echo  $now['hours'] . ':' . $now['minutes'] . ':'. $now['seconds'] . '-' . $now['mday'] . '/' . $now['mon'] . '/'. $now ['year'];
echo "<br>".gmdate('H:i:s d-M-Y', mktime());
?>

