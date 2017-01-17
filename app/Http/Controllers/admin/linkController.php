<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class linkController extends Controller
{
    /*
        友情链接列表
    */
    public static function getIndex()
    {
    	
    }

    /*
		显示添加友情链接的页面
    */
	public static function getAdd()
    {
    	return view('admin.link.index');
    }
	/*
		执行添加
	*/
	public static function postInsert()
    {
    	
    }
}
