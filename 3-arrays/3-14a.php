<?php 

$arr = array(11, -22, 33, -44, 5, 0, 77, 8, -9, 10, -111, 12, 13, -14, 15);

$key = 0;
$arrPlus = array();
$arrMinus = array();

while ($arr[$key] || $arr[$key] === 0 || $arr[$key] === false) {
	if ($arr[$key] > 0) {
		$arrPlus[] = $arr[$key];
	}
	if ($arr[$key] < 0) {
		$arrMinus[] = $arr[$key];
	}
	$key++;
}

echo '<pre>'.print_r ($arrPlus, true).'</pre>';
echo '<pre>'.print_r ($arrMinus, true).'</pre>';