@extends('layouts.admindash')
@section('content')
<div class="container">
	<!-- Page-Title -->
	<div class="row">
		<div class="col-sm-12">
			<h4 class="pull-left page-title">Welcome !</h4>
			<ol class="breadcrumb pull-right">
				<li><a href="#">Web TechBD</a></li>
				<li class="active">IT</li>
			</ol>
		</div>
	</div>

	<!-- Start Widget -->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Unread Mails</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>


								<tbody>
									@foreach($result as $result)
									<tr>
										<td>{{ $result->sender_name }}</td>
										<td>{{ $result->sender_email }}</td>
										<td>
											<div class="badge badge-danger">UNREAD</div>
										</td>
										<td>
											<a href="{{ URL::to('view-single-message/'.$result->message_id) }}" class="btn btn-sm btn-success">View</a>
											<a href="{{ URL::to('reply-message/'.$result->message_id) }}" class="btn btn-sm btn-primary">Reply</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection