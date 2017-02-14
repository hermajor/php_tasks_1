<?php

//Только четные могут быть
$n = 369;
$counter = 2; //+2 уже за единицу и себя

if ($n % 2 == 0){
    // $n - четное число
    $startI = 2;
    $inc = 1;
    $maxDiv = (int)($n / 2);
} else {
    // $n - НЕ четное число
    $startI = 3;
    $inc = 2;
    $maxDiv = (int)($n / 3);
}

for ($i = $startI; $i <= $maxDiv; $i += $inc){
    if ($n % $i == 0){
        $counter++;
    }
}

echo 'Число '.$n.' имеет '.$counter.' делителей';