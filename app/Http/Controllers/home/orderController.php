<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class goodsController extends Controller
{
    //显示商品详情

    public function getIndex(Request $request)
    {
        return view('home.order.index');
    }
}
