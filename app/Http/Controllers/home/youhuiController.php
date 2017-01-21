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
        // dd($user);
        //查询用户领到的优惠券id
        $quan = DB::table('coupons')
            ->join('coupon_types', 'coupons.cid', '=', 'coupon_types.cid')
            ->select('coupons.*', 'coupon_types.*')
            ->where('coupons.uid',$uid)
            ->get();
        foreach ($quan as $k => $v) {
            $sid = $v->sid;
            $res = DB::table('shop_shop')->where('sid',$sid)->first();
            $sname = $res->sname;
            $v->sname = $sname;
        }

        // dd($quan);




        
        return view('home.youhui.index',['user'=>$user,'quan'=>$quan]);
    }
}