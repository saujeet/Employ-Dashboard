<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{page_title}</title>
</head>
<body>
	<h1>{page_heading}</h1>
	<h2>An example of Loop Substitutions</h2>

		{subjects_list}
		<div>
			<h3>{subject}</h3>
			<p>{abbr}</p>
		</div>
		{/subjects_list}

		{if $status}
		<h3>Passed using status</h3>
		{endif}

</body>
</html>