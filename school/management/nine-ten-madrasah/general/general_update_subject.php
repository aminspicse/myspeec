
		
		<div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4 class="">1. Quran Mazid : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1 "><input type="text" name="quran_mcq" value="<?php echo $row['quran_mcq'] ?>"  placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_wr" value="<?php echo $row['quran_wr'] ?>"  placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="quran_incourse" value="<?php echo $row['quran_incourse'] ?>" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_total" value="<?php echo $row['quran_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_gpa" value="<?php echo $row['quran_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="quran_status" value="<?php echo $row['quran_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>2. Hadith Sharif : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="hadith" value="<?php echo $row['hadith'] ?>" placeholder="Hadith"  maxlength="3" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="hadith_incourse" value="<?php echo $row['hadith_incourse'] ?>" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="hadith_total" value="<?php echo $row['hadith_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="hadith_gpa" value="<?php echo $row['hadith_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="hadith_status" value="<?php echo $row['hadith_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>3. Arabic 1<sup>st</sup> Paper : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic1st" value="<?php echo $row['arabic1st'] ?>" placeholder="Arabic1" maxlength="3" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic1st_incourse" value="<?php echo $row['arabic1st_incourse'] ?>" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic1st_total" value="<?php echo $row['arabic1st_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic1st_gpa" value="<?php echo $row['arabic1st_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic1st_status" value="<?php echo $row['arabic1st_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>4. Arabic 2<sup>nd</sup> Paper : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled  class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic2nd" value="<?php echo $row['arabic2nd'] ?>" placeholder="Arabic2" maxlength="3" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="arabic2nd_incourse" value="<?php echo $row['arabic2nd_incourse'] ?>" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic2nd_total" value="<?php echo $row['arabic2nd_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic2nd_gpa" value="<?php echo $row['arabic2nd_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="arabic2nd_status" value="<?php echo $row['arabic2nd_status'] ?>" placeholder="Status" disabled class="form-control"></div>
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
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="fiqh" value="<?php echo $row['fiqh'] ?>" placeholder="Fiqh" maxlength="3" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="fiqh_incourse" value="<?php echo $row['fiqh_incourse'] ?>" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="fiqh_total" value="<?php echo $row['fiqh_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="fiqh_gpa" value="<?php echo $row['fiqh_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="fiqh_status" value="<?php echo $row['fiqh_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>6. Bangla 1<sup>st</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla1_mcq" value="<?php echo $row['bangla1_mcq'] ?>" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla1_wr" value="<?php echo $row['bangla1_wr'] ?>" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla1_incourse" value="<?php echo $row['bangla1_incourse'] ?>" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla1_total" value="<?php echo $row['bangla1_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla1_gpa" value="<?php echo $row['bangla1_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla1_status" value="<?php echo $row['bangla1_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group ">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>7. Bangla 2<sup>nd</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla2_mcq" value="<?php echo $row['bangla2_mcq'] ?>" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla2_wr" value="<?php echo $row['bangla2_wr'] ?>" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="bangla2_incourse" value="<?php echo $row['bangla2_incourse'] ?>" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla2_total" value="<?php echo $row['bangla2_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla2_gpa" value="<?php echo $row['bangla2_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="bangla2_status" value="<?php echo $row['bangla2_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>8. English 1<sup>st</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english1st" value="<?php echo $row['english1st'] ?>" placeholder="Eng 1st" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english1st_incourse" value="<?php echo $row['english1st_incourse'] ?>" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english1st_total" value="<?php echo $row['english1st_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english1st_gpa" value="<?php echo $row['english1st_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english1st_status" value="<?php echo $row['english1st_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>9. English 2<sup>nd</sup> Paper:</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" disabled class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english2nd" value="<?php echo $row['english2nd'] ?>" placeholder="Eng 2nd" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="english2nd_incourse" value="<?php echo $row['english2nd_incourse'] ?>" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english2nd_total" value="<?php echo $row['english2nd_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english2nd_gpa" value="<?php echo $row['english2nd_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="english2nd_status" value="<?php echo $row['english2nd_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group bg-difault">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>10. General Mathmatic :</h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_mcq" value="<?php echo $row['math_mcq'] ?>" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_wr" value="<?php echo $row['math_wr'] ?>" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="math_incourse" value="<?php echo $row['math_incourse'] ?>" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_total" value="<?php echo $row['math_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_gpa" value="<?php echo $row['math_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="math_status" value="<?php echo $row['math_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>11. Islamic History : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ih_mcq" value="<?php echo $row['ih_mcq'] ?>" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ih_wr" value="<?php echo $row['ih_wr'] ?>" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ih_incourse" value="<?php echo $row['ih_incourse'] ?>" placeholder="Incourse" maxlength="2" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ih_total" value="<?php echo $row['ih_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ih_gpa" value="<?php echo $row['ih_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ih_status" value="<?php echo $row['ih_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>12. Information Technology : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ict_mcq" value="<?php echo $row['ict_mcq'] ?>" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ict_pt" value="<?php echo $row['ict_pt'] ?>" placeholder="PT" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="ict_incourse" value="<?php echo $row['ict_incourse'] ?>" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ict_total" value="<?php echo $row['ict_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ict_gpa" value="<?php echo $row['ict_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="ict_status" value="<?php echo $row['ict_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>13. Agricultural Studies <small>(Opt.)</small> : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="agri_mcq" value="<?php echo $row['agri_mcq'] ?>" value="" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="agri_wr" value="<?php echo $row['agri_wr'] ?>" value="" placeholder="CQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="agri_pt" value="<?php echo $row['agri_pt'] ?>" value="" placeholder="PT" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="agri_incourse" value="<?php echo $row['agri_incourse'] ?>" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="agri_gpa" value="<?php echo $row['agri_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="agri_status" value="<?php echo $row['agri_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>14. Carrer Studies : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="carrer_mcq" value="<?php echo $row['carrer_mcq'] ?>" placeholder="MCQ" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="carrer_pt" value="<?php echo $row['carrer_pt'] ?>" placeholder="PT" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="carrer_incourse" value="<?php echo $row['carrer_incourse'] ?>" placeholder="Incourse" class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="carrer_total" value="<?php echo $row['carrer_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="carrer_gpa" value="<?php echo $row['carrer_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="carrer_status" value="<?php echo $row['carrer_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row form-group">
				<div class="col-md-4 col-sm-4 col-lg-4"><h4>15. Physical Education <!--Bangladesh & Global Study--> : </h4> </div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="" placeholder="None" class="form-control" disabled ></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="physical" value="<?php echo $row['physical'] ?>" placeholder="PE" maxlength="2" class="form-control"></div>
				<div class="col-md-1 col-xs-4 col-sm-2 col-lg-1"><input type="text" name="physical_incourse" value="<?php echo $row['physical_incourse'] ?>" placeholder="Incourse" class="form-control" ></div>
				<div class="col-md-1 hidden-sm hidden-xs col"><input type="text" name="physical_total" value="<?php echo $row['physical_total'] ?>" placeholder="Total" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="physical_gpa" value="<?php echo $row['physical_gpa'] ?>" placeholder="GPA" disabled class="form-control"></div>
				<div class="col-md-1 hidden-sm hidden-xs col-lg-1"><input type="text" name="physical_status" value="<?php echo $row['physical_status'] ?>" placeholder="Status" disabled class="form-control"></div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-5 col-lg-6 col-xs-6 col-md-offset-3 col-sm-offset-1 col-lg-offset-3 col-xs-offset-3">
					<button id="submit" type="submit" name="submit" class="btn btn-block btn-lg btn-info">Update</button>
				</div>
			</div>
		</div>
		