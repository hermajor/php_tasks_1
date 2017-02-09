<?php

$m = 999;
$counter = 0;
$factor = 10; //множитель

for ($i = 0; $i < $m; $i++){
	
	if ($i > 9){
		if ($i % $factor == 0){
			$counter ++;
			if ($counter >= 9){
				$counter = 0;
				$factor *= 10;
			}
			continue;
		}
		$n = $i;
		$sumOfNum = 0;
		
		while ($n > 0){
			$lastNum = $n % 10;
			$n = (int)($n / 10);
			$sumOfNum += $lastNum;
		}
		
		if (($i % $sumOfNum) == 0){
			echo $i.'<br>';
		}
	}
}