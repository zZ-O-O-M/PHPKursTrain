<?php

// target - ассоциативный одномерный массив
// fields - обычный массив, который содержит список строк с полями

function extractFields(array $target, array $fields): array {
    $res = [];

    foreach ($fields as $field) {
        $res[$field] = trim($target[$field]);
    }

    return $res;
}
