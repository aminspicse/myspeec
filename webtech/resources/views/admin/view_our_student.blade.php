@extends('layouts.admindash')
@section('content')
<div class="row">
	<div class="col-md-6">
		<!-- Personal-Information -->
		<div class="panel panel-default panel-fill">
			<div class="panel-heading"> 
				<h3 class="panel-title">Course Information</h3> 
			</div> 
			<div class="panel-body"> 
				<div class="about-info-p">
					<strong>Full Name</strong>
					<br/>
					<p class="text-muted">{{ $result->name }}</p>
				</div>
				<div class="about-info-p">
					<strong>Father's Name</strong>
					<br/>
					<p class="text-muted">{{ $result->student_fname }}</p>
				</div>
				<div class="about-info-p">
					<strong>Mother's Name</strong>
					<br/>
					<p class="text-muted">{{ $result->student_mname }}</p>
				</div>
				<div class="about-info-p m-b-0">
					<strong>Date Of Birth</strong>
					<br/>
					<p class="text-muted">
						<?php 
							$date = $result->student_birthdate;
							$str = date('d/m/Y',strtotime($date));
							echo $str;
						?>	
					</p>
				</div>
				<div class="about-info-p m-b-0">
					<strong>Gender</strong>
					<br/>
					<p class="text-muted">
						<?php 
						if($result->student_gender == 1){
							echo "Male";
						}

						elseif($result->student_gender ==2){
							echo "Female";
						}
						else{
							echo"Others";
						}
						?>
					</p>
				</div>
			</div> 
		</div>
		<!-- Personal-Information -->

		<!-- Languages -->
		<div class="panel panel-default panel-fill">
			<div class="panel-heading"> 
				<h3 class="panel-title">Others</h3> 
			</div> 
			<div class="panel-body"> 
				<div class="about-info-p">
					<strong>Present Address</strong>
					<br/>
					<p class="text-muted">{{ $result->present_address }}</p>
				</div>
				<div class="about-info-p">
					<strong>Course Name</strong>
					<br/>
					<p class="text-muted">{{ $result->course_name }}</p>
				</div>
				<div class="about-info-p">
					<strong>Shift</strong>
					<br/>
					<p class="text-muted">{{ $result->shift_details }}</p>
				</div>
			</div> 
		</div>
		<!-- Languages -->

	</div>
	<div class="col-md-6">
		<div class="panel panel-default panel-fill">
			<div class="panel-heading"> 
				<h3 class="panel-title">Contact</h3> 
			</div> 
			<div class="panel-body"> 
				<div class="about-info-p">
					<strong>E-mail</strong>
					<br/>
					<p class="text-muted">{{ $result->email }}</p>
				</div>
				<div class="about-info-p">
					<strong>Phone</strong>
					<br/>
					<p class="text-muted">{{ $result->student_phone }}</p>
				</div>
				<div class="about-info-p">
					<strong>Educational Qualification</strong>
					<br/>
					<p class="text-muted">{{ $result->lasteducation }}</p>
				</div>
			</div> 
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default panel-fill">
			<div class="panel-heading"> 
				<h3 class="panel-title">Student Image</h3> 
			</div> 
			<div class="panel-body"> 
				<div class="about-info-p">
					<img src="{{url($result->student_photo)}}" height="175" width="150px">
				</div>
			</div> 
		</div>
	</div>
</div>
@endsection