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
$route['default_controller']        = 'Landing_page/';
//Sign Up controller
$route['signup']                    = 'users/SignUp/index';
$route['SignUp']                    = 'users/SignUp/index';
//Login controller 
$route['login']                     = 'users/Login';// login interface 
$route['check_validation']          = 'users/Login/Check_Validation'; // check login validation 
$route['logout']                    = 'users/Login/logout';
//forgot password controller
$route['forgatpassword']            = 'users/Forgot_Password/forgot'; //forgat password interface
$route['check_email']               = 'users/Forgot_Password/forgot_val'; // check email registered or not if registered then send a temporary password
$route['check_code']                = 'users/Forgot_Password/temp_password_val'; //check code valide or invalide
$route['set_new_password']          = 'users/Forgot_Password/change_password'; // for change password
//Search navbar controller
$route['posts']                     = 'users/Search/posts';//search for post
$route['friends']                   = 'users/Search/friends';//search for friend
$route['jobs']                      = 'users/Search/jobs';//search for job
$route['video']                     = 'users/Search/videos';//search for video
$route['image']                     = 'users/Search/images';//search for image
//All sepaker
$route['allspeaker']                = 'users/All_Speaker/index';
//New Post
$route['new_speec']                 = 'users/NewSpeec/index'; //for new posts
$route['publish_speec']             = 'users/NewSpeec/index';
//MySpeec 
$route['mypost']                    = 'users/MySpeech/index';
$route['editpost/(:any)/(:any)']    = 'users/MySpeech/edit_post/$1/$title';//edit retrive post
$route['updatepost']                = 'users/MySpeech/update_post';
//home controller
$route['home']                      = 'users/Home';
$route['details/(:any)/(:any)']     = 'users/Home/ReadFullNews/$1/title_$2';
//public_profile
$route['view/(:any)/(:any)']        = 'users/Public_Profile/view_profile/$1/user_$2'; //for vewing public profile
$route['view/(:any)/(:any)/(:any)'] = 'users/Public_Profile/posts/$1/user_$2/$posts'; //for vewing public post
$route['workplace/(:any)/(:any)']   = 'users/Public_Profile/view_workplace/$1/$2';
// Public cv controller
$route['viewcv/(:any)/(:any)']      = 'users/Public_Cv/public_cv/$1/$2'; // for public view in cv
//Profile controller
$route['profile']                   = 'users/Profile/index';
$route['friendlist']                = 'users/Profile/total_friends';
$route['removefriend/(:num)']       = 'users/Profile/remove_friend/$1';
$route['editinfo']                  = 'users/Profile/update_personal_info';
$route['changeimage']               = 'users/Profile/Profilepic';
$route['workplace']                 = 'users/Profile/view_workplace';
//Activities controller
$route['loginactivities']           = 'users/Activities/loginactivities';
//ChangePassword controller
$route['changepassword']            = 'users/ChangePassword';
//Score controller
$route['score']                     = 'users/Score/index';
//SMS Controller
$route['sms']                       = 'users/SMS/index';
$route['chat/(:num)']               = 'users/SMS/chating/$1';
// CV controller
$route['addeducation']              = 'users/CV/addeducation'; // Add education
$route['editeducation/(:num)']      = 'users/CV/edit_education/$1'; // edit education data
$route['deleteeducation/(:num)']    = 'users/CV/delete_education/$1'; // delete educaton
$route['addexperience']             = 'users/CV/addexperience'; // Add Edperiece
$route['editexperience/(:num)']     = 'users/CV/edit_experience/$1'; // Edit Experience
$route['deleteexperience/(:num)']   = 'users/CV/delete_experience/$1'; // delete experience 
$route['addskill']                  = 'users/CV/addskill';// add skill
$route['editskill/(:num)']          = 'users/CV/edit_skill/$1'; // edit skill
$route['deleteskill/(:num)']        = 'users/CV/delete_skill/$1'; // delete skill
$route['addtraining']               = 'users/CV/addtraining'; // add traiining
$route['edittraining/(:num)']       = 'users/CV/edit_training/$1'; // edit training 
$route['deletetraining/(:num)']     = 'users/CV/delete_training/$1';// delete training
$route['addabout']                  = 'users/CV/add_aboutself'; // add about
$route['editabout/(:num)']          = 'users/CV/eidt_aboutself/$1'; //edit about
$route['deleteabout/(:num)']        = 'users/CV/delete_aboutself/$1'; // delete about
$route['cv']                        = 'users/CV/cv_view'; // cv admin view
// Job controller
$route['createjob']                 = 'users/Jobs/create_job'; // for create job
$route['viewjob']                   = 'users/Jobs/job_public';
$route['viewfull/(:any)/(:any)']    = 'users/Jobs/viewfulljob/$1/$2';
// Create_Company controller
$route['createcompany']             = 'company/Create_Company/company_create'; // for create a company
// Company Controller
$route['mycompany']                 = 'company/Company/fetch_all_company'; // view for all company for one time
$route['deletecompany/(:any)']      = 'company/Company/delete_company/$1'; // for delete company
$route['company/(:any)/(:any)']     = 'company/Company/view_company_individual/$1/$2';// view company
$route['companyjob/(:any)/(:any)']     = 'company/Company/view_companyjob/$1/$2';// view company job
$route['deletejob/(:any)/(:any)/(:any)']   = 'company/Company/delete_job/$1/$2/$3'; // delete job 
$route['editcompany/(:any)/(:any)']               = 'compnay/Company/editcompanyinfo/$1/$2'; // edit company data
$route['changephoto/(:any)']        = 'company/Company/change_photo/$1'; // change company photo 
$route['live']                      = 'users/Live/index'; 
$route['404_override']              = '';
$route['translate_uri_dashes']      = true;

