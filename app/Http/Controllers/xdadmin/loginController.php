<?php

namespace App\Http\Controllers\xdadmin;

use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
   /*
		显示一个登录界面
   */
	public function getIndex()
	{
		//清除session
		// session()->forget('did');
		// echo '登录页面';
		return view('home/xd/login');
	}
	/*
		执行登录操作
	*/
	public function postDologin(Request $request)
	{
		// dd($request->all());

		//拿到用户名和密码
		$data = $request->only(['uname','upwd']);
		//正则
		$zz = '/^\d{11}$/';
		$res = preg_match_all($zz, $data['uname'], $arr);
		// dd($res);

		if($res){
			//通过手机号登录
			$user = DB::table('shop_users')->where('tel',$data['uname'])->first();
			// dd($user);
		}else{
			//查找是否有这个用户
			$user = DB::table('shop_users')->where('uname',$data['uname'])->first();
		}

		if(empty($user)){
			return back()->with('error','没有该账号');
		}

		$usershop = DB::table('shop_users_shop')->where('uid',$user->uid)->first();
		if(empty($usershop)){
			return back()->with('error','该账号没有小店,请申请入驻');
		}
		// dd($data);
		// 查找这个用户的密码
		// dd($user);
		if(Hash::check($data['upwd'],$user->upwd)){
   			// return '密码正确';
			session(['xdid'=>$usershop->sid]);
			return redirect('/xdadmin');
			// dd('正确');
		}else{
			// return '密码错误';
			return back()->with('error','账号或密码输入错误');
		}
	}
}	
