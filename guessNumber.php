<?php

$number = rand(0, 101);

while(true) {
    $userNumberStr = readline('Введите число: ');
    if (!$userNumberStr || $userNumberStr == 'exit') break;
    
    if (!is_numeric($userNumberStr)){
        print_r('Введите правильное число!' . "\n");
        continue;
    }

    $userNumber = (int) $userNumberStr;
    if ($userNumber == $number) {
        print_r('Верно!' . "\n");
        break;
    } else if ($userNumber < $number) {
        print_r('Загаданное число больше!' . "\n");
    } else {
        print_r('Загаданное число меньше!' . "\n");
    }
}
