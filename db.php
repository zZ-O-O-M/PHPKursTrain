<?php
// Фишка PDO в том, что мы можем указать, с каким типом базы данных (каким драйвером) работать
// В данном случае мы работаем с mysql

// Чтобы установить кодировку:
//$db = new PDO('mysql:host=localhost;dbname=php1simple;charset=utf8', 'root', '');
//Или после подключения прописываем:
//$db->exec("SET NAMES UTF8");

// Экранирование - можно использовать как защиту от инъекций

$db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '');

//:user - маска
$sql = "INSERT messages (name, text, status) VALUES (:user, :text, :status)";
$query = $db->prepare($sql);

// Получается так, что execute применит bindParam к каждой маске самостоятельно
// Имена у ключей совпадают с именами масок, но пишутся без двоеточия
$params = [
    'name' => 'Admin',
    'text' => 'Delete all another one!',
    'status' => 1
];

$query->execute($params);

// errorInfo - метод который вернёт информацию о возникших ошибках при выполнении sql за проса
$errInfo = $query->errorInfo();

if ($errInfo[0] !== PDO::ERR_NONE) {
//    REAL: throw new exception
    echo $errInfo[2];
    exit();
} else {
    echo "All done!";
}

//$userName = 'Admin';    //$_POST['name']
//$userText = 'Delete all!';  //$_POST['text']
//$userStatus = 1;  //$_POST['status']
//
//$query->bindParam(':user', $userName);
//$query->bindParam(':text', $userText);
//$query->bindParam(':status', $userStatus);
//$query->execute();
