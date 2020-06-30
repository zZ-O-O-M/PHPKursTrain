<?php

function test() {
    static $a = null;

    if ($a === null) {
        $a = 0;
    }

    $a++;
    return $a;
}