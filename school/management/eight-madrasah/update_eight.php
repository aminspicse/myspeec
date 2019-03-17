<?php 
	$class = "Eight";
	$title = $class.' (Madrasah)';
	include '../elements/simpleheader.php';
	include '../six-eight-madrasah/examname.php';
	$session_user = $_SESSION['user'];
	$table = "eight_madrasah";
	
	
	if(isset($_GET['searchbtn'])){
		$rows = '';
		$admin_id = $ses['id'];
		$class = $_GET['classs'];
		$semester = $_GET['semester'];
		$year = $_GET['year'];
		$roll = $_GET['roll'];
		
		$query = "SELECT * FROM eight_madrasah WHERE admin_id = '$admin_id' and classs = '$class' and semester = '$semester' and year = '$year' and roll = '$roll' and delete_status = '0'";
		$execute = mysqli_query($con, $query);
		$rows = mysqli_fetch_array($execute);
		
		if($rows == ''){
			header("Location: ../six-eight-madrasah/search_update.php");
		}
	}

?>

		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<h2 class="text-center pra" style="font-size: 3vw"><b><?php echo $ses['school_name']; ?></b></h2>
			<p class="text-center pra" style="font-size: 2vw"><?php echo $class.' '. $rows['semester']." Examination - ".$rows['year']; ?></p>
			</div>
		</div>
		<?php include '../six-eight-madrasah/update.php' ?>
		<form class="form-inline container-fluid" name="" action="" method="post">
			<div class="row container-fluid">
				<div class="col-md-11 col-sm-12 col-lg-12 col-xs-12 col-md-offset-1">

					<div class=" form-group">
						
						<select class="form-control" name="year">
							<option value="<?php echo $rows['year'] ?>"><?php echo $rows['year'] ?></option>
							<?php echo year() ?>
						</select>
					</div>
					
					<div class="form-group">
						
						<select class="form-control" name="semester">
							<option value="<?php echo $rows['semester'] ?>"><?php echo $rows['semester'] ?></option>
							<?php echo semester() ?>
							
						</select>
					</div>

					<div class="form-group">
			
						<input type="text" name="name" class="form-control" value="<?php echo $rows['name'] ?>" placeholder="Name">
					</div>
					<div class="form-group">
						
						<input type="text" name="roll" class="form-control" value="<?php echo $rows['roll'] ?>" placeholder="Roll No">
					</div>
					<div class="form-group">
						
						<input type="text" name="student_id" class="form-control" value="<?php $rows['student_id'] ?>" placeholder="Student ID">
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

			<?php include '../six-eight-madrasah/update_subject.php'; ?>
			<input style="display:none;" type="text" name="semester_id" value="<?php echo $rows['id'] ?>" />
			<input style="display:none;" type="text" name="class" value="Eight" />
		</form>
	</body>
</html>