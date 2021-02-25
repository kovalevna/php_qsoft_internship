<?php

$month = rand(1, 12);
$dayOfWeek = rand(1, 7);

switch ($dayOfWeek) {
    case 1:
        echo "Понедельник ";
        break;
    case 2:
        echo "Вторник ";
        break;
    case 3:
        echo "Среда ";
        break;
    case 4:
        echo "Четверг ";
        break;
    case 5:
        echo "Пятница ";
        break;
    case 6:
        echo "Суббота ";
        break;
    case 7:
        echo "Воскресенье ";
        break;
}

switch ($month) {
    case 1:
        echo "Январь";
        break;
    case 2:
        echo "Февраль";
        break;
    case 3:
        echo "Март";
        break;
    case 4:
        echo "Апрель";
        break;
    case 5:
        echo "Май";
        break;
    case 6:
        echo "Июнь";
        break;
    case 7:
        echo "Июль";
        break;
    case 8:
        echo "Август";
        break;
    case 9:
        echo "Сентябрь";
        break;
    case 10:
        echo "Октябрь";
        break;
    case 11:
        echo "Ноябрь";
        break;
    case 12:
        echo "Декабрь";
        break;
}
