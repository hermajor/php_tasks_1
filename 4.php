<?php

for ($i = 1000; $i <= 9999; $i +=2){
	$n = $i;
	$bo1 = true;
	$bo2 = true;

	while ((int)($n/10) != 0){
		$lastNum = $n % 10; 
		$n = (int)($n / 10); 
		$lastNum2 = $n % 10; 
		
		if ($lastNum < $lastNum2){
			$bo1 &= true;
			$bo2 &= false;
		} elseif ($lastNum > $lastNum2){
			$bo1 &= false;
			$bo2 &= true;
		} else {
			$bo1 &= false;
			$bo2 &= false;
		}
		if ($bo1 == false && $bo2 == false){
			continue 2;
		}
	}
	echo $i."<br>";
}