<?php

include_once('model/messages.php');

$messages = messagesAll();
$isTable = ($_GET['view'] ?? '') === 'table';
$template = $isTable ? 'v_index_table' : 'v_index';

$pageTitle = "Main page";
$pageContent = template($template, ['messages' => $messages]);

