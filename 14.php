<?php

$display = 10;
$iMin = 2; //продумать ввод четного и привести его к нечетному
$iMax = 999; // пока не используется

$result = couplePrime($display, $iMin, $iMax);
var_dump($result);

function couplePrime($display, $iMin, $iMax){
		$num = $iMin;
		//$num = (float)$num;
		if ($num % 2 == 0 || $num <= 0 || $num / (int)$num != 1){
			//return false;
			return couplePrime($display, $iMin+1, $iMax);//если начали с четного числа
		}
		if ($num == 3){
			//return true;
			echo $num.'<br>';
			return couplePrime($display - 1, $iMin + 2, $iMax);
		}
		
		$sqrtNum = (int)sqrt($num) + 1;
		
		for ($i = 3; $i <= $sqrtNum; $i += 2){
			$lastNum = $num % $i;
			if ($lastNum == 0){
				//return false;
				return couplePrime($display, $iMin+2, $iMax);
			}
		}
		if ($display > 0){
			echo $num.'<br>';
			return couplePrime($display - 1, $iMin + 2, $iMax);
		}
		return 'Конец';
}