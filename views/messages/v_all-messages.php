<main>
	<h1>Chat</h1>
	<br>
	<a href="<?= BASE_URL ?>add" style="color: blue; text-decoration: none">add message</a>
	<br>
	<br>
	<a href="<?= BASE_URL ?>?view=table" style="color: blue; text-decoration: none">View as table</a>
	<br>
	<br>
	<div>
      <? foreach ($messages as $message): ?>
				<div>
					<div class="name"><?= $message['name'] ?></div>
					<div class="time"><?= $message['dt_add'] ?></div>
					<div class="text"><?= $message['text'] ?></div>
					<a href="<?= BASE_URL ?>message&id=<?= $message['id_message'] ?>" style="color: blue; text-decoration: none">View
						message</a>
					<br>
					<hr>
				</div>

      <? endforeach; ?>
	</div>
</main>
