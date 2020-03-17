<?php 
	//register customer mechanism
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

	//update customer mechanism
	if (isset($_POST['update'])) {
		$fn1 = $_POST['fn'];
		$ln1 = $_POST['ln'];
		$idd = $_POST['idd'];
		$tn1 = $_POST['tn'];
		$gender1 = $_POST['gender'];

		$qq = "UPDATE `customer` SET first_name = '$fn1', last_name = '$ln1', town_name = '$tn1' , gender_id = '$gender1' WHERE  id = '$idd' ";
		$ress = mysqli_query($con,$qq) or die(mysqli_error($con));
		?> 
			<script>
				alert('Customer Info Updated!!!..');
				window.location.href= 'view.php';
			</script> 
		<?php 
	}


 ?>