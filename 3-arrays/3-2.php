<?php 

$arrA = array(1, 2, 3, -4, 0, 6, 7, 8, 9, 10, -11, 12, 13, 14, 15);
$arrB = array();

$sum = 0;
$key = 0;

while ($arrA[$key] || $arrA[$key] === 0){
	$sum += $arrA[$key];
	$arrB[] = $sum / ($key + 1);
	$key++;
}

echo '<pre>';
print_r ($arrB);
echo '</pre>';