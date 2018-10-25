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
        Route::get('/user/account', 'Admin\UserController@account')->name('admin.user.account');
        Route::post('/user/account/update', 'Admin\UserController@accountUpdate')->name('admin.user.account.update');
        Route::get('/user/account/change-password', 'Admin\UserController@changePassword')->name('admin.user.account.change-password');
        Route::post('/user/account/change-password', 'Admin\UserController@updatePassword')->name('admin.user.account.update-password');
        Route::get('/page', 'Admin\PageController@index')->name('admin.page');
        Route::get('/page/create', 'Admin\PageController@create')->name('admin.page.create');
        Route::post('/page/store', 'Admin\PageController@store')->name('admin.page.store');
        Route::get('/page/{id}/edit', 'Admin\PageController@edit')->name('admin.page.edit');
        Route::post('/page/{id}/update', 'Admin\PageController@update')->name('admin.page.update');
        Route::get('/custom-ui', 'Admin\CustomUiController@index')->name('admin.customui');
        Route::get('/custom-ui/create', 'Admin\CustomUiController@create')->name('admin.customui.create');
        Route::post('/custom-ui/store', 'Admin\CustomUiController@store')->name('admin.customui.store');
        Route::get('/custom-ui/{id}/edit', 'Admin\CustomUiController@edit')->name('admin.customui.edit');
        Route::post('/custom-ui/{id}/update', 'Admin\CustomUiController@update')->name('admin.customui.update');
    });
});
