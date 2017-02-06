<?php 

$exception = 3333;
$sumCondition = 12;

for ($i = 1000; $i <= 9999; $i++){
	$n = $i;
	$sum = 0;

	while ($n > 0 && $i != $exception){
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
	if ($sum == $sumCondition){
		echo $i.'<br>';
	}
}