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

Route::group(['prefix'=>'admin'], function (){
    Route::get('/', 'Admin\LoginController@login')->name('admin.login');
    Route::post('/process-login', 'Admin\LoginController@doLogin')->name('admin.login.submit');

    Route::group(['middleware'=>'auth:admin'], function (){
        Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');

        Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

        Route::get('/account', 'Admin\AdminController@account')->name('admin.account');
        Route::post('/account/update', 'Admin\AdminController@accountUpdate')->name('admin.account.update');
        Route::get('/account/change-password', 'Admin\AdminController@changePassword')->name('admin.account.change-password');
        Route::post('/account/change-password', 'Admin\AdminController@updatePassword')->name('admin.account.update-password');

        Route::group(['middleware'=>'checkPermission'],function() {
            // SubAdmin
            Route::resource('/sub-admin', 'Admin\AdminController');

            // Role
            Route::resource('/role', 'Admin\RoleController');

            // Job Type
            Route::resource('/jobtype', 'Admin\JobTypeController');

            // Job Posted
            Route::resource('/jobposted', 'Admin\JobPostedController');
            Route::post('/jobposted/approveordisapprovejob', 'Admin\JobPostedController@approveJob');

            // Job Applicant
            Route::resource('/jobapplicants', 'Admin\JobAppliedController');
            Route::post('/jobapplied/approveordisapprovejob', 'Admin\JobAppliedController@approveJobApplicants');
            Route::get('/jobapplicants/filter/{jobid}/', 'Admin\JobAppliedController@filterApplicants')->name('jobposted.filterapplicants');

            // Word
            Route::resource('/word', 'Admin\WordController');

            //User
            Route::resource('/user', 'Admin\UserController');

            // Enquiry
            Route::resource('/enquiries', 'Admin\EnquiryController');
            Route::post('/enquiries/getEnquiryById', 'Admin\EnquiryController@getEnquiryById')->name('enquiries.get');

        });
    });
});
