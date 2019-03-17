<?php 
//	include 'elements/simpleheader.php';
	include 'config/db_connection.php';

	$sql = "SELECT * FROM admin_teachers";
	$exe = mysqli_query($con, $sql);
//	$row = mysqli_fetch_array($exe);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="row text-center">
		<h2 class="text-center">Our Users</h2>
	</div>

	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>School Name</th>
			<th>Logo</th>
		</tr>
		
		<?php  while ($row = mysqli_fetch_array($exe)) { ?>
		<tr>
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['ceo']?></td>
			<td><?php echo $row['school_name']?></td>
			<td>
				<?php echo'<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" style="heidth: 100px; width: 100px">'  ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

