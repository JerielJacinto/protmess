<?php

error_reporting( error_reporting() & ~E_NOTICE );
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

Route::get('/', 'homeController@index');
Route::get('/home', function () {
    return Redirect::to('/');
});



// ajax to save message
Route::post('/protected/initialize','ajaxController@post');

Route::get('/secret/{ID}', 'messageEncryptionController@secretPage');

Route::get('/burn/{ID}', 'messageEncryptionController@burnPage');

Route::get('/message/{ID}', 'messageEncryptionController@messagePage');

//page for message sent via email
Route::get('/sent/{ID}', 'homeController@sentViaEmail');

// ajax to reveal message
Route::post('/messagereveal','ajaxController@revealMessage');

// ajax to update info
Route::post('/updateInfo','ajaxController@updateInfo');

// ajax to burn message
Route::post('/messageburn','ajaxController@burnMessageAjax');
//logout

// reistration verification
Route::get('/email_verification/{token}', 'verifyCustController@verificationProccess');

//burn cofirmattion
Route::get('/logout', 'Auth\LoginController@logout');

// Route::get('/home', 'homeController@index')->name('home');

Route::get('/contactus', 'contactUsController@index');
Route::post('/contactussubmit', 'ajaxController@contactUsPost');

Route::get('/howitworks', function () {
    return view('page.howitworks');
});

Route::get('/faq', function () {
    return view('page.faq');
});

Route::get('/privacy-policy', function () {
    return view('page.privacy-policy');
});

Route::get('/terms-and-conditions', function () {
    return view('page.terms-and-conditions');
});

Route::get('/cookie-policy', function () {
    return view('page.cookie-policy');
});

/////////  BLOG  //////////

// Blog
Route::get('/blog','blogController@index');

// Blog article
Route::get('/blog/{slug}','blogController@show');


Route::get('/jeriel-test/', function () {
    return view('page.thankYouRegistration');
});


////////// admin page////////////

Route::get('/my-admin-page/', 'adminpageController@article_list')->middleware('auth');
Route::get('/my-admin-page/editarticle/{id}', 'adminpageController@article_update')->middleware('auth');
//////// FB ///////////

Route::get('/covid-19', function () {
    return Redirect::to('/');
});



Auth::routes();

// myacount
Route::get('/account', 'accountController@index')->middleware('auth');

// myacount
Route::get('/verifyResend', 'accountController@verifyResend')->middleware('auth');

