<?php 
	$n = 4;//по условию
	
 	for ($i = 1000; $i <= 9999; $i++){
		$sumLastNum = 0;
		$num = $i;
		while ($num > 0){
			$lastNum = $num % 10;
			$sumLastNum += $lastNum;
			$num = (int)($num / 10);
		}
		if ($sumLastNum == $n){
			echo $i."<br>";
		}
	}
?>