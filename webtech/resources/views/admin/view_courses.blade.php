@extends('layouts.admindash')
@section('content')
@extends('layouts.admindash')
@section('content')
<div class="container">
	<!-- Page-Title -->
	<div class="row">
		<div class="col-sm-12">
			<h4 class="pull-left page-title">Courses Details</h4>
			<ol class="breadcrumb pull-right">
				<li><a href="{{route('admin/home')}}">Dashboard</a></li>
				<li class="active">IT</li>
			</ol>
		</div>
	</div>

	<!-- Start Widget -->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Course Details</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Name</th>
										<th>Fee</th>
										<th>Duration</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>


								<tbody>
									@foreach($course as $row)
									<tr>
										<td>{{ $row->course_name }}</td>
										<td>{{ $row->course_fee }}</td>
										<td>{{ $row->course_duration }}</td>
										<td>
											@if($row->course_status == 1)
												<div class="badge badge-sm badge-success">Active</div>
											@else
												<div class="badge badge-sm badge-danger">Deactive</div>
											@endif
										</td>
										<td>
											<a href="{{ URL::to('edit-course/'.$row->course_id) }}" class="btn btn-sm btn-info">Edit</a>
											<a href="{{ URL::to('delete-course/'.$row->course_id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
											<a href="{{ URL::to('course-details/'.$row->course_id) }}" class="btn btn-sm btn-primary">View</a>
											@if($row->course_status == 1)
											<a href="{{ URL::to('deactive-course/'.$row->course_id) }}" class="btn btn-sm btn-danger">Deactive</a>
											@else
											<a href="{{ URL::to('active-course/'.$row->course_id) }}" class="btn btn-sm btn-success">Active</a>
											@endif
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