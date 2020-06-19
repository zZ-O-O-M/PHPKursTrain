<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name']);
  $phone = trim($_POST['phone']);
  $dt = date("Y-d-m H:i:s");

  $mailBody = "$dt\n$phone\n$name";

  mail('admin@mail.ru', 'New app on site', $mailBody);

} else {
  echo 'nopost';
}

echo $_SERVER['REQUEST_METHOD'];

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<form method="post">
	Name: <br>
	<input type="text" name="name"><br>
	Phone: <br>
	<input type="text" name="phone"><br>
	<button>send</button>
</form>
</body>
</html>