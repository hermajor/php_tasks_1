<?php

$number = 3571;
var_dump (primeNum($number));

function primeNum($num){
	$num = (float)$num;
	if ($num % 2 == 0 || $num <= 0 || $num / (int)$num != 1){
		$mess = 'Число '.$num.' НЕ является простым.'; // Четное, меньше нуля, дробное, массив, строка
		return $mess;
	}
	if ($num == 2 || $num == 3){
		$mess = 'Число '.$num.' является простым.';
		return $mess;
	}
	
	$sqrtNum = (int)sqrt($num) + 1;
	
	for ($i = 3; $i <= $sqrtNum; $i += 2){
		$lastNum = $num % $i;
		$condition = false;

		if ($lastNum == 0){
			$mess = 'Число '.$num.' НЕ является простым';
			return $mess;
		}
		$condition = true;
	}

	if ($condition == true){
		$mess = 'Число '.$num.' является простым';
		return $mess;
	}
}