<?php 
	require_once 'connection.php'; 
	require_once 'register_customer.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ongeza - Register</title>
	<p><a href="index.php">Go back Home</a></p>
	<script type="text/javascript">
		function validateForm() {
		  var x = document.forms["myForm"]["fn"].value;
		  if (x.length < 3) {
		    var err = "Firstname Must be atleast 3 character long";
		    document.getElementById('res').innerHTML = err;
		    return false;
		  }else{
		  	document.getElementById('res').innerHTML = "";
		  }
		}
	</script>
</head>
<body>
	<h1>ONGEZA Register Customer</h1>
	<form action="" method="POST" name="myForm">
		<label for="first_name">Firstname:</label>
		<input type="text" name="fn" id="fn" placeholder="Firstname" onkeyup="return validateForm();" required>
		<div id="res" style="color:red;"></div><br><br>

		<label for="last_name">Lastname:</label>
		<input type="text" name="ln" id="ln" placeholder="Lastname" required>
		<br><br>

		<label for="town_name">Town name:</label>
		<input type="text" name="tn" id="tn" placeholder="Town name" required>
		<br><br>

		<label for="gender">Gender</label>
		<select name="gender" id="gender">
			<option value="0">Choose Gender</option>
			<?php 
				//fetching data from gender table
				$q = "SELECT * FROM gender";
				$res = mysqli_query($con,$q);
				while ($data = mysqli_fetch_assoc($res)) {
					?>
						<option value="<?php echo $data['id']; ?>"><?php echo $data['gender_name']; ?></option>
				<?php
				}
			 ?>
		</select>
		<br><br>
		<input type="submit" name="reg" value="REGISTER">

	</form>
</body>
</html>