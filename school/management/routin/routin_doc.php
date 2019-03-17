<?php 

	include '../elements/simpleheader.php';
	$ses_id = $ses['id'];
	$sql = "SELECT * FROM class_routin WHERE user_id = $ses_id";
	$exe = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($exe);
?>



	<div class="container">
		<div class="row text-center">
			<h2 class="text-center"><?php echo $ses['school_name'] ?></h2>
		</div>
		<form class="form-inline">
			<div class="row">
				<div class="col-md-3">
					
				</div>
			</div>
			<table class="table table-bordered" style="height: 842px; width: 595px; border: 2px; ">
				<thead>
					<tr>
						<th></th>
					</tr>
				</thead>
			</table>
		</form>
	</div>
</body>
</html>