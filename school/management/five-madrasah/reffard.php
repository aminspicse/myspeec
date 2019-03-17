<?php
	include '../elements/simpleheader.php';
	$sesid = $ses['id'];
	//echo $sesid;

	//$query_setting = "SELECT * FROM setting WHERE user_id = $sesid";
	//$setting = mysqli_fetch_array(mysqli_query($con, $query_setting));
	$semester = $setting['semester'];
	$year = $setting['year'];

	$sql = "SELECT * FROM five_madrasah WHERE admin_id = '$sesid' and semester = '$semester' and year = '$year' and classs = 'Five' and status = 'Reffard' and delete_status = '0' ORDER BY roll ASC";
	$exe = mysqli_query($con, $sql);
	$result = mysqli_num_rows($exe);
	//printf("%d", $result);
	$sql1 = "SELECT * FROM five_madrasah WHERE admin_id = '$sesid' and semester = '$semester' and year = '$year' and classs = 'Five' and delete_status = '0'";
	$exe1 = mysqli_query($con, $sql1);
	$total = mysqli_num_rows($exe1);
	//$num = ("%d",$result);
	$sl = 1;
	//echo var_dump($result['id']);
	
	if(isset($_POST['document'])){
			header("Content-type: application/vnd.ms-word");
			$filename = "reffard.doc";
			header("Content-Disposition: attachment; Filename =".$filename);
		}
?>
</br>
	<form action="" method="post">
	<div class="row">
		<h3 class="text-center pra"><?php echo $ses['school_name']?></h3>
	</div>
	<div class="row">
		<h4 class="text-center pra"><?php echo $setting['semester']." Examination ".$setting['year'] ?></h4>
		<h5 class="text-center pra">Class Five <small> (List of Reffard)</small></h5>
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
				<?php while($sl <= $result){ while ( $row = mysqli_fetch_array($exe)) { ?>
					<tr>
						<td class="text-center"><?php echo $sl ?></td>
						<td><?php echo $row['name']?></td>
						<td class="text-center"><?php echo $row['roll']?></td>
						<td class="text-center"><?php echo $row['department']?></td>
						<td class="text-center"><?php echo $row['gpa']?></td>
						<td class="text-center"><?php echo $row['gread']?></td>
						<td class="text-center"><?php echo $row['status']?></td>
					</tr>
				<?php ++$sl; } }?>
			</tbody>	
			<tfoot>
				<tr>
					<th class="text-center" colspan="3"><?php printf("Total student is = %d",$total)?></th>
					<th class="text-center" colspan="4"><?php if($result < 1 ){
						printf("All student is passed No Reffard");
					}else{
						printf("Total Reffard is = %d",$result);
					} ?></th>
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
		<input type="submit" name="document" class="btn btn-block btn-success form-control"  value="Download">
	</div>
	
	</form>