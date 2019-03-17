<?php 
	$conn = mysqli_connect("localhost","root","","spicmt");
	if(isset($_POST['submit'])){
		$name 		= $_POST['name'];
		$roll	 	= $_POST['roll'];
		$reg 		= $_POST['reg'];
		$sess 		= $_POST['sess'];
		$company 	= $_POST['company'];
		$position 		= $_POST['position'];
		
		$sql = "INSERT INTO spicmt(name,roll, reg, sess, company, position) values('$name','$roll', '$reg', '$sess', '$company', '$position')";
		$conn->query($sql);
		
	}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>SPI CMT 13-14</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" />

</head>
<body class="container bg-light">
	<h1 class='text-center' style="margin:0px">Sylhet Polytechnic Institute, Sylhet</h1>
	<h3 class="text-center" style="margin:0px">COMPUTER TECHNOLOGY</h3>
	<h3 class="text-center" style="margin:0px; display:none">COMPUTER TECHNOLOGY</h3>
	<form action="" class="" method="post">
		<div class="row">
			<div class="col-md-3">
				<label for="">Full Name: </label>
				<input type="text" name="name" required class="form-control" placeholder="তুমার নাম" />
			</div>
			<div class="col-md-3">
				<label for="">Roll No: </label>
				<input type="text" name="roll"  required class="form-control" placeholder="তুমার রোল নম্বর" />
			</div>
			<div class="col-md-3">
				<label for="">Reg. No: </label>
				<input type="text" name="reg"  class="form-control" placeholder="তুমার রেজিস্টেশন নম্বর " />
			</div>
			<div class="col-md-3">
				<label for="">Session : </label>
				<select name="sess" class="form-control" id="">
					<option value="13-14">13-14</option>
				</select>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-6">
				<label for="">Company Name : </label>
				<input type="text" name="company" placeholder="তুমি যে কোম্পনিতে চাকুরি কর তার নাম" required class="form-control" />
			</div>
			<div class="col-md-4">
				<label for="">Designation: </label>
				<input type="text" name="position"  class="form-control" placeholder="তুমার পদবী" />
			</div>
			<div class="col-md-1">
				<br />
				<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />
			</div>
			
		</div>
	</form>
	<div class="col-md-2">
				<form action="spicmt_pdf.php" method="GET">
				
				<input type="submit" name="download" class="btn btn-info btn-lg" value="Download" />
				</form>
			</div>
	<br />
	<br />
	<br />
	
	<?php 

	$sql = "SELECT * FROM spicmt ORDER BY roll ASC";
	$exe = $conn->query($sql);
	//$row = $exe->fetch_assoc();
	//echo $row['name'];
?>
<style type="text/css">
	.wd{
		width: 380px;
	}
	.awd{
		width: 150px;
	}
</style>
	<table class="table-bordered table-striped" width="100%">
		<tr>
			<th class="text-center"><h4><b>Name</b><h4></th>
			<th class="awd text-center"><h4><b>Roll</b><h4></th>
			<th class="awd text-center"><h4><b>Reg. No</b><h4></th>
			<th class="text-center" width="120px"><h4><b>Session</b><h4></th>
			<th class=" wd text-center"  ><h4><b>Company</b><h4></th>
		</tr>
		<?php while($row = $exe->fetch_assoc()){?>
		<tr>
			<td class="text-center"><h4><?= $row['name']?></h4></td>
			<td class="text-center"><h4><?= $row['roll']?></h4></td>
			<td class="text-center"><h4><?= $row['reg']?></h4></td>
			<td class="text-center"><h4><?= $row['sess']?></h4></td>
			<td class="text-center"><h4><?= $row['company']?></h4></td>
		</tr>
		<?php }?>
	</table>
</body>
</html>

