<? include "views/base/v_header.php"; ?>
<main>
	<h1>Chat</h1>
	<br>
	<a href="index.php?c=add" style="color: blue; text-decoration: none">add message</a>
	<br>
	<br>
	<a href="index.php?view=table" style="color: blue; text-decoration: none">View as table</a>
	<br>
	<br>
	<div>
      <? foreach ($messages as $message): ?>
				<div>
					<div class="name"><?= $message['name'] ?></div>
					<div class="time"><?= $message['dt_add'] ?></div>
					<div class="text"><?= $message['text'] ?></div>
					<a href="index.php?c=message&id=<?= $message['id_message'] ?>" style="color: blue; text-decoration: none">View
						message</a>
					<br>
					<hr>
				</div>

      <? endforeach; ?>
	</div>
</main>
<? include "views/base/v_footer.php"; ?>
