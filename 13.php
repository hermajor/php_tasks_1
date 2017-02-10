<?php

$n = 19;
$m = 236;
$num = myPow(2, $n) + $m;

$n = $num;
$counter = 0;

while ($n > 0){
	$lastNum = $n % 10;
	$n = (int)($n / 10);
	$counter++;
}
	
$halfNum = $counter / 2;

if ($halfNum >= 1){

	$firstPart = (int)($num / myPow(10, $halfNum));		
	$lastPart = $num % myPow(10, $halfNum);
	
	if ($firstPart == $lastPart){
		echo 'Число '.$num.' симметричное <br>';
	} else {
		echo 'Число '.$num.' НЕ симметричное <br>';
	}
} else {
	echo 'Число '.$num.' НЕ симметричное, т.к. содержит всего одну цифру <br>';
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