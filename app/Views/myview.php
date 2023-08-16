<!DOCTYPE html>
<html>
<head>
	<title><?= $page_title;?></title>
</head>
<body>
	<h1><?= $page_heading;?></h1>
	<h3>Subjects List</h3>

		<ul>
			<?php
				if(count($subjects)>0):
					foreach($subjects as $sub):
			?>
			<li><?= $sub;?></li>
			<?php
				endforeach;
				else:
					echo "Sorry! No records found.";
				endif;
			?>



			<!-- <?php
			if(count($subjects)>0)
				{
					foreach($subjects as $sub){
						echo "<li>".$sub."</li>";
					}
				}
				else
				{
					echo "<p>Sorry no records found.</p>";

				}
			?> -->
		</ul>
	</body>
</html>