<?php

$m = 452;
$n = 451;

var_dump(lcm($m, $n));

//Связь с наибольшим общим делителем
function lcm($m, $n){
	if($m < 0 || $n < 0 || ($m - (int)$m) != 0 || ($n - (int)$n) != 0){
		return 'Необходимо вводить <b> натуральные </b> числа';
	}
	$result = ($m * $n)/gcd($m, $n);
	return $result;
}

//Алгоритм Евклида
function gcd($m, $n){
	
	function gcdIn($a, $b){
		if($b == 0){
			return $a;
		}
		$a = $a % $b;
		return gcdIn($b, $a);
	}
	
	if (($m == 0 || $n == 0) && ($m > 0 || $n > 0)){
		return gcdIn($m, $n);
	}
	
	if($m < 0 || $n < 0 || ($m - (int)$m) != 0 || ($n - (int)$n) != 0){
		return 'Необходимо вводить <b> натуральные </b> числа';
	}
	return gcdIn($m, $n);
}