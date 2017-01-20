<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class linkController extends Controller
{
	/*
		设静态方法展示友情链接
	*/
    public static function link()
    {
        // 查找链接表中的数据
        $link = DB::table('shop_link')->where('status',1)->get();
        // dd($link);
        // 分配数据
        return view('home.muban.foot',['link'=>$link]);
    }
}