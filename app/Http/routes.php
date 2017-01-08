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

//定义一个后台登录验证组
Route::group(['middleware'=>'adminlogin'],function(){
	//后台首页
	Route::get('/admin','admin\IndexController@index');
	//管理员
	Route::controller('/admin/users_admin','admin\Users_adminController');
	//用户
	Route::controller('/admin/users','admin\UsersController');
	//用户浏览路由
	// Route::controller('admin/type','admin\typeController');
	//店铺浏览
	// Route::controller('admin/shop','admin\shopController');
	//商品首页
	// Route::controller('admin/goods','admin\GoodsController');
});
//后台登录页面
Route::controller('admin/login','admin\loginController');