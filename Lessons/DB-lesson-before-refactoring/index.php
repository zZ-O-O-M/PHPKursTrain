<?php
$db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
$sql = "SELECT * FROM messages ORDER BY dt_add DESC";
$query = $db->prepare($sql);

$query->execute($fields);
$errInfo = $query->errorInfo();

if ($errInfo[0] !== PDO::ERR_NONE) {
    echo $errInfo[2];
    exit();
}

// fetch - Получаем одну строку из текущего результата
$messages = $query->fetchAll();
?>
<h1>Chat</h1>
<br>
<a href="add.php" style="color: blue; text-decoration: none">add message</a>
<br>
<br>
<div>
    <? foreach ($messages as $message): ?>
			<div>
				<div class="name"><?= $message['name'] ?></div>
				<div class="time"><?= $message['dt_add'] ?></div>
				<div class="text"><?= $message['text'] ?></div>
				<br>
				<hr>
			</div>
    <? endforeach; ?>
</div>
