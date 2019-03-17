@extends('layouts.admindash')
@section('content')
<div class="row">
	 <div class="col-md-10">
        <div class="panel panel-default">
             <div class="panel-heading">
             	<h3 class="panel-title">Edit Course</h3>
             </div>
             <div class="panel-body">
                 <form  action="{{route('update.course')}}" method="POST" enctype="multipart/form-data">
                 	@csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Name</label>
                        <input type="text" name="course_name" class="form-control" value="{{$result->course_name}}" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Fee</label>
                        <input type="text" name="course_fee" class="form-control" value="{{$result->course_fee}}" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Duration</label>
                        <select class="form-control" name="course_duration">
                          <option value="{{$result->course_duration}}">{{$result->course_duration}}</option>
                          <option value="3 Month">3 Month</option>
                          <option value="6 Month">6 Month</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
                        <textarea name="course_details" class="form-control" required="">{{$result->course_details}}</textarea>
                        <input type="hidden" name="course_id" value="{{$result->course_id}}">
                    </div>                    
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                 </form>
            </div><!-- panel-body -->
          </div> <!-- panel -->
    </div> <!-- col-->
</div>
<script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace('course_details');
</script>
@endsection
