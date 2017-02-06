<?php 

for ($i = 1000; $i <= 9999; $i++){
	$n = $i;
	$sum = 0;

	while ($n > 0 && $i != 3333){	//(int)($n/10) != 0
		$lastNum = $n % 10;
		$n = (int)($n / 10);
		
		switch ($lastNum) {
		case 0:
		case 2:
		case 3:
		case 7:
			$sum += $lastNum;
			break;
		default:
			continue 3;
		}
	}
	if ($sum == 12){
		echo $i.'<br>';
	}
}