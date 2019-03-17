<?php
	include '../elements/simpleheader.php';
	include 'examname.php';
	$sesid = $ses['id'];
	$setting_query = "SELECT * FROM setting WHERE user_id = $sesid";
	$row = mysqli_fetch_array(mysqli_query($con, $setting_query));
?>
	<br><br><br>
	<div class="row">
			<div class="col-md-11">
				<h2 class="text-center">S M S B D</h2>
			</div>
		</div>
		<br><br>
		<form class="form-inline container-fluid" action="../nine-madrasah/nine_general_update.php" method="get" name="form1">
			<div class="row text-center container-fluid">
				<div class="form-group text-center">

					<select name="classs" class="form-control">

						<option value="Nine">Nine</option>
						<option value="Six">Six</option>
						<option value="Seven">Seven</option>
						<option value="Eight">Eight</option>
						<option value="Ten">Ten</option>
					</select>
					<select name="semester" class="form-control">
						<option value="<?php echo $row['semester'] ?>"><?php echo $row['semester'] ?></option>
						<?php echo semester() ?>
					</select>
					<select name="year" class="form-control">
						<option value="<?php echo $row['year'] ?>"><?php echo $row['year'] ?></option>
						<?php echo year() ?>
					</select>

					<input type="search" class="form-control" name="roll" placeholder="search general (Roll)" />

					<button type="submit" name="searchbtn" class="btn btn-success">Search</button>
				</div>
			</div>
			
		</form>
		<br>
		
		<form class="form-inline container-fluid" action="../nine-madrasah/nine_science_update.php" method="get" name="form1">
			<div class="row text-center container-fluid">
				<div class="form-group text-center">

					<select name="classs" class="form-control">

						<option value="Nine">Nine</option>
						<option value="Six">Six</option>
						<option value="Seven">Seven</option>
						<option value="Eight">Eight</option>
						<option value="Ten">Ten</option>
					</select>
					<select name="semester" class="form-control">
						<option value="<?php echo $row['semester'] ?>"><?php echo $row['semester'] ?></option>
						<?php echo semester() ?>
					</select>
					<select name="year" class="form-control">
						<option value="<?php echo $row['year'] ?>"><?php echo $row['year'] ?></option>
						<?php echo year() ?>
					</select>
					
					<input type="search" class="form-control" name="roll" placeholder="search Science (Roll)" />

					<button type="submit" name="searchbtn" class="btn btn-success">Search</button>
				</div>
			</div>
			
		</form>
		<br />
		<form class="form-inline container-fluid" action="../ten-madrasah/ten_general_update.php" method="get" name="form1">
			<div class="row text-center container-fluid">
				<div class="form-group text-center">

					<select name="classs" class="form-control">

						<option value="Ten">Ten</option>
						<option value="Nine">Nine</option>
						<option value="Eight">Eight</option>
						<option value="Seven">Seven</option>
						<option value="Six">Six</option>
					</select>
					<select name="semester" class="form-control">
						<option value="<?php echo $row['semester'] ?>"><?php echo $row['semester'] ?></option>
						<?php echo semester() ?>
					</select>
					<select name="year" class="form-control">
						<option value="<?php echo $row['year'] ?>"><?php echo $row['year'] ?></option>
						<?php echo year() ?>
					</select>
					
					<input type="search" class="form-control" name="roll" placeholder="search General (Roll)"  target="_blank"/>

					<button type="submit" name="searchbtn" class="btn btn-success">Search</button>
				</div>
			</div>
			
		</form>
		
		<br />
		<form class="form-inline container-fluid" action="../ten-madrasah/ten_science_update.php" method="get" name="form1">
			<div class="row text-center container-fluid">
				<div class="form-group text-center">
					<select name="classs" class="form-control">
						<option value="Ten">Ten</option>
						<option value="Nine">Nine</option>
						<option value="Eight">Eight</option>
						<option value="Seven">Seven</option>
						<option value="Six">Six</option>
					</select>
					<select name="semester" class="form-control">
						<option value="<?php echo $row['semester'] ?>"><?php echo $row['semester'] ?></option>
						<?php echo semester() ?>
					</select>
					<select name="year" class="form-control">
						<option value="<?php echo $row['year'] ?>"><?php echo $row['year'] ?></option>
						<?php echo year() ?>
					</select>
					<input type="search" class="form-control" name="roll" placeholder="search Science (Roll)"  target="_blank"/>
					<button type="submit" name="searchbtn" class="btn btn-success">Search</button>
				</div>
			</div>
			
		</form>
		
		<br>
		<br>
		<br>
		<div class="row">
			<h2 class=" text-center"><?php echo $ses['school_name']; ?></h2>
		</div>