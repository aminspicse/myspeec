<?php
	session_start();
	include '../config/db_connection.php';
	//echo "Hello World";
	$sessionstudent = $_SESSION['userstudent'];
	$roll = $sessionstudent['roll'];
	$adminid = $sessionstudent['user_id'];
	
	if(isset($_SESSION['userstudent'])){
		$sql1 = "SELECT * FROM class_nine WHERE user_id = '$adminid' and roll = '$roll'";
        $exe = mysqli_query($con, $sql1);

        $sql2 = "SELECT * FROM admin_teachers WHERE id = $adminid";
        $exe2 = mysqli_query($con, $sql2);
        $result2 = mysqli_fetch_array($exe2);
        //$result = mysqli_fetch_array($exe);
	//	echo var_dump($result);
	}
?>
<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>result<?php echo $sessionstudent['name']?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scal=1">
		<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="../css/login.css">
		<script type="text/javascript" src="../js/jquery.js"> </script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	</head>
	<body class="container">
		<div class="row text-right"><a href="logout.php">Logout</a></div>
		<?php while($result = mysqli_fetch_array($exe)){?>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th  colspan="12" >
							<h2 class="text-center"><?php echo $result2['school_name']?></h2>
						</th>
					</tr>
					<tr>
						<th colspan="2">Name : <?php echo $result['name']?></th>
						<th colspan="2">Roll : <?php echo $result['roll']?></th>
						<th colspan="2">Group : <?php echo $result['department']?></th>
						<th colspan="4">Semenster : <?php echo $result['classs']?></th>
						<th rowspan="2">GPA</th>
					</tr>
					<tr>
						<th>Sl No</th>
						<th>Subject Name</th>
						<th>MCQ</th>
						<th>WR</th>
						<th>PT</th>
						<th>Total</th>
						<th>GPA</th>
						<th>Gread</th>
						<th>Status</th>
						<th>Total Gpa</th>
					</tr>
				</thead>
				<tbody>
				
					<tr>
						<td>01</td>
						<td>Quran Mazid and Tazbid</td>
						<td><?php echo $result['quran_mcq']?></td>
						<td><?php echo $result['quran_wr'] ?></td>
						<td><?php ?>None</td>
						<td><?php echo $result['quran_total'] ?></td>
						<td><?php echo $result['quran_gpa'] ?></td>
						<td><?php echo $result['quran_gread'] ?></td>
						<td><?php echo $result['quran_status'] ?></td>
						<td rowspan="2"><?php echo $result['quran_hadith_gpa'] ?></td>
						<td rowspan="17" valign="middle" align="center"><?php echo $result['gpa']?></td>
					</tr>
					<tr>
						<td>02</td>
						<td>Hadith Sharif</td>
						<td><?php ?>None</td>
						<td><?php echo $result['hadith'] ?></td>
						<td><?php ?>None</td>
						<td><?php  echo $result['hadith'] ?></td>
						<td><?php echo $result['hadith_gpa'] ?></td>
						<td><?php echo $result['hadith_gread'] ?></td>
						<td><?php echo $result['hadith_status'] ?></td>
						
					</tr>
					<tr>
						<td>03</td>
						<td> Arabic 1st paper</td>
						<td><?php ?>None</td>
						<td><?php echo $result['arabic1st'] ?></td>
						<td><?php ?>None</td>
						<td><?php echo $result['arabic1st'] ?></td>
						<td><?php echo $result['arabic1st_gpa'] ?></td>
						<td><?php echo $result['arabic1st_gread'] ?></td>
						<td><?php echo $result['arabic1st_status'] ?></td>
						<td rowspan="2"><?php echo $result['arabic_gpa']?></td>
					</tr>
					<tr>
						<td>04</td>
						<td>Arabic 2nd Paper</td>
						<td><?php ?>None</td>
						<td><?php echo $result['arabic2nd'] ?></td>
						<td><?php ?>None</td>
						<td><?php echo $result['arabic2nd'] ?></td>
						<td><?php echo $result['arabic2nd_gpa'] ?></td>
						<td><?php echo $result['arabic2nd_gread'] ?></td>
						<td><?php echo $result['arabic2nd_status'] ?></td>
						
					</tr>
					<tr>
						<td>05</td>
						<td>Fiqh & U.Fiqh </td>
						<td><?php  ?>None</td>
						<td><?php echo $result['fiqh'] ?></td>
						<td><?php  ?>None</td>
						<td><?php echo $result['fiqh'] ?></td>
						<td><?php echo $result['fiqh_gpa'] ?></td>
						<td><?php echo $result['fiqh_gread'] ?></td>
						<td><?php echo $result['fiqh_status'] ?></td>
						<td><?php  ?></td>
					</tr><tr>
						<td>06</td>
						<td>Bangla 1st Paper</td>
						<td><?php echo $result['bangla1_mcq'] ?></td>
						<td><?php echo $result['bangla1_wr'] ?></td>
						<td><?php  ?>None</td>
						<td><?php echo $result['bangla1_total'] ?></td>
						<td><?php echo $result['bangla1_gpa'] ?></td>
						<td><?php echo $result['bangla1_gread'] ?></td>
						<td><?php echo $result['bangla1_status'] ?></td>
						<td rowspan="2"><?php echo $result['bangla_gpa'] ?></td>
					</tr>
					<tr>
						<td>07</td>
						<td>Bangla 2nd Paper</td>
						<td><?php echo $result['bangla2_mcq'] ?></td>
						<td><?php echo $result['bangla2_wr'] ?></td>
						<td><?php ?>None</td>
						<td><?php echo $result['bangla2_total'] ?></td>
						<td><?php echo $result['bangla2_gpa'] ?></td>
						<td><?php echo $result['bangla2_gread'] ?></td>
						<td><?php echo $result['bangla2_status'] ?></td>
						
					</tr>
					<tr>
						<td>08</td>
						<td>English 1st Paper</td>
						<td>None</td>
						<td><?php echo $result['english1st'] ?></td>
						<td>None</td>
						<td><?php echo $result['english1st'] ?></td>
						<td><?php echo $result['english1st_gpa'] ?></td>
						<td><?php echo $result['english1st_gread'] ?></td>
						<td><?php echo $result['english1st_status'] ?></td>
						<td rowspan="2"><?php echo $result['english_gpa']?></td>
					</tr>
					<tr>
						<td>09</td>
						<td>English 2nd Paper</td>
						<td></td>
						<td><?php echo $result['english2nd'] ?></td>
						<td>None</td>
						<td><?php echo $result['english2nd'] ?></td>
						<td><?php echo $result['english2nd_gpa'] ?></td>
						<td><?php echo $result['english2nd_gread'] ?></td>
						<td><?php echo $result['english2nd_status'] ?></td>
						
					</tr>
					
					<tr>
						<td>10</td>
						<td>Islamic History</td>
						<td><?php echo $result['ih_mcq'] ?></td>
						<td><?php echo $result['ih_wr'] ?></td>
						<td><?php ?>None</td>
						<td><?php echo $result['ih_total'] ?></td>
						<td><?php echo $result['ih_gpa'] ?></td>
						<td><?php echo $result['ih_gread'] ?></td>
						<td><?php echo $result['ih_status'] ?></td>
						
						<td rowspan="2"></td>
					</tr>
					<tr>
						<td>^^>></td>
						<td>Chemistry (for Science)</td>
						<td><?php echo $result['ch_mcq'] ?></td>
						<td><?php echo $result['ch_wr'] ?></td>
						<td><?php echo $result['ch_pt'] ?></td>
						<td><?php echo $result['ch_total'] ?></td>
						<td><?php echo $result['ch_gpa'] ?></td>
						<td><?php echo $result['ch_gread'] ?></td>
						<td><?php echo $result['ch_status'] ?></td>
						
					</tr>
					<tr>
						<td>11</td>
						<td>Physical Educatioon<!--Bangladesh and Global Studies--></td>
						<td>None<?php //echo $result['bgs_mcq'] ?></td>
						<td>None</td>
						<td><?php echo $result['bgs_mcq'] ?></td>
						<td><?php echo $result['bgs_total'] ?></td>
						<td><?php echo $result['bgs_gpa'] ?></td>
						<td><?php echo $result['bgs_gread'] ?></td>
						<td><?php echo $result['bgs_status'] ?></td>
						<td rowspan="2"> </td>
					</tr>
					<tr>
						<td>^^>></td>
						<td>Physics (for Science)</td>
						<td><?php echo $result['ph_mcq'] ?></td>
						<td><?php echo $result['ph_wr'] ?></td>
						<td><?php echo $result['ph_pt']?></td>
						<td><?php echo $result['ph_total'] ?></td>
						<td><?php echo $result['ph_gpa'] ?></td>
						<td><?php echo $result['ph_gread'] ?></td>
						<td><?php echo $result['ph_status'] ?></td>
					
					</tr>
					<tr>
						<td>12</td>
						<td>Information & Communication Technology</td>
						<td><?php echo $result['ict_mcq'] ?></td>
						<td>None</td>
						<td><?php echo $result['ict_pt'] ?></td>
						<td><?php echo $result['ict_total'] ?></td>
						<td><?php echo $result['ict_gpa'] ?></td>
						<td><?php echo $result['ict_gread'] ?></td>
						<td><?php echo $result['ict_status'] ?></td>
						<td rowspan="3"><?php ?></td>
					</tr>
					<tr>
						<td>13</td>
						<td>Carrer Studies</td>
						<td><?php echo $result['carrer_mcq'] ?></td>
						<td>None</td>
						<td><?php echo $result['carrer_pt'] ?></td>
						<td><?php echo $result['carrer_total'] ?></td>
						<td><?php echo $result['carrer_gpa'] ?></td>
						<td><?php echo $result['carrer_gread'] ?></td>
						<td><?php echo $result['carrer_status'] ?></td>
						
					</tr>
					<tr>
						<td>12,13</td>
						<td>Biology (for Science)</td>
						<td><?php echo $result['bio_mcq'] ?></td>
						<td><?php echo $result['bio_wr']?></td>
						<td><?php echo $result['bio_pt'] ?></td>
						<td><?php echo $result['bio_total'] ?></td>
						<td><?php echo $result['bio_gpa'] ?></td>
						<td><?php echo $result['bio_gread'] ?></td>
						<td><?php echo $result['bio_status'] ?></td>
						
					</tr>
					<tr>
						<td>14</td>
						<td>Agricultural Studies (Optional)</td>
						<td><?php echo $result['agri_mcq'] ?></td>
						<td><?php echo $result['agri_wr'] ?></td>
						<td><?php echo $result['agri_pt'] ?></td>
						<td><?php echo $result['agri_total'] ?></td>
						<td><?php echo $result['agri_gpa'] ?></td>
						<td><?php echo $result['agri_gread'] ?></td>
						<td><?php echo $result['agri_status'] ?></td>
						<td></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="12"><h5 class="text-center"><b>Powared By Picosoft Technology</b></h5></th>
					</tr>
				</tfoot>
			</table>
		</div>
		<?php } ?>
	</body>
</html>
<?php
	if(isset($_SESSION['user'])){
		header('Location:student.php');
	}
?>