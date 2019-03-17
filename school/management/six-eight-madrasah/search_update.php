<?php
	include '../elements/simpleheader.php';
//	include 'gpa_function.php';
	include 'examname.php';
	//include 'query_function.php';
	//$sesid = $ses['id'];

?>
	<br><br><br>
	<div class="row">
			<div class="col-md-11">
				<h2 class="text-center">S M S B D</h2>
			</div>
		</div>
		<br><br>
		<form class="form-inline container-fluid" action="../six-madrasah/update_six.php" method="get" name="form1">
			<div class="row text-center container-fluid">
				<div class="form-group text-center">

					<select name="classs" class="form-control" >
						<option value="Six">Six </option>
						 <option value="Seven">Seven</option>
						<!-- <option value="Eight">Eight</option>
						<option value="Ten">Ten</option> -->
					</select>
					<select name="semester" class="form-control">
						<option value="<?php echo $setting['semester'] ?>"><?php echo $setting['semester'] ?></option>
						<?php echo semester() ?>
					</select>
					<select name="year" class="form-control">
						<option value="<?php echo $setting['year'] ?>"><?php echo $setting['year'] ?></option>
						<?php echo year() ?>
					</select>

					<input type="text" class="form-control" name="roll" placeholder="search (Roll)"/>

					<button type="submit" name="searchbtn" class="btn btn-success">Search</button>
				</div>
			</div>
			
		</form>
		<br>
		
		<form class="form-inline container-fluid" action="../seven-madrasah/update_seven.php" method="get" name="form2">
			<div class="row text-center container-fluid">
				<div class="form-group text-center">

					<select name="classs" class="form-control" >

						<!-- <option value="Nine">Nine</option>
						<option value="Six">Six</option>-->
						<option value="Seven">Seven</option>
						<!-- <option value="Eight">Eight</option>
						<option value="Ten">Ten</option> -->
					</select>
					<select name="semester" class="form-control">
						<option value="<?php echo $setting['semester'] ?>"><?php echo $setting['semester'] ?></option>
						<?php echo semester() ?>
					</select>
					<select name="year" class="form-control">
						<option value="<?php echo $setting['year'] ?>"><?php echo $setting['year'] ?></option>
						<?php echo year() ?>
					</select>
					
					<input type="search" class="form-control" name="roll" placeholder="search (Roll)"  target="_blank"/>

					<button type="submit" name="searchbtn" class="btn btn-success">Search</button>
				</div>
			</div>
			
		</form>
		
		<br>
		<form class="form-inline container-fluid" action="../eight-madrasah/update_eight.php" method="get" name="form1">
			<div class="row text-center container-fluid">
				<div class="form-group text-center">

					<select name="classs" class="form-control" >

						<!-- <option value="Nine">Nine</option>
						<option value="Six">Six</option>-->
						<option value="Eight">Eight </option>
						<option value="Seven">Seven</option>
						<!-- <option value="Ten">Ten</option> -->
					</select>
					<select name="semester" class="form-control">
						<option value="<?php echo $setting['semester'] ?>"><?php echo $setting['semester'] ?></option>
						<?php echo semester() ?>
					</select>
					<select name="year" class="form-control">
						<option value="<?php echo $setting['year'] ?>"><?php echo $setting['year'] ?></option>
						<?php echo year() ?>
					</select>
					
					<input type="search" class="form-control" name="roll" placeholder="search (Roll)"  target="_blank"/>

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