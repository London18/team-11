<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="/styles/home.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
		<title>Julia's House - Admin Panel</title>
	</head>

	<body>
	
	<?php if (!isset($_COOKIE['authenticated'])) {
				setcookie("authenticated", "no", (time()+3600));
			}
		
			if ($_COOKIE['authenticated'] == "6RgEzmVsVuetll0roQ0w") { ?>
				<a href="/logout.php"><h5 align="right">Logout (username)</h5></a>
				
	
	
	
	
	
	
	
	
	
	
	
	
	
				<a href="/indexManager.php">
					<img src = "juliashouse_icon.jpg" class="home-btn" href="index.php">
				</a>
				<h3>Julia's House - Admin Panel</h3>
				<div>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">Name</th>
								<th scope="col">Status</th>
								<th scope="col">Contact</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Sally Dango</td>
								<td>Very Late</td>
								<td><a href="tel:07482603961">Phone</a> or <a href="mailto:sallydango@email.net">E-Mail</a></td>
							</tr>
							<tr>
								<td>Darren Harden</td>
								<td>Late</td>
								<td><a href="tel:07387916501">Phone</a> or <a href="mailto:darrenharden@email.biz">E-Mail</a></td>
							</tr>
							<tr>
								<td>Chris Melner</td>
								<td>Traveling</td>
								<td><a href="tel:07092884514">Phone</a> or <a href="mailto:chrismelner@email.xyz">E-Mail</a></td>
							</tr>
							<tr>
								<td>Ganis James</td>
								<td>Working</td>
								<td><a href="tel:07714581769">Phone</a> or <a href="mailto:ganisjames@email.net">E-Mail</a></td>
							</tr>
							<tr>
								<td>Jimmy Johnson</td>
								<td>Home</td>
								<td><a href="tel:07514862516">Phone</a> or <a href="mailto:jimmyjohnson@email.net">E-Mail</a></td>
							</tr>

						</tbody>
					</table>
				</div>
				
				<form method="post" class="col-sm-12">
					<input type="submit" name="Add New Sit" id="add" value="Added" class = "btn btn-primary"/>
					<input type="submit" name="Edit Sit" id="edit" value="Edited" class = "btn btn-primary"/>
					<input type="submit" name="Contact Carer" id="contact" value="Contacted" class = "btn btn-primary"/>
					<input type="submit" name="submit" id="submit" value="Submit" class = "btn btn-primary float-right"/>
				</form>
			
				<?php 
				function sit_added() {
					echo("New Sit Added");
				}
				
				function sit_edited() {
					echo("Edited sit");
				}
				
				function sit_contact() {
					echo("Contact Carer");
				}
				
				function submit() {
					echo("Changes saved (not)");
				}
				
				if (array_key_exists("add", $_POST)) {
					sit_added();
				} else if (array_key_exists("edit", $_POST)) {
					sit_edited();
				} else if (array_key_exists("contact", $_POST)) {
					sit_contact();
				} else if (array_key_exists("submit", $_POST)) {
					submit();
				}
				
				
				
				
				
		} else { ?>
			<a href="/login.php"><h5 align="center">Not authenticated, please login here first.</h5> </a> <?php
		} ?>			
	</body>

</html>