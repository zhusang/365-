<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    /*
		登录页面
    */
	public function getLogin()
	{
		return view('/home/login/login');
	}
	
	/*
		执行登录操作
	*/
	public function postDologin(Request $request)
	{
		//获取页面传来的信息
		// dd($request->all());
		// 普通登录方式
		//获取账号和密码
		$data = $request->only('uname','pass');

		//查找是否有这个用户
		$user = DB::table('shop_users')->where('uname',$data['uname'])->first();
		if (empty($user)) {
			return back()->with('error','没有这个用户');
		}
		
		if (Hash::check($data['pass'],$user->upwd)){
            session(['uid'=>$user->uid]);
    		return redirect('/');
		}else{
			return back()->with('error','密码错误');
		}
	}
    
    /*
		用户注册页面
    */
    public function getRegister()
    {
        return view('/home/login/register');
    }
    
    /*
        执行注册
    */
    public function postInsert(Request $request)
    {
        // dd($request->all());
        $res = $request->only(['phone','pcode','upwd']);
        $upcode = session('pcode');
        //判断验证码是不是正确的
        if ($res['pcode'] != $upcode) {
			return back()->with('error','验证码错误');
		}
		//密码加密
		$data['upwd'] = Hash::make($res['upwd']);
		$data['tel'] = $res['phone'];
   		// dd($data);
		$res = DB::table('shop_users')->insertGetId($data);
		//如果成功了 就让他跳转到 上传头像的页面
		// dd($res);
		if($res){
			return redirect('/user/upfiles?id='.$res);
		}else{
			return back()->with('error','发生了意想不到的错误');
		}

    }


    /*
        接受ajax请求发送手机验证码
    */
    public function phonecode(Request $request)
    {
        // dd($request->all());
        $phone = $request->input('phone');
    	session(['phone'=>$phone]);
        //初始化必填
        $options['accountsid']='c35487f2579e8aafafebc3c330e97620';
        $options['token']='e764f750b77b39d615afdd9f6ae4494f';

        //初始化 $options必填
        $ucpass = new \Ucpaas($options);

        //开发者账号信息查询默认为json或xml

        // echo $ucpass->getDevinfo('json');

        //语音验证码,云之讯融合通讯开放平台收到请求后，向对象电话终端发起呼叫，接通电话后将播放指定语音验证码序列
        // $appId = "88624b7cbc2642139bb36d6a98928654";
        // $verifyCode = "546987";
        // $to = "18210139136";

        // echo $ucpass->voiceCode($appId,$verifyCode,$to);

        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "88624b7cbc2642139bb36d6a98928654";
        $to = $phone;
        $templateId = "35360";
        //随机数
        $randnum = rand(10000,99999);
        $param="蘑菇街,$randnum,3";
        $request->session()->put('pcode', $randnum);
        echo $randnum;
        // $ucpass->templateSMS($appId,$to,$templateId,$param);
    }

    /*
		注册时上传头像
    */
	public function getUpfiles(Request $request)
	{
		// dd($request->all());
		//解析一个模板
		return view('home.login.upfiles');
	}
    
    /*
        提交头像昵称信息
    */
    public function postUpload(Request $request)
    {

        $id = $request->input('id');
        // $data = [];
        $data['uname'] = $request->input('uname');
        //调用 文件上传函数完成图片的上传
        $data['pic'] = $this->upload($request,'pic');
        
        // dd($data);
        
        // 执行添加操作
        $res = DB::table('shop_users')->where('uid',$id)->update($data);
        if($res){
            session(['uid'=>$id]);
            return redirect('/');
        }else{
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
    /*
        退出
    */
    public function getLogout()
    {
        //清除session
        session()->forget('uid');
        return back();
    }
    /*
        找回密码
    */
    public function getFindpwda(Request $request)
    {
    	$phone = $request->input('phone');

    
    	return view('home.user.findpwd');
    	
    }
    /*
		找回密码第二步
    */
    public function getFindpwdb()
    {
    	//获取存在session中的手机号
    	$phone = session('phone');
    	// 把手机号做成加密字段
    	$tel = substr($phone,'0','3');
    	$mtel = substr($phone,'7','11');
    	$mphone =$tel.'****'.$mtel;
    	// dd($mphone); 
    	return view('home.user.findpwd_2',['phone'=>$phone,'mphone'=>$mphone]);
    	
    }
    /*
		
    */
    public function getFindpwdc(Request $request)
    {
    	// dd($request->all());
    		return view('home.user.findpwd_3');
    }

    public function getFindpwdd()
    {

    		return view('home.user.findpwd_4');

    }
    /*
		修改密码
    */
	public function postUppwd(Request $request)
	{
		// dd($request->all());
	}

}
