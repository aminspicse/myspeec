<?php
	include '../elements/simpleheader.php';
	include '../six-eight-madrasah/examname.php';
	//include'marksheet_pdf.php';
	$action="../six-eight-madrasah/summary_pdf.php";

?>
<div class="row text-center" style="font-size: 3vw"><b><?php echo $ses['school_name'] ?></b></div>
<form action="class_routin_pdf.php" method="get" class="" style="">
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
				<option value="All">All</option>
			</select>
		</div>
		<div class="col-md-3">
			<select name="section" id="" class="form-control">
                <option value="">Select Section</option>
				<option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
			</select>
		</div>
		<div class="col-md-3">
			<select name="year" id="" class="form-control">
				<?php echo year();?>
			</select>
		</div>
		
		
	</div>

	<br>
	<div class="row col-md-offset-1">
		<div class="col-md-10">
			<input type="text" name="second_line" class="form-control" placeholder="Write Some Information Thous Show 3rd Line in Summary information must <=80 Charecter" />
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4 col-md-offset-8">
			<button class="btn btn-lg btn-success" name="submit">Generate Routin</button>
		</div>
	</div>
		<input type="text" style="display:none" name="ses" value="<?php echo $ses['id']?>" />
		<input type="text" style="display:none" name="school_name" value="<?php echo $ses['school_name']?>" />
		<input type="text" style="display:none" name="institute_logu" value="<?php echo $ses['institute_logu']?>" />
		<input type="date" name="date" class="form-control" style="display:none" />
</form>
</body>
</html>