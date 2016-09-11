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
			<li><a href="../index.html">Folders</a></li>
			<li><a href="index.php">Home</a></li>
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
		
		<form action="guestBook.php" method="post">
			<fieldset>
				<legend>Guest Book</legend>
				<input type="text" id="firstname" name="firstname" placeholder="First Name"></input>
				<input type="text" id="lastname" name="lastname" placeholder="Last Name"></input>
				<input type="email" id="email" name="email" placeholder="email@address.com"></input>
				<textarea rows="5" name="comment" placeholder="Comments:"></textarea>
				<input type="submit" id="submit" value="Submit" />
			</fieldset>
		</form>	
	</article>
	<footer>
		<p>Heidi Clinger &#9830; CIS166AE &#9830; Class 20435</p>
	</footer>
</body>
</html>