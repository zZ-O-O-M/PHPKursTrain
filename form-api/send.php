<?php

$response = [
    'res' => false,
    'error' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);

    if ($name === '' or $phone === '') {
        $response['error'] = 'Fill in all the fields on the form';
    } else if (mb_strlen($name, 'UTF8') < 2) {
        $response['error'] = 'Имя должно быть не короче двух символов!';
    } else {
        $dt = date("Y-d-m H:i:s");
        $mailBody = "$dt\n$phone\n$name";
        mail('admin@mail.ru', 'New app on site', $mailBody);
        $response['res'] = true;
    }
}

echo json_encode($response);

