<?
include_once('core/db.php');


function messagesAll(): array {
    $res = dbQuery("SELECT * FROM messages ORDER BY dt_add DESC");
    return $res->fetchAll();
}

function messagesOne(int $id){
    $sql = "SELECT * FROM messages WHERE id_message=:id";
    $query = dbQuery($sql, ['id'=>$id]);
    return $query->fetch();
}

function messagesAdd(array $fields): bool {
    $res = dbQuery("INSERT messages (name, text) VALUES (:name, :text)", $fields);
    return true;
}

function messagesValidate(array &$fields): array {
    $errors = [];
    $nameLen = mb_strlen($fields['name'], 'UTF8');
    $textLen = mb_strlen($fields['text'], 'UTF8');
    if ($fields['name'] === '' or $fields['text'] === '') {
        $errors[] = 'Fill in all the fields on the form';
    } else {
        if ($nameLen < 2) {
            $errors[] = 'Имя должно быть не короче двух символов!';
        }

        if ($textLen > 100) {
            $errors[] = 'Текст не длиннее 100 символов';
        }
    }

    // Clean html chars from data
    $fields['name'] = htmlspecialchars($fields['name']);
    $fields['text'] = htmlspecialchars($fields['text']);

    return $errors;
}