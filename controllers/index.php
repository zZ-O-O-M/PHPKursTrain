<?php

include_once('model/messages.php');

$messages = messagesAll();
$isTable = ($_GET['view'] ?? '') === 'table';
$template = $isTable ? 'messages/v_all-messages_table' : 'messages/v_all-messages';

$pageTitle = "Main page";
$pageContent = template($template, ['messages' => $messages]);

