<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class userdetailController extends Controller
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
        //获取详细信息
        $detail = DB::table('shop_users_detail')->where('uid',$uid)->first();
        // dd($detail);
       //获取该用户是否有用户详情
        if(empty($detail)){
             return view('home.user.index2',['user'=>$user]);
        }
        // dd($user);
            //获取到生日的时间戳 改变为正常的时间格式
            $birth = $detail->birth;
            //以月日年显示
            $date = date('Ymd',$birth);
            $year = substr($date,0,4);
            $month = substr($date,4,2);
            $day = substr($date,6,2);
            //分配出去
            $detail->year = $year;
            $detail->month = $month;
            $detail->day = $day;
            
            return view('home.user.index',['user'=>$user,'detail'=>$detail]);
    }
    /*
		执行修改
    */
	public function postUpdate(Request $request)
	{
		//获取现在正在登录的用户
		$data = $request->except('_token','year','month','day');
        $data['uid'] = session('uid');
        $birth = $request->year.$request->month.$request->day;
        //把生日转换为时间戳
        $data['birth'] = strtotime($birth);
        // dd($data);

    	$res = DB::table('shop_users_detail')->update($data);
    	if($res){
    	   return redirect('/userdetail');
       	}
	}

    /*
        用户修改头像
    */
    public function getFiles()
    {
        // return view('');
        echo 1111;
    }
  
}
