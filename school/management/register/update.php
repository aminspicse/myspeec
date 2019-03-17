<?php include '../elements/simpleheader.php'; 


	if(isset($_POST['update'])){

	}

	
?>


	
		<div class="container-fluid">
			<h2 class="text-center"><?php echo $ses['school_name'] ?></h2>
			<form class="" method="post" action="" enctype="">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
						<label class="control-label">School Name:</label>
						<input type="text"  name="school_name" value="<?php echo $ses['school_name'] ?>" class="form-control">
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
						<label class="control-label">Email:</label>
						<input type="text"  name="email" value="<?php echo $ses['email'] ?>" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
						<label>User Name:</label>
						<input type="text" name="" class="form-control">

					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
						<label>Name of Head:</label>
						<input type="text" name="" class="form-control" >
					</div>
				</div> <br>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
						
						<input type="password" name="" class="form-control" placeholder="Old Password">
					</div>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
						
						<input type="password" name="" class="form-control" placeholder="New Password">
					</div>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
						
						<input type="password" name="" class="form-control" placeholder="Confarm Password">
					</div>
				</div> <br>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
						
						<input type="number" name="" class="form-control" placeholder="Totla Student">
					</div>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
						
						<input type="number" name="" class="form-control" placeholder="Mail Student">
					</div>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
						
						<input type="number" name="" class="form-control" placeholder="Femail Student">
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
						
						<input type="number" name="" class="form-control" placeholder="Total Teacher">
					</div>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
						
						<input type="number" name="" class="form-control" placeholder="Total class">
					</div>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
						
						<input type="text" name="" class="form-control" placeholder="">
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-lg-offset-3">
						<button class="btn btn-block btn-info" name="update">Update</button>
					</div>
				</div>
			</form>
		</div>

	</body>
</html>