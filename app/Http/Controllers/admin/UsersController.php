<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /*
		显示用户列表
    */
	public function getIndex(Request $request)
	{
		// echo '用户列表';
		//获取每页的显示的条数 如果没有那么就给一个默认值
		$num = $request->input('num',5);
		//判断有没有查询条件
		if ($request->input('keywords')){
			$users = DB::table('shop_users')->where('username','like','%'.$request->input('keywords').'%')->paginate($num);
		}else{
			$users = DB::table('shop_users')->paginate($num);
		}
		$list = $request->all();
		//解析一个模板
		return view('admin.users.index',['users'=>$users,'list'=>$list]);
	}

	/*
		显示一个添加用户路的页面
	*/
	public function getAdd()
	{
		//解析一个 模板
		return  view('admin.users.add');
	}

	/*
		执行添加的操作
	*/
	public function postInsert(Request $request)
	{
		// dd($request->all());
		//获取页面传来的值
		$data = $request->only(['uname','tel','upwd']);
		// dd($data);

		//给密码加密
		$data['upwd'] = Hash::make($data['upwd']);
		//调用 文件上传函数完成图片的上传
		$data['pic'] = $this->upload($request,'pic');
		$data['regtime'] = date('Y-m-d H:i:s',time());
		// dd($data);
		//发送语句
		$res = DB::table('shop_users')->insert($data);
		// 判断是不是成功了
		if ($res) {
			return redirect('admin/users/index')->with('success','用户添加成功');
		}else{
			return back()->with('error','用户添加失败');
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
		完成删除操作
	*/
	public function getDelete(Request $request)
	{
		//接收ID
		$id = $request->input('uid');
		
		// dd($id);
		//删除这个用户	
		$res = DB::table('shop_users')->where('uid',$id)->delete();
		
		echo $res;
	}
	/*
		修改操作
	*/
	public function getEdit(Request $request)
	{
		//获取到id
		$id = $request->input('id');
		//通过id查找这个人的数据
		$users = DB::table('shop_users')->where('uid',$id)->first();
		// dd($users);
		//显示页面
		return view('/admin/users/edit',['users'=>$users]);
	}
	/*
		提交修改
	*/
	public function postUpdate(Request $request)
	{
		// dd($request->all());
		//获取收到的值
		$data = $request->except(['_token','uid']);
		//获取传来的id
		$id = $request->input('uid');
		// dd($data); 	
		//取得原来的密码
		$pwd = DB::table('shop_users')->where('uid',$id)->value('upwd');
		// dd($pwd);
		//取得现在的密码
		$rpwd = $data['upwd'];
		// dd($rpwd);
		// dd($pwd,$rpwd['password']);
		//判断密码是否更改 若更改重新加密
		if($pwd != $rpwd){
			$data['upwd'] = Hash::make($data['upwd']);
		}

		//判断是是否上传图片
		if($request->hasFile('pic')){
			$data['pic'] = $this->upload($request,'pic');
		}
		$res = DB::table('shop_users')->where('uid',$id)->update($data);

		if($res){
			//成功到列表页
			return redirect('/admin/users/index')->with('success','用户修改成功');
		}else{
			//失败后回滚
			return back()->with('error','用户修改失败');
		}
	}
	/*
		用户的详细信息
	*/
	public function getDetail(Request $request)
	{
		//获取传来的id
		$id = $request->input('id');
		// dd($id);
		//查找这个用户的详细信息
		$users = DB::table('shop_users_detail')->where('uid',$id)->first();
		// dd($users);
		if(empty($users)){
			return view('admin.users.index_detail2',['id'=>$id]);
		}else{
			return view('admin.users.index_detail',['users'=>$users]);
		}
	}
	/*
		修改用户详细信息
	*/	

    public function getDetailedit(Request $request)
    {
    	//获取现在正在登录的用户
    	$uid = $request->input('id');
    	//获取用户信息
    	$user = DB::table('shop_users')->where('uid',$uid)->first();
        // dd($user);
        //获取详细信息
        $detail = DB::table('shop_users_detail')->where('uid',$uid)->first();
        // dd($detail);
       //获取该用户是否有用户详情
        if(empty($detail)){
             return view('admin.users.edit_detail2',['user'=>$user]);
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
            
            return view('admin.users.edit_detail',['user'=>$user,'detail'=>$detail]);
    }

    /*
		执行修改
    */
	public function postUpdetail(Request $request)
	{
		//获取现在正在登录的用户
		$data = $request->except('_token','year','month','day');
		// dd($data);
        $birth = $request->year.$request->month.$request->day;
        //把生日转换为时间戳
        $data['birth'] = strtotime($birth);
        // dd($data);
    	
    	$qqq = DB::table('shop_users_detail')->where('uid',$data['uid'])->get();
    	if(empty($qqq)){
    		$res = DB::table('shop_users_detail')->insert($data);
    	}else{
    		$res = DB::table('shop_users_detail')->where('uid',$data['uid'])->update($data);
    	}

    	
    	if($res){
    	   return redirect('/admin/users/')->with('success','修改信息成功');
       	}else{
       		return back()->with('error','修改信息失败');
       	}
	}
}
