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

        //提取数据id 查询数据库 
        $gid = $request->only(['gid']);
        $goods = DB::table('shop_goods')->where('gid',$gid)->first();
        //获取该商品的类id  查询类 获得类名
        $tid = $goods->tid;
        $type = DB::table('shop_type')->where('tid',$tid)->first();

        //通过path查询 同类  获得同类商品名
        $path = $type->path;
        $paths = DB::table('shop_type')->where('path',$path)->get();
        //获取所有的tid查询商品
        $alltid=[];
        foreach($paths as $k=>$v)
        {
            $alltid[] = $v->tid;
        }

        //对所有tid遍历查询 
        $allgoods = [];
        foreach($alltid as $k=>$v){

            $allgoods[] = DB::table('shop_goods')->where('tid',$v)->get();
        }
        //对查询到的结果进行遍历 使其成为一维数组 得到商品名
        $allgood = [];
        foreach($allgoods as $k=>$v)
        {   
            $allgood[] = $v;
        }
        
        //分配数据到页面
        return view('home.goods.index',['goods'=>$goods,'type'=>$type,'paths'=>$paths,'allgood'=>$allgood]);
    }
}
