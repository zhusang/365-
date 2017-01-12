<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class shopController extends Controller
{
   /*
		显示出商铺的首页
   */
	//店铺
	public function getIndex(Request $require)
	{
		//获取店铺的sid
		$sid = $request->input('sid');
		//通过sid找到商铺的信息
		$shops = 
		
		
				
		return view('home.shop.yaxi.index');
	}
    
}
