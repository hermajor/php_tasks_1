<?php 

$arr = array(11, -22, 33, -44, 5, 0, 77, 8, -9, 10, -111, 12, 13, -14, 15);

$key = 0;
$arrEven = array();
$arrOdd = array();

while ($arr[$key] || $arr[$key] === 0 || $arr[$key] === false) {
	if (($arr[$key] % 2) == 0) {
		$arrEven[] = $arr[$key];
	}
	if (($arr[$key] % 2) != 0) {
		$arrOdd[] = $arr[$key];
	}
	$key++;
}

echo '<pre>'.print_r ($arrEven, true).'</pre>';
echo '<pre>'.print_r ($arrOdd, true).'</pre>';