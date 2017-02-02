<?php 
	$n = 3;//по условию
	
 	for ($i = 1000; $i <= 9999; $i++){
		$sumLastNum = 0;
		$num = $i;
		if ($num > $n*1000){
			echo "Дальше идут числа больше ". $n*1000;
			break;
		}
		do {
			$lastNum = $num % 10;
			$sumLastNum += $lastNum;
			$num = (int)($num / 10);
			if ($num <= 0 && $sumLastNum == $n){
				echo $i."<br>";
			}
		} while ($num > 0 || $lastNum > $n);
	}