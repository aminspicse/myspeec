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
		<div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4 class="">1. Quran Mazid : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 "><input type="text" name="quran_mcq" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_wr" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_incourse" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>2. Hadith Sharif : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="hadith" placeholder="Hadith" maxlength="3" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="hadith_incourse" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="hadith_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="hadith_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="hadith_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>3. Arabic 1<sup>st</sup> Paper : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic1st" placeholder="Arabic1" maxlength="3" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic1st_incourse" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic1st_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic1st_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic1st_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>4. Arabic 2<sup>nd</sup> Paper : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled  class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic2nd" placeholder="Arabic2" maxlength="3" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic2nd_incourse" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic2nd_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic2nd_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic2nd_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<!-- <div class="row form-group">
				<div class="col-md-4"><h4>4. Arabic 2<sup>nd</sup> Paper : </h4> </div>
				<div class="col-md-1"><input type="text" name="arabic2nd" placeholder="A2-Total" class="form-control"></div>
				<div class="col-md-1"><input type="text" name="nonet" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1"><input type="text" name="arabic2_total" placeholder="A2-Total" disabled class="form-control"></div>
				<div class="col-md-1"><input type="text" name="arabic2_gpa" placeholder="A2-GPA" disabled class="form-control"></div>
				<div class="col-md-1"><input type="text" name="arabic2_gread" placeholder="A2-Gread" disabled class="form-control"></div>
				<div class="col-md-1"><input type="text" name="arabic2_comment" placeholder="A2 Comment" disabled class="form-control"></div>
			</div> -->
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>5. Fiqh & U.Fiqh : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="fiqh" placeholder="Fiqh" maxlength="3" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="fiqh_incourse" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="fiqh_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="fiqh_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="fiqh_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>6. Bangla 1<sup>st</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla1_mcq" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla1_wr" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla1_incourse" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla1_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla1_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla1_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group ">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>7. Bangla 2<sup>nd</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla2_mcq" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla2_wr" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla2_incourse" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla2_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla2_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla2_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>8. English 1<sup>st</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english1st" placeholder="Eng 1st" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english1st_incourse" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english1st_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english1st_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english1st_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>9. English 2<sup>nd</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english2nd" placeholder="Eng 2nd" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english2nd_incourse" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english2nd_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english2nd_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english2nd_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group bg-difault">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>10. General Mathmatic :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_mcq" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_wr" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_incourse" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>11. Islamic History : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ih_mcq" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ih_wr" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ih_incourse" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ih_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ih_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ih_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>12. Information Technology : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ict_mcq" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ict_pt" placeholder="PT" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ict_incourse" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ict_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ict_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ict_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>13. Agricultural Studies <small>(Opt.)</small> : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="agri_mcq" value="" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="agri_wr" value="" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="agri_pt" value="" placeholder="PT" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="agri_incourse" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="agri_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="agri_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>14. Carrer Studies : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="carrer_mcq" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="carrer_pt" placeholder="PT" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="carrer_incourse" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="carrer_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="carrer_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="carrer_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>15. Physical Education <!--Bangladesh & Global Study--> : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" class="form-control" disabled ></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="physical" placeholder="PE" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="physical_incourse" placeholder="Incourse" class="form-control" ></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="pe_total" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bgs_gpa" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bgs_status" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-5 col-lg-6 col-xs-6 col-md-offset-3 col-sm-offset-1 col-lg-offset-3 col-xs-offset-3">
					<button id="submit" type="submit" name="submit" class="btn btn-block btn-lg btn-success">Submit</button>
				</div>
			</div>
		</div>
		