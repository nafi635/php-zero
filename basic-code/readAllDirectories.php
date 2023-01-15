<?php
function printDir($dir, $depthStr='+') 
{
	if (file_exists($dir)) 
		{
			$dp = opendir($dir) or die ('ERROR: Cannot open directory');
		while ($file = readdir($dp)) 
			{
				if ($file != '.' && $file != '..') 
				{
					echo "$depthStr $dir/$file \n";
					if (is_dir("$dir/$file"))
					 {
						printDir("$dir/$file", $depthStr.'+');
					}
				}
			}
			closedir($dp);
	}
}
printDir('/home/nafi/Desktop');
?>
