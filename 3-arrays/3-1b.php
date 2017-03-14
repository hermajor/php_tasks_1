<?php 

$arr = array(1, 2, 3, 4, -5, 6, -7, 8, 9, 10, 11, 12, 13, 14, 15);

$countArr = 15;
$sum = 0;

for ($i = $countArr - 1; $i >= 0; $i--) {
	if ($arr[$i] < 0){
		echo 'Сумма нечетных элементов = '.$sum;
		break;
	}
	if ($arr[$i] % 2 != 0){
		$sum += $arr[$i];
	}
}