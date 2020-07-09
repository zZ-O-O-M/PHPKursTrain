<h1>Chat</h1>
<a href="index.php" style="text-decoration: none; color: red">Main page</a>
<div>
    <? if ($hasMsg): ?>
			<p>Name: <?= $message['name'] ?></p>
			<p>Text: <?= $message['text'] ?></p>
    <? endif; ?>
</div>

