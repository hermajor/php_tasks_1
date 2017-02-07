<?php 

$num = 25;
$n = $num;
$counter = 1;

while ($n > 0){
	$lastNum = $n % 10;
	$n = (int)($n / 10);
	$counter *= 10;
}

$powNum = pow($num, 2);
$lastPowNum = $powNum % $counter;

if ($num == $lastPowNum){
	echo 'Число ' . $num . ' является автоморфным';
} else {
	echo 'Число ' . $num . ' НЕ является автоморфным';
}