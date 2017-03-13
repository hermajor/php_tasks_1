<?php

$n = 15;
echo biNumFull($n);

function biNumFull($n){
	$bytes = howManyBytes($n);
	$n = pow(256, $bytes) + $n;
	return biNum($n);
}

function howManyBytes($num, $count = 1){
	if ($num < 1) {
		$count--;
		return $count;
	}
	$num = $num / 256;
	$count++;
	return howManyBytes($num, $count);
}

function biNum($n){
	$div = ($n % 2);
	$n = (int)($n / 2);
	
	if($n <= 0){
		//echo '<span style="font-size: 150%">'.$div.'</span>';
		return;
	}
	biNum($n);
	echo $div;
}