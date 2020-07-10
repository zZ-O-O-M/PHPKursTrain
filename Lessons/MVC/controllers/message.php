<?php

include_once('model/messages.php');
$strId = $_GET['id'] ?? "";

$message = messagesOne((int)$strId);
$hasMsg = $message !== false;

include "views/base/v_main.php";


if ($hasMsg) {
    include('views/v_message.php');
} else {
//    поправить из массива $_SERVER
    header("HTTP/1.1 404 Not Found");
    include('views/errors/v_404.php');
}

include "views/base/v_footer.php";
