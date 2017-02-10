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
		
		if (primeNum($secondNum)){
			echo $firstNum.' и '.$secondNum.'<br>';
			$counter++;
		}
	}
}