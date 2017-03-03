<?php 

$arr = array(1, 0, 3, 4, 5, 6, 6, 6, 2, 2, 11, 12, 13, 14, 15, 2, 2, 2, 2, 2);

$key = 0;
$counter = 1;
$maxSeq = 1; // максимальная последовательность

while ($arr[$key] || $arr[$key] === 0 || $arr[$key] === false) {
	if ($arr[$key] === $arr[$key - 1]) {
		$counter++;
	} else {
		$counter = 1;
	}

	if ($counter > $maxSeq) {
		$maxSeq = $counter;
		$repElem = $arr[$key];
	}
	$key++;
}

echo 'Элемент '.$repElem.' повторяется '.$maxSeq.' раз подряд';