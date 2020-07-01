<?php
include_once('model/db.php');
include_once('model/messages.php');

$messages = messagesAll();

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
