<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{page_title|lower}</title>
</head>
<body>
	<h1>{page_heading|upper}</h1>
	<p>DOB:{date|date(y-d-m)}</p>
	<p>DOB:{date|date(Y-d-m)}</p>
	<p>DOB:{date|date(l dS F Y)}</p>
	<p>DOB:{date|date_modify(+5days)|date(l dS F Y)}</p>
	<p>Price:{price|local_currency(INR)}</p>
	<h2>Applying Custom Filters</h2>
	<p>Mobile:{mobile|hidenumbers}</p>
	<p>{page_heading} contains {page_heading|vowvelscount} vowels</p>
</body>
</html>