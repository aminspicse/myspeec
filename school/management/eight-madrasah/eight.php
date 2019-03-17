<?php 

	$class = "Eight";
	$title = $class.' (Madrasah)';
	include '../elements/simpleheader.php';
	include '../six-eight-madrasah/examname.php';
	$table = "eight_madrasah";
	$session_user = $_SESSION['user'];

?>

		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center pra" style="font-size:3vw"><b><?php echo $ses['school_name']; ?></b></h2>
			</div>
			<div class="col-md-12">
				<p class="text-center pra" style="font-size: 2vw">Class <?php echo $class.' '.$setting['semester']." Examination - ".$setting['year']; ?></p>
			</div>
		</div>
		<?php include '../six-eight-madrasah/insert.php' ?>
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

			<?php include '../six-eight-madrasah/subject.php'; ?>
		</form>
	</body>
</html>