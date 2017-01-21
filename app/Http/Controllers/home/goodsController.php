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
        $uid = session('uid');
        $ftime = time();
        //压入数组 插入足迹库中
        $foot = ['gid'=>$gid['gid'],'uid'=>$uid,'ftime'=>$ftime];
        //插入数据库
        $foots = DB::table('shop_foot')->insert($foot);
        //查询数据库 
        $goods = DB::table('shop_goods')
            ->join('shop_goods_detail', 'shop_goods.gid', '=', 'shop_goods_detail.gid')
            ->select('shop_goods.*', 'shop_goods_detail.*')
            ->where('shop_goods.gid',$gid)
            ->first();
        
         $goods_pic = DB::table('shop_goods2_pic')->where('gid',$gid)->get();
         
        //通过商品,获得店铺id sid
        $sid = $goods->sid;
        // dd('sid');
        session(['sid'=>$sid]);
        $shop = DB::table('shop_shop')->where('sid',$sid)->first();
       $goodshouse=[];
        if($uid){
            //通过sid uid查询收藏表看该商铺是否被收藏
            $house = DB::select('select * from shop_favor where uid = "'.$uid.'" and sid = "'.$sid.'"');
            //通过uid和gid去查商品收藏表
            $goodshouse = DB::select('select * from shop_favor_goods where uid = "'.$uid.'" and gid = "'.$gid['gid'].'"');
        }else{
            $house = '';
        }
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
        
        $qita = DB::table('shop_goods')->where('gid',$gid['gid'])->first();
          $qita = DB::table('shop_goods')->where('tid',$qita->tid)->paginate(4);
          $arr = [];
          foreach ($qita as $k => $v) {
              $arr[] = $v;
          }


          $coupon = DB::table('coupon_types')->get();
          $couponss=[];
          $dddd = [];
          if($uid)
          { 
                $couponss[] = DB::select('select * from coupons where uid = "'.$uid.'" and sid = "'.$sid.'"'); 
                //遍历或的cid
                foreach($couponss as $k=>$v)
                {
                    foreach($v as $kk=>$vv)
                    {
                        $dddd[] = $vv->cid;
                    }
                } 
            }
           //通过商品gid去查图片表,遍历图片大图
            $bigpic = DB::table('shop_goods2_pic')->where('gid',$gid['gid'])->get();
        

        // dd($arr);



        //通过gid去查评价表
          $cout = DB::table('pingjia')
            ->join('shop_users', 'pingjia.uid', '=', 'shop_users.uid')
            ->where('pingjia.gid',$gid['gid'])
            ->select('pingjia.*', 'shop_users.*')
            ->get();
            $i = 0;

        //分配数据到页面

        return view('home.goods.index',['goods'=>$goods,'type'=>$type,'paths'=>$paths,'allgood'=>$allgood,'shop'=>$shop,'goods_pic'=>$goods_pic,'arr'=>$arr,'cout'=>$cout,'house'=>$house,'goodshouse'=>$goodshouse,'coupon'=>$coupon,'dddd'=>$dddd,'bigpic'=>$bigpic]);

    }


    //添加优惠券收藏   领取优惠券
    public function getCoupon(Request $request)
    {
        $coupon = $request->only(['sid','uid','cid']);

        $coupon['activatetime'] = time();
        $coupon['endtime'] = time()+259200;
        $sid = $coupon['sid'];
        $uid = session('uid');
        $cid = $coupon['cid'];
        $ddd = DB::select('select * from coupons where uid = "'.$uid.'" and sid = "'.$sid.'" and cid = "'.$cid.'"');
        
        if($ddd){
            echo 2;
            die;
        }
        $res = '';
        if($coupon['uid']){

            //插入数据库
            $res = DB::table('coupons')->insert($coupon);
        }
        
        if($res){
            echo 1;
        }else{
            echo 0;
        }

        return view('home.goods.index',['goods'=>$goods,'type'=>$type,'paths'=>$paths,'allgood'=>$allgood,'shop'=>$shop,'goods_pic'=>$goods_pic,'arr'=>$arr,'cout'=>$cout,'house'=>$house,'goodshouse'=>$goodshouse]);


    }


}
