<?php
	include '../elements/simpleheader.php';
?>


<div class="container-fluid">
	<div class="thumbnail text-info">
		<h2 class="text-center"><?php echo $ses['school_name'] ?></h2>
		<h4 class="text-center">Please Make a class Routin Cairfully <small>(if any Class Is None Then Select None)</small></h4>
		<form method="post" action="subject_action.php" class="form-inline">
			<div class="row container-fluid">
				<div class="col-md-2">
					<label>Class:</label>
					<select name="class" class="form-control">
						<option value="Six">Six</option>
						<option value="Seven">Seven</option>
						<option value="Eight">Eight</option>
						<option value="Nine">Nine</option>
						<option value="Ten">Ten</option>
					</select>
				</div>
				<div class="col-md-2">
					<label>Year:</label>
					<select name="year" class="form-control" >
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
					</select>
				</div>
				<div class="col-md-3">
					<label>Group:</label>
					<select name="group" class="form-control">
						<option value="General">General</option>
						<option value="Science">Science</option>
						<option value="Humanity">Humanity</option>
						<option value="Commarce">Commarce</option>
						<option value="Mujabbid">Mujabbid</option>
						<option value="Computer">Computer</option>
					</select>
				</div>
				<div class="col-md-2">
					<label>Section:</label>
					<select name="section" class="form-control" >
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
					</select>
				</div>
				<div class="col-md-3">
					<label>Class Teacher:</label>
					<input style="width:123px" type="text" name="class_teacher" class="form-control">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-2" >
					<label class="text-center">Working Day</label>
				</div>
				<div class="col-md-1">
					<label class="text-center">Class 1st</label>
				</div>
				<div class="col-md-1">
					<label class="text-center"> Class 2nd</label>
				</div>
				<div class="col-md-1">
					<label class="text-center"> Class 3rd</label>
				</div>
				<div class="col-md-1">
					<label class="text-center"> Class 4th</label>
				</div>
				<div class="col-md-1">
					<label class="text-center"> Class 5th</label>
				</div>
				<div class="col-md-1">
					<label class="text-center"> Class 6th</label>
				</div>
				<div class="col-md-1">
					<label class="text-center"> Class 7th</label>
				</div>
				<div class="col-md-1">
					<label class="text-center"> Class 8th</label>
				</div>
				<div class="col-md-2">
					<label class="text-center">Total Class</label>
				</div>
				
			</div>
			
			<!--Day 1st-->

			<div class="row">
				<div class="col-md-2">
					
					<select name="day1" class="form-control">
						<option>Please Select Day</option>
						<?php include 'day.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class1st_day1" class="form-control">
						<option>1st Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class2nd_day1" class="form-control">
						<option>2nd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class3rd_day1" class="form-control">
						<option>3rd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class4th_day1" class="form-control">
						<option>4th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class5th_day1" class="form-control">
						<option>5th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class6th_day1" class="form-control">
						<option>6th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class7th_day1" class="form-control">
						<option>7th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class8th_day1" class="form-control">
						<option>8th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-2">
					<select name="total_class_day1" class="form-control">
						<option>Saturday Class</option>
						<option value="8">8</option>
						<option value="7">7</option>
						<option value="6">6</option>
						<option value="5">5</option>
						<option value="4">4</option>
						<option value="3">3</option>
						<option value="2">2</option>
						<option value="1">1</option>
					</select>
				</div>
			</div>
			<br>
			<!-- Day 2 -->

			<div class="row">
				<div class="col-md-2">
					
					<select name="day2" class="form-control">
						<option>Please Select Day</option>
						<?php include 'day.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class1_day2" class="form-control">
						<option>1st Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class2_day2" class="form-control">
						<option>2nd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class3_day2" class="form-control">
						<option>3rd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class4_day2" class="form-control">
						<option>4th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class5_day2" class="form-control">
						<option>5th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class6_day2" class="form-control">
						<option>6th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class7_day2" class="form-control">
						<option>7th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class8_day2" class="form-control">
						<option>8th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-2">
					<select name="total_class_day2" class="form-control">
						<option>Saturday Class</option>
						<option value="8">8</option>
						<option value="7">7</option>
						<option value="6">6</option>
						<option value="5">5</option>
						<option value="4">4</option>
						<option value="3">3</option>
						<option value="2">2</option>
						<option value="1">1</option>
					</select>
				</div>
			</div>
			
			<!--Day 3--><br>
			<div class="row">
				<div class="col-md-2">
					
					<select name="day3" class="form-control">
						<option>Please Select Day</option>
						<?php include 'day.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class1_day3" class="form-control">
						<option>1st Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class2_day3" class="form-control">
						<option>2nd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class3_day3" class="form-control">
						<option>3rd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class4_day3" class="form-control">
						<option>4th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class5_day3" class="form-control">
						<option>5th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class6_day3" class="form-control">
						<option>6th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class7_day3" class="form-control">
						<option>7th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class8_day3" class="form-control">
						<option>8th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-2">
					<select name="total_class_day3" class="form-control">
						<option>Saturday Class</option>
						<option value="8">8</option>
						<option value="7">7</option>
						<option value="6">6</option>
						<option value="5">5</option>
						<option value="4">4</option>
						<option value="3">3</option>
						<option value="2">2</option>
						<option value="1">1</option>
					</select>
				</div>
			</div>
			<br>
			<!-- Day 4th -->
			<div class="row">
				<div class="col-md-2">
					
					<select name="day4" class="form-control">
						<option>Please Select Day</option>
						<?php include 'day.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class1_day4" class="form-control">
						<option>1st Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class2_day4" class="form-control">
						<option>2nd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class3_day4" class="form-control">
						<option>3rd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class4_day4" class="form-control">
						<option>4th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class5_day4" class="form-control">
						<option>5th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class6_day4" class="form-control">
						<option>6th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class7_day4" class="form-control">
						<option>7th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class8_day4" class="form-control">
						<option>8th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-2">
					<select name="total_class_day4" class="form-control">
						<option>Saturday Class</option>
						<option value="8">8</option>
						<option value="7">7</option>
						<option value="6">6</option>
						<option value="5">5</option>
						<option value="4">4</option>
						<option value="3">3</option>
						<option value="2">2</option>
						<option value="1">1</option>
					</select>
				</div>
			</div>
			<br>
			<!-- Day 5th -->
			
			<div class="row">
				<div class="col-md-2">
					
					<select name="day5" class="form-control">
						<option>Please Select Day</option>
						<?php include 'day.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class1_day5" class="form-control">
						<option>1st Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class2_day5" class="form-control">
						<option>2nd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class3_day5" class="form-control">
						<option>3rd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class4_day5" class="form-control">
						<option>4th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class5_day5" class="form-control">
						<option>5th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class6_day5" class="form-control">
						<option>6th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class7_day5" class="form-control">
						<option>7th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class8_day5" class="form-control">
						<option>8th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-2">
					<select name="total_class_day5" class="form-control">
						<option>Saturday Class</option>
						<option value="8">8</option>
						<option value="7">7</option>
						<option value="6">6</option>
						<option value="5">5</option>
						<option value="4">4</option>
						<option value="3">3</option>
						<option value="2">2</option>
						<option value="1">1</option>
					</select>
				</div>
			</div>
			<br>
			<!-- Day 6th -->
			
			<div class="row">
				<div class="col-md-2">
					
					<select name="day6" class="form-control">
						<option>Please Select Day</option>
						<?php include 'day.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class1_day6" class="form-control">
						<option>1st Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class2_day6" class="form-control">
						<option>2nd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class3_day6" class="form-control">
						<option>3rd Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class4_day6" class="form-control">
						<option>4th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class5_day6" class="form-control">
						<option>5th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class6_day6" class="form-control">
						<option>6th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class7_day6" class="form-control">
						<option>7th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-1">
					<select name="class8_day6" class="form-control">
						<option>8th Class</option>
						<?php include 'subject.php' ?>
					</select>
				</div>
				<div class="col-md-2">
					<select name="total_class_day6" class="form-control">
						<option>Saturday Class</option>
						<option value="8">8</option>
						<option value="7">7</option>
						<option value="6">6</option>
						<option value="5">5</option>
						<option value="4">4</option>
						<option value="3">3</option>
						<option value="2">2</option>
						<option value="1">1</option>
					</select>
				</div>
			</div>


				<br>
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<button type="submit" name="routin" class="btn btn-lg btn-block btn-success">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>