<?php 

$arr = array(1, 2, 3, -4, 5, 0, -7, 8, -9, 10, 11, 12, 13, -14, 15, 2, 0, 1);

$key = 0;
$maxValue = $arr[$key];
$minValue = $arr[$key];

while ($arr[$key] || $arr[$key] === 0 || $arr[$key] === false){
	if ($arr[$key] >= $maxValue){
		$maxValue = $arr[$key];
	}
	if ($arr[$key] <= $minValue){
		$minValue = $arr[$key];
	}
	$key++;
}

$key = 0;
while ($arr[$key] || $arr[$key] === 0){
	if ($arr[$key] % 2 == 0){
		$arr[$key] = $maxValue;
	} else {
		$arr[$key] = $minValue;
	}
	$key++;
}

echo '<pre>';
print_r ($arr);
echo '</pre>';