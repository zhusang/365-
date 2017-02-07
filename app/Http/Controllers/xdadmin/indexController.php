<?php

namespace App\Http\Controllers\xdadmin;

use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    /*
		显示小店分类列表
    */
	public function getIndex()
	{

		//获取到ssid
		$sid = session('xdid');
		// dd($sid);
		$shop = DB::table('shop_shop')->where('sid',$sid)->first();
		// dd($shop);

		return  view('home.xd.index',['shop'=>$shop]);
	}

	
}
