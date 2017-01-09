<?php

namespace App\Http\Controllers\admin;

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
		session()->forget('id');
		// echo '登录页面';
		return view('admin/login/index');
	}
	/*
		执行登录操作
	*/
	public function postDologin(Request $request)
	{
		// dd($request->all());
		//拿到用户名和密码
		$data = $request->only(['uname','upwd']);
		// 判断这个用户是不是存在
		$user = DB::table('shop_users_admin')->where('uname',$data['uname'])->first();
		if(empty($user)){
			return back()->with('error','没有该账号');
		}
		// dd($data);
		// 查找这个用户的密码
		// dd($user);
		if(Hash::check($data['upwd'],$user->upwd)){
   			// return '密码正确';
			session(['id'=>$user->uid]);
			return redirect('/admin');
		}else{
			// return '密码错误';
			return back()->with('error','账号或密码输入错误');
		}
	}
}	
