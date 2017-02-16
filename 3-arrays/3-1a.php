<?php

$arr = array(1, 'str1', 3, 4, -5, 6, -7, 8, 9, 10, 11, 12, 'str13', 14, 15);
$key = 0;

while ($arr[$key]){
	if($arr[$key] < 0){
		echo $key.' элементов предшествует первому отрицательному';
		break;
	}
	$key++;
}