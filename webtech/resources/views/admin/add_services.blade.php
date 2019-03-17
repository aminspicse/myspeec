@extends('layouts.admindash')
@section('content')
<div class="row">
	 <div class="col-md-10">
        <div class="panel panel-default">
             <div class="panel-heading">
             	<h3 class="panel-title">Add Service</h3>
             </div>
             <div class="panel-body">
                 <form  action="{{route('create.service')}}" method="POST" enctype="multipart/form-data">
                 	@csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Service Name</label>
                        <input type="text" name="service_name" class="form-control" placeholder="Enter Name" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Service Thumbnail</label>
                        <input type="file" name="service_thumbnail" class="form-control-file" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
                        <textarea name="service_details" class="form-control" required=""></textarea>
                    </div>                    
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Add Service</button>
                 </form>
            </div><!-- panel-body -->
          </div> <!-- panel -->
    </div> <!-- col-->
</div>
<script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace('service_details');
</script>
@endsection