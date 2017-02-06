<?php 

$n = 123456789;
$m = 0;

	while ($n > 0){
		$lastNum = $n % 10;
		$n = (int)($n / 10);
		$m = $m * 10 + $lastNum;
	}
	
	var_dump ($m);