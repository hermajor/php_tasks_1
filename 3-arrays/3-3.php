<?php 

$arr = array(1, 2, 3, 0, 5, -6, 7, 8, 9, -10, 11, -12, 13, 14, 15);

$key = 0;
$flag = false;

while ($arr[$key] || $arr[$key] === 0){
	if ($arr[$key] > 0 && $flag == false){
		$flag = true;
		$keyPlus = $key;
		$valuePlus = $arr[$key];
	}
	if ($arr[$key] < 0){
		$keyMinus = $key;
	}
	$key++;
}

if($flag == true && $keyMinus){
	$arr[$keyPlus] = $arr[$keyMinus];
	$arr[$keyMinus] = $valuePlus;
}

echo '<pre>';
print_r ($arr);
echo '</pre>';