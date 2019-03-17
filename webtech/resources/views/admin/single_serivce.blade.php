@extends('layouts.admindash')
@section('content')
<div class="row">
	<div class="col-md-6">
		<!-- Service-Information -->
		<div class="panel panel-default panel-fill">
			<div class="panel-heading"> 
				<h3 class="panel-title">Service Information</h3> 
			</div> 
			<div class="panel-body"> 
				<div class="about-info-p">
					<strong>Service Name</strong>
					<br/>
					<p class="text-muted">{{ $result->service_name }}</p>
				</div>
				<div class="about-info-p">
					<strong>Service Details</strong>
					<br/>
					<p class="text-muted">
						<?php
							$doc = new DOMDocument();
							$doc->loadHTML($result->service_details);
							echo $doc->saveHTML();
						?>
					</p>
				</div>
				<div class="about-info-p">
					<strong>Service Thumbnail</strong>
					<br/>
					<img src="{{url($result->service_thumbnail)}}" height="100px" width="100px" />
				</div>
			</div> 
		</div>
	</div>
@endsection