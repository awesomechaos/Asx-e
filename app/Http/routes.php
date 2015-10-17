<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', ['middleware' => 'auth', 'uses' => 'Admin\AdminController@i']);


Route::get('admin/login', 'LoginController@admin');
Route::get('login', 'LoginController@index');
//login and logout
Route::post('admin/login', ['middleware' => 'blacklist', 'uses' => 'LoginController@login']);
Route::get('admin/logout', ['middleware' => 'auth', 'uses' => 'Admin\BaseController@logout']);
//ajax check if register account exists
Route::post('admin/checkRegisterEmail', ['middleware' => 'blacklist', 'uses' => 'LoginController@checkRegisterEmail']);
//register
Route::post('admin/register', ['middleware' => 'blacklist', 'uses' => 'LoginController@register']);
//resend validation email
Route::get('admin/registerValidationEmail', ['middleware' => 'blacklist', 'uses' => 'LoginController@registerValidationEmail']);
//click email to valid account
Route::get('admin/registerValidation', ['middleware' => 'blacklist', 'uses' => 'LoginController@registerValidation']);
//get token by email
Route::post('admin/findPassword', ['middleware' => 'blacklist', 'uses' => 'LoginController@findPassword']);
//click email to reset password
Route::get('admin/resetPassword', ['middleware' => 'blacklist', 'uses' => 'LoginController@resetPage']);
//submit reset
Route::post('admin/resetPassword', ['middleware' => 'blacklist', 'uses' => 'LoginController@resetPassword']);

//asx:生成config
Route::get('admin/config', 'Admin\AdminController@getConfigFromDatabase');
Route::group(['namespace' => 'Admin'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    // Message
    Route::get('admin/message', ['middleware' => 'auth', 'uses' => 'NotificationController@getMessage']);
    Route::get('admin/notification', ['middleware' => 'auth', 'uses' => 'NotificationController@getNotice']);
    // 根据menu循环注册路由
    foreach ( Config::get('admin.menu') as $name => $val) {
        if ($val['controller'] != '') {
            Route::get("/admin/{$val['href']}", "{$val['controller']}Controller@i");
        }
        if (count($val['subMenu']) != 0) {
            foreach ($val['subMenu'] as $subMenu) {
                if ($subMenu['controller'] != '') {
                    Route::get("/admin/{$subMenu['href']}", "{$subMenu['controller']}Controller@i");
                }
            }
        }

    }
});
Route::post('/admin', 'AdminController@index');
