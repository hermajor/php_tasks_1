<?php 

$arr = array(1, false, false, 0, 0, 6, -7, -7, 9, 'str1', 'str1', 'str2', 13, -14, 15);

$key = 0;
$counter = 0;

while ($arr[$key] || $arr[$key] === 0 || $arr[$key] === false){
	if ($arr[$key] === $arr[$key-1]){
		$counter++;
	}
	$key++;
}

echo 'Количество пар одинаковых соседних элементов = '.$counter;