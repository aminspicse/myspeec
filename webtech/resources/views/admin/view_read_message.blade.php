@extends('layouts.admindash')
@section('content')
<div class="row">
	<div class="col-md-6">
		<!-- Service-Information -->
		<div class="panel panel-default panel-fill">
			<div class="panel-heading"> 
				<h3 class="panel-title">Read Message</h3> 
			</div> 
			<div class="panel-body"> 
				<div class="about-info-p">
					<strong>Sender Name</strong>
					<br/>
					<p class="text-muted">{{ $result->sender_name }}</p>
				</div>
				<div class="about-info-p">
					<strong>Sender E-mail</strong>
					<br/>
					<p class="text-muted">{{ $result->sender_email }}</p>
				</div>
				<div class="about-info-p">
					<strong>Message Details</strong>
					<br/>
					<p class="text-muted">
						<?php
							$doc = new DOMDocument();
							$doc->loadHTML($result->sender_message);
							echo $doc->saveHTML();
						?>
					</p>
				</div>
			</div> 
		</div>
	</div>
@endsection