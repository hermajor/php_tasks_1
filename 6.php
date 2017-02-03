<?php 

for ($i = 1000; $i <= 9999; $i++){
	$n = $i;

	while ($n > 0){
		$lastNum = $n % 10;
		$n = (int)($n / 10);
		
		switch ($lastNum) {
		case 0:
		case 2:
		case 3:
		case 7:
			break;
		default:
			continue 3;
		}
	}
	
	echo $i."<br>";
}