<?php

$pageTitle = 'Контакты';

$left = 'tmp';
$content = template('v_contacts');

$pageContent = template('base.v_con2col',[
    'left' => $left,
    'content' => $content,
    'title' => $pageTitle
]);