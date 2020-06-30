<?php

$isSend = false;
$err = '';

$fields = ['name' => '', 'text' => ''];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields['name'] = trim($_POST['name']);
    $fields['text'] = trim($_POST['text']);

    if ($fields['name'] === '' or $fields['text'] === '') {
        $err = 'Fill in all the fields on the form';
    } else if (mb_strlen($fields['name'], 'UTF8') < 2) {
        $err = 'Имя должно быть не короче двух символов!';
    } else {
        $db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '');
        $sql = "INSERT messages (name, text) VALUES (:name, :text)";
        $query = $db->prepare($sql);

        $query->execute($fields);
        $errInfo = $query->errorInfo();

        if ($errInfo[0] !== PDO::ERR_NONE) {
            echo $errInfo[2];
            exit();
        }
        header('Location: index.php');
        exit();
    }
} else {
    $name = '';
    $phone = '';
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add</title>
</head>
<body>

<div class="form">

	<form class='appForm' method="post">
		Name: <br>
		<input type="text" name="name" value="<?= $fields['name'] ?>"><br>
		Text: <br>
		<textarea name="text"><?= $fields['text'] ?></textarea> <br>
		<button>send</button>
		<p class="err"><?= $err ?></p>
	</form>

</div>

</body>
</html>

