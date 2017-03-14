<?php
$arr = array("qwe" => "12", '2' => 'fal', "asc" => "543", "--1" => "++", "ъ" => 1);

//1//echo '<pre>'.print_r($arr, true).'</pre>';
/*2
foreach ($arr as $value) {
	echo $value.'<br>';
}
*/
/*3
$strArr = implode(", ", $arr);
echo $strArr.'<br>';
*/
/*4
while ($arr) {
	echo array_shift($arr).'<br>';
}
*/
/*5
function show_elem($item) {
    echo $item.'<br>';
}
array_walk($arr, 'show_elem');
*/
/*6
$arr2 = array_values($arr);
for ($i = 0;; $i++) {
	if (!array_key_exists($i, $arr2)) {
		break;
	}
	echo $arr2[$i].'<br>';
}
*/
/*7
reset($arr);
while (list($key, $val) = each($arr)) {
    var_dump($val);
	echo '<br>';
}
*/
/*8
$fp = fopen("file.txt", "rw");
fputcsv($fp, $arr);
//$ar = fgetcsv($fp);
echo fgets($fp);
fclose($fp);
*/
/*9 НЕ ГОТОВО
$count = count($arr);
//for ($i = 0;$i <= $count; $i++) {
	$arr2 = array_slice($arr, 0);
	echo '<pre>'.print_r($arr2, true).'</pre>';
	//echo $arr2[0].'<br>';
	//var_dump($arr2[0]);
	$keys = array_keys($arr);
	function array_slice_assoc($arr,$keys) {
		return array_intersect_key($arr,array_flip($keys));
	}
	echo '<pre>'.print_r(array_slice_assoc($arr,$keys), true).'</pre>';
//}
*/
/*10
reset($arr);
while ($temp = current($arr)) {
	echo $temp.'<br>';
    next($arr);
}
*/
/*11
$arrKeys = array_keys($arr);
$count = count($arr);
for ($i = 0;$i <= $count; $i++) {
	echo $arr[$arrKeys[$i]].'<br>';
}
*/
/*12
$count = count($arr);
$arrRang = range(1, $count);
$arrСomb = array_combine($arrRang, $arr);
for ($i = 1;$i <= $count; $i++) {
	echo $arrСomb[$i].'<br>';
}
*/
/*13
$arrSh = $arr;
shuffle($arrSh);
$count = count($arrSh);
for ($i = 0;$i < $count; $i++) {
	echo $arrSh[$i].'<br>';
}
*/