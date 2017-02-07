<?php

$number = 99999;

for ($i = 0; $i < $number; $i++){

$reverseNum = 0;
$n = $i;

	while ($n > 0){
		$lastNum = $n % 10;
		$n = (int)($n / 10);
		$reverseNum = $reverseNum * 10 + $lastNum;
	}
	//Проверяем является ли данное число палиндромом
	if ($i == $reverseNum){
		$power = 2; //степень
		$powNum = $i;

		for($j = 2; $j <= $power; $j++){
			$powNum *= $i;
		}	

		$reversePow = 0;
		$m = $powNum;
		
		while ($m > 0){
			$lastNumPow = $m % 10;
			$m = (int)($m / 10);
			$reversePow = $reversePow * 10 + $lastNumPow;
		}
		//Проверяем является ли квадрат числа палиндромом
		if ($powNum == $reversePow){
			echo $i.'<br>';
		}
	}
}