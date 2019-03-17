@extends('layouts.admindash')
@section('content')
<div class="row">
	 <div class="col-md-10">
        <div class="panel panel-default">
             <div class="panel-heading">
             	<h3 class="panel-title">Add Course</h3>
             </div>
             <div class="panel-body">
                 <form  action="{{route('create.shift')}}" method="POST" enctype="multipart/form-data">
                 	@csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Shift Name & Time</label>
                        <input type="text" name="shift_details" class="form-control" placeholder="Enter Shift" required="1">
                    </div>                    
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Add Shift</button>
                 </form>
            </div><!-- panel-body -->
          </div> <!-- panel -->
    </div> <!-- col-->
</div>
@endsection
