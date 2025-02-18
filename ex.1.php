<?php
function isArithmeticProgression($a, $b, $c) {

    return ($b - $a) == ($c - $b);
}

echo "Введите первое число: ";
$a = (int)trim(fgets(STDIN));

echo "Введите второе число: ";
$b = (int)trim(fgets(STDIN));

echo "Введите третье число: ";
$c = (int)trim(fgets(STDIN));

if (isArithmeticProgression($a, $b, $c)) {
    echo "Числа $a, $b, $c являются последовательными членами арифметической прогрессии.\n";
} else {
    echo "Числа $a, $b, $c не являются последовательными членами арифметической прогрессии.\n";
}