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
//前台首页
// Route::get('/', function () {
//     // 解析模板文件
//     // return view('welcome');
//     echo 2222;

// });
//前台登录验证组
Route::group(['middleware'=>'homelogin'],function(){
	//用户基本信息页面 点个人设置时会过来
	Route::controller('/users','home\userdetailController');
	//前台订单页
	Route::controller('home/order','home\orderController');

	//前台优惠券
	Route::controller('/youhui','home\youhuiController');
	//评价
	Route::controller('home/cout','home\coutController');

	//收藏
	Route::controller('home/house','home\houseController');
	//地址管理
	Route::controller('/dizhi','home\dizhiController');
});

//小店登录验证组
Route::group(['middleware'=>'xdlogin'],function(){
	//后台首页
	Route::controller('/xdadmin','xdadmin\indexController');
});

//小店登录
Route::controller('/xdlogin','xdadmin\loginController');

//客户服务
Route::controller('/help','home\helpController');

//前台登录页面
Route::controller('/user','home\userController');
//发送手机验证码
Route::get('/pcode','home\userController@phonecode');
//商铺路由
Route::controller('/shop','home\shopController');
//购物车路由
Route::controller('/cart','home\cartController');
//一元抢购商品专区
Route::controller('/buyone','home\buyoneController');



//收藏
Route::controller('home/house','home\houseController');

//极验验证码
Route::get('auth/geetest','Auth\AuthController@getGeetest');



//定义一个后台登录验证组
Route::group(['middleware'=>'adminlogin'],function(){
	//后台首页
	Route::get('/admin',function(){
		return view('admin.index.index');
	});
	//管理员
	Route::controller('/admin/users_admin','admin\Users_adminController');
	//用户
	Route::controller('/admin/users','admin\UsersController');
	//用户浏览路由
	Route::controller('/admin/type','admin\typeController');
	//优惠券分类路由
	Route::controller('/admin/coupontype','admin\coupontypeController');
	//优惠券路由
	Route::controller('/admin/coupons','admin\couponController');
	//评价路由
	Route::controller('/admin/cout','admin\pingjiaController');
	//店铺浏览
	Route::controller('/admin/shop','admin\shopController');
	//商品首页
	Route::controller('/admin/goods','admin\goodsController');

	//订单路由
	Route::controller('/admin/order','admin\OrderController');

	//首页轮播管理路由
	Route::controller('/admin/indexpic','admin\IndexPicController');
	//店铺轮播管理路由
	Route::controller('/admin/shoplunbo','admin\shoplunboController');
	//一元抢购管理路由
	Route::controller('/admin/buyone','admin\buyoneController');
	

	//友情链接
	Route::controller('/admin/link','admin\linkController');

	//帮助分类管理
	Route::controller('/admin/helptype','admin\helptypeController');
	//常见问题管理
	Route::controller('/admin/help','admin\helpController');

});
//后台登录页面
Route::controller('admin/login','admin\loginController');


//前台商品详情页路由
Route::controller('home/goods','home\goodsController');

//前台登录路由
Route::controller('/user','home\userController');

// 前台首页
Route::controller('/','home\IndexController');




//后台商铺登录验证组
Route::group(['middleware'=>'homeshoplogin'],function(){
	//后台首页
	Route::get('/adminshop',function(){
		return view('adminshop.index.index');
	});
	
});



