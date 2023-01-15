<?php
$count=0;
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Project 9-2: Tracking Previous Visits To A Page</title>
</head>
<body>
<h2>Project 9-2: Tracking Previous Visits To A Page</h2>
<?php
if (!isset($_SESSION['visits'])) {
echo 'This is your first visit.';
} else {
echo 'You previously visited this page on: <br/>';
foreach ($_SESSION['visits'] as $v) {
echo date('d M Y h:i:s', $v) . '<br/>';
}
}
?>
</body>
</html>
<?php
// add current date/time stamp to session array
$_SESSION['visits'][] = mktime();

?>
