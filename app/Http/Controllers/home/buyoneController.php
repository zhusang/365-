<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class buyoneController extends Controller
{
   public function getIndex(Request $request)
   {    
     //==============================查询用户信息
        // //查询已登录的用户id
        $uid = session('uid');

        // 查找关于这个用户的信息
        $user = DB::table('shop_users')->where('uid',$uid)->first();
      
    // ============================查询所有的一元抢购商品
      $buyGoods = DB::table('shop_buyone')->get();
      foreach ($buyGoods as $k => $v) {
        $arr = DB::table('shop_goods')->where('gid',$v->gid)->first();
        $buyGoods[$k]=$arr;
      }

    //=============================查询所有跟一元抢购商品相关的信息 分配页面是分配过去 
       $info = DB::table('shop_goods')
            ->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
            ->select('shop_goods.*','shop_goods_detail.*')
            ->orderBy('shop_goods_detail.scnt','asc')
            ->get();
      // dd($info);
        // 显示页面
        return view('home/buyone/index',['user'=>$user,'info'=>$info,'buyGoods'=>$buyGoods]);
   }
}