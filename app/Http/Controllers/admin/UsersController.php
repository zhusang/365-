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
		$res = DB::table('shop_users')->delete($id);
		
		echo $res;
	}
	/*
		修改操作
	*/
	public function getEdit(Request $request)
	{
		//获取到id
		$id = $request->input('uid');
		//通过id查找这个人的数据
		$users = DB::table('shop_users')->where('id',$id)->first();
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
		$pwd = DB::table('shop_users')->where('uid',$id)->value('password');
		// dd($pwd);
		//取得现在的密码
		$rpwd = $data['password'];
		// dd($rpwd);
		// dd($pwd,$rpwd['password']);
		//判断密码是否更改 若更改重新加密
		if($pwd != $rpwd){
			$data['password'] = Hash::make($data['password']);
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
}	
