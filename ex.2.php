<?php

echo "Введите пароль: ";
$password = trim(fgets(STDIN));

echo "Введите подтверждение пароля: ";
$confirm_password = trim(fgets(STDIN));

if ($password === $confirm_password) {
    echo "пароль принят\n";
} else {
    echo "пароль не принят\n";
}
?>