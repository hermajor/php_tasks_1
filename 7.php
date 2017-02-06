<?php 

$num = 56123456;
$n = $num;

while ($n > 0){
	$lastNum = $n % 10;
	$n = (int)($n / 10);
	$m = $n;
	
	while ($m > 0){
		$lastNum2 = $m % 10;
		$m = (int)($m / 10);
		
		if ($lastNum == $lastNum2){
			echo 'В числе' . $num . 'есть одинаковые цифры';
			break 2;
		}
	}
}