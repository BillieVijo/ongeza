<?php 
	if (isset($_POST['reg'])) {
		$fn = $_POST['fn'];
		$ln = $_POST['ln'];
		$tn = $_POST['tn'];
		$gender = $_POST['gender'];

		//prepare query to add new customer
		$q = "INSERT INTO `customer`(first_name,last_name,town_name,gender_id) VALUES('$fn','$ln','$tn','$gender')";
		$res = mysqli_query($con,$q) or die(mysqli_error($con));

		?> 
			<script>
				alert('Customer Added!!!..');
				window.location.href= 'register.php';
			</script> 
		<?php 
	}

 ?>