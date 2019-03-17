@extends('layouts.admindash')
@section('content')
<div class="row">
	 <div class="col-md-6">
        <div class="panel panel-default">
             <div class="panel-heading">
             	<h3 class="panel-title">Update Student</h3>
             </div>
             <div class="panel-body">
                 <form  action="{{route('set.student')}}" method="POST" enctype="multipart/form-data">
                 	@csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$result->name}}" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Father's Name</label>
                        <input type="text" name="student_fname" class="form-control"  value="{{$result->student_fname}}" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mother's Name</label>
                        <input type="text" name="student_mname" class="form-control"  value="{{$result->student_mname}}" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Birth Date</label>
                        <input type="date" name="student_birthdate" class="form-control" value="{{$result->student_birthdate}}" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="student_phone" class="form-control" value="{{$result->student_phone}}" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" value="{{$result->email}}" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <select class="form-control" name="student_gender">
                          <option value="{{$result->student_gender}}" selected="">
                            @if($result->student_gender == 1)
                              Male
                            @elseif($result->student_gender == 2)
                              Female
                            @else
                              Others
                            @endif
                          </option>
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                          <option value="3">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" name="present_address" class="form-control" value="{{$result->present_address}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Education Qualification</label>
                        <input type="text" name="lasteducation" class="form-control" value="{{$result->lasteducation}}">
                    </div>
                    <div class="form-group">
                       <label for="">Course Name</label>
                       <select name="course_id" class="form-control">
                          <?php 
                          $course = DB::table('coursedetails')
                          ->where('course_status',1)
                          ->get();
                          ?>
                          @foreach($course as $course)
                              <option value="{{$course->course_id}}" <?php if($result->course_id == $course->course_id){echo "selected";} ?>>{{$course->course_name}}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                       <label for="">Shift</label>
                       <select name="shift_id" class="form-control">
                         <?php 
                             $shift = DB::table('shifts')
                             ->where('shift_status',1)
                             ->get();
                         ?>
                         @foreach($shift as $shift)
                            <option value="{{$shift->shift_id}}" <?php if($result->shift_id == $shift->shift_id){echo "selected";} ?>>{{$shift->shift_details}}</option>
                         @endforeach
                       </select>
                    </div>
                    <div class="form-group">
                    	<img id="image" src="{{url($result->student_photo)}}"  height="90px" width="90px" />
                    	<label for="exampleInputPassword11">Photo</label>
                    	<input type="file" name="student_photo" accept="image/*" onchange="readURL(this);">
                      <input type="hidden" name="oldphoto" value="{{$result->student_photo}}">
                      <input type="hidden" name="student_id" value="{{$result->id}}">
                    	<i>Please upload a valid image file. Size of image should not be more than 2MB.</i>
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                 </form>
            </div><!-- panel-body -->
          </div> <!-- panel -->
    </div> <!-- col-->
</div>
<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
@endsection
