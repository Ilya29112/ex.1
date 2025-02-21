<?php
function determineTriangleType($a, $b, $c) {

    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return "Треугольник с такими сторонами не существует.";
    }

    if ($a === $b && $b === $c) {
        return "Треугольник равносторонний.";
    }

    if ($a == $b || $a == $c || $b == $c) {
        return "Треугольник равнобедренный.";
    }

    return "Треугольник разносторонний.";
}

echo "Введите длину первой стороны: ";
$a = (float)trim(fgets(STDIN));

echo "Введите длину второй стороны: ";
$b = (float)trim(fgets(STDIN));

echo "Введите длину третьей стороны: ";
$c = (float)trim(fgets(STDIN));

$result = determineTriangleType($a, $b, $c);
echo $result . "\n";
