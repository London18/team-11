<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="/styles/home.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
		<title>Julia's House - Home page</title>
		
		
		<?php if (!isset($_COOKIE['authenticated'])) {
				setcookie("authenticated", "no", (time()+3600));
			}
		
			if ($_COOKIE['authenticated'] == "6RgEzmVsVuetll0roQ0w") { ?>
				<a href="/logout.php"><h5 align="right">Logout (username)</h5></a> <?php
			} else { ?>
				<a href="/login.php"><h5 align="right">Login</h5> </a> <?php
			} ?>		
			
	</head>

	<body>
		<h3>Julia's House - Home page</h3>
		<div>
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Name</th>
						<th scope="col">Start</th>
						<th scope="col">End</th>
						<th scope="col">Location</th>
						<th scope="col">Notes</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>get</td>
						<td>9am</td>
						<td>10am</td>
						<td>53 Bank Lane, PO2 3OP</td>
						<td>Going to the park</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Jeek</td>
						<td>11am</td>
						<td>1pm</td>
						<td>43 Lane Street, DY6 9ED</td>
						<td>Give medication @ 12pm</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Chris</td>
						<td>2pm</td>
						<td>6pm</td>
						<td>295 Street Avenue, LE2 0PE</td>
						<td>N/A</td>
						<td>-</td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<form method="post" style="col-sm-12">
			<input type="submit" name="onWay" id="onWay" value="Going" class = "btn btn-primary"/>
			<input type="submit" name="arrived" id="arrvied" value="Arrived" class = "btn btn-primary"/>
			<input type="submit" name="finished" id="finished" value="Finished" class = "btn btn-primary"/>
			<input type="submit" name="submit" id="submit" value="Submit" class = "btn btn-primary float-right"/>
		</form>
	
		<?php 
		function sit_onWay() {
			echo("On way");
		}
		
		function sit_arrived() {
			echo("Arrived");
		}
		
		function sit_finished() {
			echo("Finished");
		}
		
		function submit() {
			echo("Changes saved (not)");
		}
		
		if (array_key_exists("onWay", $_POST)) {
			sit_onWay();
		} else if (array_key_exists("arrived", $_POST)) {
			sit_arrived();
		} else if (array_key_exists("finished", $_POST)) {
			sit_finished();
		} else if (array_key_exists("submit", $_POST)) {
			submit();
		}
		?>
		
		
		
		
		
		
		
	</body>

</html>