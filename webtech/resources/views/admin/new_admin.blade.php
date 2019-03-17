@extends('layouts.admindash')
@section('content')
<div class="row">
	 <div class="col-md-6">
        <div class="panel panel-default">
             <div class="panel-heading">
             	<h3 class="panel-title">Add Admin</h3>
             </div>
             <div class="panel-body">
                 <form  action="{{route('create.admin')}}" method="POST" enctype="multipart/form-data">
                 	@csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="admin_phone" class="form-control" placeholder="Enter Name" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Name" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Name" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" name="admin_address" class="form-control" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                    	<img id="image" src="#" />
                    	<label for="exampleInputPassword11">Photo</label>
                    	<input type="file"  name="admin_photo" accept="image/*"  required onchange="readURL(this);">
                    	<i>Please upload a valid image file. Size of image should not be more than 2MB.</i>
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Add Admin</button>
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
