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

if (@($counter % $halfNum) == 0){ // Погашаем ошибку при делении на ноль

	$firstPart = (int)($num / myPow(10, $halfNum));		
	$lastPart = $num % myPow(10, $halfNum);
	
	if ($firstPart == $lastPart){
		echo 'Число '.$num.' симметричное <br>';
	} else {
		echo 'Число '.$num.' НЕ симметричное <br>';
	}
} else {
	echo 'Число '.$num.' НЕ симметричное, т.к. содержит нечетное кол-во цифр <br>';
}

//------------------------------------------------------------------
function myPow($number, $power){
	$result = $number;
	
	for($i = 2; $i <= $power; $i++){
		$result *= $number;
	}
	return $result;
}