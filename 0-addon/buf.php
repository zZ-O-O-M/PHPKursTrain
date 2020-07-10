<?php

// начинаем буферизацию
ob_start();
echo 1;
echo 3;

// очищаем буфер
$res = ob_get_clean();
// выводим всё, что очистилось из буфера
var_dump($res);