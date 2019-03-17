<?php 
	//include '../config/db_connection.php';
	include '../elements/simpleheader.php';
	include '../one-five-madrasah/examname.php';
	
	if(isset($_POST['roll'])){
		$admin_id = $ses['id'];
		$class = $_POST['classs'];
		$semester = $_POST['semester'];
		$year = $_POST['year'];
		$roll = $_POST['roll'];
		
		$sql = "SELECT * FROM four_madrasah WHERE classs='$class' and semester='$semester' and year='$year' and roll='$roll' and admin_id = '$admin_id' and delete_status = '0'";
		$exe = $conn->query($sql);
		$rows = $exe->fetch_assoc();
		
		if($exe->num_rows > 0){
			$output = '
				
				<form id="update_form">
					
					<div class="col-md-10 col-md-offset-2">
						<div class="col-md-2">
							<select class="pad" id="year" name="year">
								<option value="'.$rows["year"].'">'.$rows["year"].'</option>
								'.year().'
							</select>
						</div>
						<div class="col-md-3">
							<select class="pad" name="semester" id="semester">
								<option value="'.$rows["semester"].'">'.$rows["semester"].'</option>
								'.semester().'
							</select>
						</div>
						
						<div class="col-md-3">
							<input type="text" name="name" id="name" class="" value="'.$rows["name"].'" placeholder="Name">
						</div>
						<div class="col-md-1">
							<input type="text" name="roll" id="roll" class="" value="'.$rows["roll"].'" placeholder="Roll No">
						</div>
						
						<hr>
						<div class="col-md-1">
							<input type="text" style="display:none" name="student_id" id="student_id" class="" value="'.$rows["student_id"].'" placeholder="Student ID">
						</div>
						
					</div>
					
					<div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-md-offset-2">
						<div class="row form-group">
							<div class="col-md-4 col-sm-3 col-lg-4"><h4>1. Quran Mazid:</h4> </div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran" value="'.$rows['quran'].'" placeholder="Quran" class="" maxlength="3"></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_incourse" value="'.$rows['quran_incourse'].'"  placeholder="Incourse" class=""></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_gpa" value="'.$rows['quran_total'].'"  placeholder="Total" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_gread" value="'.$rows['quran_gpa'].'"  placeholder="GPA" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_status" value="'.$rows['quran_status'].'"  placeholder="Status" disabled class=""></div>
						</div>
						<div class="row form-group">
							<div class="col-md-4 col-sm-3 col-lg-4 txt-margin"><h4>2. Arabic:</h4> </div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" name="arabic" value="'.$rows['arabic'].'" placeholder="Arabic" class="" maxlength="3"></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" name="arabic_incourse" value="'.$rows['arabic_incourse'].'"  placeholder="Incourse" class=""></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" name="arabic_gpa" value="'.$rows['arabic_total'].'"  placeholder="Total" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" name="arabic_gread" value="'.$rows['arabic_gpa'].'"  placeholder="GPA" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" name="arabic_status" value="'.$rows['arabic_status'].'"  placeholder="Status" disabled class=""></div>
						</div>
						<div class="row form-group">
							<div class="col-md-4 col-sm-3 col-lg-4 txt-margin"><h4>3. Aqaid:</h4> </div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" name="aqaid" value="'.$rows['aqaid'].'" placeholder="Aqaid" class="" maxlength="3"></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" name="aqaid_incourse" value="'.$rows['aqaid_incourse'].'"  placeholder="Incourse" class=""></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" name="aqaid_gpa" value="'.$rows['aqaid_total'].'"  placeholder="Total" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" name="aqaid_gread" value="'.$rows['aqaid_gpa'].'"  placeholder="GPA" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" name="aqaid_status" value="'.$rows['aqaid_status'].'"  placeholder="Status" disabled class=""></div>
						</div>
						<div class="row form-group">
							<div class="col-md-4 col-sm-3 col-lg-4 txt-margin"><h4>4. Bangla:</h4> </div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="bangla" name="bangla" value="'.$rows['bangla'].'" placeholder="Bangla" class="" maxlength="3"></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="bangla_incourse" name="bangla_incourse" value="'.$rows['bangla_incourse'].'"  placeholder="Incourse" class=""></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="bangla_total" name="bangla_gpa" value="'.$rows['bangla_total'].'"  placeholder="Total" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="bangla_gpa" name="bangla_gread" value="'.$rows['bangla_gpa'].'"  placeholder="GPA" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="bangla_gread" name="bangla_status" value="'.$rows['bangla_status'].'"  placeholder="Status" disabled class=""></div>
						</div>
						<div class="row form-group">
							<div class="col-md-4 col-sm-3 col-lg-4 txt-margin"><h4>5. English:</h4> </div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="english" name="english" value="'.$rows['english'].'" placeholder="English" class="" maxlength="3"></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="english_incourse" name="english_incourse" value="'.$rows['english_incourse'].'"  placeholder="Incourse" class=""></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="english_total" name="english_gpa" value="'.$rows['english_total'].'"  placeholder="Total" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="english_gpa" name="english_gread" value="'.$rows['english_gpa'].'"  placeholder="GPA" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="english_gread" name="english_status" value="'.$rows['english_status'].'"  placeholder="Status" disabled class=""></div>
						</div>
						<div class="row form-group">
							<div class="col-md-4 col-sm-3 col-lg-4 txt-margin"><h4>6. Mathmatic: </h4> </div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="math" name="math" value="'.$rows['math'].'" placeholder="English" class="" maxlength="3"></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="math_incourse" name="math_incourse" value="'.$rows['math_incourse'].'"  placeholder="Incourse" class=""></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="math_total" name="math_gpa" value="'.$rows['math_total'].'"  placeholder="Total" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="math_gpa" name="math_gread" value="'.$rows['math_gpa'].'"  placeholder="GPA" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="math_gread" name="math_status" value="'.$rows['math_status'].'"  placeholder="Status" disabled class=""></div>
						</div>
						<div class="row form-group">
							<div class="col-md-4 col-sm-3 col-lg-4 txt-margin"><h4>7. Science: </h4> </div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="science" name="science" value="'.$rows['science'].'" placeholder="Science" class="" maxlength="3"></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="science_incourse" name="science_incourse" value="'.$rows['science_incourse'].'"  placeholder="Incourse" class=""></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="science_total" name="science_gpa" value="'.$rows['science_total'].'"  placeholder="Total" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="science_gpa" name="science_gread" value="'.$rows['science_gpa'].'"  placeholder="GPA" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="science_gread" name="science_status" value="'.$rows['science_status'].'"  placeholder="Status" disabled class=""></div>
						</div>
						<div class="row form-group">
							<div class="col-md-4 col-sm-3 col-lg-4 txt-margin"><h4>8. Bangladesh & G. S.: </h4> </div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="bgs" name="bgs" value="'.$rows['math'].'" placeholder="BGS" class="" maxlength="3"></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="bgs_incourse" name="bgs_incourse" value="'.$rows['bgs_incourse'].'"  placeholder="Incourse" class=""></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="bgs_total" name="bgs_gpa" value="'.$rows['bgs_total'].'"  placeholder="Total" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="bgs_gpa" name="bgs_gread" value="'.$rows['bgs_gpa'].'"  placeholder="GPA" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="bgs_gread" name="bgs_status" value="'.$rows['bgs_status'].'"  placeholder="Status" disabled class=""></div>
						</div>
						<div class="row form-group">
							<div class="col-md-4 col-sm-3 col-lg-4 txt-margin"><h4>9. G.K. Arts, Masnuna:</h4> </div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="gkam" name="gkam" value="'.$rows['gkam'].'" placeholder="A & M " class="" maxlength="3"></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="gkam_incourse" name="gkam_incourse" value="'.$rows['gkam_incourse'].'"  placeholder="Incourse" class=""></div>
							<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 txt-margin"><input type="text" id="gkam_total" name="gkam_gpa" value="'.$rows['gkam_total'].'"  placeholder="Total" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="gkam_gpa" name="gkam_gread" value="'.$rows['gkam_gpa'].'"  placeholder="GPA" disabled class=""></div>
							<div class="col-md-1 hidden-sm hidden-xs col-lg-1 txt-margin"><input type="text" id="gkam_gread" name="gkam_status" value="'.$rows['gkam_status'].'"  placeholder="Status" disabled class=""></div>
						</div>
						<div class="row">
							<div class="col-md-2 col-md-offset-4 txt-margin">
								<input type="button" name="update" id="update" class="btn btn-info" value="Update" />  
							</div>
						</div>
						
						<input style="display:none;" type="text" name="semester_id" value="'.$rows['id'].'" />
						<input style="display:none;" type="text" name="class" value="Four" />
						<input style="display:none;" type="text" name="admin_id" value="'.$ses['id'].'" />
					</div>
				
				</form>
			
			';
			echo $output;
		}else{
			echo "This Roll Number is Not Found";
		}
	}
?>
<script>
$(document).ready(function(){  
      $('#update').click(function(){  
           var name = $('#name').val();  
           var roll = $('#roll').val();  
           //var roll = $('#roll').val();  
           if(name == '' && roll == '')  
           {  
                $('#response').html('<span class="text-danger">Name Roll Must Require</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"update.php",  
                     method:"POST",  
                     data:$('#update_form').serialize(),  
                     beforeSend:function(){  
                          $('#response').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#response').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#response').fadeOut("fast");  
                          }, 500000);  
                     }  
                });  
           }  
      });  
 });  
 
 </script>
 
 
 <style type="text/css">
 
	.txt-margin{
		margin-top: -21px;
	}
	.pad{
		padding: 3px;
	}
 </style>