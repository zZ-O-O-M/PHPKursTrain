<? foreach ($articles as $id => $article): ?>
  <div class="article">
    <h2><?= $article['title']?></h2>
  </div>
<? endforeach; ?>

<!--Сокращение от --><?php //echo ... ?>
<h2><?= $article['title']?></h2>
