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
         $uid = session('uid');
         //如果为空 让用户登录
         if (empty($uid)) {
            echo 2;
             return ;
         }
       
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
            echo 1;



       

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
            if (!in_array($v['sid'],$brr)) {
                 //存入标志
                $arr[$k]->biaoZhi = 1;
                  //存放入店铺id
                $brr[] = $v['sid'];
            }

            //辨认是否为同一个商铺的商品
            // if (in_array($v['sid'],$brr)) {
            //     //存入标志
            //     $arr[$k]->biaoZhi = 1;
            // }else{
            //     //存放入店铺id
            //     $brr[] = $v['sid'];
            // }
         }
         // var_dump($users);
        //计算有几样商品
        $n = count($arr);
    //对结果数组进行排序处理 以便在购物车界面更好显示
        // 存放新结果
        $drr = [];
        // 存放标志 sid
        $crr = [];
        foreach ($arr as $k => $v) {
            if (in_array($v->sid,$crr)) {
                $drr[$v->sid+1]=$v;
            }else{
                $drr[$v->sid]=$v;
                 $crr[]=$v->sid;
            };
            // $arr[$v->sid] = $v;
        };
        //对数组按照键名进行排序
        ksort($drr);
        // dd($arr);
        // dd($drr);
        // dd($crr);

        return view('home/cart/index',['carts'=>$drr,'n'=>$n]);
    }


    //获取购物车提交信息 最后到确认订单页面
    public function postInfo(Request $request)
    {   
        //查看所有传递的数据
            $info = $request->except('_token');
            // dd($info);
             // $carts = array_flip($info);
             // dd($carts);
        $str = '';
        $arr = [];
        $brr = [];
        //把相同下标的值放入同一个数组中
        foreach ($info as $k => $v) {
            // var_dump($v);
            // 获取最大下标
            $n = count($v);
            for ($i=0; $i < $n; $i++) { 
                $arr[$i][$k] = $v[$i];
            }
          }
          //获取总价格
          $str = 0;
        //根据商品id查询出店铺信息
        foreach ($arr as $k => $v) {
            $good = DB::table('shop_goods')->where('gid',$v['gid'])->first();
            $shop = DB::table('shop_shop')->where('sid',$good->sid)->first();
            $arr[$k]['sname']=$shop->sname;
            $arr[$k]['sid']=$shop->sid;
            //拿到总价格
            $str += $v['goodsSum'];
        }
      // dd($arr);
      //获取商品数量
             $goodN = count($arr);
          // =========================
                //对结果数组进行排序处理 以便在购物车界面更好显示
                // 存放新结果
                $drr = [];
                // 存放标志 sid
                $crr = [];
                foreach ($arr as $k => $v) {
                    if (in_array($v['sid'],$crr)) {
                        $drr[$v['sid']+1]=$v;
                    }else{
                        $drr[$v['sid']]=$v;
                         $crr[]=$v['sid'];
                    };
                    // $arr[$v->sid] = $v;
                };
                //对数组按照键名进行排序
                ksort($drr);
                // dd($drr);
            $brr = [];
            foreach ($drr as $k => $v) {
              //辨认是否为同一个商铺的商品
                if (!in_array($v['sid'],$brr)) {
                     //存入标志
                    $drr[$k]['biaoZhi'] = 1;
                      //存放入店铺id
                    $brr[] = $v['sid'];
                }
                # code...
            }
        //获取所有的收货信息根据当前用户
        $uid = session('uid');
        $address = DB::table('shop_user_addr')->where('uid',$uid)->get();

        // dd($drr);//结果   商品数量$goodN    商品价格$str num 存放结果drr
        
        // 存入session  订单处理时候可以直接拿到值
        session(['orderGoods'=>$drr]);
        session(['goodNum'=>$goodN]);
        session(['priceNum'=>$str]);

        //把所有准备提交到订单生成页的数据 存入购物车

        // dd(session('orderGoods'));
        //分配页面
        // dd($address);
        return view('home/cart/cartLast',['info'=>$drr,'goodN'=>$goodN,'num'=>$str,'addr'=>$address]);
    }


    //进行储存收货信息
    public function getAddr(Request $request)
    {
       //接收要获取的信息 
            $info = $request->all();
        // dd($info); 
         // 处理数据插入数据库
        foreach ($info as $k => $v) {
            //获取地址
            $address =$info['sheng'].$info['shi'].$info['qu'];
            // $k= strtolower($k);
        }

        //处理数据大小写
        $arr = array_flip($info);
        foreach ($arr as $k => $v) {
            $arr[$k] = strtolower($v);
        }
        $info = array_flip($arr);
        $brr = [];
        $brr['address']=$address;
        $brr['emailcode']=$info['emailcode'];
        $brr['street']=$info['street'];
        $brr['rec']=$info['rec'];
        $brr['recphone']=$info['recphone'];
        $brr['uid']=session('uid');

        //执行插入数据库
        $aid = DB::table('shop_user_addr')->insertGetId($brr);
        //返回数据
        echo $aid;
    }


    //进行修改收货信息
    public function getEditaddr(Request $request)
    {   
        //获取所有的收货信息
            $info = $request->all();
        //获取aid
            $aid = $info['aid'];
         // 处理数据插入数据库
        foreach ($info as $k => $v) {
            //获取地址
            $address =$info['sheng'].$info['shi'].$info['qu'];
            // $k= strtolower($k);
        }

        //处理数据大小写
        $arr = array_flip($info);
        foreach ($arr as $k => $v) {
            $arr[$k] = strtolower($v);
        }
        $info = array_flip($arr);
        $brr = [];
        $brr['address']=$address;
        $brr['emailcode']=$info['emailcode'];
        $brr['street']=$info['street'];
        $brr['rec']=$info['rec'];
        $brr['recphone']=$info['recphone'];
        $brr['uid']=session('uid');
        $res = DB::table('shop_user_addr')->where('aid',$aid)->update($brr);
        //返回信息
        echo 1;
    }

    //生成订单信息
    public function getOrder(Request $request)
    {   
        //获取订单信息
            $orderInfo = $request->all();
        //取出评价信息单独放在一个数组
           $msg = $orderInfo['msg'];
        //提取到所有的订单备注信息放进同一个数组内
           $message = explode('||||',$msg);
        //从session拿出来所有的订单商品 以及总价格 总数量
           $orderGoods = session('orderGoods');  //所有商品
           $goodNum = session('goodNum');        //商品总数
           $priceNum = session('priceNum');      //商品总价
            $uid = session('uid');

       //订单主表信息存入 
        //除去评价信息
            $orderInfo = array_slice($orderInfo,1);
            // dd($orderInfo);
        //生成订单id
            $oid = time().rand(1111111,9999999);
        //将数据插入数据库
            $info = [];
            
          
              $info['rec']=$orderInfo['rec'];  
              $info['oid']=$oid;
              $info['ormb']=$priceNum;
              $info['uid']=$uid;
              $info['addr']=$orderInfo['sheng'].$orderInfo['shi'].$orderInfo['qu'];
              $info['tel']=$orderInfo['recphone'];
              $info['status']=3;
              $info['otime']=time();


            $res = DB::table('shop_order')->insert($info);
        
        // dd($orderGoods);
        $detail = [];
        //订单详情表处理
        foreach ($orderGoods as $k => $v) {
                $detail[$k]['oid']=$oid;
                $detail[$k]['gid']=$v['gid'];
                $detail[$k]['buyprice']=$priceNum;
                $detail[$k]['buycnt']=$goodNum;
                $detail[$k]['state']=3;
                $detail[$k]['gcnt']=$v['goodsNum'];
                $detail[$k]['gprice']=$v['goodsSum'];
                //把评价信息放入数组
                $n = count($detail);
                for ($i=0; $i < $n; $i++) { 
                   $detail[$k]['msg']=$message[$i];
                }

        }
        //$detail  拿到每个商品详情信息
        //存入数据库
        $Res = DB::table('shop_detail')->insert($detail);
        if ($Res && $res) {
          echo 1;
        }
        //清空购物车
       
    }
    // 清除购物车信息
    public static function getClear(Request $request){
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
