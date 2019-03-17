<?php
	include '../elements/simpleheader.php';
	include '../six-eight-madrasah/examname.php';
	//include'marksheet_pdf.php';
	//$action="../six-eight-madrasah/summary_pdf.php";

?>
<div class="row text-center" style="font-size: 3vw"><b><?php echo $ses['school_name'] ?></b></div>

<form method="get" class="" style="">
	<div class="row col-md-offset-1">
		<div class="col-md-2">
			<select name="class" id="" class="form-control">
				<option value="Play">Play</option>
				<option value="Nursary">Nursary</option>
				<option value="One">One</option>
				<option value="Two">Two</option>
				<option value="Three">Three</option>
				<option value="Four">Four</option>
				<option value="Five">Five</option>
				<option value="Six">Six</option>
				<option value="Seven">Seven</option>
				<option value="Eight">Eight</option>
				<option value="Nine">Nine</option>
				<option value="Ten">Ten</option>
			</select>
		</div>
		<div class="col-md-2">
			<select name="department" id="" class="form-control">
				<option value="General">General</option>
				<option value="Science">Science</option>
				<option value="Commerce">Commerce</option>
			</select>
		</div>
		<div class="col-md-2">
			<select name="semester" id="" class="form-control">
				<option value="<?php echo $setting['semester']?>"><?php echo $setting['semester']?></option>
				<?php echo semester();?>
			</select>
		</div>
		<div class="col-md-2">
			<select name="year" id="" class="form-control">
				<option value="<?php echo $setting['year']?>"><?php echo $setting['year']?></option>
				<?php echo year();?>
			</select>
		</div>
		<div class="col-md-2">
			<select name="table" id="" class="form-control">
				<option>Select DataTable</option>
				<option value="play_madrasah">play_madrasah</option>
				<option value="nursary_madrasah">nursary_madrasah</option>
				<option value="one_madrasah">one_madrasah</option>
				<option value="two_madrasah">two_madrasah</option>
				<option value="three_madrasah">three_madrasah</option>
				<option value="four_madrasah">four_madrasah</option>
				<option value="five_madrasah">five_madrasah</option>
				<option value="six_madrasah">six_madrasah</option>
				<option value="seven_madrasah">seven_madrasah</option>
				<option value="eight_madrasah">eight_madrasah</option>
				<option value="nine_madrasah">nine_madrasah</option>
				<option value="ten_madrasah">ten_madrasah</option>
			</select>
		</div>
		
	</div>

	<br>
	<div class="row col-md-offset-1" >
		<div class="col-md-2" style="display:none">
			<select name="criteriya" class="form-control">
				<option value="=="> == </option>
				<option value=">="> >= </option>
				<option value="<="> <= </option>
				<option value="<"> < </option>
				<option value=">"> > </option>
			</select>
		</div>
		
		<div class="col-md-2">
			<input type="text" name="allownumber" class="form-control" placeholder="Allow Number " />
		</div>
		
		<div class="col-md-2">
			<input type="text" name="comment" class="form-control" placeholder="Remarks <= 20 Character" />
		</div>
		<div class="col-md-4 ">
			<button class="btn btn-lg btn-success" name="process">Process Result Status</button>
		</div>
	</div>
	<br>

		<input type="text" style="display:none" name="ses" value="<?php echo $ses['id']?>" />
		<input type="text" style="display:none" name="school_name" value="<?php echo $ses['school_name']?>" />
		<input type="text" style="display:none" name="institute_logu" value="<?php echo $ses['institute_logu']?>" />
		<input type="date" name="date" class="form-control" style="display:none" />
</form>
</body>
</html>
<?php 
	if(isset($_GET['process'])){
		  $table = $_GET['table'];
		  $semester = $_GET['semester'];
		  $year = $_GET['year'];
		  $admin_id = $_GET['ses'];
		  $school_name = $_GET['school_name'];
		  $class = $_GET['class'];
		 // $date1 = $_GET['date'];
		  //$head = $_GET['head'];
		  //$head_name = $_GET['head_name'];
		  //$class_teacher = $_GET['class_teacher'];
		  $department = $_GET['department'];
		 // $second_line = $_GET['second_line'];
		  //$criteriya = $_GET['criteriya'];
		  $allownumber = $_GET['allownumber'];
		  $comment = $_GET['comment'];
		 
	}else{
		  $table = 0;
		  $semester = 0;
		  $year =0;
		  $admin_id = 0;
		  $school_name = 0;
		  $class = 0;
		  $department = 0;
		  $criteriya = 0;
		  $allownumber = 0;
		  $comment = 0;
	}
	$sql = "SELECT * FROM $table WHERE admin_id = '$admin_id' and classs = '$class' and semester = '$semester' and year = '$year' and department = '$department' and delete_status = '0' ORDER BY gpa DESC, total_mark DESC";
	$exe = $conn->query($sql);
	//echo $criteriya;
	date_default_timezone_set("Asia/Dhaka");
	$pr_time = date("d-m-y h:i:s A");
	while($row = $exe->fetch_assoc()){
		
		
			if($row['total_fail'] <= $allownumber && $row['total_fail'] > 0){
				$ids = $row['id'];
				$sql1 = "UPDATE $table SET status = '$comment', pr_time = '$pr_time' WHERE id = $ids";
				$conn->query($sql1);
				echo $row['roll']."  ".$row['name']." ". $comment. "<br>";
			}
			
		

	}
?>