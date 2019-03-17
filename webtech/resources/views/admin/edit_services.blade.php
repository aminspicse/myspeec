@extends('layouts.admindash')
@section('content')
<div class="row">
	 <div class="col-md-10">
        <div class="panel panel-default">
             <div class="panel-heading">
             	<h3 class="panel-title">Edit Service</h3>
             </div>
             <div class="panel-body">
                 <form  action="{{route('update.service')}}" method="POST" enctype="multipart/form-data">
                 	@csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Service Name</label>
                        <input type="text" name="service_name" class="form-control" value="{{$result->service_name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Service Thumbnail</label>
                        <input type="hidden" name="oldphoto" value="{{$result->service_thumbnail}}">

                        <input type="file"  name="service_thumbnail" accept="image/*"   onchange="readURL(this);">
                        <img id="image" src="#" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
                        <textarea name="service_details" class="form-control" required="">{{$result->service_details}}</textarea>
                        <input type="hidden" name="service_id" value="{{$result->service_id}}">
                    </div>                    
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                 </form>
            </div><!-- panel-body -->
          </div> <!-- panel -->
    </div> <!-- col-->
</div>
<script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace('service_details');
</script>
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