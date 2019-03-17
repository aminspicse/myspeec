@extends('layouts.admindash')
@section('content')
<div class="row">
	<div class="col-md-6">
		<!-- Personal-Information -->
		<div class="panel panel-default panel-fill">
			<div class="panel-heading"> 
				<h3 class="panel-title">Personal Information</h3> 
			</div> 
			<div class="panel-body"> 
				<div class="about-info-p">
					<strong>Course Name</strong>
					<br/>
					<p class="text-muted">{{ $result->course_name }}</p>
				</div>
				<div class="about-info-p">
					<strong>Course Fee</strong>
					<br/>
					<p class="text-muted">{{ $result->course_fee }}</p>
				</div>
				<div class="about-info-p">
					<strong>Course Duration</strong>
					<br/>
					<p class="text-muted">{{ $result->course_duration }}</p>
				</div>
				<div class="about-info-p m-b-0">
					<strong>Course Details</strong>
					<br/>
					<p class="text-muted">
						{{ $result->course_details }}
					</p>
				</div>
			</div> 
		</div>
	</div>
	
</div>
@endsection