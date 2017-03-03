<?php 

//$arr = array(11, -22, 33, -44, 5, 0, 77, 8, -9, 10, -111, 12, 13, -14, 15);
$arr = array(1, 200, 3, 4, 5, 6, 7, 8, 9, 16, 11, 12, 13, 14, 15);

$key = 0;
$maxValue = $arr[0];
$minValue = $arr[0];
$valueMax_1 = $arr[0]; //наибольший №1
$valueMax_2 = $arr[0]; //наибольший №2
$valueMin_1 = $arr[0]; //наименьший №1
$valueMin_2 = $arr[0]; //наименьший №2

while ($arr[$key] || $arr[$key] === 0 || $arr[$key] === false) {
	if ($arr[$key] >= $valueMax_1) {
		if ($arr[$key] <= $valueMax_2) {
			//echo $arr[$key].'<br>';
			$valueMax_1 = $arr[$key];
		} else {
			$valueMax_1 = $valueMax_2;
			$valueMax_2 = $arr[$key];
		}
	}

	if ($arr[$key] <= $valueMin_1) {
		if ($arr[$key] >= $valueMin_2) {
			//echo $arr[$key].'<br>';
			$valueMin_1 = $arr[$key];
		} else {
			$valueMin_1 = $valueMin_2;
			$valueMin_2 = $arr[$key];
		}
	}
	$key++;
}

echo 'Максимальное 1: '.$valueMax_1.'<br>';
echo 'Максимальное 2: '.$valueMax_2.'<br>';
echo 'Минимальное 1: '.$valueMin_1.'<br>';
echo 'Минимальное 2: '.$valueMin_2.'<br>';