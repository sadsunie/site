<?php

if (empty($_GET)){
    return 'Ничего не передано';
}

if (empty($_GET['operation'])){
    return 'Операция не передана';
}

    $x1 = $_GET["x1"] ?? null;
    $x2 = $_GET["x2"] ?? null;
    $operation = $_GET['operation'];

if ($x1 === null || $x2 === null){
    return 'Введите число';
}

if (!is_numeric($x1) || !is_numeric($x2)){
    return 'Введите число';
}

    switch ($operation){
        case '+':
            $result = $x1 + $x2;
            break;
        case  '-':
            $result = $x1 - $x2;
            break;
        case  '/':
            if($x2 != 0){
                $result = $x1 / $x2;
            } else {
                return 'На ноль нельзя делить';
            }
            break;
        case  '*':
            $result = $x1 * $x2;
            break;

        default:
            return 'Операция не поддерживается';
    }

$expression = $x1 . ' ' . $operation . ' ' . $x2 . ' = ';

return $expression . $result;