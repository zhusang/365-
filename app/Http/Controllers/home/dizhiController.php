<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class dizhiController extends Controller
{
	/*
		用户地址信息展示
	*/
    public function getIndex()
    {   
        // 查出当前登录的用户
        $uid = session('uid');
        //查找
        $user = DB::table('shop_users')->where('uid',$uid)->first();
    	//解析出显示地址的页面
        return view('home.dizhi.index',['user'=>$user]);
    }
    /*
        进行地址的添加
    */
    public function postDizhi(Request $request)
    {
        //获取当前用户的$uid
        // 查出当前登录的用户
        $uid = session('uid');
        //查找
        $user = DB::table('shop_users')->where('uid',$uid)->first();
        
        //接收到的数据
        // dd($request->all());
        $data = $request->only(['emilecode','street','rec','recphone']);
        //获取地址
        $province = $request->input('province');
        $city = $request->input('city');
        $county = $request->input('county');
        //拼接地址
        $data['address'] = $province.'||'.$city.'||'.$county;

        // dd($data);

    }
}