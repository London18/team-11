<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Julia's House - Logout</title>
	</head>

	<body>		
		<?php 
			setcookie("authenticated", "loggedout", (time()+14400));
			Header("Location: /");		
		?>
	</body>	
</html>