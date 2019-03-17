<?php 
	$conn = mysqli_connect("localhost","root","","jgtdsl");
	if(isset($_POST['submit'])){
		$area_code 		= $_POST['area_code'];
		$area_name	 	= $_POST['area_name'];
		$bank_name 		= $_POST['bank_name'];
		$branch_name 	= $_POST['branch_name'];
		$bank_code 		= $_POST['bank_code'];
		
		$sql = "INSERT INTO jgtdsl_bank(area_code,area_name, bank_name, branch_name, bank_code) values('$area_code','$area_name', '$bank_name', '$branch_name', '$bank_code')";
		$conn->query($sql);
		
	}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>JGTDSL Bank List</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />

</head>
<body class="container">
	<h1 class='text-center'>Active Bank Account List of JGTDSL</h1>
	<form action="" class="form-inline" method="post">
		<div class="row">
			<div class="col-md-3">
				<label for="">Area Code: </label>
				<input type="text" name="area_code" required class="form-control" />
			</div>
			<div class="col-md-3">
				<label for="">Area Name: </label>
				<input type="text" name="area_name" required class="form-control" />
			</div>
			<div class="col-md-6">
				<label for="">Bank Name: </label>
				<input type="text" name="bank_name" required class="form-control" />
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-3">
				<label for="">Branch : </label>
				<input type="text" name="branch_name" required class="form-control" />
			</div>
			<div class="col-md-4">
				<label for="">Bank Account/Code: </label>
				<input type="text" name="bank_code" class="form-control" />
			</div>
			<div class="col-md-1">
				<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
			</div>
			
		</div>
	</form>
	<div class="col-md-2">
				<form action="jgtdsl_bank_pdf.php" method="GET">
				
				<input type="submit" name="download" class="btn btn-info btn-lg" value="Download" />
				</form>
			</div>
	<br />
	<br />
	<br />
	
	<?php 

	$sql = "SELECT * FROM jgtdsl_bank ORDER BY area_code ASC";
	$exe = $conn->query($sql);
	//$row = $exe->fetch_assoc();
	//echo $row['area_code'];
?>
<style type="text/css">
	.wd{
		width: 300px;
	}
	.awd{
		width: 150px;
	}
</style>
	<table class="table-bordered table-striped">
		<tr>
			<th class="text-center"><h4><b>Area Code</b><h4></th>
			<th class="awd text-center"><h4><b>Area Name</b><h4></th>
			<th class="wd text-center"><h4><b>Bank</b><h4></th>
			<th class="wd text-center"><h4><b>Branch</b><h4></th>
			<th class="text-center" width="120px" ><h4><b>Bank Code</b><h4></th>
		</tr>
		<?php while($row = $exe->fetch_assoc()){?>
		<tr>
			<td class="text-center"><h4><?= $row['area_code']?></h4></td>
			<td><h4><?= $row['area_name']?></h4></td>
			<td><h4><?= $row['bank_name']?></h4></td>
			<td><h4><?= $row['branch_name']?></h4></td>
			<td class="text-center"><h4><?= $row['bank_code']?></h4></td>
		</tr>
		<?php }?>
	</table>
</body>
</html>

