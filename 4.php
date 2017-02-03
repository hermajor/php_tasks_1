<?php 

for ($i = 1000; $i <= 9999; $i += 2){
	$n = $i;

	while ($n > 0){
		$lastNum = $n % 10;
		$n = (int)($n / 10);
		$lastNum2 = $n % 10;
		if ($lastNum <= $lastNum2){
			continue 2;
		}
	}
	
	echo $i."<br>";
}

/* <?php 

for ($i = 1000; $i <= 9999; $i++){
	$n = $i;
	
	if (($n % 2) > 0){
		continue;
	}

	while ($n > 0){
		$lastNum = $n % 10;
		$n = (int)($n / 10);
		$lastNum2 = $n % 10;
		if ($lastNum <= $lastNum2){
			continue 2;
		}
	}
	
	echo $i."<br>";
} */