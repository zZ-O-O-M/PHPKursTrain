<?php

include_once 'init.php';

$cname = $_GET['c'] ?? 'index';
$path = "controllers/$cname.php";
$pageTitle = 'Ошибка 404';
$pageContent = '';

if (file_exists($path) and checkControllerName($cname)) {
    include_once($path);
} else {
    header("HTTP/1.1 404 Not Found");
    $pageContent = template('errors/v_404');
}

$html = template('base/v_main', [
    'title' => $pageTitle,
    'content' => $pageContent
]);

echo $html;

