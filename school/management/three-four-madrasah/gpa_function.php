<?php 
	include'../config/db_connection.php';
	// Calculation for GPA by Subject
	function gpacal($x){
		$sum = $x;
		if($sum >= 79.50 and $sum <= 100){
			$gpa = "5.00";
		}
		elseif($sum >= 69.50 and $sum < 79.50){
			$gpa = "4.00";
		}
		elseif($sum >= 59.50 and $sum < 69.50){
			$gpa = "3.50";
		}
		elseif($sum >= 49.50 and $sum < 59.50){
			$gpa = "3.00";
		}
		elseif($sum >= 39.50 and $sum < 49.50){
			$gpa = "2.00";
		}
		elseif($sum >= 32.50 and $sum < 39.50){
			$gpa = "1.00";
		}
		else{
			$gpa = "0.00";
		}
		return $gpa;
	}
	//Calculation for Gread
	function greadcal($sumn){
	//	$sum = $y;
		if($sumn >= 79.50 and $sumn <= 100){
			$gp = "A+";
		}
		elseif($sumn >= 69.50 and $sumn < 79.50){
			$gp = "A";
		}
		elseif($sumn >=59.50 and $sumn < 69.50){
			$gp = "A-";
		}
		elseif($sumn >= 49.50 and $sumn < 59.50){
			$gp = "B";
		}
		elseif($sumn >= 39.50 and $sumn < 49.50){
			$gp = "C";
		}
		elseif($sumn >= 32.50 and $sumn < 39.50){
			$gp = "D";
		}
		else{
			$gp = "F";
		}
		return $gp;
	}
	//Calculation for Status
	function status($x){
		if($x >= 1 && $x <= 5){
			$status = "Passed";
		}
		else{
			$status = "Fail";
		}
		return $status;
	}
	//Check for Condition
	function condition($a,$b){
		$total = 0;
		if($a >= 9 && $b >= 21){
			$total = $a + $b;
		}else{
			$total = 0;
		}
		return $total;
	}
	// Mark Check without mcq,wr and pt
	function check1($subject){
		if($subject >= 33){
			$mark = $subject;
		}else{
			$mark = 0;
		}
		return $mark;
	}
	// Mark check mcq, wr and 
	function check2($mcq,$wr){
		if($mcq >= 9 && $wr >= 21){
			$totalcheck2 = $mcq + $wr;
		}else{
			$totalcheck2 = 0;
		}
		return $totalcheck2;
	}
	// Total gread
	function total_gread($gr){
		if($gr >= 5){
			$tg = "A+";
		}elseif($gr >= 4 && $gr < 5){
			$tg = "A ";
		}elseif($gr >= 3.5 && $gr < 4){
			$tg = "A-";
		}elseif($gr >= 3 && $gr < 3.5){
			$tg = "B ";
		}elseif($gr >= 2 && $gr < 3){
			$tg = "C ";
		}elseif($gr >= 1 && $gr < 2){
			$tg = "D ";
		}else{
			$tg = "F ";
		}
		return $tg;
	}
	// GPA Total
	function gpa_total($gp){
		if($gp >= 5){
			$gpt = "5.00";
		}elseif($gp == 4){
			$gpt = "4.00";
		}elseif($gp == 3){
			$gpt = "3.00";
		}elseif($gp == 2){
			$gpt = "2.00";
		}elseif($gp == 1){
			$gpt = "1.00";
		}else{
			$gpt = $gp;
		}
		return $gpt;
	}

?>