<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\ReplyMessage;
use DB;

class AdminMailController extends Controller
{
    //view of admin inbox
    public function Index(){
    	$result = DB::table('messages')->where('message_status',0)->get();
    	return view('admin.admin_inbox',compact('result'));
    }
    //view of a message
    public function ViewMessage($message_id){
    	$result = DB::table('messages')->where('message_id',$message_id)->first();
    	return view('admin.message_view',compact('result'));
    }
    //view reply message form
    public function ReplyMessage($message_id){
    	$result = DB::table('messages')->where('message_id',$message_id)->first();
    	return view('admin.reply_message',compact('result'));
    }
    //send reply message
    public function SendReply(Request $request){
    	$sender_name = $request->sender_name;
    	$email = $request->reciver_email;
    	$reciver_name = $request->reciver_name;
    	$message_details = $request->message_details;
    	$message_id = $request->message_id;
    	Mail::to($email)->send(new ReplyMessage($sender_name,$reciver_name,$message_details));
    	$data = array();
    	$data['message_status'] = 1;
    	$update = DB::table('messages')->where('message_id',$message_id)->update($data);
    	if ($update) {
    		$notification=array(
                 'messege'=>'Message Sent',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('admin.inbox')->with($notification);
    	}
    	else{
    		$notification=array(
                 'messege'=>'Failed To Sent',
                 'alert-type'=>'danger'
                  );
                return Redirect()->back()->with($notification);
    	}
    }
    //view all inbox
    public function AllMailS(){
    	$result = DB::table('messages')->where('message_status',1)->get();
    	return view('admin.all_mails',compact('result'));
    }
    //view read message
    public function ViewReadMessage($message_id){
    	$result = DB::table('messages')->where('message_id',$message_id)->first();
    	return view('admin.view_read_message',compact('result'));
    }
    //delete readed message
    public function DeleteReadMessage($message_id){
    	$delete = DB::table('messages')->where('message_id',$message_id)->delete();
    	if ($delete) {
	    		$notification=array(
	                 'messege'=>'Delete Success',
	                 'alert-type'=>'success'
	            );
	            return Redirect()->back()->with($notification);
    	}
    	else{
    		$notification=array(
                 'messege'=>'Delete Failed',
                 'alert-type'=>'danger'
             );
             return Redirect()->back()->with($notification);
    	}
    }
}
