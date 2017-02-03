<?php 

$n = 123456789;

	while ($n > 0){
		$lastNum = $n % 10;
		$n = (int)($n / 10);
		$m .= $lastNum;
	}

	echo (int)$m;