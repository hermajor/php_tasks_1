<?php

$num = -369;
$counter = 2; //+2 уже за единицу и себя
$n = $num;

if ($n < 0){
	$n *= -1;
}

// $n - четное число
$startI = 2;
$inc = 1;

if ($n % 2 != 0) {
    // $n - НЕ четное число
    $startI = 3;
    $inc = 2;
}

$maxDiv = (int)($n / $startI);

for ($i = $startI; $i <= $maxDiv; $i += $inc){
    if ($n % $i == 0){
        $counter++;
    }
}

echo 'Число '.$num.' имеет '.$counter.' делителей';