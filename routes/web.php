<?php

use Illuminate\Support\Facades\Route;

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

# 首页路由
Route::get('/', function () {
    return view('home');
});
# 注册页路由
//Route::get('/register',function() {
//	return view('register');
//});
#登录页路由
Route::get('/login',function() {
	return view('login');
});


Route::any('/register' , 'RegisterController@register');