<h1>Chat</h1>
<br>
<a href="add.php" style="color: blue; text-decoration: none">add message</a>
<br>
<br>
<a href="index.php" style="color: blue; text-decoration: none">View as list</a>
<br>
<br>
<table>
    <? foreach ($messages as $message): ?>
			<tr>
				<td class="name"><?= $message['name'] ?></td>
				<td class="time"><?= $message['dt_add'] ?></td>
				<td class="text"><?= $message['text'] ?></td>
			</tr>
    <? endforeach; ?>
</table>
