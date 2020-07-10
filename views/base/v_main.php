<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../../assets/css/bootstrap.css">
	<title><?= $title ?></title>
</head>
<body>

<header class="site-header">
	<div class="container">
		<div class="logo">
			<div class="logo__title"><h1>My site header</h1></div>
			<div class="logo__subtitle">really my site</div>
			<br>
			<br>
		</div>
	</div>
</header>
<nav class="site-nav">
	<div class="container">
		<ul class="nav">
			<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="index.php?c=add" class="nav-link">Add</a></li>
			<li class="nav-item"><a href="index.php?c=contacts" class="nav-link">Contacts</a></li>
		</ul>
	</div>
</nav>

<div class="site-content">
	<div class="container">
      <?= $content ?>
	</div>
</div>

<br>
<footer style="margin-bottom: 30px;">
	<div class="container">
		<h3>footer</h3>
		$copy; site about all
	</div>
</footer>

</body>
</html>


