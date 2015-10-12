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

Route::post('admin/login', 'LoginController@login');
Route::get('admin/login', 'LoginController@admin');
Route::get('login', 'LoginController@index');
Route::get('admin/logout', ['middleware' => 'auth', 'uses' => 'Admin\BaseController@logout']);
Route::post('admin/findPassword', 'LoginController@findPassword');
Route::get('admin/resetPassword', 'LoginController@resetPassword');
Route::get('password/email', 'Auth\PasswordController@getEmail');

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
