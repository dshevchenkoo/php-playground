<?php

$number = rand(0, 101);

while(true) {
    $answer = readline('Введите число: ');
    if (!$answer || $answer == 'exit') break;
    
    if (!is_numeric($answer)){
        print_r('Введите правильное число!' . "\n");
        continue;
    }

    $userNumber = (int) $answer;
    if ($userNumber == $number) {
        print_r('Верно!' . "\n");
        break;
    } else if ($userNumber < $number) {
        print_r('Загаданное число больше!' . "\n");
    } else {
        print_r('Загаданное число меньше!' . "\n");
    }
}
