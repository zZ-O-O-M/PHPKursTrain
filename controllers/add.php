<?php

$pageTitle = 'Добавить сообщение';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = extractFields($_POST, ['name', 'text']);
    $validateErrors = messagesValidate($fields);

    if (empty($validateErrors)) {
        messagesAdd($fields);
        header("Location: index.php");
        exit();
    }

} else {
    $fields = ['name' => '', 'text' => ''];
    $validateErrors = [];
}

$left = '1';

$content = template("messages/v_add", [
        'fields' => $fields,
        'validateErrors' => $validateErrors]
);

$pageContent = template('base/v_con2col', [
    'left' => $left,
    'content' => $content,
    'title' => $pageTitle
]);




