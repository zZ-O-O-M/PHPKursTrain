<?php

include_once('functions.php');

// Variables
$err = '';
$title = '';
$content = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if (strlen($title) === 0 or strlen($content) === 0) {
        $err = "Fill in all fields";
    } else {
        addArticle($title, $content);
    }
}

?>
<form method="post" class="form">
	<label for="title">Title:</label>
	<br>
	<input type="text" id="title" name="title" value="<?= $title ?>">
	<br>

	<label for="content">Content:</label>
	<br>
	<textarea id="content" name="content"><?= $content ?></textarea>
	<br>
	<br>

	<input type="submit" value="add article">
	<br>
	<br>

	<p class="err"><?= $err ?></p>
</form>
<hr>
<a href="index.php">Move to main page</a>