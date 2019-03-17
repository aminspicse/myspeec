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
					<h3 class="panel-title">Applied Students</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Name</th>
										<th>Thumbnail</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>


								<tbody>
									@foreach($result as $result)
									<tr>
										<td>{{ $result->service_name }}</td>
										<td><img src="{{ $result->service_thumbnail }}" style="height: 60px; width: 60px;">
										</td>
										<td>
											@if($result->service_status ==1)
											<div class="badge badge-success">Active</div>
											@else
											<div class="badge badge-danger">Deactive</div>
											@endif
										</td>
										<td>
											@if($result->service_status ==1)
											<a href="{{ URL::to('deactive-service/'.$result->service_id) }}" class="btn btn-sm btn-danger">Deactive</a>
											@else
											<a href="{{ URL::to('active-service/'.$result->service_id) }}" class="btn btn-sm btn-success">Active</a>
											@endif

											<a href="{{ URL::to('edit-services/'.$result->service_id) }}" class="btn btn-sm btn-info">Edit</a>
											<a href="{{ URL::to('view-single/'.$result->service_id) }}" class="btn btn-sm btn-primary">View</a>
											<a href="{{ URL::to('delete-services/'.$result->service_id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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