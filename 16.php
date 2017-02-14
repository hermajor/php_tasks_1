<?php

$start = 1;
$finish = 137438691328;

for ($n = 3; $n <= $finish; $n += 2) {
	$exc = 6; //exclusion - исключение
	if ($start <= $exc){
		echo $exc.'<br>';
		$start = $exc + 1;
	}
	
	if (!primeNum($n)){
		continue;
	}
	$result = myPow(2, ($n-1))*(myPow(2, $n) - 1);
	
	if ($result >= $start && $result <= $finish){
		echo $result.'<br>';
		
	} elseif ($result > $finish){
		break;
	}
}

function primeNum($num){
	$num = (float)$num;
	if ($num % 2 == 0 || $num <= 0 || $num / (int)$num != 1){
		return false;
	}
	if ($num == 2 || $num == 3){
		return true;
	}
	
	$sqrtNum = (int)sqrt($num) + 1;
	
	for ($i = 3; $i <= $sqrtNum; $i += 2){
		$lastNum = $num % $i;
		if ($lastNum == 0){
			return false;
		}
	}
	return true;
}

//Функция корректно работает только для целочисленных значений $power
function myPow($number, $power){
	$number = (float)$number;
	$power = (int)$power;
	
	if (($power == 0 || $power == 1) || ($number == 0 || $number == 1 && $power > 0)){
		return $number;
	}
	
	$result = $number;
	
	if ($power > 0){
		for($i = 2; $i <= $power; $i++){
			$result *= $number;
		}
		return $result;
		
	} elseif ($power < 0){
		for($i = 0; $i >= $power; $i--){
			$result /= $number;
		}
		return $result;
	}
}