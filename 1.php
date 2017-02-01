<?php 
	$num = 123456789123;
	settype($num, "string");
	$b = 0;//счетчик
	
	$len = strlen($num);
	
	for ($i = 0; $i < $len; $i++){
		if ($num[$i] < 5){
			$b++;
		}else{
			continue;
		}
	}
	echo "Данное число содержит " . $b . " цифр меньше 5";
?>