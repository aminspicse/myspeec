<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CourseController extends Controller
{
    //show add coure form
    public function Index(){
    	return view('admin.add_course');
    }
    //store data to course table
    public function StoreCourse(Request $request){
    	$data = array([
    		'course_name' => $request->course_name,
    		'course_fee' => $request->course_fee,
    		'course_duration' => $request->course_duration,
    		'course_details' => $request->course_details,
    	]);
    	$add = DB::table('coursedetails')
    				->insert($data);
    	if ($add){
    		$notification=array(
                 'messege'=>'Successfully Course Added ',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);
    	}
    	else{
    		$notification=array(
                 'messege'=>'Course Added Failed',
                 'alert-type'=>'danger'
                  );
                return Redirect()->back()->with($notification);
    	}
    }
    //view data off course table
    public function ViewCourses(){
      $course = DB::table('coursedetails')
                  ->get();
      return view('admin.view_courses',compact('course'));
    }
    //edit course form
    public function EditCourseForm($id){
      $result = DB::table('coursedetails')
                   ->where('course_id',$id)
                   ->first();
      return view('admin.edit_courses',compact('result'));
    }
    //update course data
    public function UpdateCourseData(Request $request){
      $data = array();
      $course_id = $request->course_id;
      $data['course_name'] = $request->course_name;
      $data['course_fee'] = $request->course_fee;
      $data['course_duration'] = $request->course_duration;
      $data['course_details'] = $request->course_details;

      $update = DB::table('coursedetails')
                    ->where('course_id',$course_id)
                    ->update($data);
      if ($update){
        $notification=array(
                 'messege'=>'Successfully Course Updated ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('view.courses')->with($notification);
      }
      else{
        $notification=array(
                 'messege'=>'Course Update Failed',
                 'alert-type'=>'danger'
                  );
                return Redirect()->back()->with($notification);
      }

    }
    //view course details
    public function CourseDetail($id){
      $result = DB::table('coursedetails')
                    ->where('course_id',$id)
                    ->first();
      return view('admin.course_detail',compact('result'));
    }
    //delete course
    public function DeleteCourse($id){
      $delete = DB::table('coursedetails')
                    ->where('course_id',$id)
                    ->delete();
      if($delete){
        $notification=array(
                 'messege'=>'Successfully Course Deleted',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);
      }
      else{
        $notification=array(
                 'messege'=>'Course Delete Failed',
                 'alert-type'=>'danger'
                  );
                return Redirect()->back()->with($notification);
      }

    }
    //deactive course
    public function DeactiveCourse($id){
      $data = array();
      $data['course_status'] = 0;
      $deavtive = DB::table('coursedetails')
                    ->where('course_id',$id)
                    ->update($data);
      if($deavtive){
        $notification=array(
                 'messege'=>'Course Deactivated',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);
      }
      else{
        $notification=array(
                 'messege'=>'Deactivate Failed',
                 'alert-type'=>'danger'
                  );
                return Redirect()->back()->with($notification);
      }
    }
    //active course
    public function ActiveCourse($id){
      $data = array();
      $data['course_status'] = 1;
      $deavtive = DB::table('coursedetails')
                    ->where('course_id',$id)
                    ->update($data);
      if($deavtive){
        $notification=array(
                 'messege'=>'Course Activated',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);
      }
      else{
        $notification=array(
                 'messege'=>'Activate Failed',
                 'alert-type'=>'danger'
                  );
                return Redirect()->back()->with($notification);
      }
    }
    //add new shift form
    public function AddShift(){
    	return view('admin.add_shift');
    }
    //store shift data to table
    public function NewShift(Request $request){
    	$data = array([
    		'shift_details' => $request->shift_details
    	]);
    	$add = DB::table('shifts')
    				->insert($data);
    	if ($add){
    		$notification=array(
                 'messege'=>'Successfully Shift Added ',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);
    	}
    	else{
    		$notification=array(
                 'messege'=>'Shift Added Failed',
                 'alert-type'=>'danger'
                  );
                return Redirect()->back()->with($notification);
    	}
    }

}
