<?php 

$arr = array(1, -2, 3, -4, 5, 0, 77, 8, -9, 10, -111, 12, 13, -14, 15);

$key = 0;
$maxValue = $arr[0];
$minValue = $arr[0];
$firstMinus = null; //первый отрицательный перед максимальным
$lastPlus = null; //последний положительный после минимального

while ($arr[$key] || $arr[$key] === 0 || $arr[$key] === false){
	if ($arr[$key] >= $maxValue){
		$keyMaxValue = $key;
		$maxValue = $arr[$key];
	}
	if ($arr[$key] <= $minValue){
		$keyMinValue = $key;
		$minValue = $arr[$key];
	}
	$key++;//он же кол-во элементов в массиве
}

for ($i = 0; $i < $keyMaxValue; $i++) {
	if ($arr[$i] < 0) {
		$firstMinus = $arr[$i];
		break;
	}
}

for ($i = $key-1; $i > $keyMinValue; $i--) {
	if ($arr[$i] > 0) {
		$lastPlus = $arr[$i];
		break;
	}
}

echo 'Первый отрицательный перед максимальным: '.$firstMinus.'<br>';
echo 'Последний положительный после минимального: '.$lastPlus.'<br>';