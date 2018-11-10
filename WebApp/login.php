<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Julia's House - Login</title>
	</head>

	<body>	
		<div class="center">
		<img src="julia'sHouseIcon2.jpg">
			<form method="post">
				Staff ID: <input type="text" name="staffid" placeholder="Staff ID" class="btn btn-secondary"> <br>
				Password: <input type="password" name="password" placeholder="Password"> <br>
				<input type="submit">
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