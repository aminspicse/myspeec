<?php
	include '../elements/simpleheader.php';
	
	$semester = $setting['semester'];
	$year = $setting['year'];

	$sesid = $ses['id'];
	
	//echo $sesid;
	$sql2 = "SELECT * FROM three_madrasah WHERE admin_id = '$sesid' and semester = '$semester' and status = 'Passed' and year = '$year' and classs = 'Three' and delete_status = 0 ORDER BY gpa DESC, total_mark DESC";
	$exe2 = mysqli_query($con, $sql2);
	$result = mysqli_num_rows($exe2);
	
	//$num = ("%d",$result);
	$sql1 = "SELECT * FROM three_madrasah WHERE admin_id = '$sesid' and semester = '$semester' and year = '$year' and classs = 'Three' and delete_status = 0";
	$exe1 = mysqli_query($con, $sql1);
	$total = mysqli_num_rows($exe1);
	$sl = 1;
	//echo var_dump($result['id']);
	if(isset($_POST['document'])){
			header("Content-type: application/vnd.ms-word");
			$filename = "passed.doc";
			header("Content-Disposition: attachment; Filename =".$filename);
		}
?>
	<form action="" method="post">
	<div class="row">
		<h3 class="text-center pra" ><?php echo $ses['school_name']?></h3>
	</div>
	<div class="row">
		<h4 class="text-center pra"><?php echo $setting['semester']." Examination ".$setting['year'] ?></h4>
		<h5 class="text-center pra">Class Three<small> (List of Passed)</small></h5>
	</div>
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
			</thead>
			<tbody>
				<?php while($sl <= $result){ while ( $row = mysqli_fetch_array($exe2)) { ?>
					<tr>
						<td class="text-center"><?php echo $sl ?></td>
						<td><?php echo $row['name']?></td>
						<td class="text-center"><?php echo $row['roll']?></td>
						<td class="text-center"><?php echo $row['department']?></td>
						<td class="text-center"><?php echo $row['gpa']?></td>
						<td class="text-center"><?php echo $row['gread']?></td>
						<td class="text-center"><?php echo $row['status']?></td>
					</tr>
				<?php ++$sl;} }?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="3" class="text-center"><?php printf("Total Student = %d",$total)?> </th>
					<th colspan="4" class="text-center"><?php if ($result == $total){
						printf("All Student is Passed No Reffard");
					}else{
						printf("Successfully Passed = %d", $result);
					} ?> </th>
				</tr>
				<tr>
					<th colspan="7" class="text-center">Powered By PicoSoft Technology Ltd.</th>
				</tr>
			</tfoot>		
		</table>
	</div>
	<div class="col-md-3 col-md-offset-3">
		<input type="button" name="" class="btn btn-block btn-success form-control" onClick="window.print()" value="print This Report">
	</div>
	<div class="col-md-3">
		<input type="submit" name="document" class="btn btn-block btn-success form-control" value="Download">
	</div>
	</form>