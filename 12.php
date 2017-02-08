<?php

$m = 3571; //заданное число

for ($i = 2; $i < $m; $i++){
	$lastNum = $m % $i;
	$condition = false;

	if ($lastNum == 0){
		echo 'Число '.$m.' НЕ является простым <br>';
		break;
	}
	$condition = true;
}

if ($condition == true){
	echo 'Число '.$m.' является простым <br>';
}