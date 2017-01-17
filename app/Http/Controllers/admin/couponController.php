<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class couponController extends Controller
{
	  /*
	    优惠券首页
	   */
	  public function getIndex(Request $request)
	  { 	
	  	//查询数据显示页面
	  	$cou = DB::table('coupons')->get();

	  	//查询商铺用户表
	  	foreach($cou as $k=>$v)
	  	{
	  		//用户信息
	  		$user[$v->uid] = DB::table('shop_users')->where('uid',$v->uid)->first();
	  		//商铺信息
	  		$shop[$v->sid] = DB::table('shop_shop')->where('sid',$v->sid)->first();
	  		//优惠券分类
	  		$coupon[$v->cid] = DB::table('coupon_types')->where('cid',$v->cid)->first();
	  	}
	  	
	  	$state = [0=>'已领取,未使用',1=>'已使用'];

	  	//分页
	  	$list = $request->all();
	  	//解析模板分配数据
	  	return view('admin.coupons.index',['cou'=>$cou,'list'=>$list,'user'=>$user,'shop'=>$shop,'coupon'=>$coupon,'state'=>$state]);
	  }
	  	
	  //删除
	  public function getDelete(Request $request)
	  {
	  	$couid = $request->only(['couid']);
	  	
	  	//执行删除
	  	$res = DB::table('coupons')->where('couid',$couid['couid'])->delete();
	  	if($res){
	  		echo 1;
	  	}else{
	  		echo 0;
	  	}
	  }
	  	//==================================包裹内容暂不使用
	  // //优惠券添加
	  // public function getAdd()
	  // {
	  // 	//查询优惠券分类
	  // 	$types = DB::table('coupon_types')->get();
	  // 	//解析模板  分配数据
	  // 	return view('admin.coupons.add',['types'=>$types]);
	  // }

	  // //执行添加
	  // public function getDoadd(Request $request)
	  // {
	  // 	//提取数据
	  // 	$shuju = $request->only(['']);
	  // } 
	  	//===================================包裹内容

}
