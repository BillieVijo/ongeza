<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>ONGEZA - view customers</title>
</head>
<body>
	<h1>ONGEZA customer view</h1>
	<p><a href="index.php">Go back Home</a></p>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Fisrt Name</th>
			<th>Last Name</th>
			<th>Town Name</th>
			<th>Gender</th>
		</tr>
		
			<?php 
				// $q = "SELECT * FROM `customer` ";
				$q = "SELECT c.`id`,c.`first_name`,c.`last_name`,c.`town_name`,g.`gender_name` FROM `customer` as c,`gender` as g WHERE c.`gender_id` = g.`id`";
				$res = mysqli_query($con,$q);
				while ($data = mysqli_fetch_assoc($res)) {
					?>
					<tr>
					<td><?php echo $data['id']; ?></td>
					<td><?php echo $data['first_name']; ?></td>
					<td><?php echo $data['last_name']; ?></td>
					<td><?php echo $data['town_name']; ?></td>
					<td><?php echo $data['gender_name']; ?></td>
					</tr>
					<?php
				}
			?>
		
	</table>
</body>
</html>