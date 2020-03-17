<?php include 'header.php'; ?>

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
	<h1 align="center">Update Customer Infomation</h1>
	<?php 
		if(isset($_GET["id"]))
        {
            $id = $_GET['id'];
            $q = "SELECT * FROM `customer` WHERE id ='$id'";
            $res = mysqli_query($con,$q);
            while ($d = mysqli_fetch_assoc($res)) {
            
	 ?>
	<form action="" method="POST" name="myForm">
		<div class="form-group row">
		    <label for="name" class="col-sm-2 col-md-offset-2 col-form-label">Customer Name:</label>				    
		    <div class="col-sm-3">
		      <input type="text" value="<?php echo $d['first_name']; ?>" class="form-control" id="fn" name="fn" placeholder="First name" onkeyup="return validateForm();" required>
		      <span id="res" style="color:red;"></span>
		    </div>	
		    <div class="col-sm-3">
		      <input type="text" value="<?php echo $d['last_name']; ?>" class="form-control" id="ln" name="ln" placeholder="Last name" required>
		    </div>		    
		</div>	
		<div class="form-group row">
		    <label for="tname" class="col-sm-2 col-md-offset-2 col-form-label">Town Name:</label>				    
		    <div class="col-sm-6">
		      <input type="text" value="<?php echo $d['town_name']; ?>" class="form-control" id="tn" name="tn" placeholder="Town name" required>
		    </div>	
		    	    
		</div>	
		<div class="form-group row">
		    <label for="gender" class="col-sm-2 col-md-offset-2 col-form-label">Gender:</label>
		    <div class="col-sm-3">
		    
		    <select id="gender" name="gender" class="form-control">
		        <option value="0">Choose...</option>
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
		    </div>
		    <div class="col-sm-3">
		    	<input type="text" value="<?php echo $id; ?>" name="idd" style="visibility:hidden;">
		    </div>
		    	    
		</div>
		<div class="form-group row">	
		    <div class=" form-group col-md-3 col-md-offset-4">
		    	<label></label>
		    	<button type="submit" name="update" class="form-control btn btn-success">REGISTER</button>
		    </div>			    
		 </div>
		

	</form>
	<?php 
		}
	}
	 ?>
<?php include 'footer.php'; ?>