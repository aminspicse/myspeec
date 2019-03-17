@extends('layouts.publiclayout')
@section('content')
	@foreach($result as $result)
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card">
				<div class="card-header">
					<h4 class="text-center">{{$result->course_name}}</h4>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-dark table-striped" align="center">
							<td><?php $doc =new DOMDocument();$doc->loadHTML($result->course_details);echo $doc->saveHTML() ?></td>
							<td rowspan="10" style="text-align:center;padding-top:5%;">{{$result->course_duration}} <br />{{$result->course_fee}}/=</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<br>
	@endforeach
@endsection