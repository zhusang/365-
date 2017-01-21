<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class listController extends Controller
{
    /*
        筛选列表页
     */
    public function getIndex(Request $request)
    {
        // dd('筛选列表页');
        return view('home/list/index');
    }

}

