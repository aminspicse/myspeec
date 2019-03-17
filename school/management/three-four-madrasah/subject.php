			<div class="row container-fluid center">
				<div class="col-md-10 col-sm-12 col-lg-12 col-xs-12 col-md-offset-1">
					<div class="col-md-2 form-group">
						
						<select class="form-control" name="year">
							<option value="<?php echo $setting['year'] ?>"><?php echo $setting['year'] ?></option>
							<?php echo year() ?>
						</select>
					</div>
					<div class="col-md-2 form-group">
						<select class="form-control" name="semester">
							<option value="<?php echo $setting['semester'] ?>"><?php echo $setting['semester'] ?></option>
							<?php echo semester() ?>
						</select>
					</div>
					<div class="col-md-3 form-group">
						<input type="text" name="name" class="form-control" value="<?php ?>" placeholder="Name">
					</div>
					<div class="col-md-3 form-group">
						<input type="text" name="roll" class="form-control" value="<?php ?>" placeholder="Roll No">
					</div>
					<div class="col-md-1 form-group">
						<input type="text" name="student_id" class="form-control" value="<?php ?>" placeholder="Student ID">
					</div>
				</div>
			</div>
			
			<div class="row" style="">
				<h4 id="response"></h4>
			</div>
		<div class="col-md-11 col-lg-10 col-sm-10 col-xs-12 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>1. Quran Mazid:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran" placeholder="Quran" class="form-control leng" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_status" placeholder="Status" disabled class="form-control"></div>
			</div>

			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>2. Arabic</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic" placeholder="Arabic" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic_total" placeholder="Total" disabled class="form-control"></div>
                <div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic_status" placeholder="Status" disabled class="form-control"></div>
			</div>

			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>3. Aqaid and Fiqh: </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="aqaid" placeholder="Aqaid" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="aqaid_incourse" placeholder="Incourse" class="form-control"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="aqaid_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="aqaid_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="aqaid_status" placeholder="Status" disabled class="form-control"></div>
			</div>

			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>4. Bangla :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla" placeholder="Bangla" class="form-control" maxlength="3"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla_incourse" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>5. English :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english" placeholder="English" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english_incourse" placeholder="Incourse" class="form-control"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group bg-difault">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>6. Mathmatic :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math" placeholder="Math" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_incourse" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_total" placeholder="Total" disabled class="form-control"></div>
                <div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>7. General Science : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science" placeholder="Science" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science_incourse" placeholder="Incourse" class="form-control"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1d-1"><input type="text" name="science_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1d-1"><input type="text" name="science_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>8. Bangladesh & Global Studies: </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bgs" placeholder="BGS" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bgs_incourse" placeholder="Incourse" class="form-control"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bgs_total" placeholder=" Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bgs_gpa" placeholder=" GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bgs_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			 <div class="row form-group">
    			<div class="col-md-4 col-sm-4 col-lg-4"><h4>9. General Knowledge, Arts & Masnuna</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="gkam" placeholder="GKAM" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="gkam_incourse" placeholder="Incourse" class="form-control"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="gkam_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="gkam_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="gkam_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row ">
				<div class="col-md-6 col-md-offset-3">
					<input type="button" id="submit" name="submit" class="btn btn-block btn-lg btn-success" value="Save && Calculate"/>
				</div>
			</div>
		</div>