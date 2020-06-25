<?php

include_once('functions.php');

// Variables
$idOfSelectedArticle = '';
$err = '';
$title = '';
$content = '';

//echo $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (isset($_COOKIE['idOfSelectedArticle'])) {
        setcookie('idOfSelectedArticle', 0, time() - 1000000);
    }

    setcookie('idOfSelectedArticle', $_GET['id'], time() + (60 * 60 * 24 * 30));
    $idOfSelectedArticle = $_GET['id'];
    $articles = getArticles();

    $currentArticle = $articles[$idOfSelectedArticle];
    $idOfSelectedArticle = $articles[$idOfSelectedArticle]['id'];
    $title = $currentArticle['title'];
    $content = $currentArticle['content'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if (strlen($title) === 0 or strlen($content) === 0) {
        $err = "Fill in all fields";
    } else {
        editArticle((int)$_COOKIE['idOfSelectedArticle'], $title, $content);
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

	<input type="submit" value="Change article">
	<br>
	<br>

	<p class="err"><?= $err ?></p>
</form>
<hr>
<a href="index.php">Move to main page</a>