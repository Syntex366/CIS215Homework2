<!DOCTYPE html>
<!--Daniel Nickerson, CIS 215,-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<link href="Styles/style.css" rel="stylesheet" type="text/css">
		<title></title>
	</head>
		<body>
			<header>

			</header>

				<section>
					<?php
						if (date("H:i") >= "5:00" && date("H:i") < "09:59") {
							echo "Good Morning!";
						} elseif (date("H:i") >= "10:00" && date("H:i") < "15:59") {
							echo "Good Afternoon!";
						} elseif (date("H:i") >= "16:00" && date("H:i") < "22:00") {
							echo "Good Night!";
						} else {
							echo "Sleep Tight!";
						}
					?>
				</section>
			<footer>

			</footer>
		</body>

</html>