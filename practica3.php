<?php
	$i=1;
	while ($i <= 12)
	{
		echo "Tabla del $i <br />";
		$j=1;
		echo ("<br />");
		while ($j <= 12)
		{
			echo $i ," * ", $j , " = ", $r = $i*$j ,"<br />";
			$j++;
		}
	echo ("<br />");
	$i++;
	}
	
?>
