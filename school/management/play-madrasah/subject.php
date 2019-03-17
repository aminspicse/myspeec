			<div class="row container-fluid center">
				<div class="col-md-10 col-sm-12 col-lg-12 col-xs-12">
					<div class="col-md-2 form-group">
						<select class="pad" name="year" id="year">
							<option value="<?php echo $setting['year'] ?>"><?php echo $setting['year'] ?></option>
							<?php echo year() ?>
						</select>
					</div>
					<div class="col-md-3 form-group">
						<select class="pad" name="semester" id="semester">
							<option value="<?php echo $setting['semester'] ?>"><?php echo $setting['semester'] ?></option>
							<?php echo semester() ?>
						</select>
					</div>
					<div class="col-md-4 form-group">
						<input type="text" name="name" id="name" class="" value="<?php ?>" placeholder="Name">
					</div>
					<div class="col-md-1 form-group">
						<input type="text" name="roll" id="roll" class="" value="<?php ?>" placeholder="Roll No">
					</div>
					<div class="col-md-1 form-group" style="display:none">
						<input type="text" name="student_id" id="student_id" class="" value="<?php ?>" placeholder="Student ID">
					</div>
				</div>
				
			</div>
		
			<div class="row">
				<h4 class="" id="response"></h4>
			</div>
		
		<div class="col-md-10 col-sm-10 col-lg-10 col-xs-12 ">
			
			<div class="row form-group sub-margin" style="margin-top:">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>1. Arabic</h4> </div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic" placeholder="Arabic" maxlength="3"></div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic_incourse" placeholder="Incourse" maxlength="2"></div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic_total" placeholder="Total" disabled></div>
			</div>

			<div class="row form-group sub-margin">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>2. Bangla :</h4> </div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla" placeholder="Bangla" class="" maxlength="3"></div>
                <div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla_incourse" placeholder="Incourse" class=""></div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla_total" placeholder="Total" disabled class=""></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1 hide"><input type="text" name="bangla_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1 hide"><input type="text" name="bangla_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group sub-margin">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>3. English :</h4> </div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english" placeholder="English" class="" maxlength="3"></div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english_incourse" placeholder="Incourse" class=""></div>
                <div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english_total" placeholder="Total" disabled class=""></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1 hide"><input type="text" name="english_gpa" placeholder="GPA" disabled class=""></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1 hide"><input type="text" name="english_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group bg-difault sub-margin">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>4. Mathmatic :</h4> </div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math" placeholder="Math" class="" maxlength="3"></div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_incourse" placeholder="Incourse" class=""></div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_total" placeholder="Total" disabled class=""></div>
                <div class="col-md-1 hidden-sm hidden-xs col-lg-1 hide"><input type="text" name="math_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1 hide"><input type="text" name="math_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group bg-difault sub-margin">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>5. Arts :</h4> </div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arts" placeholder="Arts" class="" maxlength="3"></div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arts_incourse" placeholder="Incourse" class=""></div>
				<div class="col-md-2 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arts_total" placeholder="Total" disabled class=""></div>
                <div class="col-md-1 hidden-sm hidden-xs col-lg-1 hide"><input type="text" name="arts_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1 hide"><input type="text" name="arts_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row ">
				<div class="col-md-2 col-md-offset-4">
					<input type="button" name="submit" id="submit" class="btn btn-success btn-lg" value="Save && Calculate" />
				</div>
			</div>
		</div>
		
		<style type="text/css">
			.hide{
				display:hide;
			}
			.sub-margin{
				margin-top: -15px;
			}
			.pad{
				padding: 3px;
			}
		</style>