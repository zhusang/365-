<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexPicController extends Controller
{
	 //轮播图管理首页
	 	public function getIndex()
	 	{
	 		//显示首页界面
	 		$info = DB::table('indexpic')->get();
	 		// dd($info);
				return view('admin/indexpic/index',['info'=>$info]);
	 	} 

	
	//轮播图添加页
		public function getAdd(Request $request)
		{	
			//查询轮播表是否已经充足
			$info = DB::table('indexpic')->get();
			if (!empty($info)) {
				 $n = count($info);
				 if ($n >= 6 ) {
				 	return back()->with('error','轮播图已达上限');
				 }
			}
			//显示添加界面
				return view('admin/indexpic/add');
		} 
	

	//执行添加
		public function postInsert(Request $request)
		{
			
			//接收所有数据
				$info = $request->except(['_token']);
			//判断是否为空
			if (empty($info['pic1']) || empty($info['pic2']) || empty($info['pic3']) || empty($info['pic4']) || empty($info['pic5']) || empty($info['pic6'])) {
				return back()->with('error','请选择上传');
			}
				
			$arr = [];
			if ($info['pic1']) {
				//调用方法处理上传的图像
					$pic1 = $this->getUpload($request,'pic1');
					$arr['pic']=$pic1;
					// dd($arr);
				//插入数据库
					$res1 = DB::table('indexpic')->insert($arr);
			}

			if ($info['pic2']) {
				//调用方法处理上传的图像
					$pic2 = $this->getUpload($request,'pic2');
					$arr['pic']=$pic2;
				//插入数据库
					$res2 = DB::table('indexpic')->insert($arr);
			}

			if ($info['pic3']) {
				//调用方法处理上传的图像
					$pic3 = $this->getUpload($request,'pic3');
					$arr['pic']=$pic3;
				//插入数据库
					$res3 = DB::table('indexpic')->insert($arr);
			}

			if ($info['pic4']) {
				//调用方法处理上传的图像
					$pic4 = $this->getUpload($request,'pic4');
					$arr['pic']=$pic4;
				//插入数据库
					$res4 = DB::table('indexpic')->insert($arr);
					
			}

			if ($info['pic5']) {
				//调用方法处理上传的图像
					$pic5 = $this->getUpload($request,'pic5');
					$arr['pic']=$pic5;
				//插入数据库
					$res5 = DB::table('indexpic')->insert($arr);
					
			}

			if ($info['pic6']) {
				//调用方法处理上传的图像
					$pic6 = $this->getUpload($request,'pic6');
					$arr['pic']=$pic6;
				//插入数据库
					$res6 = DB::table('indexpic')->insert($arr);
					
			}
			
			//当所有的图片都上传成功时候跳转走 
			if ($res1 && $res2 && $res3 && $res4 && $res5 && $res6) {
				return redirect('admin/indexpic/index')->with('success','上传成功');
			}else{
				return redirect('admin/indexpic/index')->with('error','上传失败');
			}
			
		}

	//进行图片修改
		public function getEdit(Request $request)
		{
			//查出这个数据的信息
			$info = DB::table('indexpic')->where('id',$request->input('id'))->first();
			//分配页面 分配数据
			return view('admin/indexpic/edit',['info'=>$info]);
		}
	//执行图片修改
		public function postUpdate(Request $request)
		{
			$info = $request->except(['_token','id']);
			//获取id
			$id = $request->input('id');
			if(empty($info)){
				//如果没有修改图片
				return redirect('admin/indexpic/index')->with('success','修改失败');
			}else{
				//如果修改了图片
				$res = DB::table('indexpic')->where('id',$id)->update($info);
				if ($res) {
					return redirect('admin/indexpic/index')->with('success','修改成功');
				}else{
					return redirect('admin/indexpic/index')->with('error','修改成功');
				}
			}

			// dd($info);
		}

	//执行图片删除
		public function getDel(Request $request)
		{
			
			//进行删除
				$res = DB::table('indexpic')->where('id','>',0)->delete();
				echo $res;
			
		}

	 /*
        封装函数进行图片操作
    */
	    public function getUpload($request,$pic)
	    {   
		     //判断如果上传了图片
		        if ($request->hasFile($pic)) {
		            //获取上传图片的后缀名称
		                $HouZhui = $request->file($pic)->getClientOriginalExtension();
		            //设置图片名称
		                $fileName = md5(time()).rand(11111,99999).'.'.$HouZhui;
		            //移动图片
		                $request->file($pic)->move('./uploads/',$fileName);
		            //返回图片路径
		                return '/uploads/'.$fileName;
		        }
	    }
}
