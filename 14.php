<?php

$display = 10;
$start = 3;
$finish = 333;

$result = couplePrime($display, $start, $finish);
//var_dump($result);

function couplePrime($display, $start, $finish){
	$num = (int)$start;
	
	if ($num % 2 == 0){
		return couplePrime($display, $num + 1, $finish);
	}
	
	if ($display <= 0 || $start >= $finish){
		return 'The end';
	}
	
	for ($i = $start; $i <= $finish; $i += 2){
		$num = (int)$i;
		
		if (primeNum($num)){
			$secondNum = $num + 2;
			
			if (primeNum($secondNum)){
				echo $num .' и '. $secondNum .' (счетчик: '. $display .')<br>';
				return couplePrime($display - 1, $secondNum + 2, $finish);
			}
			return couplePrime($display, $secondNum, $finish);
		}
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