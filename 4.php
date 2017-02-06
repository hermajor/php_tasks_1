<?php

for ($i = 1000; $i <= 9999; $i +=2){
	$n = $i;
	$incSequence = false;
	$decSequence = false;

	while ((int)($n/10) != 0){
		$lastNum = $n % 10; 
		$n = (int)($n / 10); 
		$preLastNum = $n % 10; 
		
		if ($lastNum > $preLastNum){
			$incSequence = true;
		} elseif ($lastNum < $preLastNum){
			$decSequence = true;
		} else {
			continue 2;
		}
		if ($incSequence == true && $decSequence == true){
			continue 2;
		}
	}
	echo $i."<br>";
}