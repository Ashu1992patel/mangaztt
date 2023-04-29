<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginMasterController;
use App\Http\Controllers\User_loginController;
use App\Http\Controllers\HotelMasterController;
use App\Http\Controllers\HotelInfoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserMasterController;
use App\Http\Controllers\FrontendController;

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

/***********************Custom Route********************************/
// Testing Route

Route::get('uat', [TestingController::class, 'index']);

Route::get('access', function () {
    return view('login');
});

Route::get('test', function () {
    return view('web.profile.test');
});

Route::GET('logout', function () {
    session_start();
    $_SESSION['user_master'] = null;
    return redirect('/');
});
Route::GET('adminlogout', function () {
    session_start();
    $_SESSION['admin_master'] = null;
    return redirect('/access');
});

Route::get('create-category', [CategoryController::class, 'create']);
Route::post('create-category', [CategoryController::class, 'store']);

Route::GET('change_password', function () {
    return view('change_password');
});
Route::POST('reset_password', [LoginMasterController::class, 'reset_password'])->name('reset_password');
Route::GET('user_master/{id}/resetPassword', [LoginMasterController::class, 'reset']);

Route::get('verify_otp', [User_loginController::class, 'verify_otp']);
Route::get('forgot_password', [User_loginController::class, 'forgot_password']);
Route::get('resend_code', [User_loginController::class, 'resend_code']);

Route::POST('change_password', [LoginMasterController::class, 'change_password']);

Route::get('hotel/{id}/booked', [HotelMasterController::class, 'booked']);
Route::get('hotel/{id}/available', [HotelMasterController::class, 'available']);

Route::get('hotel_info/{id}/info', [HotelInfoController::class, 'index']);
Route::get('hotel_info/{id}/create', [HotelInfoController::class, 'create']);
Route::GET('dashboard', [LoginMasterController::class, 'login_user']);
/****************************Crud Route******************************/
Route::resource('home', LoginMasterController::class);
Route::post('admin_login', [LoginMasterController::class, 'store'])->name('admin_login');
Route::resource('user_master', ProfileController::class);
Route::get('user_list', [ProfileController::class, 'user_list']);
Route::get('all_user', [ProfileController::class, 'all_user']);
Route::resource('hotel', HotelMasterController::class);
Route::resource('hotel_info', HotelInfoController::class);
/****************************Crud Route******************************/

/********delete Route***********/
Route::get('hotel/{id}/delete', [HotelMasterController::class, 'destroy']);
Route::get('user_master/{id}/delete', [UserMasterController::class, 'destroy']);
Route::get('user_master/{id}/activate', [UserMasterController::class, 'activate']);
Route::get('mark_as_paid/{id}', [UserMasterController::class, 'mark_as_paid']);
Route::get('mark_as_unpaid/{id}', [UserMasterController::class, 'mark_as_unpaid']);
/********delete Route***********/

Route::get('getdetails', [UserMasterController::class, 'getdetails']);

/***************Frontend*******************/

Route::get('/', [FrontendController::class, 'home']);
Route::get('registration', [FrontendController::class, 'registration']);
Route::get('a_registration', [FrontendController::class, 'a_registration']);
Route::post('search', [FrontendController::class, 'ajax_candidate_list']); //candidate list
Route::get('candidate_list', [FrontendController::class, 'candidate_list']); //candidate list
Route::get('view_profile/{id}', [FrontendController::class, 'view_candidate']); //candidate list
Route::get('view_profile_admin/{id}', [FrontendController::class, 'view_candidate_admin']); //candidate list
Route::get('membership', [FrontendController::class, 'membership']); //candidate list
Route::get('userProfiles', [FrontendController::class, 'userProfiles']); //candidate list

Route::get('candidates/{id}', [FrontendController::class, 'candidates']);
Route::get('search_by_id', [FrontendController::class, 'search_by_id']);

Route::POST('searchfilter', [FrontendController::class, 'candidate_list']);
Route::get('refine_candidate_list', [FrontendController::class, 'refine_candidate_list']);
Route::POST('profile_update', [User_loginController::class, 'profile_update']);

Route::get('advance_search', [FrontendController::class, 'advance_search']);
Route::post('search_advance', [FrontendController::class, 'search_advance']);
Route::get('get_search_advance', [FrontendController::class, 'get_search_advance']);

Route::post('search_side', [FrontendController::class, 'search_side']);
Route::get('get_search_side', [FrontendController::class, 'get_search_side']);

Route::get('desire_candidates', [FrontendController::class, 'desire_candidates']);

Route::get('checkno', [User_loginController::class, 'checkno']);
Route::get('checkemail', [User_loginController::class, 'checkemail']);

Route::get('getUpload', [User_loginController::class, 'getUpload']);
Route::POST('upload_pic', [User_loginController::class, 'upload_pic'])->name('upload_pic');
Route::get('picture/{id}/delete', [User_loginController::class, 'getUploadedUpdate']);

Route::get('getAadhar', [User_loginController::class, 'getAadhar']);
Route::get('admingetAadhar', [User_loginController::class, 'admingetAadhar']);
Route::POST('aadhar_upload', [User_loginController::class, 'aadhar_upload'])->name('aadhar_upload');
Route::get('aadhar/{id}/delete', [User_loginController::class, 'aadharUpdate']);

Route::post('register', [User_loginController::class, 'register']);
Route::get('login_user', [User_loginController::class, 'login']);

///interest
Route::post('sendrequest', [ProfileController::class, 'sendrequest']);
Route::post('cancelrequest', [ProfileController::class, 'cancelrequest']);
Route::post('acceptfrequest', [ProfileController::class, 'acceptfrequest']);
Route::get('wunfriend', [ProfileController::class, 'unfriend']);

Route::get('viewcontact', [ProfileController::class, 'viewcontact']);
Route::get('show_contact', [ProfileController::class, 'show_contact']);
Route::get('show_contact_admin', [ProfileController::class, 'show_contact_admin']);

Route::get('myp', [ProfileController::class, 'myprofile']); //myprofile
Route::get('edit_profile', [ProfileController::class, 'edit_profile']); //myprofile
Route::get('profile_photo', [ProfileController::class, 'profile_photo']); //profile_photo
Route::post('change_password', [ProfileController::class, 'change_password']);

Route::get('getpayment', [FrontendController::class, 'payment']);
Route::post('success', [FrontendController::class, 'payment_success']);
Route::post('failed', [FrontendController::class, 'payment_failed']);

Route::get('privacy_control', [FrontendController::class, 'getprivacy_control']);
Route::post('privacy_update', [FrontendController::class, 'privacy_update'])->name('privacy_update');
Route::get('contact_us', [FrontendController::class, 'contact_us']);
Route::get('policy', [FrontendController::class, 'policy']);

Route::get('payment', function () {
    return view('web.payment');
});

/***************Frontend*******************/

//admin

Route::get('edit_profile/{id}', [ProfileController::class, 'edit_profile_admin']); //myprofile
Route::POST('profile_update_admin', [User_loginController::class, 'profile_update_admin']);
Route::POST('admin_s_user', [ProfileController::class, 'admin_s_user'])->name('admin_s_user');

Route::get('mail_test', [User_loginController::class, 'mail_test']);
Route::get('testup', [User_loginController::class, 'testup']);

Route::get('e', [ProfileController::class, 'get_error_log']);

//DB_CONNECTION=mysql
//DB_HOST=127.0.0.1
//DB_PORT=3306
//DB_DATABASE=mangaztt_mangaztt_user
//DB_USERNAME=mangaztt_user
//DB_PASSWORD=Mangal4983@@@@

//mangalmandap2018@mmm.com
//Vikash2018@@@@
