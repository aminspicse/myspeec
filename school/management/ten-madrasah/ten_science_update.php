<?php 
	$class = "Ten";
	$title = $class.' (Madrasah Science)';
	include '../elements/simpleheader.php';
	include '../nine-ten-madrasah/examname.php';
	$session_user = $_SESSION['user'];
	$table = "ten_madrasah";
	
	
	if(isset($_GET['searchbtn'])){
		$admin_id = $ses['id'];
		$class = $_GET['classs'];
		$semester = $_GET['semester'];
		$year = $_GET['year'];
		$roll = $_GET['roll'];
		
		$query = "SELECT * FROM ten_madrasah WHERE admin_id = '$admin_id' and classs = '$class' and department = 'Science' and semester = '$semester' and year = '$year' and roll = '$roll' and delete_status = '0'";
		$execute = mysqli_query($con, $query);
		$row = mysqli_fetch_array($execute);
		
		if($row == ''){
			header("Location: ../nine-ten-madrasah/search_update.php");
		}
	}

?>

		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center pra" style="font-size:3vw" ><b><?php echo $ses['school_name']; ?> </b><small><em style="color:green">(for Science Update)</em></small> </h2>
			</div>
			<div class="col-md-12">
				<p class="text-center pra" style="font-size:2vw"><?php echo $class.' '.$setting['semester']." Examination ".$setting['year']; ?></p>
			</div>
		</div>
		<?php include '../nine-ten-madrasah/science/science_update.php' ?>
		<form class="form-inline container-fluid" name="" action="" method="post">
			<div class="row container-fluid">
				<div class="col-md-10 col-sm-12 col-lg-12 col-xs-12 col-md-offset-1">

					<div class="col-md-2 form-group">
						<select class="form-control" name="year">
							<option value="<?php echo $row['year'] ?>"><?php echo $row['year'] ?></option>
							<?php echo year() ?>
						</select>
					</div>
					
					<div class=" col-md-2 form-group">
						<select class="form-control" name="semester">
							<option value="<?php echo $row['semester'] ?>"><?php echo $row['semester'] ?></option>
							<?php echo semester() ?>
							
						</select>
					</div>

					<div class=" col-md-3 form-group">
						<input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" placeholder="Name">
					</div>
					<div class="col-md-2 form-group">
						<input type="text" name="roll" class="form-control" value="<?php echo $row['roll'] ?>" placeholder="Roll No">
					</div>
					<div class="col-md-1 form-group">
						
						<input type="text" name="student_id" class="form-control" value="<?php echo $row['student_id'] ?>" placeholder="Student ID">
					</div>
					
				</div>
			</div>
			<br>
			
			<?php if(isset($msg['success'])){?>
				<div class="alert alert-success text-center">
					<?php echo $msg['success']?>
				</div>
			<?php } ?>
			<?php if(isset($msg['error'])){?>
			<div class="alert alert-danger text-center">
				<?php echo $msg['error'] ?>
			</div>
			<?php } ?>

			<?php include '../nine-ten-madrasah/science/science_update_subject.php'; ?>
			<input style="display:none;" type="text" name="semester_id" value="<?php echo $row['id'] ?>" />
			<input style="display:none;" type="text" name="class" value="Ten" />
		</form>
	</body>
</html>