<!DOCTYPE html>
<html lang="fa">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Home Page</title>
</head>

<body>
	<?php



	require_once("connection.php"); # import the connection file
	$seSql = "select * from mock_data where gender = 'Male' and id < 300"; # sql code for select data from database
	$result = $conn->query($seSql); # run the sql code

	?>
	<div class="container">

		<table>
			<thead> 
				<tr>
					<th>id</th>
					<th>first name</th>
					<th>last name</th>
					<th>email</th>
					<th>gender</th>
					<th>ip address</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($data = $result->fetchObject()) { # make a loop for show data in table 

				?>
					<tr>
						<td><?php echo $data->id; ?></td> 
						<td><?php echo $data->first_name; ?></td>
						<td><?php echo $data->last_name; ?></td>
						<td><?php echo $data->email; ?></td>
						<td><?php echo $data->gender; ?></td>
						<td><?php echo $data->ip_address; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>

</html>