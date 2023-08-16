<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User List</title>
</head>
<body>
	<h1>Contact List</h1>
	<?php if(!empty($users)):?>
		<table border="1">
			<tr>
				<th>UserID</th>
				<th>UserName</th>
				<th>Email</th>
				<th>Mobile</th>
			</tr>
			<?php foreach($users as $user): ?>
			<tr>
				<th><?= $user->id; ?></th>
				<th><?= $user->username; ?></th>
				<th><?= $user->email; ?></th>
				<th><?= $user->mobile; ?></th>
			</tr>
		<?php endforeach;?>
		</table>

	<?php else:?>
		<h1>No records found</h1>
	<?php endif?>
</body>
</html>