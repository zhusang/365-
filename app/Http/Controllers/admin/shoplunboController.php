<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class shoplunboController extends Controller
{
    /*
        店铺轮播图管理首页
    */
   public function getIndex(Request $request)
   {    
        //分页条件
        $num = $request->input('num',5);
        
        //判断是否有查询条件
        if (!empty($request->input('like'))) {
            //带上条件查询出所有的店铺信息
            $like = $request->input('like');
            $shops = DB::table('shop_shop')->where('sname','like','%'.$like.'%')->paginate($num);
        }else{
            //查询出所有的店铺信息
            $shops = DB::table('shop_shop')->paginate($num);   
        }

       //接受所有的查询信息
       $list = $request->all();

       //处理推荐店铺信息
       foreach ($shops as $k => $v) {
         //拿每一个店铺sid查询 查看是否有已经为前台推荐的店铺 如果有就添加一个标志 
         $tuijian = DB::table('shop_shop_lunbo')->where('sid',$v->sid)->get();
          if (!empty($tuijian)) {
            $v->tuijian = 1;
          }else{
            $v->tuijian=0;
          }
       }

       //查询前台推荐店铺是否已经满
       $Full=0;
       $Shop = DB::table('shop_shop_lunbo')->get();
        if ($Shop) {
          $n = count($Shop);
          //判断数据库是否已经存满
          if ($n==15) {
            //标志为已满
              $Full = 1;
          }
        }

       // dd($shops);

       //分配数据 分配模板
       return view('admin/shoplunbo/index',['shops'=>$shops,'list'=>$list,'Full'=>$Full]);

   }


   /*
      处理店铺轮播的详情页
    */
   public function getDetail(Request $request)
   {  

      //分页参数
      $num = $request->input('num',5);

       //拿到要查询的参数
       $sid = $request->input('sid');

       //判断是否有查询条件
       if (!empty($request->input('gname'))) {
          //先拿到条件 在查询
          $gname = $request->input('gname');
           $goods = DB::table('shop_goods')
                   ->where('sid',$sid)
                   ->where('gname','like','%'.$gname.'%')
                   ->paginate($num);
       }else{
           //直接这个店铺所有的商品
           $goods = DB::table('shop_goods')
                   ->where('sid',$sid)
                   ->paginate($num);
      }

      //所有的查询条件
      $list = $request->all();

        // dd($goods);
       //分配数据 分配页面
       return view('admin/shoplunbo/detail',['goods'=>$goods,'list'=>$list]);
   }



   /*
      /ajax 处理查询 验证是否可以加入前台推荐店铺
    */
   
   public function getAdd(Request $request)
   {
      //接收到要查询的sid
      $sid = $request->input('sid');

      //第一  先查询  前条店铺轮播是否已经满
      $res = DB::table('shop_shop_lunbo')->get();
      //如果有店铺轮播数据 
      if ($res) {
      //查看是否满
        $n = count($res);
      //如果已经满 就返回1 停止跳转
        if ($n==15) {
          echo 1;
          return;
        }
      }


      //第二 如果不满足第一种情况  查询当前这个店铺是否已经是轮播店铺
        $shop = DB::table('shop_shop_lunbo')->where('sid',$sid)->get();
        //如果当前这个店铺不是轮播店铺
        if (empty($shop)) {
            //可以加入轮播店铺  会跳转到当前店铺的所有商品页面
            echo 2;
            return;
        }else{
          //不可以加入店铺轮播当前店铺已经为前台推荐店铺
          echo 22;
          return;
        }
      
   }


   /*
        ajax 处理添加店铺里的推荐商品
    */
   public function getAddgoods(Request $request)
   {  
      //获取到需要添加的店铺id
        $sid = $request->input('sid');
      //获取到需要添加的店铺商品
        $gids = $request->input('str');
        //对信息进行处理 最后插入数据库
        $info = explode(',', $gids);
        $gids = [];
        $gids['sid']=$sid;
        $gids['lpic']=$info[0];
        $gids['lpic2']=$info[1];
        $gids['lpic3']=$info[2];
        $gids['lpic4']=$info[3];
        
      //进行插入数据库
        $res = DB::table('shop_shop_lunbo')->insert($gids);
        if ($res) {
            echo 1;
        }else{
          echo 2;
        }
   }


   /*
    ajax  处理要删除的推荐店铺
    */
   public function getDel(Request $request)
   {
      //获取要取消的店铺id
        $sid = $request->input('sid');
      //把数据库里的当前sid 的店铺删除
      $res = DB::table('shop_shop_lunbo')->where('sid',$sid)->delete();
      if ($res) {
        echo 1;
      }
   }
}
