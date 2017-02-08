<?php

$m = 999;

for ($i = 0; $i < $m; $i++){
	
	if ($i > 9){
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
	} else {
		echo $i.'<br>';
	}
}