<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Heidi Clinger</title>
	<link rel="stylesheet" type="text/css" href="heidi.css" />
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
</head>

<body>
	<header>
		<h1>Ficticious Name</h1>
	</header>
	<nav>
		<ul>
			<li>Home</li>
			<li>Link</li>
			<li>Link</li>
		</ul>
	</nav>
	<article>
		<?php
			//Using echo on a single lines by concatenating
			echo '<p id="date">Today is ' . date('l F jS, Y') . '.</p>';
			
			//Using echo on separate lines
			echo '<h2>Welcome!</h2>';
			echo '<p id="thankYou">Thank you for visiting!</p>';
		?>
	</article>
	<footer>
		<p>Heidi Clinger &#9830; CIS166AE &#9830; Class 20435</p>
	</footer>
</body>
</html>