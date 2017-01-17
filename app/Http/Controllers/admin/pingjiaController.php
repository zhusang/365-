<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pingjiaController extends Controller
{
	 //评价首页
	public function getIndex()
	{	
		//查询数据显示页面
		$cout = DB::table('pingjia')
            ->join('shop_users', 'pingjia.uid', '=', 'shop_users.uid')
            ->join('shop_goods', 'pingjia.gid', '=', 'shop_goods.gid')
            ->join('shop_shop', 'shop_goods.sid', '=', 'shop_shop.sid')
            ->join('shop_order', 'pingjia.oid', '=', 'shop_order.oid')
            ->select('pingjia.*', 'shop_users.*','shop_shop.*','shop_order.*','shop_goods.*')
            ->get();
            
		return view('admin.pingjia.index',['cout'=>$cout]);
	}

	//删除
	public function getDelete(Request $request)
	{
		//提取数据
		$aid = $request->only(['aid']);

		//执行删除
		$res = DB::table('pingjia')->where('aid',$aid['aid'])->delete();

		if($res){
			echo 1;
		}else{
			echo 0;
		}
	}
}
