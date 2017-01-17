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

    //提取变量到左边侧栏
    public static function zuolan()
    {

        //获取现在正在登录的用户
        $uid = session('uid');
        //获取用户信息
        $user = DB::table('shop_users')->where('uid',$uid)->first();
        //分配到页面
        return view('home.user.zuolan',['user'=>$user]);
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
        接受修改密码的ajax
    */
    public function getPwd(Request $request)
    {
        // 查询该用户的数据
        $uid = session('uid');
        //获取用户信息
        $user = DB::table('shop_users')->where('uid',$uid)->first();
        // dd($user);
        //获取传来的密码
        $pwd = $request->input('pwd');

        if (Hash::check($pwd,$user->upwd)){
            echo true;    
        }else{
            echo false;
        }

    }
    /*
        用户修改密码
    */
    public function getXgpwd()
    {
        // 查询该用户的数据
        $uid = session('uid');
        //获取用户信息
        $user = DB::table('shop_users')->where('uid',$uid)->first();

        return view('home.user.xgpwd',['user'=>$user]);
    }
    /*
        执行修改密码
    */
    public function postPwds(Request $request)
    {
        // 查询该用户的数据
        $uid = session('uid');
        //获取用户信息
        $user = DB::table('shop_users')->where('uid',$uid)->first();
        // dd($user);

        $pwd = $request->input('pwd');
        //加密
        $data['upwd'] = Hash::make($pwd);
        // dd($data);
        $res = DB::table('shop_users')->where('uid',$uid)->update($data);
        if($res){
           return back()->with('success','密码重置成功');
           
        }else{
            return back()->with('error','密码重置失败');
        }
    }


    /*
        用户换绑手机
    */
    public function getSjhb(Request $request)
    {
         // 查询该用户的数据
        $uid = session('uid');
        //获取用户信息
        $user = DB::table('shop_users')->where('uid',$uid)->first();
        //查出来手机号
        $tel = $user->tel;
        session(['tel'=>$tel]);
        // dd($tel);
        // 把手机号做成加密字段
        $phone = substr($tel,'0','3');
        $mtel = substr($tel,'7','11');
        $mphone =$phone.'****'.$mtel;

        $pp = $request->input('tel');


        // 显示页面
        return view('home.user.bdsj',['user'=>$user,'tel'=>$mphone]);
    }
    /*
        执行换绑操作
    */
     public function postBdsj(Request $request)
    {
        //获取当前登录人信息
        $uid = session('uid');
        //获取手机号
        // dd($request->all());
        $data['tel'] = $request->input('nphone');

        //执行修改
        $res = DB::table('shop_users')->where('uid',$uid)->update($data);
        if($res){
           return back()->with('success','手机换绑成功');
           
        }else{
            return back()->with('error','手机换绑失败');
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
