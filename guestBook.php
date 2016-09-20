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
	<?php
			if($firstname != "" && $lastname != "") {
				$fileHandler = fopen("info.txt", 'a');
				fwrite($fileHandler, $firstname . " " . $lastname . " ");
				fclose($fileHandler);
			
				$getInfo = fopen("info.txt", 'r');
				$output = fgets($getInfo);
				fclose($getInfo);
			
				$items = explode(" ", $output);
			
				echo "<table id='guestNames'>";
				echo "<tr>";
				echo "<th>First Name</th>";
				echo "<th>Last Name</th>";
				echo "</tr>";
				echo "<tbody>";
			
				for($x=0; $x<(count($items)-1); $x+=2) {
					echo "<tr>";
					echo "<td style='font:impact'>" . $items[$x] . "</td>";
					echo "<td>" . $items[($x+1)] . "</td>";
					echo "</tr>";
				}
				echo "</tbody>";
				echo "</table>";
			} else {
				echo "<p style='color:red; font-size:1.25em'>Your entry did not register. Please enter your first and last name.</p>";
			}
		?>
	<article id="registry">
		<?php
			$firstlower = strtolower($firstname);
			$lastlower = strtolower($lastname);
			$firstchar = substr($firstlower, 0, 1);
			$correctname = ucfirst($firstlower);
			
			if($firstname != "" && $lastname != "") {
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
			}
		?>
	</article>
	<footer>
		<p>Heidi Clinger &#9830; CIS166AE &#9830; Class 20435</p>
	</footer>
	</body>
</html>