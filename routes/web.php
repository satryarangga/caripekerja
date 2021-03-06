<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index', 'home')->name('home');
Route::get('/home', 'HomeController@index');
Route::post('langganan-newsletter', 'HomeController@addSubscriber')->name('post-subscriber');

// AUTHENTICATION
Auth::routes();
Route::get('/keluar', 'Auth\LoginController@logout')->name('logout');
Route::get('/masuk', 'Auth\RegisterController@showRegistrationForm')->name('login');
Route::get('/login', 'Auth\RegisterController@showRegistrationForm')->name('login');
Route::get('/daftar', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/lupa-password-pekerja', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('forget-password');


//Employer Login
Route::get('employer/login', 'EmployerAuth\LoginController@showLoginForm');
Route::post('employer/login', 'EmployerAuth\LoginController@login');
Route::post('employer/logout', 'EmployerAuth\LoginController@logout');

//Employer Register
Route::get('employer/register', 'EmployerAuth\RegisterController@showRegistrationForm');
Route::post('employer/register', 'EmployerAuth\RegisterController@register');

//Employer Passwords
Route::post('employer/password/email', 'EmployerAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('employer/password/reset', 'EmployerAuth\ResetPasswordController@reset');
Route::get('employer/password/reset', 'EmployerAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('lupa-password-usaha', 'EmployerAuth\ForgotPasswordController@showLinkRequestForm')->name('employer-forget-password');
Route::get('employer/password/reset/{token}', 'EmployerAuth\ResetPasswordController@showResetForm');

// JOB
Route::get('buat-lowongan', 'JobController@create')->name('job-create');
Route::get('edit-lowongan/{jobId}', 'JobController@edit')->name('job-edit');
Route::get('hapus-lowongan/{jobId}', 'JobController@destroy')->name('job-delete');
Route::post('job/store', 'JobController@store');
Route::post('job/update/{id}', 'JobController@update');
Route::get('lowongan-kerja', 'JobController@index')->name('job-list');
Route::get('detail-lowongan/{jobId}', 'JobController@detail')->name('job-detail');
Route::post('lowongan-kerja', 'JobController@index')->name('job-list');
Route::get('lamar-kerja/{jobId}', 'UserController@applyJob')->name('job-apply');

// WORKER
Route::get('daftar-pekerja/', 'HomeController@workerList')->name('worker-list');
Route::get('daftar-pekerja/{categoryUrl}', 'HomeController@workerList')->name('worker-list-category');
Route::post('daftar-pekerja/', 'HomeController@workerList')->name('worker-list');
Route::get('profil-pekerja/{workerId}', 'HomeController@workerDetail')->name('worker-detail');
Route::get('lamaran-saya', 'UserController@getAppliedJob')->name('worker-job');
Route::get('verifikasi-kontak', 'UserController@verifyContact')->name('worker-verify-contact');
Route::post('verifikasi-kontak', 'UserController@verifyContact')->name('worker-verify-contact');
Route::get('kirim-verifikasi-sms', 'UserController@sendSMS')->name('worker-resend-code');
Route::get('verifikasi-identitas', 'UserController@verifyIdentity')->name('verify-identity');
Route::post('verifikasi-identitas', 'UserController@verifyIdentity')->name('verify-identity');
Route::get('lupa-kata-sandi', 'Auth\LoginController@requestTokenChangePassword')->name('request-change-password');
Route::post('lupa-kata-sandi', 'Auth\LoginController@requestTokenChangePassword')->name('request-change-password');
Route::get('verifikasi-ganti-password/{token}', 'Auth\LoginController@applyTokenChangePassword')->name('change-password-forget');
Route::post('verifikasi-ganti-password/{token}', 'Auth\LoginController@applyTokenChangePassword')->name('change-password-forget');
Route::get('reset-password/{token}', 'Auth\LoginController@resetPassword')->name('worker-reset-password');
Route::post('reset-password/{token}', 'Auth\LoginController@resetPassword')->name('worker-reset-password');

//EMPLOYER
Route::get('pekerja-saya', 'JobController@getShortlistedWorker')->name('owned-worker');
Route::get('lowongan-saya', 'JobController@getEmployerJob')->name('employer-job');
Route::get('lihat-pelamar', 'JobController@getAppliedWorker')->name('employer-notification');
Route::get('ganti-status-pekerja/{id}/{status}', 'JobController@processChangeStatusWorker')->name('change-worker-status');
Route::get('ganti-status-lowongan/{id}/{status}', 'JobController@processChangeStatusApplication')->name('change-application-status');

// MYACCOUNT
Route::get('akun-saya', 'UserController@myAccount')->name('myaccount-index');
Route::get('profil-saya', 'UserController@myProfile')->name('myaccount-profile');
Route::post('update-profile', 'UserController@update');
Route::get('ganti-password', 'UserController@changePassword')->name('change-password');
Route::post('ganti-password', 'UserController@changePassword')->name('change-password');

//PAYMENT
Route::get('topup', 'PaymentController@index')->name('topup-create');
Route::get('konfirmasi-bayar', 'PaymentController@confirmTopup')->name('topup-confirm');
Route::get('approve-topup', 'PaymentController@approvePayment')->name('topup-approve');
Route::get('kontak-pekerja/{workerId}', 'PaymentController@contactWorker')->name('contact-worker');
Route::get('topup-selesai/{topupId}', 'PaymentController@topupFinished')->name('topup-finished');
Route::post('topup-process', 'PaymentController@processTopup');
Route::post('confirm-topup', 'PaymentController@processConfirmTopup');
Route::post('approve-process', 'PaymentController@processApproveTopup');

//STATIC
Route::get('press-release/1', 'StaticController@pressRelease');
Route::get('blog/1', 'StaticController@blog1');
Route::get('blog/2', 'StaticController@blog2');

