<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
	  //订单列表页
		  public function getIndex(Request $request)
		  {	

			  	//分页每页显示条数
			  		$num = $request->input('num',3);
			  	//获取查询数据 条件  查询地区
			  		if (!empty($request->input('addr'))) {
			  			$addr = $request->input('addr');
			  		}

			  	//如果有查询条件
			  	if (!empty($addr)) {
			  			$orders = DB::table('shop_order')->where('addr','like','%'.$addr.'%')->paginate($num);
			  	}else{
			  	//正常查询出所有的订单数据
			  		$orders = DB::table('shop_order')->paginate($num);

			  	}
			  	
			  	//翻页保持数据
			  	$list = $request->all();

			  	//处理数据进行拿到详细数据
			  	foreach ($orders as $k => $v) {
			  		//查询每一个用户的详细信息
			  		$user = DB::table('shop_users')->where('uid',$v->uid)->first();
			  		// dd($user);
			  		//如果查到数据
			  		if ($user) {
			  			//放到详细信息中
			  			$v->uname = $user->uname;
			  		}
			  	}


			  	// dd($orders);
			  	
			  	return view('admin/order/index',['orders'=>$orders,'list'=>$list]);
		  }

	 //订单删除页
	 	  public function getDel(Request $request)
	 	  {	
	 	  	//获取要删除的订单oid
	 	  			$oid = $request->input('oid');
	 	  	//执行删除  删除订单 同时删除详情表中的东西
	 	  			$res = DB::table('shop_order')->where('oid',$oid)->delete();
					$Res = DB::table('shop_detail')->where('oid',$oid)->delete();
			//如果都成功
				if ($res && $Res) {
					//返回结果
					echo 1;
				}
	 	  }
	 //订单修改页
		  public function getEdit(Request $request)
		  {		//查询当前订单的信息
		  			$oid = $request->input('oid');
				
					$info = DB::table('shop_order')->where('oid',$oid)->get()[0];
				// dd($info);
				//解析页面 分配数据
		  			return view('admin/order/edit',['info'=>$info]);
		  }

	//订单执行修改
		  public function postUpdate(Request $request)
		   {
		   		//接收所有的参数
		 			$info = $request->except(['oid','_token']);
		 			$oid = $request->input('oid');
		   		//进行修改
		   			$res = DB::table('shop_order')->where('oid',$oid)->update($info);
		   		//判断是否成功
		   			if ($res) {
		   				return redirect('admin/order/index')->with('success','修改成功');
		   			}else{
		   				return redirect('admin/order/index')->with('error','修改失败');
		   			}
		   }


	  //订单详情页
		  public function getDetail(Request $request)
		  {
		  		//查询出当前这个订单详细信息
		  			$oid = $request->input('oid');

		  		//查询所有的当前订单详细信息
		  			$info = DB::table('shop_detail')->where('oid',$oid)->get();
		  		

		  		//处理数据进行拿到详细数据
			  	foreach ($info as $k => $v) {
			  		//查询每一个用户的详细信息
			  		$goods = DB::table('shop_goods')->where('gid',$v->gid)->first();
			  		//如果查到数据
			  		if ($goods) {
			  			//放到详细信息中
			  			$v->gname = $goods->gname;
			  		}
			  	}

		  		// dd($info);
		  		//分配数据 分配模板
		  		return view('admin/order/detail',['info'=>$info]);
		  }

	//订单详情 删除
		public function getDetaildel(Request $request)
		{
				//拿到要删除的id
					$did = $request->input('did');
				//执行删除
					$res = DB::table('shop_detail')->where('did',$did)->delete();
				//返回结果
					echo $res;
		}

	//订单详情修改
		public function getDetailedit(Request $request)
		{
			//拿到要修改的did
				$did = $request->input('did');
			//查询数据库
				$info =DB::table('shop_detail')->where('did',$did)->first();
				// dd($info);
				//处理数据进行拿到详细数据
			  	
			  		//查询每一个用户的详细信息
			  		$goods = DB::table('shop_goods')->where('gid',$info->gid)->first();
			  		//如果查到数据
			  		if ($goods) {
			  			//放到详细信息中
			  			$info->gname = $goods->gname;
			  		}
			  
			  	// dd($info);
			//分配页面 分配数据
			
			return view('admin/order/detailEdit',['info'=>$info]);
		}
	//订单详情执行修改
		public function postDetailupdate(Request $request)
		{	
			// dd($request->all());
			//拿到所有要修改的信息
				$info = $request->except(['_token','did']);
				// dd($info);
			//拿到要修改的did
				$did = $request->input('did');
				// dd($did);
			//查询当前详情的所有信息
				$res = DB::table('shop_detail')->where('did',$did)->update($info);

				if ($res) {
					return redirect('admin/order/index')->with('success','修改成功');
				}else{
					return redirect('admin/order/index')->with('error','修改失败');
				}
				
				
		}
}
