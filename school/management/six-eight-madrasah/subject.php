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
			<br />
		<div class="col-md-11 col-lg-10 col-sm-10 col-xs-12 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>1. Quran Mazid:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_mcq" placeholder="MCQ " class="form-control leng" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_wr" placeholder="CQ" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_status" placeholder="Status" disabled class="form-control"></div>
			</div>

			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>2. Arabic 1<sup>st</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1" ><input type="text" name="" placeholder="None" disabled class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic1st" placeholder="Arabic 1st" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic1st_incourse" placeholder="Incourse"class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic1st_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic_status" placeholder="Status" disabled class="form-control"></div>
			</div>

			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>3. Arabic 2<sup>nd</sup>Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1" ><input type="text" name="" placeholder="None" disabled class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic2nd" placeholder="Arabi 2nd" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic2nd_incourse" placeholder="Incourse" class="form-control"  maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic2nd_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic2nd_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic_status" placeholder="Status" disabled class="form-control"></div>
			</div>

			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>4. Aqaid and Fiqh: </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="aqaid_mcq" placeholder="MCQ" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="aqaid_wr" placeholder="CQ" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="aqaid_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="aqaid_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="aqaid_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="aqaid_status" placeholder="Status" disabled class="form-control"></div>
			</div>

			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>5. Bangla:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla" placeholder="Bang." class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<!--
			<div class="row form-group ">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>6. Bangla 2<sup>nd</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla2" placeholder="Bangla 2nd" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla2_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla2_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla2_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla2_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			-->
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>6. English:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english" placeholder="Eng." class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<!--
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>8. English 2<sup>nd</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english2nd" placeholder="Eng. 2nd" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english2nd_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english2nd_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			-->
			<div class="row form-group bg-difault">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>7. General Mathmatic :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_mcq" placeholder="MCQ" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_wr" placeholder="CQ" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>8. General Science : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science_mcq" placeholder="MCQ" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science_wr" placeholder="CQ " class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="science_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1d-1"><input type="text" name="science_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1d-1"><input type="text" name="science_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1d-1"><input type="text" name="science_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>9. Bangladesh & Global Studies: </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bgs_mcq" placeholder="MCQ" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bgs_wr" placeholder="CQ" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bgs_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bgs_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bgs_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bgs_status" placeholder="Status" disabled class="form-control"></div>
			</div>

			<!-- <div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>7. Physical Education & Health: </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="hel_mcq" placeholder="MCQ hel" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="hel_wr" placeholder="WR hel" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="hel_total" placeholder="hel Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="hel_gpa" placeholder="hel GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="hel_gread" placeholder="Gread hel" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="hel_comment" placeholder="Comment hel" disabled class="form-control"></div>
			</div> 
		
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>9. Work & <abbr title="Life Oriented ">L O</abbr> Education : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="wloe_mcq" placeholder="MCQ WLOE" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="wloe_wr" placeholder="WR WLOE" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="wloe_total" placeholder="WLOE Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="wloe_gpa" placeholder="WLOE GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="wloe_gread" placeholder="Gread WLOE" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="wloe_comment" placeholder="Comment WLOE" disabled class="form-control"></div>
			</div> -->
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>10. Information & <abbr title="Communicaton">C</abbr> Technology:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ict" placeholder="ICT" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ict_incourse" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ict_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ict_gread" placeholder="Gread " disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ict_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>11. <select class="form-control" name="extra_subject"><option value="Agricultural Studies">Agricultural Studies</option><option value="Domestic Education">Domestic Education</option></select> </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="extra_mcq" placeholder="MCQ" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="extra_wr" placeholder="CQ" class="form-control" maxlength="2"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="extra_incourse" placeholder="Incourse" class="form-control" maxlength="2"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="extra_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="extra_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="extra_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4-md-4"><h4>12. 
					<select class="form-control" name="pt_subject">
						<option value="PHY. EDU & HYGIENE">PHY. EDU & HYGIENE</option>
						<option value="Work & L O Education">Work & L O Education</option>
					</select> </h4> 
				</div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="pt" placeholder="Mark" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="pt_incourse" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="pt_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="pt_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="pt_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<!--
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>12. PHY. EDU & HYGIENE </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="Physical" placeholder="PHY" class="form-control" maxlength="3"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="Non" class="form-control" maxlength="2" disabled></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="physical_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="physical_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="physical_gread" placeholder="Gread" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="physical_comment" placeholder="" disabled class="form-control"></div>
			</div> -->

			<div class="row ">
				<div class="col-md-6 col-md-offset-3">
					<button id="submit" type="submit" name="submit" class="btn btn-block btn-lg btn-success">Save && Calculate</button>
				</div>
			</div>
		</div>