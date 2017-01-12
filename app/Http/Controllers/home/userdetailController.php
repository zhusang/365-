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
    	   return redirect('/users');
       	}
	}

    /*
        用户修改头像
    */
    public function getFiles()
    {
    	//获取现在正在登录的用户
    	$uid = session('uid');
    	//获取用户信息
    	$user = DB::table('shop_users')->where('uid',$uid)->first();
        //获取详细信息
        $detail = DB::table('shop_users_detail')->where('uid',$uid)->first();
        return view('home.user.files',['user'=>$user]);
    }

    /*
		修改头像
    */
	public function postUpdatea(Request $request)
	{
		$uid = session('uid');
		$data['pic'] = $this->upload($request,'pic');
		$res = DB::table('shop_users')->where('uid',$uid)->update($data);
		if($res){
			return back();
		}
	}


    /*
        封装一个方法来处理文件上传
    */
    private function upload($request,$filename)
    {
        //判断是否有文件上传
        if ($request->hasFile($filename)){
            //获取文件后缀名
            $suffix = $request->file($filename)->getClientOriginalExtension();
            //随机文件名
            $name = md5(time().rand(1,6666));
            //移动文件
            $request->file($filename)->move('./uploads/',$name.'.'.$suffix);

            //返回路径信息
            return '/uploads/'.$name.'.'.$suffix;
        }
    }

}
