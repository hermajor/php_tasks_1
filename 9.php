<?php 

$num = 625;
$n = $num;
$counter = 1;

while ($n > 0){
	$lastNum = $n % 10;
	$n = (int)($n / 10);
	$counter *= 10;
}

$power = 2; //степень
$powNum = $num;

for($i = 2; $i <= $power; $i++){
	$powNum *= $num;
}

$lastPowNum = $powNum % $counter;

if ($num == $lastPowNum){
	echo 'Число ' . $num . ' является автоморфным';
} else {
	echo 'Число ' . $num . ' НЕ является автоморфным';
}