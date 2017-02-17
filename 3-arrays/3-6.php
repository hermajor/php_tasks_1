<?php 

$arr = array(1, 12, 3, -4, 5, 0, -7, 8, -9, 10, 11, 12, 13, -14, 15, 16);

$key = 0;
$maxValue = $arr[0];

//Нахождение бОльшего четного значения
while ($arr[$key] || $arr[$key] === 0){
	if ($arr[$key] >= $maxValue && ($arr[$key] % 2) == 0){
		$keyMaxValue = $key;
		$maxValue = $arr[$key];
	}
	$key++;
}

//Замена всех наибольших четных значений на индекс
$key = 0;
while ($arr[$key] || $arr[$key] === 0){
	if ($arr[$key] == $maxValue){
		$arr[$key] = $key;
	}
	$key++;
}

echo '<pre>';
print_r ($arr);
echo '</pre>';