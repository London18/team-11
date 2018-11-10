<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Julia's House - Home page</title>
		
		
		<?php if (!isset($_COOKIE['authenticated'])) {
				setcookie("authenticated", "no", (time()+3600));
			}
		
			if ($_COOKIE['authenticated'] == "6RgEzmVsVuetll0roQ0w") { ?>
				<a href="/logout.php">Logout (username)</a> <?php
			} else { ?>
				<a href="/login.php"> <h5 align="right">Login</h5> </a> <?php
			} ?>		
	</head>

	<body>
		<h3>Julia's House - Home page</h3>
	</body>

</html>