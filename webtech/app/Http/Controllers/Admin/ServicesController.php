<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ServicesController extends Controller
{
    //view add services page
    public function Index(){
    	return view('admin.add_services');
    }
    //strore data to service table
    public function NewService(Request $request){
    	
    	$image = $request->file('service_thumbnail');
    	$image_name = str_random(5);
    	$ext = strtolower($image->getClientOriginalExtension());
    	$image_fullname = $image_name.'.'.$ext;
    	$upload_path = 'public/photo/services/';
    	$image_url = $upload_path.$image_fullname;
    	$success = $image->move($upload_path,$image_fullname);
    	if ($success) {
	    		$data = array([
	    			'service_name' => $request->service_name,
	    			'service_details' => $request->service_details,
	    			'service_thumbnail' => $image_url,
	    		]);
	    		$add = DB::table('services')->insert($data);
	    		if ($add){
	    				$notification=array(
                		 	'messege'=>'Service Added',
                 			'alert-type'=>'success'
                  		);
                		return Redirect()->back()->with($notification);
	    		}
	    		else{
	    			$notification=array(
                		 	'messege'=>'Failed To Add',
                 			'alert-type'=>'danger'
                  		);
                		return Redirect()->back()->with($notification);
	    		}

    	}
    	else{
    			$notification=array(
                		'messege'=>'Failed To Upload Image',
                 		'alert-type'=>'danger'
                  	);
                return Redirect()->back()->with($notification);
    	}


    }
    //view service for admin
    public function ViewService(){
        $result = DB::table('services')->get();
        return view('admin.all_services',compact('result'));
    }
    //view service edit page
    public function ChangeServices($service_id){
         $result = DB::table('services')->where('service_id',$service_id)->first();
         return view('admin.edit_services',compact('result'));
    }
    //update data on service table
    public function UpdateService(Request $request){
        $data = array();
        $data['service_name'] = $request->service_name;
        $data['service_details'] = $request->service_details;
        $image = $request->file('service_thumbnail');
        $service_id = $request->service_id;
        if ($image) {
               $image_name=str_random(20);
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='public/photo/services/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
               if ($success) {
                     $data['service_thumbnail'] =$image_url;
                     $img=DB::table('services')->where('service_id',$service_id)->first();
                     $image_path = $img->service_thumbnail;
                     $done=unlink($image_path);
                     $service=DB::table('services')->where('service_id',$service_id)->update($data);
                     if($service){
                            $notification=array(
                                'messege'=>'Service Update Successfully',
                                'alert-type'=>'success'
                            );
                            return Redirect()->back()->with($notification);
                     }
                     else{
                        $notification=array(
                                'messege'=>'Service Update Failed',
                                'alert-type'=>'danger'
                            );
                            return Redirect()->back()->with($notification);
                     }
                } 
        }
        else{
            $oldphoto=$request->oldphoto;
            if ($oldphoto) {
                  $data['service_thumbnail'] = $oldphoto;
                  $user=DB::table('services')->where('service_id',$service_id)->update($data); 
            if ($user) {
                    $notification=array(
                        'messege'=>'Service Update Successfully',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('all.customer')->with($notification);                      
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
    //view one service
    public function ViewSingle($service_id){
        $result = DB::table('services')->where('service_id',$service_id)->first();
        return view('admin.single_serivce',compact('result'));
    }
    //delete service
    public function DeleteService($service_id){
        $all = DB::table('services')->where('service_id',$service_id)->first();
        $image = $all->service_thumbnail;
        $delete = unlink($image);
        $data_delete = DB::table('services')->where('service_id',$service_id)->delete();
        if ($data_delete) {
                $notification=array(
                        'messege'=>'Service Deleted',
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
    //service deactive
    public function DeactiveService($service_id){
        $data=([
            'service_status' => 0,
        ]);
        $deactive = DB::table('services')->where('service_id',$service_id)->update($data);
        if ($deactive) {
                $notification=array(
                        'messege'=>'Service Deactivated',
                        'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
        }
        else{
            $notification=array(
                        'messege'=>'Failed To Deactive',
                        'alert-type'=>'danger'
                );
                return Redirect()->back()->with($notification);
        }
    }
    //service active
    public function ActiveService($service_id){
        $data=([
            'service_status' => 1,
        ]);
        $deactive = DB::table('services')->where('service_id',$service_id)->update($data);
        if ($deactive) {
                $notification=array(
                        'messege'=>'Service Activated',
                        'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
        }
        else{
            $notification=array(
                        'messege'=>'Failed To Active',
                        'alert-type'=>'danger'
                );
                return Redirect()->back()->with($notification);
        }
    }
}
