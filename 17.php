<?php

$m = 1071;
$n = 462;

var_dump(gcd($m,$n));

//Адовый перебор
function gcd2($m, $n){
	if($m < 0 || $n < 0 || ($m - (int)$m) != 0 || ($n - (int)$n) != 0){
		return 'Необходимо вводить <b> натуральные </b> числа';
	}
	if ($m == $n || $n == 0){
		return $m;
	}
	if ($m == 0){
		return $n;
	}
	if ($m > $n){
		$bigNum = $m;
		$smallNum = $n;
	}
	if ($m < $n){
		$bigNum = $n;
		$smallNum = $m;
	}
	
	for ($i = $smallNum; $i >= 1; $i--){
		if($bigNum % $i == 0 && $smallNum % $i == 0){
			return $i;
		}
	}
}

//Алгоритм Евклида
function gcd($m, $n){
	
	if (($m == 0 || $n == 0) && ($m > 0 || $n > 0)){
		return gcdIn($m, $n);
	}
	
	if($m < 0 || $n < 0 || ($m - (int)$m) != 0 || ($n - (int)$n) != 0){
		return 'Необходимо вводить <b> натуральные </b> числа';
	}
	return gcdIn($m, $n);
}

function gcdIn($a, $b){
	if($b == 0){
		return $a;
	}
	$a = $a % $b;
	return gcdIn($b, $a);
}