<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DataFromModel</title>
</head>
<body>
	<h1>Subject List</h1>
	<ul>
		<?php foreach($subjects as $sub):?>
			<li><?= $sub['subject']; ?>-<?= $sub['abbr']; ?></li>
		<?php endforeach;?>
	</ul>
</body>
</html>