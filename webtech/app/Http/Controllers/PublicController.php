<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use App\Mail\ContactEmail;
use Session;
session_start();

class PublicController extends Controller
{
   public function CoursesDetails(){
   		$result = DB::table('coursedetails')
   						->get();
   		return view('course_details',compact('result'));
   }

   //load services page
   public function Services(){
   		return view('services');
   }
   //load about us page
   public function AboutUs(){
   		return view('about_us');
   }
   //load contact us page
   public function ContactUs(){
   		return view('contact_us');
   }
   //send message
   public function SendMessage(Request $request){
      
      $name = $request->person_name;
      $message = $request->person_message;
      $email = $request->person_email;
      $mail = Mail::to('mahidspi@gmail.com')->send(new ContactEmail($name,$message));
      $data = array([
         'sender_name' => $name,
         'sender_email' => $email,
         'sender_message' => $message,
      ]);
      DB::table('messages')->insert($data);
      Session::put('exception','Your message hasbeen sent successfully!!!');
      return redirect()->back();
   }
   
}
