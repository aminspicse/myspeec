<?php

namespace App\Http\Controllers;

use DB;
use Faker\Provider\email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\validate;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }
    //Show new admin form
    public function NewAdmin(){
        return view('admin.new_admin');
    }
    //Store new admin data
    public function StoreAdmin(Request $request){
        //  $validatedData = $request->validate([
        // 'name' => 'required|max:255',
        // 'email' => 'required|unique:employees|max:255',
        // 'admin_phone' => 'required|unique:employees|max:255',
        // 'admin_photo' => 'required|file|max:1024',
        // 'password' => 'string|required|min:6',
        // ]);
        $data = array();
        $data['name'] = $request->name;
        $data['admin_phone'] = $request->admin_phone;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['admin_address'] = $request->admin_address;
        $image = $request->file('admin_photo');
        if($image){
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name =$image_name.'.'.$ext;
            $upload_path='public/photo/admins/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['admin_photo']=$image_url;
                $admin=DB::table('admins')
                         ->insert($data);
              if ($admin) {
                 $notification=array(
                 'messege'=>'Successfully Admin Added ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('admin/home')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'Admin Added Failed',
                 'alert-type'=>'danger'
                  );
                 return Redirect()->back()->with($notification);
             }      
                
            }else{
                $notification=array(
                 'messege'=>'Admin Added Failed',
                 'alert-type'=>'danger'
                  );
                 return Redirect()->back()->with($notification);
                
            }
        }else{
            $notification=array(
                 'messege'=>'Admin Added Failed',
                 'alert-type'=>'danger'
                  );
                 return Redirect()->back()->with($notification);
        }
    }
}
