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
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){

    /// Guard
    Route::get('/access/denied', function () {
        return View('forbidden');
    });
    
    /// Access by Viewer Only
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/dashboard', 'HomeController@dashboard');
    Route::get('/home/employee/file', 'EmployeeController@index');
    Route::get('/home/employee/search/name', 'EmployeeController@searchResult');
    Route::get('/employee/search', 'EmployeeController@search');
    Route::get('/Employee/File/Records', 'EmployeeController@records');
    Route::get('/File/download', 'FileController@download');
    Route::get('/File/view', 'FileController@open');
    
    /// Access Extends to Editor and Superuser
    Route::middleware(['editor'])->group(function(){
        Route::get('/home/employee/new', 'EmployeeController@new');
        Route::post('/home/employee/enroll', 'EmployeeController@enroll');
        
        Route::post('/File/upload', 'FileController@upload');
        Route::get('/File/delete', 'FileController@confirm_delete');
        Route::post('/File/delete/{id}', 'FileController@delete');
        Route::get('/Setting/Index', function () {
            return View('Setting.index');
        });
        
        
        /// Access Extends to Superuser only
        Route::middleware(['superb'])->group(function(){
            Route::get('/Users', 'SettingController@users');
            Route::get('/User/delete', 'SettingController@confirm_delete');
            Route::post('/User/delete/{id}', 'SettingController@delete');
            Route::get('/User/permission', 'SettingController@user_permission');
            Route::get('/User/permission/roles', 'SettingController@get_roles_list');
            Route::post('/User/permission/role/change', 'SettingController@change_role');
        });
    });
});
