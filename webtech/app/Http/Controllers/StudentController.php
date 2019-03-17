<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //Show student information
    public function Index(){
    	$id = Auth::user()->id;
    	$result = DB::table('users')
    				->join('coursedetails','users.course_id','coursedetails.course_id')
    				->join('shifts','users.shift_id','shifts.shift_id')
    				->where('id',$id)
    				->first();
    	return view('studentpages.myprofile',compact('result'));
    }
    //show student update form
    public function ChangeProfile(){
    	$id = Auth::user()->id;
    	$result = DB::table('users')
    				->join('coursedetails','users.course_id','coursedetails.course_id')
    				->join('shifts','users.shift_id','shifts.shift_id')
    				->where('id',$id)
    				->first();
    	return view('studentpages.update_profile',compact('result'));
    }
    //update information of student table
    public function SetProfile(Request $request){
    	$id = $request->student_id;
    	// $data = array([
    	// 	'name' => $request->name,
    	// 	'student_fname' => $request->student_fname,
    	// 	'student_mname' => $request->student_mname,
    	// 	'student_birthdate' => $request->student_birthdate,
    	// 	'student_phone' => $request->student_phone,
    	// 	'email' => $request->email,
    	// 	'student_gender' => $request->student_gender,
    	// 	'present_address' => $request->present_address,
    	// 	'lasteducation' => $request->lasteducation,
    	// 	'course_id' => $request->course_id,
    	// 	'shift_id' => $request->shift_id,
    	// ]);
    	$data = array();
    	$data['name'] = $request->name;
    	$data['student_fname'] = $request->student_fname;
    	$data['student_mname'] = $request->student_mname;
    	$data['student_birthdate'] = $request->student_birthdate;
    	$data['student_phone'] = $request->student_phone;
    	$data['email'] = $request->email;
    	$data['student_gender'] = $request->student_gender;
    	$data['present_address'] = $request->present_address;
    	$data['lasteducation'] = $request->lasteducation;
    	$data['course_id'] = $request->course_id;
    	$data['shift_id'] = $request->shift_id;
    	$image = $request->file('student_photo');
    	if ($image) {
    		$img = DB::table('users')->where('id',$id)->first();
    		$unlink = unlink($img->student_photo);
    		
    			$image_name = str_random(5);
	    		$ext = strtolower($image->getClientOriginalExtension());
	    		$image_full_name = $image_name.'.'.$ext;
	    		$upload_path = 'public/photo/student/';
	    		$image_url = $upload_path.$image_full_name;
	    		$success = move_uploaded_file($upload_path, $image_full_name);
	    		if ($success){
	    			$data['student_photo'] = $image_url;
	    			$update = DB::table('users')->where('id',$id)->update($data);
		    			$notification=array(
			                 'messege'=>'Successfully Updated',
			                 'alert-type'=>'success'
			                  );
			                 return Redirect()->route('myprofile')->with($notification);
	    		}
	    		else{
	    			$notification=array(
	                 'messege'=>'Profile Update Failed',
	                 'alert-type'=>'danger'
	                  );
	                 return Redirect()->back()->with($notification);
	    		}
    		

    	}
    	else{
    		echo $old_photo = $request->file('old_photo');
    		// $data['student_photo'] = $old_photo;
	    	// 		$update = DB::table('users')->where('id',$id)->update($data);
		    // 			$notification=array(
			   //               'messege'=>'Successfully Updated',
			   //               'alert-type'=>'success'
			   //                );
			   //               return Redirect()->route('myprofile')->with($notification);
    	}
    }
    //change password form
    public function ChangePasswordForm(){
        return view('studentpages.change_password');
    }
    //set password update
    public function SetPassword(Request $request){
        $oldpass = $request->oldpassword;
        $authpass = Auth::user()->password;
        if (Hash::check($oldpass,$authpass)) {
            $user = User::find(Auth::id());
            $user ->password = Hash::make($request->password);
            $user -> save();
            if ($user -> save()) {
                     $notification=array(
                             'messege'=>'Successfully Password Updated',
                             'alert-type'=>'success'
                              );
                             return Redirect()->route('log.out')->with($notification);
            }
            else{
                     $notification=array(
                             'messege'=>'Password Update Failed',
                             'alert-type'=>'success'
                              );
                             return Redirect()->back()->with($notification);
            }
        }
    }
}

