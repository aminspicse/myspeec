<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/log-out','LogoutController@LogOut')->name('log.out');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index')->name('admin/home');
Route::get('/course-structure', 'PublicController@CoursesDetails')->name('course.details');
Route::get('/services', 'PublicController@Services')->name('our.services');
Route::get('/about', 'PublicController@AboutUs')->name('about.us');
Route::get('/contact', 'PublicController@ContactUs')->name('contact.us');
Route::post('/send-message', 'PublicController@SendMessage')->name('send.message');

//Admin Authentication Routes...
$this->get('admin', 'Admin\LoginController@showLoginForm')->name('admin');
$this->post('admin-login','Admin\LoginController@login');

//Students routes are here...
Route::group(['middleware' => ['auth']],function(){

	Route::get('/my-profile','StudentController@Index')->name('myprofile');
	Route::get('/change-profile','StudentController@ChangeProfile')->name('change.profile');
	Route::post('set-profile','StudentController@SetProfile')->name('set.profile');
	Route::get('change-password','StudentController@ChangePasswordForm')->name('change.password');
	Route::post('change-password','StudentController@SetPassword')->name('set.password');
	Route::get('download-applicaton','PdfController@Index')->name('download.myform');
});

//Admin Routes Are Here...
Route::group(['middleware' => ['auth:admin']],function(){
	// Route::get('/my-profile','StudentController@Index')->name('myprofile');
	Route::get('add-admin','AdminController@NewAdmin')->name('add.admin');
	Route::post('new-admin','AdminController@StoreAdmin')->name('create.admin');
	Route::get('applied-student','Admin\StudentController@Index')->name('applied.student');
	Route::get('add-course','Admin\CourseController@Index')->name('add.course');
	Route::post('new-course','Admin\CourseController@StoreCourse')->name('create.course');
	Route::get('add-shift','Admin\CourseController@AddShift')->name('add.shift');
	Route::post('new-shift','Admin\CourseController@NewShift')->name('create.shift');
	Route::get('view-courses','Admin\CourseController@ViewCourses')->name('view.courses');
	Route::get('/edit-course/{id}','Admin\CourseController@EditCourseForm');
	Route::post('update-course','Admin\CourseController@UpdateCourseData')->name('update.course');
	Route::get('delete-course/{id}','Admin\CourseController@DeleteCourse');
	Route::get('deactive-course/{id}','Admin\CourseController@DeactiveCourse');
	Route::get('active-course/{id}','Admin\CourseController@ActiveCourse');
	Route::get('course-details/{id}','Admin\CourseController@CourseDetail');
	Route::get('approve-student/{id}','Admin\StudentController@ApproveStudent');
	Route::get('delete-applied-student/{id}','Admin\StudentController@DeleteAppliedStudent');
	Route::get('view-applied-student/{id}','Admin\StudentController@ViewAppliedStudent');
	Route::get('manage-student','Admin\StudentController@ManageStudent')->name('manage.student');
	Route::get('/edit-student/{id}','Admin\StudentController@EditStudentForm');
	Route::get('delete-student','Admin\StudentController@DeleteStudent');
	Route::post('/set-student','Admin\StudentController@UpdateStudent')->name('set.student');
	Route::get('/view-student/{id}','Admin\StudentController@ViewOurStudent');
	Route::get('/add-services','Admin\ServicesController@Index')->name('add.service');
	Route::post('/create-service','Admin\ServicesController@NewService')->name('create.service');
	Route::get('/view-services','Admin\ServicesController@ViewService')->name('view.service');
	Route::get('/edit-services/{service_id}','Admin\ServicesController@ChangeServices');
	Route::post('/update-service','Admin\ServicesController@UpdateService')->name('update.service');
	Route::get('/view-single/{service_id}','Admin\ServicesController@ViewSingle')->name('view.single');
	Route::get('/delete-services/{service_id}','Admin\ServicesController@DeleteService');
	Route::get('/deactive-service/{service_id}','Admin\ServicesController@DeactiveService');
	Route::get('/active-service/{service_id}','Admin\ServicesController@ActiveService');
	Route::get('/admin-inbox','Admin\AdminMailController@Index')->name('admin.inbox');
	Route::get('/view-single-message/{message_id}','Admin\AdminMailController@ViewMessage');
	Route::get('/reply-message/{message_id}','Admin\AdminMailController@ReplyMessage');
	Route::post('/send-reply','Admin\AdminMailController@SendReply')->name('send.reply');
	Route::get('/all-mails','Admin\AdminMailController@AllMailS')->name('all.mails');
	Route::get('/view-read-message/{message_id}','Admin\AdminMailController@ViewReadMessage');
	Route::get('/delete-read-message/{message_id}','Admin\AdminMailController@DeleteReadMessage');
});
