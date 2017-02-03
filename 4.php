<?php
for ($i = 1000; $i <= 9999; $i++){
	$n = $i;//4321

	while ($n > 0){
		$lastNum = $n % 10; //1
		$n = (int)($n / 10); //432
		$lastNum2 = $n % 10; //2
		if ($lastNum <= $lastNum2){
			//echo "$lastNum <= $lastNum2<br>";
				while ($n > 0){
					$lastNum = $n % 10; //2		3	4
					$n = (int)($n / 10); //43	4	0
					$lastNum2 = $n % 10; //3	4	0
					if ($lastNum > $lastNum2){
						continue 3;
					}
				}
			continue 2;
		}
	}
	
	echo $i."<br>";
}


/*
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