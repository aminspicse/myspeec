<?php 
	$con = new mysqli("127.0.0.1","root","","testing");
	if($con->connect_error){
		die("Connect Error".$con->connect_error);
	}else{
		echo "Successfull";
	}
	
	if(isset($_POST['submit'])){
		$division = $_POST['List1'];
		$distic = $_POST['List2'];
		$thana = $_POST['List3'];
		
		$sql = "INSERT INTO testp(division, distic, thana)VALUES('$division', '$distic','$thana')";
		$result = $con->query($sql);
		if(!$result){
			echo "Problem";
		}else{
			echo "Successfull";
		}
	}
?>
<html>
	<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<script type="text/javascript" src="location.js"></script>
		<script type="text/javascript">
		
		</script>
	</head>

	<body>
		<form action="" class="form-inline" method="post">
			<select name='List1' class="form-control" onchange="fillSelect(this.value,this.form['List2'])">
				<option selected>Select Your Division</option>
			</select>
			&nbsp;
			<select name='List2' class="form-control" onchange="fillSelect(this.value,this.form['List3'])">
				<option selected>Select Your Distric</option>
			</select>
			&nbsp;
			<select name='List3' class="form-control" onchange="getValue(this.value)">
				<option selected >Select Your Thana/Upazila</option>
			</select>
			<input type="submit" class="form-control" name="submit" value="Submit" />
	</form>

	</body>
</html>
