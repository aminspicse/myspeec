<?php 
	include '../elements/simpleheader.php';
	include '../one-five-madrasah/examname.php';
	$table = "four_madrasah";
	$session_user = $_SESSION['user'];
	
	
	if(isset($_GET['searchbtn'])){
		$rows = '';
		$admin_id = $ses['id'];
		$class = $_GET['classs'];
		$semester = $_GET['semester'];
		$year = $_GET['year'];
		$roll = $_GET['roll'];
		
		$query = "SELECT * FROM four_madrasah WHERE admin_id = '$admin_id' and classs = '$class' and semester = '$semester' and year = '$year' and roll = '$roll'";
		$execute = mysqli_query($con, $query);
		$rows = mysqli_fetch_array($execute);
		
		if($rows == ''){
			header("Location: ../one-five-madrasah/search_update.php");
		}
	}

?>

		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<h2 class="text-center" style="font-size: 3vw"><b><?php echo $ses['school_name']; ?></b></h2>
				<p class="text-center" style="font-size: 2vw"><?php echo $class.' '. $rows['semester']." Examination ".$rows['year']; ?></p>
			</div>
		</div>
		<?php include '../three-four-madrasah/update.php' ?>
		<form class="form-inline container-fluid" name="" action="" method="post">

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

			<?php include '../three-four-madrasah/subject_update.php'; ?>
			<input style="display:none;" type="text" name="semester_id" value="<?php echo $rows['id'] ?>" />
			<input style="display:none;" type="text" name="class" value="Five" />
		</form>
	</body>
</html>