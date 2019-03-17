<?php
	$classs = 'Ten';
	$title = $classs.' (Madrasah Science)';
	include '../elements/simpleheader.php';
	include '../nine-ten-madrasah/examname.php';
	$table = "ten_madrasah";
	
?>
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<h2 class="text-center pra" style="font-size:3vw" ><b><?php echo $ses['school_name']; ?></b> <small><em style="color:green">(for Science)</em></small> </h2>
			</div>
			<div class="col-md-11 col-md-offset-1">
				<p class="text-center pra" style="font-size:2vw">Class <?php echo $classs.' '.$setting['semester']." Examination ".$setting['year']; ?></p>
			</div>
		</div>
		<?php include '../nine-ten-madrasah/science/insert_science.php' ?>
		<form class="form-inline container-fluid" name="" action="" method="post">
		
			<?php include '../nine-ten-madrasah/science/science_subject.php' ?>
		</form>
	</body>
</html>
