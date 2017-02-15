<?php

$n = 158;

echo biNum($n);

function biNum($n){
	$counter++;
	$div = ($n % 2);
	$n = (int)($n / 2);
	
	if($n <= 0){
		echo $div;
		return;
	}
	biNum($n);
	echo $div;
}