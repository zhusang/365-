<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class cartController extends Controller
{

    //请求ajax
    public function getIndex(Request $request)
    {   
      
        //购物车 没有登录是进不来的要加登录判断
        //这里我先做假数据
        //存入session
         session(['uid'=>'20']);

       
        //获取到购买的所有信息
            $info = $request->all();
        //判断加入是否为同一个商品
        $goods = $this->check($info['gid'],$info['num']);
           if($goods){
            //把修改后的值重新放入购物车
              session(['cart'=>$goods]);
           }else{
                //把信息直接压入cart数组
                $request->session()->push('cart',$info);
           }
        //返回数据
            echo(1);

       

    }


    // 购物车页面
    public function getCart()
    {
         $goods = session('cart');
         // dd($goods);
         // 存放结果
         $arr = [];
         //存放店铺id
         $brr = [];
         foreach ($goods as $k => $v) {
         //根据购物车里的信息查询出所有的信息
         $users = DB::select('select shop_goods.*,shop_shop.* from shop_goods inner join shop_shop where shop_goods.gid='.$v['gid'].' and shop_shop.sid='.$v['sid'].'');
            $arr[] = $users[0];
            $arr[$k]->num = $v['num']; 
            $arr[$k]->nowPrice = $v['nowp']; 
            $arr[$k]->oldPrice = $v['oldp']; 
            $arr[$k]->type = $v['type']; 
            $arr[$k]->size = $v['size']; 
            $arr[$k]->numPrice = $v['num']*$v['nowp'];



            
            //辨认是否为同一个商铺的商品
            if (in_array($v['sid'],$brr)) {
                //存入标志
                $arr[$k]->biaoZhi = 1;
            }else{
                //存放入店铺id
                $brr[] = $v['sid'];
            }
         }
        //计算有几样商品
        $n = count($arr);
        // dd($brr);
        // dd($arr);
        return view('home/cart/index',['carts'=>$arr,'n'=>$n]);
    }

    // 清除购物车信息
    public function getClear(Request $request){
          $request->session()->forget('cart');
    }

    //封装一个函数 进行检测购买商品gid是否相同
    public function check($gid,$num)
    {   
        $goods = session('cart');
        //如果购物车为空
        if (empty($goods)) {
            return false;
        }

        //不为空时开始遍历 
        foreach ($goods as $k => $v) {
            if ($v['gid']==$gid) {
                //修改数量
               $goods[$k]['num'] += $num;
                return $goods;
            }
        }

        //如果gid重复 就返回false
        return false;
    }
}
