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
					<h3 class="panel-title">Our Students</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Name</th>
										<th>Phone</th>
										<th>Address</th>
										<th>Image</th>
										<th>Course</th>
										<th>Action</th>
									</tr>
								</thead>


								<tbody>
									@foreach($students as $row)
									<tr>
										<td>{{ $row->name }}</td>
										<td>{{ $row->student_phone }}</td>
										<td>{{ $row->present_address }}</td>
										<td><img src="{{ $row->student_photo }}" style="height: 60px; width: 60px;"></td>
										<td>{{ $row->course_name }}</td>
										<td>
											<a href="{{ URL::to('edit-student/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
											<a href="{{ URL::to('view-student/'.$row->id) }}" class="btn btn-sm btn-primary">View</a>
											<a href="{{ URL::to('delete-student/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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