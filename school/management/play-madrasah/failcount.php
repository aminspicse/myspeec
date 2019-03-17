<?php 

	
											
											if($arabic_gpa == 0){
												$fail1 = 1;
											}else{
												$fail1 = 0;
											}
											
											if($bangla_gpa == 0){
												$fail2 = 1;
											}else{
												$fail2 = 0;
											}
									
											if($english_gpa == 0){
												$fail3 = 1;
											}else{
												$fail3 = 0;
											}
											
											if($math_gpa == 0){
												$fail4 = 1;
											}else{
												$fail4 = 0;
											}
											
											if($arts_gpa == 0){
												$fail5 = 1;
											}else{
												$fail5 = 0;
											}
											
											
											
											$total_fail = $fail1 + $fail2 + $fail3 + $fail4 + $fail5;
?>