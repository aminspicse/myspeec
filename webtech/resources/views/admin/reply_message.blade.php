@extends('layouts.admindash')
@section('content')
<div class="row">
	 <div class="col-md-10">
        <div class="panel panel-default">
             <div class="panel-heading">
             	<h3 class="panel-title">Reply Message</h3>
             </div>
             <div class="panel-body">
                 <form  action="{{route('send.reply')}}" method="POST" enctype="multipart/form-data">
                 	@csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sender Name</label>
                        <input type="text" name="sender_name" class="form-control" value="Web TechBD" required="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Reciver Email</label>
                        <input type="text" name="reciver_email" class="form-control" value="{{$result->sender_email}}" required="1">
                        <input type="hidden" name="reciver_name" value="{{$result->sender_name}}">
                        <input type="hidden" name="message_id" value="{{$result->message_id}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
                        <textarea name="message_details" class="form-control" required=""></textarea>
                    </div>                    
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Send Message</button>
                 </form>
            </div><!-- panel-body -->
          </div> <!-- panel -->
    </div> <!-- col-->
</div>
@endsection