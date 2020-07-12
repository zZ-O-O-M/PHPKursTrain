<?php

$pageTitle = 'Контакты';

$left = 'tmp';
$left = template('contacts/v_left_menu');
$content = template('contacts/v_main');

$pageContent = template('base/v_con2col',[
    'left' => $left,
    'content' => $content,
    'title' => $pageTitle
]);