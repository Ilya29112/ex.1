<?php
function getDaysInMonth($month) {
 
    if ($month === 2) {
        return 28;
    } elseif ($month === 4 || $month === 6 || $month === 9 || $month === 11) {
        return 30;
    } else {
        return 31;
    }
}

echo "Введите порядковый номер месяца (1-12): ";
$month = (int)trim(fgets(STDIN));

$days = getDaysInMonth($month);
echo "Количество дней в месяце: $days\n";
