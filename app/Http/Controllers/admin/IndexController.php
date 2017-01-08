<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /*
        后台首页
    */
    public static function header()
    {
    	$uid = session('uid');
    	$user = DB::table('shop_users_admin')->where('uid',$uid)->first(); 
    	// echo '后台首页 ';
    	return view('admin/layout/header',['user'=>$user]);
    }
}
