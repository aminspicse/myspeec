<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use PDF;
use DB;

class PdfController extends Controller
{
    public function Index(){
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->setPaper('a4','landscape');;
    	$pdf->loadHTML($this->convert_student_data());
    	$pdf->stream();

    }
    public function convert_student_data(){
    	$id = Auth::user()->id;
    	$result = DB::table('users')
    				->join('coursedetails','users.course_id','coursedetails.course_id')
    				->join('shifts','users.shift_id','shifts.shift_id')
    				->where('id',$id)
    				->first(); 
    	$output = '<div class="logo">
						<img src="logo.png" style="height:60px;width:355px;margin-left:32%;"/>
						<!--<h1 style="text-align:center;margin:0;padding:0;">Web Tech BD</h1>-->
						<p style="text-align:center;margin:0;padding:0;font-weight:bolder;">Mobile No: +8801689-015612</p><table align="right" width="30%" border="2" cellspacing="1" style="font-family:cursive;text-align:center;width:122px;height:123px;margin-top:-6%;margin-bottom:1%;margin-right:10%;"><tr><td>dfdf</td></tr></table>
						<p  style="text-align:center;width:37%;margin:0;margin-left:31%;padding:0;"><strong>Star View Tower(4<sup>th</sup> Floor), Babna Point, Sylhet.</strong></p>		
						<h3 style="text-align:center;margin:0;width:27%;margin-left:36%;padding:0;">Admission Form</h3>
						
						<hr style="height:5px;background:black;width:80%;"/>
					</div>
					<div class="data-table">
						<table align="center" height="500px" width="80%" border="2" cellspacing="1" style="font-family:cursive;text-align:center;">
							<tr>
								<td>Applicant Name</td>
								<td>Habibur Rahman Mahid</td>
							</tr>
							<tr>
								<td>Father Name</td>
								<td>Habibur Rahman Mahid</td>
							</tr>
							<tr>
								<td>Mother Name</td>
								<td>Habibur Rahman Mahid</td>
							</tr>
							<tr>
								<td>Date Of Birth</td>
								<td>05/10/1998</td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>Male</td>
							</tr>
							<tr>
								<td>Last Education</td>
								<td>Male</td>
							</tr>
							<tr>
								<td>Contact</td>
								<td>Male</td>
							</tr>
							<tr>
								<td>E-mail</td>
								<td>Male</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>Male</td>
							</tr>
							<tr>
								<td>Course Name</td>
								<td>Male</td>
							</tr>
							<tr>
								<td>Shift</td>
								<td>Male</td>
							</tr>
						</table>
					</div>
					</br></br>
					<p style="text-align:right;margin-right:10%;font-weight:bolder;">Applicant Signature</p>

    	';			
    	return $output;
    }
}
