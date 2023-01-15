<?php
echo "explode"."<br>";s
$str = 'tinker,tailor,soldier,spy';
$arr = explode(',', $str);
print_r($arr);
echo "implode"."<br>";
$arr = array('one', 'two', 'three', 'four');
$str = implode(' and ', $arr);
print_r($str);
?>
