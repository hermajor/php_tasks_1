<?php

$counter = 0;
$maxViews = 10;

for ($i = 3; $i <= 3571; $i+=2){
	$firstNum = $i;
	
	if ($counter >= $maxViews){
		break;
	}
	
	if (primeNum($i)){
		$secondNum = $firstNum + 2;
		
		if (!primeNum($secondNum)){
			$i += 2;
			continue;
		}
	} else {
		continue;
	}
	echo $firstNum.' и '.$secondNum.'<br>';
	$counter++;
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
		$condition = false;

		if ($lastNum == 0){
			return false;
		}
		$condition = true;
	}

	if ($condition == true){
		return true;
	}
}