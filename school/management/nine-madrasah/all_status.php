<?php
	include'../elements/simpleheader.php';
	include 'query_function.php';
	$sl = 1;
	
	if(isset($_POST['document'])){
			header("Content-type: application/vnd.ms-word");
			$filename = "allstatus.doc";
			header("Content-Disposition: attachment; Filename =".$filename);
		}
?>
</br>
	<form action="" method="post">
	<div class="row">
		<h3 class="text-center pra"><?php echo $ses['school_name']?></h3>
	</div>
	<div class="row">
		<h4 class="text-center pra"><?php echo $setting['semester']." Examination ".$setting['year']?></h4>
		<h5 class="text-center pra">Class Nine Result Sheet</h5>
	</div>
	<div class="container">
		<table class="table table-bordered container">
			<thead>
				<tr>
					<th class="text-center">Sl No</th>
					<th>Name</th>
					<th class="text-center">Roll</th>
					<th class="text-center">Group</th>
					<th class="text-center">GPA</th>
					<th class="text-center">Grade</th>
					<th class="text-center">Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center text-info" colspan="7"><b style="font-size: 20px;">Passed Student</b></td>
				</tr>
				<?php while($sl <= $resultp){ while($rowp = mysqli_fetch_array($exep)){?>
					<tr>
						<td class="text-center"><?php echo $sl ?></td>
						<td><?php echo $rowp['name']?> </td>
						<td class="text-center"><?php echo $rowp['roll']?> </td>
						<td class="text-center"><?php echo $rowp['department']?></td>
						<td class="text-center"><?php echo $rowp['gpa']?> </td>
						<td class="text-center"><?php echo $rowp['gread']?> </td>
						<td class="text-center"><?php echo $rowp['status']?> </td>
					</tr>
				<?php ++$sl;} } ?>
				<tr >
					<td class="text-center text-danger" colspan="7" ><b style="font-size: 20px;">Reffard Students</b></td>
				</tr>
				<?php while($sl <= $total){ while ( $rowr = mysqli_fetch_array($exer)) { ?>
					<tr>
						<td class="text-center"><?php echo $sl ?></td>
						<td><?php echo $rowr['name']?></td>
						<td class="text-center"><?php echo $rowr['roll']?></td>
						<td class="text-center"><?php echo $rowr['department']?></td>
						<td class="text-center"><?php echo $rowr['gpa']?></td>
						<td class="text-center"><?php echo $rowr['gread']?></td>
						<td class="text-center"><?php echo $rowr['status']?></td>
					</tr>
				<?php ++$sl;} }?>
			</tbody>	
			<tfoot>
				<tr>
					<th class="text-center" colspan="2"><?php printf("Total student is = %d",$total)?></th>
					<th class="text-center" colspan="2"><?php if($resultr < 1 ){
						printf("All student is passed No Reffard");
					}else{
						printf("Total Reffard is = %d",$resultr);
					} ?></th>
					<th class="text-center" colspan="3"><?php if($resultp != 0){
						printf("Total Passed is = %d",$resultp);
					}else{
						echo "ALl Student is Reffard";
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
		<input type="submit" name="document" class="btn btn-block btn-success form-control"  value="Download Doc file">
	</div>
	</form>