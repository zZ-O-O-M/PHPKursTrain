<?php

error_reporting(E_ALL ^ E_NOTICE);
// E_ALL - const = 16
$arr = ['a' => 1];
$arr['b'];

// & | ^ - побитовые операции
// Битовая маска - набор значений в двоичной системе исчисления

$num = mt_rand(1, 10);
echo $num;

// Проверка чётности
// На конце чётного в двоичной всегда ноль, на конце нечётного наоборот
if ($num & 1) {
    echo ' - odd';
}