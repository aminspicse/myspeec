<?php
	include '../elements/simpleheader.php';
	include 'examname.php';
	//include'marksheet_pdf.php';
	$action='';
	if(isset($_POST['next'])){
		$class = $_POST['class'];
		$department = $_POST['department'];
		if($class == 'Six' or $class == 'Seven' or $class == 'Eight'){
			$action = 'action="marksheet_pdf.php"';
		}elseif($class == 'Nine' or $class == 'Ten'){
			if($department == 'General'){
				$action = 'action="../nine-ten-madrasah/marksheet_general_pdf.php"';
			}elseif($department == 'Science'){
				$action = 'action="../nine-ten-madrasah/marksheet_science_pdf.php"';
			}elseif($department == 'Commerce'){
				$action = 'action="../nine-ten-madrasah/marksheet_commerce_pdf.php"';
			}
		}elseif($class == 'Five'){
			$action = 'action="../five-madrasah/marksheet_pdf.php"';
		}elseif($class == 'Three' or $class == 'Four'){
			$action = 'action="../three-four-madrasah/marksheet_pdf.php"';
		}elseif($class == 'Two'){
			$action = 'action="../two-madrasah/marksheet_pdf.php"';
		}elseif($class == 'One'){
			$action = 'action="../one-madrasah/marksheet_pdf.php"';
		}elseif($class == 'Nursary'){
			$action = 'action="../nursary-madrasah/marksheet_pdf.php"';
		}elseif($class == 'Play'){
			$action = 'action="../play-madrasah/marksheet_pdf.php"';
		}else{
			header("Location:../six-eight-madrasah/marksheet_form.php");
		}
	} 
	
?>
<div class="row text-center" style="font-size: 3vw"><b><?php echo $ses['school_name'] ?></b></div>
<?php if($action == true){?>
<form <?php echo $action ?> method="get" class="" style="">
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
	<div class="row col-md-offset-1">
		<div class="col-md-2">
			<b>Result Published Date:</b> <input type="date" name="date" class="form-control" />
		</div>
		<div class="col-md-2">
			<b>Preparied Type</b>
			<select name="prepaired_type" id="" class="form-control">
				<option value="Class Teacher">Class Teacher</option>
				<option value="Prepaired By">Prepaired By</option>
				<option value="Computer Operator">Computer Operator</option>
			</select>
		</div>
		<div class="col-md-2">
			<b>Prepaired Name</b><input type="text" name="prepaired_name" class="form-control" placeholder="Name" />
		</div>
		<div class="col-md-2">
			<b>Exam. Head Type</b>
			<select name="examhead_type" id="" class="form-control">
				<option value="Controller of Examinations">Controller of Examinations</option>
				<option value="Exam. Controller">Exam. Controller</option>
				<option value="Class Teacher">Class Teacher</option>
			</select>
		</div>
		<div class="col-md-2">
			<b>Exam. Head Name</b><input type="text" name="examhead_name" class="form-control" placeholder="Name" />
		</div>
		
	</div>
	<div class="row col-md-offset-1">
		
		<div class="col-md-2">
			<b>Head Type</b>
			<select name="head_type" id="" class="form-control">
				<option value="Principal">Principal</option>
				<option value="Head Teacher">Head Teacher</option>
				<option value="Superintendent">Superintendent</option>
				<option value="Headmaster ">Headmaster</option>
				<option value="Ast. Headmaster ">Ast. Headmaster</option>
			</select>
		</div>
		<div class="col-md-2">
			<b>Head Name</b><input type="text" name="head_name" class="form-control" placeholder="Name" />
		</div>
		<div class="col-md-6">
			<b>Institute Address</b>
			<input type="text" name="second_line" class="form-control" placeholder="Write Some Information Thous Show 3rd Line in Marksheet" />
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4 col-md-offset-8">
			<button class="btn btn-lg btn-success" name="generate">Generate Marksheet</button>
		</div>
	</div>
		<input type="text" style="display:none" name="ses" value="<?php echo $ses['id']?>" />
		<input type="text" style="display:none" name="school_name" value="<?php echo $ses['school_name']?>" />
		<input type="text" style="display:none" name="institute_logu" value="<?php echo $ses['institute_logu']?>" />
</form>
<?php }else{?>
<form action="" method="post" class="container-fluid">
	<div class="row">
		<div class="col-md-3">
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
		<div class="col-md-4">
			<select name="department" id="" class="form-control">
				<option value="General">General</option>
				<option value="Science">Science</option>
				<option value="Arts">Arts</option>
				<option value="Commerce">Commerce</option>
				<option value="Computer">Computer</option>
			</select>
		</div>
		<input type="submit" class="btn  btn-success" name="next" value="Next" />
	</div>
</form>
<?php } ?>
</body>
</html>