<?php

include_once('model/messages.php');
$strId = $_GET['id'] ?? "";

$message = messagesOne((int)$strId);
$hasMsg = $message !== false;

include "views/base/v_main.php";

if ($hasMsg) {
    $pageTitle = $message['name'];
    $pageContent = template('v_message', ['message' => $message]);
} else {
//    поправить из массива $_SERVER
    header("HTTP/1.1 404 Not Found");
    $pageContent = template('errors/v_404');
}