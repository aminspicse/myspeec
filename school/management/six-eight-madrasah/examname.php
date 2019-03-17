
<?php 


	function year(){	
	 $year = "
	 	.<option>Select Year</option>.
		.<option value='2018'>2018</option>.
		.<option value='2019'>2019</option>.
		.<option value='2020'>2020</option>.
		.<option value='2021'>2021</option>.
		.<option value='2022'>2022</option>.
		";
		return $year;
	}

	function semester(){
		$semester = "
			<option>Select Exam</option>
			<option value='Mid Term'>Mid Term</option>
			<option value='Half Yearly'>Half Yearly</option>
			<option value='Annual'>Annual</option>
			<option value='Pre-Test'>Pre-Test</option>
			<option value='Test'>Test</option>
			<option value='Final'>Final</option>
			<option value='1st Semester'>1st Semester </option>
			<option value='2nd Semester'>2nd Semester</option>
			<option value='3rd Semester'>3rd Semester</option>
		";
		return $semester;
	}
	

	//echo "<select>.$year.</select>";
	//echo "<select>.$semester.</select>";

	
?>
	
