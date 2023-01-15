<html>
<h1>COlor show</h1>
<?php
$r= $_GET['r'];
$g= $_GET['g'];
$b= $_GET['b'];
// generate RGB string from input
$rgb = $r . ',' . $g . ',' . $b;   ///combining the string
?>
R: <?php echo $r; ?>
G: <?php echo $g; ?>
B: <?php echo $b; ?>
<p />
<div style="width:150px; height: 150px;
background-color: rgb(<?php echo $rgb; ?>)" />
</body
