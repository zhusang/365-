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
	//雅兮公主店铺
	public function getYaxi()
	{

		
		return view('home.shop.yaxi.index');
	}
    
}
