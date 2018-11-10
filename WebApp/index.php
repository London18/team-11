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
				<a href="/logout.php"><h5 align="right">Logout (username)</h5></a> <?php
			} else { ?>
				<a href="/login.php"><h5 align="right">Login</h5> </a> <?php
			} ?>		
	</head>

	<body>
		<h3>Julia's House - Home page</h3>
		
		
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Name</th>
					<th scope="col">Start Time</th>
					<th scope="col">End Time</th>
					<th scope="col">Location</th>
					<th scope="col">Notes</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Jack</td>
					<td>9am</td>
					<td>10am</td>
					<td>53 Bank Lane, PO2 3OP</td>
					<td>Going to the park</td>
				</tr>
				<tr>
					<td>Jeek</td>
					<td>11am</td>
					<td>1pm</td>
					<td>43 Lane Street, DY6 9ED</td>
					<td>Give medication @ 12pm</td>
				</tr>
				<tr>
					<td>Chris</td>
					<td>2pm</td>
					<td>6pm</td>
					<td>295 Street Avenue, LE2 0PE</td>
					<td>N/A</td>
				</tr>
			</tbody>
		</table>
		
		
		<form method="post">
			<input type="submit" name="OMW" id="omw" value="On my way"/>
			<input type="submit" name="Arrived" id="arrvied" value="Arrived"/>
			<input type="submit" name="Finished" id="finished" value="Finished"/>
			
		</form>
	</body>

</html>