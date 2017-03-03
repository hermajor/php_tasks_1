<?php 

$arr = array(11, -22, 33, -44, 5, 0, 77, 8, -9, 10, -111, 12, 13, -14, 15);

$key = 0;
$biggerMinus = null; //наибольшей среди отрицательных
$smallerPlus = null; //наименьший среди положительных

while ($arr[$key] || $arr[$key] === 0 || $arr[$key] === false){
	if ($arr[$key] < 0) {
		if ($arr[$key] > $biggerMinus) {
			$biggerMinus = $arr[$key];
		}
	}
	
	if ($arr[$key] > 0) {
		if ($arr[$key] < $smallerPlus || $smallerPlus === null) {
			$smallerPlus = $arr[$key];
		}
	}
	$key++;
}

echo 'Наибольшей среди отрицательных: '.$biggerMinus.'<br>';
echo 'Наименьший среди положительных: '.$smallerPlus.'<br>';