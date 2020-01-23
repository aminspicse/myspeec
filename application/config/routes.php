<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//landign page controller
$route['default_controller']        = 'LandingController';

//Sign Up controller
$route['signup']                    = 'users/SignUpController/index';
$route['SignUp']                    = 'users/SignUpController/index';

//Login controller 
$route['login']                     = 'users/LoginController';// login interface 
$route['check_validation']          = 'users/LoginController/Check_Validation'; // check login validation 
$route['logout']                    = 'users/LoginController/logout';

//forgot password controller
$route['forgatpassword']            = 'users/ForgotPasswordController/forgot'; //forgat password interface
$route['check_email']               = 'users/ForgotPasswordController/forgot_val'; // check email registered or not if registered then send a temporary password
$route['check_code']                = 'users/ForgotPasswordController/temp_password_val'; //check code valide or invalide
$route['set_new_password']          = 'users/ForgotPasswordController/change_password'; // for change password

//Search navbar controller
$route['posts']                     = 'users/SearchController/posts';//search for post
$route['searchpost']                = 'users/SearchController/post_fetch'; // fetch scrol pagination
$route['friends']                   = 'users/SearchController/friends';//search for friend
$route['searchfriend']              = 'users/SearchController/fetch_friends'; // fetch scrol pagination
$route['jobs']                      = 'users/SearchController/jobs';//search for job
$route['searchjob']                 = 'users/SearchController/fetch_jobs'; // fetch scrol pagination
$route['abbreviations']              = 'users/SearchController/abbreviations';//search for abbreviation
$route['searchabbreviation']        = 'users/SearchController/fetch_abbreviation';//search for abbreviation
$route['image']                     = 'users/SearchController/images';//search for image

//All sepaker
$route['allspeaker']                = 'users/AllSpeakerController/index';
$route['fetchallspeaker']           = 'users/AllSpeakerController/fetch_friend';

//Postcontroller
$route['new_speec']                 = 'users/PostController/index'; //for new posts
$route['publish_speec']             = 'users/PostController/index';

//MySpeecController
$route['mypost']                    = 'users/MySpeecController/index';
$route['editpost/(:any)/(:any)']    = 'users/MySpeecController/edit_post/$1/$title';//edit retrive post
$route['updatepost']                = 'users/MySpeecController/update_post';
$route['deletepost/(:any)']         = 'users/MySpeecController/delete_post/$1';
$route['fetchmypost']               = 'users/MySpeecController/myspeec_fetch'; // fetch user posr for scrol pagination

//home controller
$route['home']                      = 'users/HomeController';
$route['details/(:any)/(:any)']     = 'users/HomeController/ReadFullNews/$1/title_$2';
$route['fetchhomedata']             = 'users/HomeController/fetchhomedata';
$route['likedislike']               = 'users/HomeController/Like_Dislike';
$route['commentpost']               = 'users/HomeController/Comment_news';
$route['deletecomment/(:any)/(:any)']= 'users/HomeController/delete_comment/$1/$2';
//$route['test'] = ''

//public_profile
$route['view/(:any)/(:any)']        = 'users/PublicProfileController/view_profile/$1/user_$2'; //for vewing public profile
$route['view/(:any)/(:any)/(:any)'] = 'users/PublicProfileController/posts/$1/user_$2/$posts'; //for vewing public post
$route['fetchpublicpost']           = 'users/PublicProfileController/fetch_posts'; // fetch for scrol pagination
$route['workplace/(:any)/(:any)']   = 'users/PublicProfileController/view_workplace/$1/$2';

// MakeFriendController
$route['friendrequest/(:any)']      = 'users/MakeFriendController/friend_request/$1';
$route['follow/(:any)']             = 'users/MakeFriendController/makefriend/$1';

// Public cv controller
$route['viewcv/(:any)/(:any)']      = 'users/PublicCvController/public_cv/$1/$2'; // for public view in cv

//Profile controller 
$route['profile']                   = 'users/ProfileController/index';
$route['friendlist']                = 'users/ProfileController/total_friends';
$route['fetchtotalfriend']          = 'users/ProfileController/fetch_total_friend'; // fetch for scrol pagination
$route['removefriend/(:num)']       = 'users/ProfileController/remove_friend/$1';
$route['editinfo']                  = 'users/ProfileController/update_personal_info';
$route['changeimage']               = 'users/ProfileController/Profilepic';
$route['workplace']                 = 'users/ProfileController/view_workplace';

//ActivitiesController 
$route['loginactivities']           = 'users/ActivitiesController/loginactivities';
$route['fetchloginactivities']      = 'users/ActivitiesController/fetch_loginactivities';

//ChangePassword controller
$route['changepassword']            = 'users/ChangePasswordController';

//Score controller
$route['score']                     = 'users/ScoreController/index';

//SMS Controller
$route['sms']                       = 'users/SMSController/index';
$route['chat/(:num)']               = 'users/SMSController/chating/$1';

// CV controller
$route['addeducation']              = 'users/CvController/addeducation'; // Add education
$route['editeducation/(:num)']      = 'users/CvController/edit_education/$1'; // edit education data
$route['deleteeducation/(:num)']    = 'users/CvController/delete_education/$1'; // delete educaton
$route['addexperience']             = 'users/CvController/addexperience'; // Add Edperiece
$route['editexperience/(:num)']     = 'users/CvController/edit_experience/$1'; // Edit Experience
$route['deleteexperience/(:num)']   = 'users/CvController/delete_experience/$1'; // delete experience 
$route['addskill']                  = 'users/CvController/addskill';// add skill
$route['editskill/(:num)']          = 'users/CvController/edit_skill/$1'; // edit skill
$route['deleteskill/(:num)']        = 'users/CvController/delete_skill/$1'; // delete skill
$route['addtraining']               = 'users/CvController/addtraining'; // add traiining
$route['edittraining/(:num)']       = 'users/CvController/edit_training/$1'; // edit training 
$route['deletetraining/(:num)']     = 'users/CvController/delete_training/$1';// delete training
$route['addabout']                  = 'users/CvController/add_aboutself'; // add about
$route['editabout/(:num)']          = 'users/CvController/eidt_aboutself/$1'; //edit about
$route['deleteabout/(:num)']        = 'users/CvController/delete_aboutself/$1'; // delete about
$route['cv']                        = 'users/CvController/cv_view'; // cv admin view

//CvPdfController
$route['cvdownload']                = 'users/CvPdfControllerUser/download_cv';

// JobController
$route['createjob']                 = 'users/JobController/create_job'; // for create job
$route['viewjob']                   = 'users/JobController/job_public';
$route['viewfull/(:any)/(:any)']    = 'users/JobController/viewfulljob/$1/$2';
$route['applyjob/(:any)']           = 'users/JobController/applyjob/$1';
$route['fetchalljob']               = 'users/JobController/fetch_job_public'; // fetch for scrol pagination
$route['deletejob/(:any)/(:any)/(:any)']   = 'users/JobController/delete_job/$1/$2/$3'; // delete job 

//Company controller
$route['createcompany']             = 'company/CompanyController/cratecompany'; // for create a company
$route['mycompany']                 = 'company/CompanyController/fetch_all_company'; // view for all company for one time
$route['deletecompany/(:any)']      = 'company/CompanyController/delete_company/$1'; // for delete company
$route['company/(:any)/(:any)']     = 'company/CompanyController/view_company_individual/$1/$2';// view company
$route['companyjob/(:any)/(:any)']  = 'company/CompanyController/view_companyjob/$1/$2';// view company job
$route['company/edit/(:any)/(:any)']= 'company/CompanyController/editcompany/$1/$2'; // edit company data
$route['changephoto/(:any)']        = 'company/CompanyController/change_photo/$1'; // change company photo 
$route['applicantlist/(:any)/(:any)'] = 'company/CompanyController/appliedlist/$1/$2'; // total applicant list of this job 
$route['applicationreject/(:any)/(:any)/(:any)']  = 'company/CompanyController/applicationreject/$1/$2/$3'; // application reject

//CvpdfCOmpnay controller
$route['downloadcvemployee/(:any)'] = 'company/CvPdfCompanyController/download_cv/$1';

// Abbrivation Controller
$route['abbreviation/create']       = 'abbreviation/AbbreviationController/index';

//AbbreviationPublicController
$route['abbr']                      = 'abbreviation/AbbreviationPublicController/abbreviations';
$route['abbr/fetch']                = 'abbreviation/AbbreviationPublicController/fetch_abbreviation';
//LiveController
$route['live']                      = 'users/LiveController/index'; 
$route['404_override']              = '';
$route['translate_uri_dashes']      = true;

