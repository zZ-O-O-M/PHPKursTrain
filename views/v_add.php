<div class="form">

	<form class='appForm' method="post">
		Name: <br>
		<input type="text" name="name" value="<?= $fields['name'] ?>"><br>
		Text: <br>
		<textarea name="text"><?= $fields['text'] ?></textarea> <br>
		<button>send</button>
		<p class="err"><?= $err ?></p>
	</form>

</div>
