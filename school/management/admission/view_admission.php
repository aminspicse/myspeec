<?php
	include'../elements/simpleheader.php';
	
	$sql = "SELECT * FROM admission WHERE admin_id = '$ses[id]' and delete_status=0";
	$exe = $conn->query($sql);;
?>
	<div class="container-fluid">
		<h2 class="text-center" style="margin-top:0px"><?php echo $ses['school_name']?></h2>
		<h3 class="text-center" style="margin-top:-10px"><u>Admission Information</u></h3>
		<table class="table table-bordered table-hover">
			<tr>
				<th>Roll No</th>
				<th>Student ID</th>
				<th>Name</th>
				<th>Father's Name</th>
				<th>Mobile</th>
				<th>Class</th>
				<th>Photo</th>
				<th class="text-center">Action</th>
			</tr>
			<?php while($row = $exe->fetch_assoc()){?>
				<tr>
					<td><?php echo $row['serial'] ?></td>
					<td><?php echo $row['student_id'] ?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['fname'] ?></td>
					<td><?php echo $row['phone'] ?></td>
					<td><?php echo $row['admission_class'] ?></td>
					<td><img src="<?php echo $row['student_photo'] ?>" alt="" style="height:50px;width:50px"/></td>
					<td>
						<a href="student_view.php?uniqid=<?php echo $row['id']?>" class="label label-info" target="_blank">View</a>
						<a href="student_edit.php?uniqid=<?php echo $row['id']?>" class="label label-success" target="_blank">Edit</a>
						<a href="student_delete.php?uniqid=<?php echo $row['id']?>" class="label label-danger">Delete</a>
						<a href="student_download.php?uniqid=<?php echo $row['id']?>" class="label label-default" target="_blank">Download</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>