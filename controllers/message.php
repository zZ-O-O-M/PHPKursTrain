<?php

include_once('model/messages.php');
$strId = $_GET['id'] ?? "";

$message = messagesOne((int)$strId);
$hasMsg = $message !== false;

if ($hasMsg) {
    $pageTitle = $message['name'];
    $left = template('messages/v_message_left-part');
    $content = template('messages/v_message', ['message' => $message]);

    $pageContent = template('base/v_con2col', [
        'left' => $left,
        'content' => $content,
        'title' => 'one_message'
    ]);
} else {
//    поправить из массива $_SERVER
    header("HTTP/1.1 404 Not Found");
    $pageContent = template('errors/v_404');
}