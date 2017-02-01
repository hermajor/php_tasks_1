<?php 
	$num = 123456789;
	$b = 0;//счетчик

	while ($num > 0){
		$lastNum = $num % 10;
		$num = (int)($num/10);
		if ($lastNum < 5){
			$b++;
		}
	}
	
	echo "Данное число содержит " . $b . " цифр меньше 5";
?>