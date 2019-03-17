<?php 
	//include '../config/db_connection.php';
	include '../elements/simpleheader.php';
	
	if(isset($_POST['routin'])){
		$class = $_POST['class'];
		$year = $_POST['year'];
		$groups = $_POST['group'];
		$section = $_POST['section'];
		$class_teacher = $_POST['class_teacher'];
		$day1 = $_POST['day1'];
		//1st Day
		$class1st_day1 = $_POST['class1st_day1'];
		$class2nd_day1 = $_POST['class2nd_day1'];
		$class3rd_day1 = $_POST['class3rd_day1'];
		$class4th_day1 = $_POST['class4th_day1'];
		$class5th_day1 = $_POST['class5th_day1'];
		$class6th_day1 = $_POST['class6th_day1'];
		$class7th_day1 = $_POST['class7th_day1'];
		$class8th_day1 = $_POST['class8th_day1'];
		$total_class_day1 = $_POST['total_class_day1'];
		//Second Day
		$day2 = $_POST['day2'];
		$class1_day2 = $_POST['class1_day2'];
		$class2_day2 = $_POST['class2_day2'];
		$class3_day2 = $_POST['class3_day2'];
		$class4_day2 = $_POST['class4_day2'];
		$class5_day2 = $_POST['class5_day2'];
		$class6_day2 = $_POST['class6_day2'];
		$class7_day2 = $_POST['class7_day2'];
		$class8_day2 = $_POST['class8_day2'];
		$total_class_day2 = $_POST['total_class_day2'];
		
		//Day 3
		$day3 = $_POST['day3'];
		$class1_day3 = $_POST['class1_day3'];
		$class2_day3 = $_POST['class2_day3'];
		$class3_day3 = $_POST['class3_day3'];
		$class4_day3 = $_POST['class4_day3'];
		$class5_day3 = $_POST['class5_day3'];
		$class6_day3 = $_POST['class6_day3'];
		$class7_day3 = $_POST['class7_day3'];
		$class8_day3 = $_POST['class8_day3'];
		$total_class_day3 = $_POST['total_class_day3'];
		
		//Day 4th 
		$day4 = $_POST['day4'];
		$class1_day4 = $_POST['class1_day4'];
		$class2_day4 = $_POST['class2_day4'];
		$class3_day4 = $_POST['class3_day4'];
		$class4_day4 = $_POST['class4_day4'];
		$class5_day4 = $_POST['class5_day4'];
		$class6_day4 = $_POST['class6_day4'];
		$class7_day4 = $_POST['class7_day4'];
		$class8_day4 = $_POST['class8_day4'];
		$total_class_day4 = $_POST['total_class_day4'];
		
		//Day 5th 
		$day5 = $_POST['day5'];
		$class1_day5 = $_POST['class1_day5'];
		$class2_day5 = $_POST['class2_day5'];
		$class3_day5 = $_POST['class3_day5'];
		$class4_day5 = $_POST['class4_day5'];
		$class5_day5 = $_POST['class5_day5'];
		$class6_day5 = $_POST['class6_day5'];
		$class7_day5 = $_POST['class7_day5'];
		$class8_day5 = $_POST['class8_day5'];
		$total_class_day5 = $_POST['total_class_day5'];
		
		//Day 6th 
		$day6 = $_POST['day6'];
		$class1_day6 = $_POST['class1_day6'];
		$class2_day6 = $_POST['class2_day6'];
		$class3_day6 = $_POST['class3_day6'];
		$class4_day6 = $_POST['class4_day6'];
		$class5_day6 = $_POST['class5_day6'];
		$class6_day6 = $_POST['class6_day6'];
		$class7_day6 = $_POST['class7_day6'];
		$class8_day6 = $_POST['class8_day6'];
		$total_class_day6 = $_POST['total_class_day6'];
		
		//
		$user_id = $ses['id'];

		if(!empty($class) && !empty($year) && !empty($groups) && !empty($class_teacher)){
			$sql = "INSERT INTO class_routin(user_id, class, year, groups, section, class_teacher, day1, class1st_day1, class2nd_day1, class3rd_day1, class4th_day1, class5th_day1, class6th_day1, class7th_day1, class8th_day1, total_class_day1, day2, class1_day2, class2_day2, class3_day2, class4_day2, class5_day2, class6_day2, class7_day2, class8_day2, total_class_day2, day3, class1_day3, class2_day3, class3_day3, class4_day3, class5_day3, class6_day3, class7_day3, class8_day3, total_class_day3, day4, class1_day4, class2_day4, class3_day4, class4_day4, class5_day4, class6_day4, class7_day4, class8_day4, total_class_day4, day5, class1_day5, class2_day5, class3_day5, class4_day5, class5_day5, class6_day5, class7_day5, class8_day5, total_class_day5, day6, class1_day6, class2_day6, class3_day6, class4_day6, class5_day6, class6_day6, class7_day6, class8_day6, total_class_day6) VALUES('$user_id', '$class', '$year', '$groups', '$section', '$class_teacher', '$day1', '$class1st_day1', '$class2nd_day1', '$class3rd_day1', '$class4th_day1', '$class5th_day1', '$class6th_day1', '$class7th_day1', '$class8th_day1', '$total_class_day1', '$day2', '$class1_day2', '$class2_day2', '$class3_day2', '$class4_day2', '$class5_day2', '$class6_day2', '$class7_day2', '$class8_day2', '$total_class_day2', '$day3', '$class1_day3', '$class2_day3', '$class3_day3', '$class4_day3', '$class5_day3', '$class6_day3', '$class7_day3', '$class8_day3', '$total_class_day3', '$day4', '$class1_day4', '$class2_day4', '$class3_day4', '$class4_day4', '$class5_day4', '$class6_day4', '$class7_day4', '$class8_day4', '$total_class_day4', '$day5', '$class1_day5', '$class2_day5', '$class3_day5', '$class4_day5', '$class5_day5', '$class6_day5', '$class7_day5', '$class8_day5', '$total_class_day5', '$day6', '$class1_day6', '$class2_day6', '$class3_day6', '$class4_day6', '$class5_day6', '$class6_day6', '$class7_day6', '$class8_day6', '$total_class_day6')";
			$result = mysqli_query($con, $sql);
			//echo var_dump($result);
			if($result){
				$msg['success'] = "Successfully Entired";
			}else{
				$msg['error'] = "Something Problem";
			}
		}else{
			$msg['error'] = 'Please Chack Class, Year, Group and Class Teacher Name  This Fields are not put empty';
		}
	}
?>


			<?php if(isset($msg['success'])){?>
				<div class="alert alert-success text-center">
					<?php echo $msg['success']?>
				</div>
			<?php } ?>
			<?php if(isset($msg['error'])){?>
				<div class="alert alert-danger text-center">
				<?php echo $msg['error'] ?>
				</div>
			<?php }?>
