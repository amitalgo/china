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


//        Route::get('/page', 'Admin\PageController@index')->name('admin.page');
//        Route::get('/page/create', 'Admin\PageController@create')->name('admin.page.create');
//        Route::post('/page/store', 'Admin\PageController@store')->name('admin.page.store');
//        Route::get('/page/{id}/edit', 'Admin\PageController@edit')->name('admin.page.edit');
//        Route::post('/page/{id}/update', 'Admin\PageController@update')->name('admin.page.update');
//        Route::get('/custom-ui', 'Admin\CustomUiController@index')->name('admin.customui');
//        Route::get('/custom-ui/create', 'Admin\CustomUiController@create')->name('admin.customui.create');
//        Route::post('/custom-ui/store', 'Admin\CustomUiController@store')->name('admin.customui.store');
//        Route::get('/custom-ui/{id}/edit', 'Admin\CustomUiController@edit')->name('admin.customui.edit');
//        Route::post('/custom-ui/{id}/update', 'Admin\CustomUiController@update')->name('admin.customui.update');

        // SubAdmin
        Route::resource('/sub-admin','Admin\AdminController');

        // Role
        Route::resource('/role','Admin\RoleController');

        // Job Posted
        Route::resource('/jobposted','Admin\JobPostedController');
        Route::post('/jobposted/approveordisapprovejob','Admin\JobPostedController@approveJob');

        // Job Applicant
        Route::resource('/jobapplicants','Admin\JobAppliedController');
        Route::post('/jobapplied/approveordisapprovejob','Admin\JobAppliedController@approveJobApplicants');
        Route::get('/jobapplicants/filter/{jobid}/','Admin\JobAppliedController@filterApplicants')->name('jobposted.filterapplicants');

        // Word
        Route::resource('/word','Admin\WordController');

    });
});
