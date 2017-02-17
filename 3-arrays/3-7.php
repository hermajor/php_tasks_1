<?php 

$arr = array(1, 2, 3, -4, 5, 0, -7, 8, -9, 10, 11, 12, 13, -14, 15, 2, 0, 1);
//$arr = array(1, 2, 3, 4, 5, 4, 3, 4, 5, 1);

$key = 0;
$keyMax = 0;
$keyMin = 0;
$sumMax = $arr[$key] + $arr[$key + 1];
$sumMin = $arr[$key] + $arr[$key - 1];

while ($arr[$key] || $arr[$key] === 0){
	if ($sumMax < $arr[$key] + $arr[$key + 1]){
		$sumMax = $arr[$key] + $arr[$key + 1];
		$keyMax = $key;
	} 
	if ($sumMin > $arr[$key] + $arr[$key - 1]){
		$sumMin = $arr[$key] + $arr[$key - 1];
		$keyMin = $key;
	} 
	$key++;
}

echo $keyMax.' - keyMax <br>';
echo $keyMin.' - keyMin <br>';