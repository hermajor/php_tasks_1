<?php 

$arr = array(1, 2, 3, 0, -5, 6, 7, -8, 9, 10, 11, 12, -13, 14, 15);

$key = 0;
$keyPlus = false;

while ($arr[$key] || $arr[$key] === 0){
	if ($arr[$key] > 0 && $keyPlus === false){
		$keyPlus = $key;
		$temp = $arr[$key];
	}
	if ($arr[$key] < 0){
		$keyMinus = $key;
		
		$arr[$keyPlus] = $arr[$keyMinus];
		$arr[$keyMinus] = $temp;
	}
	$key++;
}
/*
echo '<pre>';
print_r ($arr);
echo '</pre>';
*/