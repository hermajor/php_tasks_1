<?php 

for ($i = 1000; $i <= 9999; $i++){
	$n = $i;	
	$repeat0 = $repeat2 = $repeat3 = $repeat7 = 0;

	while ($n > 0){
		$lastNum = $n % 10;
		$n = (int)($n / 10);
		
		switch ($lastNum) {
		case 0:
			if ($repeat0 > 0){
				continue 3;
			}
			$repeat0++;
			break;
		case 2:
			if ($repeat2 > 0){
				continue 3;
			}
			$repeat2++;
			break;
		case 3:
			if ($repeat3 > 0){
				continue 3;
			}
			$repeat3++;
			break;
		case 7:
			if ($repeat7 > 0){
				continue 3;
			}
			$repeat7++;
			break;
		default:
			continue 3;
		}
	}
	echo $i.'<br>';
}