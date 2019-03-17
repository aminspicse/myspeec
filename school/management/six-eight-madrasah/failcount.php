<?php 

	
											
											if($quran_gpa == 0){
												$fail1 = 1;
											}else{
												$fail1 = 0;
											}
											
											if($arabic1st_gpa == 0){
												$fail2 = 1;
											}else{
												$fail2 = 0;
											}
											
											if($arabic2nd_gpa == 0){
												$fail3 = 1;
											}else{
												$fail3 = 0;
											}
											
											if($aqaid_gpa == 0){
												$fail4 = 1;
											}else{
												$fail4 = 0;
											}
											
											if($bangla_gpa == 0){
												$fail5 = 1;
											}else{
												$fail5 = 0;
											}
											
											if($english_gpa == 0){
												$fail6 = 1;
											}else{
												$fail6 = 0;
											}
											
											if($math_gpa == 0){
												$fail7 = 1;
											}else{
												$fail7 = 0;
											}
											
											if($science_gpa == 0){
												$fail8 = 1;
											}else{
												$fail8 = 0;
											}
											
											if($bgs_gpa == 0){
												$fail9 = 1;
											}else{
												$fail9 = 0;
											}
											
											if($ict_gpa == 0){
												$fail10 = 1;
											}else{
												$fail10 = 0;
											}
											
											$total_fail = $fail1 + $fail2 + $fail3 + $fail4 + $fail5 + $fail6 + $fail7 + $fail8 + $fail9 + $fail10;
?>