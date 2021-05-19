<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;

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

// Route::get('/', 'App\Http\Controllers\FrontViewController@home');
// Route::get('/services', 'App\Http\Controllers\FrontViewController@services');
// Route::get('/blog', 'App\Http\Controllers\FrontViewController@blog');
// Route::get('/companyProfile', 'App\Http\Controllers\FrontViewController@companyProfile');
// Route::get('/member',function(){
//     return view('login.login');
// });


// // Route::get('/karyawan', 'App\Http\Controllers\KaryawanController@index');


// // Front View Website
// Route::get('/', function(){
//     return view('frontView.home');
// });
// // Route::get('/services', function(){
// //     return view('frontView.services',['name' => 'SERVICES']);
// // });
// Route::get('/companyProfile', function(){
//     return view('frontView.companyProfile',['name' => 'COMPANY PROFILE'] );
// });
// Route::get('/blog/detail', function(){
//     return view('frontView.detailBlog', ['name' => 'BLOG']);
// });
// // Route::get('/services/detail', function(){
// //     return view('frontView.detailServices', ['name' => 'SERVICES']);
// // });


// Member Area


Route::get('/login', function(){
    return view('login.login');
})->name('login');

Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::post('/signup', 'App\Http\Controllers\LoginController@signup')->name('signup');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
Route::get('/testing','App\Http\Controllers\LoginController@sendEmail');

Route::get('/send-email', 'App\Http\Controllers\LoginController@sendEmail')->name('email');



// Get Registered Account by they id
Route::get('/verification','App\Http\Controllers\LoginController@verification');
Route::post('/verificationcode','App\Http\Controllers\LoginController@getVerificationCode');


// Route::get('/nilai','App\Http\Controllers\PenilaianController@index');
// Route::get('/nilai/create', 'App\Http\Controllers\PenilaianController@create');
// Route::get('/nilai/{nilai}', 'App\Http\Controllers\PenilaianController@show');
// Route::post('/nilai', 'App\Http\Controllers\PenilaianController@store');
// Route::delete('/nilai/{nilai}', 'App\Http\Controllers\PenilaianController@destroy');
// Route::get('/nilai/{nilai}/edit','App\Http\Controllers\PenilaianController@edit');
// Route::patch('/nilai/{nilai}','App\Http\Controllers\PenilaianController@update');


// // MemberArea Profile
// Route::get('/profile','App\Http\Controllers\ProfileController@index');
// Route::get('/profile/{editData}/edit','App\Http\Controllers\ProfileController@edit');
// Route::get('/profile/{editData}/password','App\Http\Controllers\ProfileController@password');
// Route::patch('/profile/{editData}','App\Http\Controllers\ProfileController@update');

// // MemberArea Member

// Route::get('/member', 'App\Http\Controllers\MemberController@index');
// Route::get('/member/create','App\Http\Controllers\MemberController@create');
// Route::post('/member','App\Http\Controllers\MemberController@store');
// Route::get('/member/{member}', 'App\Http\Controllers\MemberController@show');
// Route::delete('/member/{member}', 'App\Http\Controllers\MemberController@destroy');
// Route::get('/member/{member}/edit','App\Http\Controllers\MemberController@edit');
// Route::patch('/member/{member}','App\Http\Controllers\MemberController@update');

// // MemberArea Asesor
// Route::get('/asesor', 'App\Http\Controllers\AsesorController@index');
// Route::get('/asesor/create','App\Http\Controllers\AsesorController@create');
// Route::post('/asesor','App\Http\Controllers\AsesorController@store');
// Route::get('/asesor/{asesor}', 'App\Http\Controllers\AsesorController@show');
// Route::delete('/asesor/{asesor}', 'App\Http\Controllers\AsesorController@destroy');
// Route::get('/asesor/{asesor}/edit','App\Http\Controllers\AsesorController@edit');
// Route::patch('/asesor/{asesor}','App\Http\Controllers\AsesorController@update');


// // MemberArea Facilitator
// Route::get('/facilitator', 'App\Http\Controllers\FacilitatorController@index');
// Route::get('/facilitator/create','App\Http\Controllers\FacilitatorController@create');
// Route::post('/facilitator','App\Http\Controllers\FacilitatorController@store');
// Route::get('/facilitator/{facilitator}', 'App\Http\Controllers\FacilitatorController@show');
// Route::delete('/facilitator/{facilitator}', 'App\Http\Controllers\FacilitatorController@destroy');
// Route::get('/facilitator/{facilitator}/edit','App\Http\Controllers\FacilitatorController@edit');
// Route::patch('/facilitator/{facilitator}','App\Http\Controllers\FacilitatorController@update');


// // MemberArea Trainer
// Route::get('/trainer', 'App\Http\Controllers\TrainerController@index');
// Route::get('/trainer/create','App\Http\Controllers\TrainerController@create');
// Route::post('/trainer','App\Http\Controllers\TrainerController@store');
// Route::get('/trainer/{trainer}', 'App\Http\Controllers\TrainerController@show');
// Route::delete('/trainer/{trainer}', 'App\Http\Controllers\TrainerController@destroy');
// Route::get('/trainer/{trainer}/edit','App\Http\Controllers\TrainerController@edit');
// Route::patch('/trainer/{trainer}','App\Http\Controllers\TrainerController@update');
// Route::get('/akun', 'App\Http\Controllers\AkunController@index');
// Route::get('/akun','App\Http\Controllers\AkunController@index');
// Route::get('/akun/create', 'App\Http\Controllers\AkunController@create');
// Route::get('/akun/{akun}', 'App\Http\Controllers\AkunController@show');
// Route::post('/akun', 'App\Http\Controllers\AkunController@store');
// Route::delete('/akun/{akun}', 'App\Http\Controllers\AkunController@destroy');
// Route::get('/akun/{akun}/edit','App\Http\Controllers\AkunController@edit');
// Route::patch('/akun/{akun}','App\Http\Controllers\AkunController@update');

// Route::get("email", [MailerController::class, "email"])->name("email");
Route::get('/email', 'App\Http\Controllers\MailerController@email')->name("email");
Route::post('/send-email', 'App\Http\Controllers\MailerController@composeEmail')->name("send-email");
// Route::post("send-email", [MailerController::class, "composeEmail"])


// MemberArea Account
// Route::get('/account', 'App\Http\Controllers\AccountController@index');
// Route::get('/account/create','App\Http\Controllers\AccountController@create');
// Route::post('/account','App\Http\Controllers\AccountController@store');
// Route::get('/account/{account}', 'App\Http\Controllers\AccountController@show');
// Route::delete('/account/{account}', 'App\Http\Controllers\AccountController@destroy');
// Route::get('/account/{account}/edit','App\Http\Controllers\AccountController@edit');
// Route::patch('/account/{account}','App\Http\Controllers\AccountController@update');


// MemberArea ServicesManagement

Route::get('/services', 'App\Http\Controllers\ServicesManagementController@showServices');
Route::get('/detailServices/{servicesManagement}','App\Http\Controllers\ServicesManagementController@showDetailServices');
// Route::get('/servicesManagement', 'App\Http\Controllers\servicesManagementController@index');
// Route::get('/servicesManagement/create','App\Http\Controllers\servicesManagementController@create');
// Route::post('/servicesManagement','App\Http\Controllers\servicesManagementController@store');
// Route::get('/servicesManagement/{servicesManagement}', 'App\Http\Controllers\servicesManagementController@show');
// Route::delete('/servicesManagement/{servicesManagement}', 'App\Http\Controllers\servicesManagementController@destroy');
// Route::get('/servicesManagement/{servicesManagement}/edit','App\Http\Controllers\servicesManagementController@edit');
// Route::patch('/servicesManagement/{servicesManagement}','App\Http\Controllers\servicesManagementController@update');



// MemberArea BlogManagement

Route::get('/blog', 'App\Http\Controllers\BlogManagementController@showBlog');
Route::get('/detailBlog/{blogManagement}','App\Http\Controllers\BlogManagementController@showDetailBlog');
// Route::get('/blogManagement', 'App\Http\Controllers\BlogManagementController@index');
// Route::get('/blogManagement/create','App\Http\Controllers\BlogManagementController@create');
// Route::post('/blogManagement','App\Http\Controllers\BlogManagementController@store');
//

Route::get('/blogManagement/{blogManagement}', 'App\Http\Controllers\BlogManagementController@show');
// Route::delete('/blogManagement/{blogManagement}', 'App\Http\Controllers\BlogManagementController@destroy');
// Route::get('/blogManagement/{blogManagement}/edit','App\Http\Controllers\BlogManagementController@edit');
// Route::patch('/blogManagement/{blogManagement}','App\Http\Controllers\BlogManagementController@update');


// MemberArea CompanyProfile

Route::get('/companyProfile', 'App\Http\Controllers\CompanyProfileController@showCompanyProfile');
Route::get('/', 'App\Http\Controllers\CompanyProfileController@showIndex');





Route::group(['middleware'=>['auth','ceklevel:admin']], function(){
    Route::get('/companyProfileManagement', 'App\Http\Controllers\CompanyProfileController@index');
    Route::get('/companyProfileManagement/{companyProfileManagement}/edit','App\Http\Controllers\CompanyProfileController@edit');
    Route::patch('/companyProfileManagement/{companyProfileManagement}','App\Http\Controllers\CompanyProfileController@update');
    Route::get('/profile/{editData}/password','App\Http\Controllers\ProfileController@password');
    Route::patch('/profile/{editData}/updatepassword','App\Http\Controllers\ProfileController@updatepassword');


    // company Profile Contact US
    Route::post('/companyProfile','App\Http\Controllers\PhotoGallery@storeFormus');
    
    Route::resource('profile','App\Http\Controllers\ProfileController');
    Route::resource('member','App\Http\Controllers\MemberController');
    // Member file
    Route::get('/member/file/{member}','App\Http\Controllers\MemberController@uploadFile');
    Route::patch('/file/{member}/uploadMember','App\Http\Controllers\DropzoneController@storeMember');
    // Asesor File
    Route::get('/asesor/file/{asesor}','App\Http\Controllers\AsesorController@uploadFile');
    Route::patch('/file/{asesor}/uploadAsesor','App\Http\Controllers\DropzoneController@storeAsesor');
    // Facilitator File
    Route::get('/facilitator/file/{facilitator}','App\Http\Controllers\FacilitatorController@uploadFile');
    Route::patch('/file/{facilitator}/uploadFacilitator','App\Http\Controllers\DropzoneController@storeFacilitator');

    Route::resource('asesor','App\Http\Controllers\AsesorController');
    Route::resource('facilitator','App\Http\Controllers\FacilitatorController');
    Route::resource('trainer','App\Http\Controllers\TrainerController');
    Route::resource('servicesManagement','App\Http\Controllers\ServicesManagementController');
    Route::resource('blogManagement','App\Http\Controllers\BlogManagementController');
    Route::resource('companyProfileManagement','App\Http\Controllers\CompanyProfileController');
    Route::resource('account','App\Http\Controllers\AccountController');
    // MemberArea PhotoGallery
    Route::get('/photogallery', 'App\Http\Controllers\PhotoGallery@Index');
    Route::get('/photogallery/createH', 'App\Http\Controllers\PhotoGallery@createHighlights');
    Route::get('/photogallery/createP', 'App\Http\Controllers\PhotoGallery@createPhoto');
    Route::post('/photogallery', 'App\Http\Controllers\PhotoGallery@storeHighlights');
    Route::post('/photogallery/createP', 'App\Http\Controllers\PhotoGallery@storePhoto');
    Route::get('/photogallery/{photogallery}/editHighlights', 'App\Http\Controllers\PhotoGallery@editHighlights');
    Route::get('/photogallery/{photogallery}/edit', 'App\Http\Controllers\PhotoGallery@editPhoto');
    Route::patch('/photogallery/highlights/{photogallery}','App\Http\Controllers\PhotoGallery@updateHighlights');
    Route::patch('/photogallery/photo/{photogallery}','App\Http\Controllers\PhotoGallery@updatePhoto');
    Route::delete('/photogallery/highlightsDelete/{photogallery}', 'App\Http\Controllers\PhotoGallery@destroyHighlights');
    Route::delete('/photogallery/photoDelete/{photogallery}', 'App\Http\Controllers\PhotoGallery@destroyPhoto');
    Route::delete('/photogallery/formus/{photogallery}', 'App\Http\Controllers\PhotoGallery@destroyFormus');

    // edit for blog and services photo
    Route::get('/photogallery/blogphoto','App\Http\Controllers\PhotoGallery@editBlogPhoto');
    Route::get('/photogallery/servicephoto','App\Http\Controllers\PhotoGallery@editServicesPhoto');  
    Route::patch('/photogallery/updateBlog','App\Http\Controllers\PhotoGallery@updateBlog');
    Route::patch('/photogallery/updateServices','App\Http\Controllers\PhotoGallery@updateServices');

    // edit for company profile
    Route::get('/photogallery/companyphoto','App\Http\Controllers\PhotoGallery@editCompanyPhoto');
    Route::patch('/photogallery/updateCompany','App\Http\Controllers\PhotoGallery@updateCompany');
    
});

Route::group(['middleware'=>['auth','ceklevel:admin,member']],function(){
    Route::resource('profile','App\Http\Controllers\ProfileController');
    Route::resource('member','App\Http\Controllers\MemberController');
    // Member file
    Route::get('/member/file/{member}','App\Http\Controllers\MemberController@uploadFile');
    Route::patch('/file/{member}/uploadMember','App\Http\Controllers\DropzoneController@storeMember');
});