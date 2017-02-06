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


        //根据uid查出该用户的地址信息
        $addr = DB::table('shop_user_addr')->where('uid',$uid)->get();
        // dd($addr);
        foreach ($addr as $k => $v) {
            $v->province = explode('||',$v->address)[0];
            $v->city = explode('||',$v->address)[1];
            $v->county = explode('||',$v->address)[2];
        }
        // dd($addr);

    	//解析出显示地址的页面
        return view('home.dizhi.index',['user'=>$user,'addr'=>$addr]);
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
        $data = $request->only(['emailcode','street','rec','recphone']);
        //获取地址
        $province = $request->input('province');
        $city = $request->input('city');
        $county = $request->input('county');
        //拼接地址
        $data['address'] = $province.'||'.$city.'||'.$county;
        $data['uid'] = $uid;
        // dd($data);
        $res = DB::table('shop_user_addr')->where('uid',$uid)->insert($data);
        if($res){
            return back();
        }else{
            return back();
        }
    }
}