<?

include_once ("model/gallery.php");

$isSpend = false;
$err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $file = $_FILES['file'];

    if ($file['name'] === '') {
        $err = 'Файл не выбран';
    } else if ($file['size'] === 0) {
        $err = 'Файл слишком большой';
    } else if (!checkImageName($file['name'])) {
        $err = 'Только jpg';
    } else {
        copy($file['tmp_name'], 'gallery/images/' . mt_rand(0, 10000) . '.jpg');
        $isSpend = true;
    }
}
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

<div class="form">
    <? if ($isSpend): ?>
			<p>Your image is done!</p>
    <? else: ?>
			<form action="" method="post" enctype="multipart/form-data">
				<input type="file" name="file">
				<button>Send</button>
				<p><?= $err ?></p>
			</form>
    <? endif; ?>
</div>

</body>
</html>



