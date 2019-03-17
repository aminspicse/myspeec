@extends('layouts.publiclayout')
@section('content')
<div class="row text-center">	
	<div class="col-md">
		<h1>Do You Have Any Problem? Feel Free To Share With Us</h1>
	</div>
</div><br>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<?php 
				$exception = Session::get('exception');
				$message = Session::get('message');
			?>
			@if($exception)
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <button type="button" class="close" data-dismiss="alert">
				    <span aria-hidden="true">&times;</span>
				  </button>
				  <strong>
				  	<?php echo $exception;Session::put('exception',null);?>
					
				  </strong>
			</div>
			@endif
			<form action="{{route('send.message')}}" method="POST">
			@csrf
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="person_name" class="form-control" placeholder="Enter Your Name" required="">
						</div>
					</div>		
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>E-mail</label>
							<input type="email" name="person_email" class="form-control" placeholder="example@gmail.com" required>
						</div>
					</div>		
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Message</label>
							{{-- <textarea rows="10" cols="15" name="person_message" class="form-control" required>Write Your Message Or Problem Here. We Will Get Back To You Soon
							</textarea> --}}
							<input type="text" name="person_message" class="form-control" required>
						</div>
					</div>		
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" class="btn btn-info" name="submit">Send Message</button>
						</div>
					</div>		
				</div>
			</div>
			</form>
		</div>
	</div>
	<div class="col-md-4">
		
	</div>
</div>
@endsection