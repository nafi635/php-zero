<?php
	function readblock($file,$start=1,$lines=null)
	{
		$fp=fopen($file,'r') or die("Cant find file");
		$linessc=1;
		$linesre=0;
		$out='';
		while(!feof($fp))
		{
			$line=fgets($fp);
			if($linessc>=$start)
			{
				$out.=$line;
				$linesre++;
				if(!is_null($linesre)&&$linesre==($lines))
				{
					break;
				}
			}
		$linessc++;
		}	
		return $out;
	}
		echo readblock('lines.txt',1,3);
?>
