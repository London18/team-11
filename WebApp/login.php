<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="/styles/login.css">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<title>Julia's House - Login</title>
		
		<img src = "juliashouse_icon.jpg" class="home-btn" link="/index.php">
	</head>

	<body>	
		<div align="center">
		<img src="julia'sHouseIcon2.jpg">
		
			<form method="post">
				Staff ID: <input type="text" name="staffid" placeholder="Staff ID" class="mb-2 ml-3">
				</br>
				Password: <input type="password" name="password" placeholder="Password" class="mb-2">
				</br>
				<input type="submit" class="btn btn-primary">
			</form>
			
			<?php 
			if (isset($_POST["staffid"])) { 
				if ($_POST["staffid"] == "test" && $_POST["password"] == "123") {
					setcookie("authenticated", "6RgEzmVsVuetll0roQ0w", (time()+3600));	
					Header("Location: /");
				} else { ?>
					<p class="text-danger">Invalid login, please try again.</p>
				<?php } 	
			}
		?>
		</div>
			
	</body>	
	
</html>