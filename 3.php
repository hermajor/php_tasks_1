<?php 

$n = 1223456;

while ($n > 0){
	$lastNum = $n % 10;
	$n = (int)($n / 10);
	$lastNum2 = $n % 10;
	if ($lastNum <= $lastNum2){
		echo "Последовательность цифр не является возрастающей";
		break;
	}
}