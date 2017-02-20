<?php 

$arr = array(1, 2, 3, -4, 5, 0, -7, 8, -9, 10, 11, 12, 13, -14, 15, 2, 0, 1);

$key = 0;
$maxEven = $arr[$key];
$minUneven = $arr[$key];
$flagMaxEven = false;
$flagMinUneven = false;

while ($arr[$key] || $arr[$key] === 0){
	if ($arr[$key] > $maxEven && ($arr[$key] % 2) == 0){
		$maxEven = $arr[$key];
		$flagMaxEven = true;
	}
	if ($arr[$key] < $minUneven && ($arr[$key] % 2) != 0){
		$minUneven = $arr[$key];
		$flagMinUneven = true;
	}
	$key++;
}

if ($flagMaxEven == true && $flagMinUneven == true) {
	echo 'Максимальный четный элемент: '.$maxEven.'<br>';
	echo 'Минимальный нечетный элемент: '.$minUneven.'<br>';
} else {
	echo 'Одно из условий не выполнено';
}