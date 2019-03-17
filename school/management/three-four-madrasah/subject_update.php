			<div class="row container-fluid center">
				<div class="col-md-10 col-sm-12 col-lg-12 col-xs-12 col-md-offset-1">
					<div class="col-md-2 form-group">
						<select class="form-control" name="year">
							<option value="<?php echo $rows['year'] ?>"><?php echo $rows['year'] ?></option>
							<?php echo year() ?>
						</select>
					</div>
					<div class="col-md-2 form-group">
						<select class="form-control" name="semester">
							<option value="<?php echo $rows['semester'] ?>"><?php echo $rows['semester'] ?></option>
							<?php echo semester() ?>
						</select>
					</div>
					<div class="col-md-3 form-group">
						<input type="text" name="name" class="form-control" value="<?php echo $rows['name'] ?>" placeholder="Name">
					</div>
					<div class="col-md-3 form-group">
						<input type="text" name="roll" class="form-control" value="<?php echo $rows['roll'] ?>" placeholder="Roll No">
					</div>
					<div class="col-md-1 form-group">
						<input type="text" name="student_id" class="form-control" value="<?php echo $rows['student_id'] ?>" placeholder="Student ID">
					</div>
				</div>
			</div>
			<hr>
			
		<div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-md-offset-2 col-lg-offset-1 col-sm-offset-1">
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>1. Quran Mazid:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran" value="<?php echo $rows['quran'] ?>" placeholder="Quran" class="form-control leng" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_incourse" value="<?php echo $rows['quran_incourse'] ?>"  placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_gpa" value="<?php echo $rows['quran_total'] ?>"  placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_gread" value="<?php echo $rows['quran_gpa'] ?>"  placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_status" value="<?php echo $rows['quran_status'] ?>"  placeholder="Status" disabled class="form-control"></div>
			</div>

			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>2. Arabic :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic" value="<?php echo $rows['arabic'] ?>" placeholder="Arabic" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic_incourse" value="<?php echo $rows['arabic_incourse'] ?>" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic_total" value="<?php echo $rows['arabic_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic_gpa" value="<?php echo $rows['arabic_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic_status" value="<?php echo $rows['arabic_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
            
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>3. Aqaid and Fiqh: </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="aqaid" value="<?php echo $rows['aqaid']?>" placeholder="Aqaid" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="aqaid_incourse" value="<?php echo $rows['aqaid_incourse']?>" placeholder="Incourse" class="form-control"></div>
			    <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="aqaid_total" value="<?php echo $rows['aqaid_total']?>" placeholder="Total" disabled class="form-control"></div>
                <div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="aqaid_gpa" value="<?php echo $rows['aqaid_gpa']?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="aqaid_status" value="<?php echo $rows['aqaid_status']?>" placeholder="Status" disabled class="form-control"></div>
			</div>

			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>4. Bangla :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla" value="<?php echo $rows['bangla']?>" placeholder="Bangla" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla_incourse" value="<?php echo $rows['bangla_incourse']?>" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla_total" value="<?php echo $rows['bangla_total']?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla_gpa" value="<?php echo $rows['bangla_gpa']?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla_status" value="<?php echo $rows['bangla_status']?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>5. English :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english" value="<?php echo $rows['english'] ?>"  placeholder="Eng." class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english_incourse" value="<?php echo $rows['english_incourse'] ?>"  placeholder="Incourse" class="form-control"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english_total" value="<?php echo $rows['english_total'] ?>"  placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_gpa" value="<?php echo $rows['english_gpa'] ?>"  placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_status" value="<?php echo $rows['english_status'] ?>"  placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group bg-difault">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>6. Mathmatic :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math" value="<?php echo $rows['math'] ?>"  placeholder="Math" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_incourse" value="<?php echo $rows['math_incourse'] ?>"  placeholder="Incourse" class="form-control" maxlength="2"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_total" value="<?php echo $rows['math_total'] ?>"  placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_gpa" value="<?php echo $rows['math_gpa'] ?>"  placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_status" value="<?php echo $rows['math_status'] ?>"  placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>7. General Science : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science" value="<?php echo $rows['science'] ?>" placeholder="GS" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science_incourse" value="<?php echo $rows['science_incourse'] ?>" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science_total" value="<?php echo $rows['science_total'] ?>" placeholder="Total" disabled class="form-control"></div>
                <div class="col-md-1 hidden-sm hidden-xs col-lg-1d-1"><input type="text" name="science_gpa" value="<?php echo $rows['science_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1d-1"><input type="text" name="science_status" value="<?php echo $rows['science_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>8. Bangladesh & Global S.: </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bgs" value="<?php echo $rows['bgs'] ?>" placeholder="Mark" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bgs_incourse" value="<?php echo $rows['bgs_incourse'] ?>" placeholder="Incourse" class="form-control"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bgs_total" value="<?php echo $rows['bgs_total'] ?>" placeholder=" Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bgs_gpa" value="<?php echo $rows['bgs_gpa'] ?>" placeholder=" GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bgs_status" value="<?php echo $rows['bgs_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			 <div class="row form-group">
    			<div class="col-md-4 col-sm-4 col-lg-4"><h4>9. General Knowledge, Arts & M.:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="gkam" value="<?php echo $rows['gkam'] ?>" placeholder="GKAM" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="gkam_incourse" value="<?php echo $rows['gkam_incourse'] ?>" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="gkam_total" value="<?php echo $rows['gkam_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="gkam_gpa" value="<?php echo $rows['gkam_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="gkam_status" value="<?php echo $rows['gkam_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row ">
				<div class="col-md-6 col-md-offset-3">
					<button id="submit" type="submit" name="submit" class="btn btn-block btn-lg btn-info">Update</button>
				</div>
			</div>
		</div>	