<?php

include_once('functions.php');
$articles = getArticles();

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

<div class="articles">
  <? foreach ($articles as $id => $article): ?>
    <div class="article">
      <h2><?= $article['title']?></h2>
      <a href="article.php?id=<?=$article['id']?>">Read more</a>
    </div>
  <? endforeach; ?>
</div>

</body>
</html>

