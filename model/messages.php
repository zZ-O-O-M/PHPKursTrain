<?
include_once('model/db.php');


function messagesAll($sql): array {
    $res = dbQuery("SELECT * FROM messages ORDER BY dt_add DESC");
    return $res->fetchAll();
}

function messagesAdd(array $fields): bool {
    $res = dbQuery("INSERT messages (name, text) VALUES (:name, :text)", $fields);
    return true;
}