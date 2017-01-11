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
        $goods = DB::table('shop_goods')
            ->join('shop_goods_detail', 'shop_goods.gid', '=', 'shop_goods_detail.gid')
            ->select('shop_goods.*', 'shop_goods_detail.*')
            ->where('shop_goods.gid',$gid)
            ->first();
            
         $goods_pic = DB::table('shop_goods2_pic')->where('gid',$gid)->get();
            
        //通过商品,获得店铺id sid
        $sid = $goods->sid;
        $shop = DB::table('shop_shop')->where('sid',$sid)->first();

        //获取该商品的类id  查询类 获得类名
        $tid = $goods->tid;
        $type = DB::table('shop_type')->where('tid',$tid)->first();
        
        //通过sid查询 同店 获得同店商品名
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
        return view('home.goods.index',['goods'=>$goods,'type'=>$type,'paths'=>$paths,'allgood'=>$allgood,'shop'=>$shop,'goods_pic'=>$goods_pic]);
    }
}