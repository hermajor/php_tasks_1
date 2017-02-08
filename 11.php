<?php

$m = 999;

for ($i = 0; $i < $m; $i++){
	$n = $i;
	$sumOfNum = 0;
	
	while ($n > 0){
		$lastNum = $n % 10;
		$n = (int)($n / 10);
		$sumOfNum += $lastNum;
	}
	
	if ($sumOfNum == 0){// Избегаем деления на ноль
		continue;
	}elseif (($i % $sumOfNum) == 0){
		echo $i.' = '.$sumOfNum.'<br>';
	}
}