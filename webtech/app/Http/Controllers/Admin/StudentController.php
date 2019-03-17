<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class StudentController extends Controller
{
    //view all applied student....
    public function Index(){
    	$students = DB::table('users')
    					->where('student_status',0)
    					->get();
    	return view('admin.applied_student')->with('students',$students);
    }
    //delete applied student
    public function DeleteAppliedStudent($id){
    	$delete = DB::table('users')
    				->where('id',$id)
    				->delete();
    	if ($delete){
    		$notification=array(
                 'messege'=>'Student Deleted',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);
    	}
    	else{
    		$notification=array(
                 'messege'=>'Failed To Delete',
                 'alert-type'=>'danger'
                  );
                return Redirect()->back()->with($notification);
    	}
    }
    //view applied student details
    public function ViewAppliedStudent($id){
    	$result = DB::table('users')
    				->join('coursedetails','users.course_id','coursedetails.course_id')
    				->join('shifts','users.shift_id','shifts.shift_id')
    				->where('id',$id)
    				->first();
    	return view('admin.view_applied_student',compact('result'));
    }
    //approve student....
    public function ApproveStudent($id){
    	$data = array();
    	$data['student_status'] = 1;
    	$result = DB::table('users')
    					->where('id',$id)
    					->update($data);
    	if ($result){
    		$notification=array(
                 'messege'=>'Student has been approved',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);
    	}
    	else{
    		$notification=array(
                 'messege'=>'Approve Failed',
                 'alert-type'=>'danger'
                  );
                return Redirect()->back()->with($notification);
    	}
    }
    //manage student
    public function ManageStudent(){
        $students = DB::table('users')
              ->join('coursedetails','users.course_id','coursedetails.course_id')
              ->where('student_status',1)
              ->get();
        return view('admin.manage_student',compact('students'));
    }
    //our student edit form
    public function EditStudentForm($sid){
        $result = DB::table('users')
              ->join('coursedetails','users.course_id','coursedetails.course_id')
              ->join('shifts','users.shift_id','shifts.shift_id')
              ->where('id',$sid)
              ->first();
        return view('admin.edit_student',compact('result'));

    }
    //update student info
    public function UpdateStudent(Request $request){
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
        $std_id = $request->student_id;
        if ($image) {
               $image_name=str_random(20);
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='public/photo/student/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
               if ($success) {
                     $data['student_photo'] =$image_url;
                     $img=DB::table('users')->where('id',$std_id)->first();
                     $image_path = $img->student_photo;
                     $done=unlink($image_path);
                     $update=DB::table('users')->where('id',$std_id)->update($data);
                     if($update){
                            $notification=array(
                                'messege'=>'Student Update Successfully',
                                'alert-type'=>'success'
                            );
                            return Redirect()->route('manage.student')->with($notification);
                     }
                     else{
                        $notification=array(
                                'messege'=>'Student Update Failed',
                                'alert-type'=>'danger'
                            );
                            return Redirect()->back()->with($notification);
                     }
                } 
        }
        else{
            $oldphoto=$request->oldphoto;
            if ($oldphoto) {
                  $data['student_photo'] = $oldphoto;
                  $user=DB::table('users')->where('id',$std_id)->update($data); 
            if ($user) {
                    $notification=array(
                        'messege'=>'Student Update Successfully',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('manage.student')->with($notification);                      
            }else{
                $notification=array(
                        'messege'=>'Failed To Upload Image',
                        'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
             } 
          }
        }
    }
    //view student
    public function ViewOurStudent($sid){
        $result = DB::table('users')
              ->join('coursedetails','users.course_id','coursedetails.course_id')
              ->join('shifts','users.shift_id','shifts.shift_id')
              ->where('id',$sid)
              ->first();
        return view('admin.view_our_student',compact('result'));

    }
    //delete student
    public function DeleteStudent($std_id){
      $data = DB::table('users')->where('id',$std_id)->first();
      $image = $data->student_photo;
      $img_del = unlink($image);
      $delete = DB::table('users')->where('id',$std_id)->delete();
      if ($delete) {
              $notification=array(
                    'messege'=>'Student Deleted',
                    'alert-type'=>'success'
              );
              return Redirect()->route('manage.student')->with($notification);
      }
      else{
        $notification=array(
                    'messege'=>'Failed To Delete',
                    'alert-type'=>'danger'
              );
              return Redirect()->route('manage.student')->with($notification);
      }
    }
}
