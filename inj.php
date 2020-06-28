<?php
// SQL инъекции
// $db->quote(...) - происходит экранирование

$db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '');

$text = $_GET['text'];
$id = (int)$_GET['id'];

$sql = "UPDATE messages SET text='$text' WHERE id_message='$id'";
$db->exec($sql);