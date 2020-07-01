<?php
include_once('model/messages.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = [];
    $fields['name'] = trim($_POST['name']);
    $fields['text'] = trim($_POST['text']);

    if ($fields['name'] === '' or $fields['text'] === '') {
        $err = 'Fill in all the fields on the form';
    } else if (mb_strlen($fields['name'], 'UTF8') < 2) {
        $err = 'Имя должно быть не короче двух символов!';
    } else {
        messagesAdd($fields);
        header("Location: index.php");
        exit();
    }
} else {
    $fields = ['name' => '', 'text' => ''];
    $err = '';
}

include("views/v_add.php");



