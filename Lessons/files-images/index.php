<?php

$dir = 'gallery/images';
include_once("model/gallery.php");

$files = scandir($dir);
$images = array_filter($files, function ($f) {
    return is_file("gallery/images/$f") and checkImageName($f);
});

//foreach ($files as $f) {
//    if (is_file("$dir/$f") and preg_match('/.*\.jpg$/', $f)) {
//        $images[] = $f;
//    }
//}

echo '<pre>';
print_r($files);
print_r($images);
echo '</pre>';

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
<div class="gallery">
    <? foreach ($images as $img): ?>
			<img src="gallery/images/<?= $img ?>" alt="" width="100">
    <? endforeach; ?>
</div>

</body>
</html>
