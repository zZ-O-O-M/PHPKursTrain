<? include "views/base/v_main.php"; ?>

<div class="form">

	<form class='appForm' method="post">
		Name: <br>
		<input type="text" name="name" value="<?= $fields['name'] ?>"><br>
		Text: <br>
		<textarea name="text"><?= $fields['text'] ?></textarea> <br>
		<button>send</button>
		<div class="error-list">
        <? if (!empty($validateErrors)) {
            foreach ($validateErrors as $error): ?>
							<p><?= $error ?></p>
						<? endforeach;
        } ?>
		</div>
	</form>

</div>

<? include "views/base/v_footer.php"; ?>

