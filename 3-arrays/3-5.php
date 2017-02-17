<?php 

$arr = array(1, 2, 333, -4, 5, 0, -7, 8, -999, 10, 11, 12, 13, -14, 15);

$key = 0;
$maxValue = $arr[0];
$minValue = $arr[0];

while ($arr[$key] || $arr[$key] === 0 || $arr[$key] === false){
	if ($arr[$key] >= $maxValue){
		$keyMaxValue = $key;
		$maxValue = $arr[$key];
	}
	if ($arr[$key] <= $minValue){
		$keyMinValue = $key;
		$minValue = $arr[$key];
	}
	$key++;
}

	$arr[$keyMaxValue] = $arr[$keyMinValue];
	$arr[$keyMinValue] = $maxValue;

echo '<pre>';
print_r ($arr);
echo '</pre>';