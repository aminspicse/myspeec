<?php 
	include '../elements/simpleheader.php';
	if(isset($_POST['classs'])){
		$classs = $_POST['classs'];
		$department = $_POST['department'];
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$table = $_POST['table'];
		$admin_id = $_POST['admin_id'];
		
		$sql = "SELECT * FROM $table WHERE admin_id = '$admin_id' and semester = '$semester' and year = '$year' and classs = '$classs' and delete_status = '0' ORDER BY roll ASC";
		$exe = $conn->query($sql);
		$result = $exe->num_rows;
		//echo $result;
		$sl = 1;
	}
?>
<div class="container">
		<table class="table table-bordered container">
			<thead>
				<th class="text-center">Sl No</th>
				<th>Name</th>
				<th class="text-center">Roll</th>
				<th class="text-center">Group</th>
				<th class="text-center">GPA</th>
				<th class="text-center">Grade</th>
				<th class="text-center">Status</th>
				<th class="text-center">Action</th>
			</thead>
			<tbody>
				<?php if($result > 0){ while($sl <= $result){ while ( $row = $exe->fetch_assoc()) { ?>
					<tr>
						<td class="text-center"><?php echo $sl ?></td>
						<td><?php echo $row['name']?></td>
						<td class="text-center"><?php echo $row['roll']?></td>
						<td class="text-center"><?php echo $row['department']?></td>
						<td class="text-center"><?php echo $row['gpa']?></td>
						<td class="text-center"><?php echo $row['gread']?></td>
						<td class="text-center"><?php echo $row['status']?></td>
						<td>
							<a href="view.php?uniqid=<?php echo $row['id']?>" class="label label-info" target="_blank">View</a>
							<a href="edit.php?uniqid=<?php echo $row['id']?>" class="label label-success" target="_blank">Edit</a>
							<a href="delete.php?uniqid=<?php echo $row['id']?>?table=<?php echo $table?>" class="label label-danger"target="_blank">Delete</a>
							<a href="download.php?uniqid=<?php echo $row['id']?>" class="label label-default" target="_blank">Download</a>
						</td>
					</tr>
				<?php ++$sl;} } }else{ echo "<tr><td colspan='8' class='text-center'>Data Not Found</td></tr>";}?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="8" class="text-center"><?php printf("Total Student = %d",$result)?> </th>
					
				</tr>
				<tr>
					<th colspan="8" class="text-center">Powered By PicoSoft Technology Ltd.</th>
				</tr>
			</tfoot>		
		</table>
	</div>