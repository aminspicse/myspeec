			<div class="row container-fluid center">
				<div class="col-md-10 col-sm-12 col-lg-12 col-xs-12 col-md-offset-1">
					<div class="col-md-2 form-group">
						
						<select class="form-control" name="year" id="year">
							<option value="<?php echo $setting['year'] ?>"><?php echo $setting['year'] ?></option>
							<?php echo year() ?>
						</select>
					</div>
					<div class="col-md-2 form-group">
						<select class="form-control" name="semester" id="semester">
							<option value="<?php echo $setting['semester'] ?>"><?php echo $setting['semester'] ?></option>
							<?php echo semester() ?>
						</select>
					</div>
					<div class="col-md-3 form-group">
						<input type="text" name="name" id="name" class="form-control" value="<?php ?>" placeholder="Name">
					</div>
					<div class="col-md-3 form-group">
						<input type="text" name="roll" id="roll" class="form-control" value="<?php ?>" placeholder="Roll No">
					</div>
					<div class="col-md-1 form-group">
						<input type="text" name="student_id" id="student_id" class="form-control" value="<?php ?>" placeholder="Student ID">
					</div>
				</div>
			</div>
			
			<div class="row" class="text-center" style="">
				<h4 class="text-center" id="response"></h4>
			</div>

		<div class="col-md-11 col-lg-10 col-sm-10 col-xs-12 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>1. Quran Mazid & Aqaid:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_aqaid" placeholder="Q.A" class="form-control leng" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_aqaid_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_aqaid_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_aqaid_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_aqaid_status" placeholder="Status" disabled class="form-control"></div>
			</div>

			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>2. Arabic 1<sup>st</sup> & 2 <sup>nd</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic" placeholder="Arabic" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic_total" placeholder="Total" disabled class="form-control"></div>
                <div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic_status" placeholder="Status" disabled class="form-control"></div>
			</div>
            
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>3. Bangla :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla" placeholder="Bangla" class="form-control" maxlength="3"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla_incourse" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>4. English :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english" placeholder="English" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english_incourse" placeholder="Incourse" class="form-control"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group bg-difault">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>5. Mathmatic :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math" placeholder="Math" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_incourse" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_total" placeholder="Total" disabled class="form-control"></div>
                <div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>6. General Science & <abbr title="Bangladesh and Global Studies">B.G.S :</abbr> </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science_bgs" placeholder="S BGS" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science_bgs_incourse" placeholder="Incourse" class="form-control"></div>
                <div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science_bgs_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1d-1"><input type="text" name="science_bgs_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1d-1"><input type="text" name="science_bgs_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row ">
				<div class="col-md-6 col-md-offset-3">
					<input type="button" name="submit" id="submit" class="btn btn-success btn-lg" value="Save && Calculate" />
				</div>
			</div>
		</div>