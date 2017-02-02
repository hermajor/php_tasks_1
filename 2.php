<?php 
	$n = 4;//по условию
	
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
			if ($lastNum > $n){
				continue 2;
			}
		} while ($num > 0);
		if ($sumLastNum == $n){
			echo $i."<br>";
		}
	}