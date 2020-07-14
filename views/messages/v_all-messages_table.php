<h1>Chat</h1>
<br>
<a href="<?=BASE_URL?>add" style="color: blue; text-decoration: none">add message</a>
<br>
<br>
<a href="<?=BASE_URL?>" style="color: blue; text-decoration: none">View as list</a>
<br>
<br>
<table class="table">
    <? foreach ($messages as $message): ?>
			<tr>
				<td class="name"><?= $message['name'] ?></td>
				<td class="time"><?= $message['dt_add'] ?></td>
				<td class="text"><?= $message['text'] ?></td>
			</tr>
    <? endforeach; ?>
</table>

