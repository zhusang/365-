<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class youhuiController extends Controller
{
	/*
		用户基本信息展示
	*/
    public function getIndex()
    {
    	//获取现在正在登录的用户
    	$uid = session('uid');
    	//获取用户信息
    	$user = DB::table('shop_users')->where('uid',$uid)->first();
        

        



        
        return view('home.youhui.index',['user'=>$user]);
    }
}