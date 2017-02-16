<?php 

$arr = array(1, 'str1', 3, 4, -5, 6, -7, 8, 9, 10, 11, 12, 'str13', 14, 15);

$maxKey = myCount($arr);
$sum = 0;

for ($i = $maxKey; $i >= 0; $i--) {
	if ($arr[$i] < 0){
		echo 'Сумма нечетных элементов = '.$sum;
		break;
	}
	if ($arr[$i] % 2 != 0){
		$sum += $arr[$i];
	}
}

// Для индексированного массива
function myCount($array){
	$countElem = 0;
	
	while ($array[$countElem]){
		$countElem++;
	}
	return $countElem;
}