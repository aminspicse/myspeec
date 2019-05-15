<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//landign page controller
$route['default_controller']    = 'Landing_page/';
//Sign Up controller
$route['signup']                = 'users/Signup';
//Login controller
$route['login']                 = 'users/Login';// login interface 
$route['check_validation']      = 'users/Login/Check_Validation'; // check login validation 
$route['logout']                = 'users/Login/logout';
//forgot password controller
$route['forgatpassword']        = 'users/Forgot_Password/forgot'; //forgat password interface
$route['check_email']           = 'users/Forgot_Password/forgot_val'; // check email registered or not if registered then send a temporary password
$route['check_code']            = 'users/Forgot_Password/temp_password_val'; //check code valide or invalide
$route['set_new_password']      = 'users/Forgot_Password/change_password'; // for change password
//Search navbar controller
$route['posts']                 = 'users/Search/posts';//search for post
$route['friends']               = 'users/Search/friends';//search for friend
$route['video']                 = 'users/Search/videos';//search for video
$route['image']                 = 'users/Search/images';//search for image
//All sepaker
$route['allspeaker']            = 'users/All_Speaker/index';
//New Post
$route['new_speec']             = 'users/NewSpeec/index'; //for new posts
$route['publish_speec']         = 'users/NewSpeec/index';
//MySpeec 
$route['mypost']                = 'users/MySpeech/index';
$route['editpost/(:any)/(:any)']    = 'users/MySpeech/edit_post/$1/$title';//edit retrive post
$route['updatepost']     = 'users/MySpeech/update_post';
//home controller
$route['home']                  = 'users/Home';
$route['details/(:any)/(:any)'] = 'users/Home/ReadFullNews/$1/title_$2';
//public_profile
$route['view/(:any)/(:any)'] = 'users/Public_Profile/view_profile/$1/user_$2'; //for vewing public profile
$route['view/(:any)/(:any)/(:any)'] = 'users/Public_Profile/posts/$1/user_$2/$posts'; //for vewing public post
//Profile controller
$route['profile']           = 'users/Profile/index';
$route['friendlist']        = 'users/Profile/total_friends';
$route['removefriend/(:any)']     = 'users/Profile/remove_friend/nm_$1';
$route['editinfo']                = 'users/Profile/update_personal_info';
$route['changeimage']             = 'users/Profile/Profilepic';
//Activities controller
$route['loginactivities']   = 'users/Activities/loginactivities';
//ChangePassword controller
$route['changepassword']            = 'users/ChangePassword';
//Score controller
$route['score']                     = 'users/Score/index';
//SMS Controller
$route['sms']                       = 'users/SMS/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;
