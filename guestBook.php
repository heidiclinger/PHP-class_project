<?php
	// create medium variable names
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
?>
<html>
	<head>
		<title>Guest Book Confirmation</title>
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
	<article id="registry">
		<?php
			$firstlower = strtolower($firstname);
			$lastlower = strtolower($lastname);
			$firstchar = substr($firstlower, 0, 1);
			$correctname = ucfirst($firstlower);
			if($firstlower == "scott" && $lastlower == "worthington") {
				echo "<h3>Welcome to my PHP class website!<br /></h3>";
				echo "<p>Hopefully this assignment gets an A<br /></p>";
				echo '<img src="ribbon.png" width=150 height=225 id="ribbon" />';
			}
			elseif($firstlower == "scott") {
				echo "<h3>Salutations, Scott!<br /></h3>";
			}
			elseif($firstchar == "a") {
				echo "<h3>Absolutely amazing to meet you, " . $correctname . "!</h3>";
			}
			elseif($firstchar == "b") {
				echo "<h3>Bonjour, " . $correctname . "!</h3>";
			}
			else {
				echo "<h3>Thank you for checking in!</h3>";
			}
			
			if($firstlower == "scott" && $lastlower == "worthington") {
				echo "<p>Thanks for teaching us PHP,<br />I'm super excited about the class!</p>";
			}
			elseif($comment != "") {
				echo "<p>We have registered the following information: </p>";
				echo "<p>Comment: " . $comment . "</p>";
			}
			else {
				echo "<p>There will be much more to come in the following weeks. <br />";
				echo "We'd love to get your opinion then.</p>";
			}
			
		?>
	</article>
	<footer>
		<p>Heidi Clinger &#9830; CIS166AE &#9830; Class 20435</p>
	</footer>
	</body>
</html>