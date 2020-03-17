<?php include 'header.php'; ?>

<div class="row">
	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Town Name</th>
                <th>Gender</th>                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
			$q = "SELECT c.`id`,c.`first_name`,c.`last_name`,c.`town_name`,g.`gender_name` FROM `customer` as c,`gender` as g WHERE c.`gender_id` = g.`id` AND c.`is_deleted` = 0 ";
			$res = mysqli_query($con,$q);
			while ($data = mysqli_fetch_assoc($res)) {
				?>
				<tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['first_name']; ?></td>
				<td><?php echo $data['last_name']; ?></td>
				<td><?php echo $data['town_name']; ?></td>
				<td><?php echo $data['gender_name']; ?></td>
				<td width="15%">
					<a href="update.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil fa-fw"></i></a>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete  this customer?')"><i class="fa fa-trash fa-fw"></i></a>
                    
                </td>
				</tr>
		<?php
			}
		?>        
        </tbody>
    </table>    
</div>

<?php include 'footer.php'; ?>