<?php 

//$arr = array(1, 2, 3, -4, 5, 0, -7, 8, -9, 10, 11, 12, 13, -14, 15, 2, 0, 1);
$arr = array(-1, -2, -3, -4, -5, 0, -3, -4, -5, -1);

$key = 0;
$maxValue = $arr[$key];
$maxValueKey = $key;

while ($arr[$key] || $arr[$key] === 0){
	if ($arr[$key] < 0){
		$lastMinValue = $arr[$key];
		$lastMinKey = $key;
	}
	if ($arr[$key] > $maxValue){
		$maxValueKey = $key;
		$maxValue = $arr[$key];
	}
	$key++;
}

if ($lastMinValue !== NULL && $maxValue !== NULL){
	$arr[$lastMinKey] = $arr[$maxValueKey];
	$arr[$maxValueKey] = $lastMinValue;
}