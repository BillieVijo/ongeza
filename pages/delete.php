<?php 
include '../process/connection.php';

	if (isset($_GET["id"]) ) {
		$id = $_GET['id'];
		$q = "UPDATE  `customer` SET is_deleted = 1 WHERE id = '$id'" ;
		mysqli_query($con,$q);

	?> 
		<script>
			alert('Customer Deleted!!!..');
			window.location.href= 'view.php';
		</script> 
	<?php 	
	}			
		
	 ?>