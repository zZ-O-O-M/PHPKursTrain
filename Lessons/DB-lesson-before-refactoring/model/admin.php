<?php

include_once 'apps.php';
$apps = getApps();

?>

<table>
	<tr>
		<td>Date</td>
		<td>Name</td>
		<td>Phone</td>
	</tr>
    <? foreach ($apps as $app): ?>
			<tr>
				<td><?= $app['dt'] ?></td>
				<td><?= $app['name'] ?></td>
				<td><?= $app['phone'] ?></td>
			</tr>
    <? endforeach; ?>
</table>
