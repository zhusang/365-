<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class buyoneController extends Controller
{
	/*
		一元抢购抢购首页
	 */
	public function getIndex(Request $request)
	{	
		//分页条件
		$num = $request->input('num',4);
		

		//如果有查询商品名称的条件
		if (!empty($request->input('like'))) {
			$goods = DB::table('shop_goods')->where('gname','like','%'.$request->input('like').'%')->paginate($num);
		}else{
			//查询所有的一元抢购商品
			$goods = DB::table('shop_goods')->paginate($num);
		}

		foreach ($goods as $k => $v) {
			$info = DB::table('shop_buyone')->where('gid',$v->gid)->first();
			if (!empty($info)) {
				$v->biaozhi = 1;
			}
		}
		//查询抢购商品是否已经满
		$buyGoods = DB::table('shop_buyone')->get();
		$n = count($buyGoods);

		//分页条件
		$list = $request->all();

		return view('admin/buyone/index',['goods'=>$goods,'list'=>$list,'n'=>$n]);
	}


	/*
		加入一元抢购
	 */
	public function getAdd(Request $request)
	{
		//拿到要添加的商品id
		$gid = $request->input('gid');
		$arr = [];
		$arr['gid']=$gid;

		//添加抢购商品
		$res = DB::table('shop_buyone')->insert($arr);
		if ($res) {
			echo 1;
		}else{
			echo 2;
		}
	}


	/*
		从一元抢购中删除
	 */
	public function getDel(Request $request)
	{	
		//拿到要删除的商品id
		$gid = $request->input('gid');
		$res = DB::table('shop_buyone')->where('gid',$gid)->delete();
		
		//返回结果
		echo $res;
	}
}
