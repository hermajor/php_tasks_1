<?php 

for ($i = 1000; $i <= 9999; $i++){
	$n = $i;

	while ($n > 0){
		$lastNum = $n % 10;
		$n = (int)($n / 10);
		$m = $n;
		
		while ($m > 0){
			$lastNum2 = $m % 10;
			$m = (int)($m / 10);
			
			if ($lastNum == $lastNum2){
				continue 3;
			}
		}
	}
	echo $i."<br>";
}