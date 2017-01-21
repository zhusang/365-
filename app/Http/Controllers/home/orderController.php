<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    //显示订单待付款

    public function getIndex(Request $request)
    {   
        $uid = session('uid');
        //根据uid查询shop_order_hs表

        $back = DB::table('shop_order_hs')->where('uid',$uid)->get();
       $user = self::user();
       $users = [];
       $pay = [];
      $dsh = [];
      $tuhuo = [];
       foreach($user as $k=>$v)
       {
            if($v->state==4)
            {
                $users[] = $v;
            }

            if($v->state==0 || $v->state==1)
            {
                $pay[] = $v;
            }
            if($v->state==3 || $v->state==6)
            {
                $dsh[] = $v;
            }

             if($v->state==2)
            {
                $tuhuo[] = $v;
            }
       }

      $s = 0;
       
        //解析模板 分配数据
        return view('home.order.index',['user'=>$user,'users'=>$users,'back'=>$back,'pay'=>$pay,'s'=>$s,'dsh'=>$dsh,'tuhuo'=>$tuhuo]);
    }

    //取消订单
    public function getUpdate(Request $request)
    {
    	//提取数据
    	$state = $request->only(['state','did']);
    	
    	//修改数据库
    	$res = DB::table('shop_detail')->where('did',$state['did'])->update($state);
    	
    	if($res){
    		echo 1;
    	}else{
    		echo 0;
    	}
    }

    //订单回收
    public function getCallback(Request $request)
    {   
        //提取数据
        $did = $request->all();
        //通过did查询订单所有信息
        $order = DB::table('shop_detail')->where('did',$did['did'])->first();
        $goods = DB::table('shop_goods')->where('gid',$order->gid)->first();
        
        $shop = DB::table('shop_shop')->where('sid',$goods->sid)->first();
        $orders = DB::table('shop_order')->where('oid',$order->oid)->first();
        
        $callback =['oid'=>$order->oid,'ormb'=>$orders->ormb,
                    'uid'=>$orders->uid,'rec'=>$orders->rec,
                    'addr'=>$orders->addr,'tel'=>$orders->tel,
                    'umsg'=>$orders->umsg,'otime'=>$orders->otime,
                    'gid'=>$order->gid,'buyprice'=>$order->buyprice,
                    'buycnt'=>$order->buycnt,'sid'=>$shop->sid];
        //将数据插入回收数据库
        $call = DB::table('shop_order_hs')->insert($callback);
        if($call)
        {
            $details = DB::table('shop_detail')->where('did',$did['did'])->first();
            $request->session()->put('oid', $details->oid);
            //删除数据
            $res = DB::table('shop_detail')->where('did',$did['did'])->delete();
            
            
            $detail = DB::table('shop_detail')->where('oid',session('oid'))->  first();
        
            if(!$detail){
                $detail = DB::table('shop_order')->where('oid',session('oid'))->delete();
            }
            
            if($res){
            
                return redirect('/home/order/hsindex');

            }else{
                return back();
            }
        }else{
            return back();
        }

    }

    //删除订单
    public function getDelete(Request $request)
    {
    	//获取did
    	$did = $request->only(['hid']);
	   
        	$res = DB::table('shop_order_hs')->where('hid',$did['hid'])->delete();
        	
		
    	if($res){
    		
    		return redirect('/home/order/hsindex');

    	}else{
    		return back();
    	}
    }


    //订单回收站页面
    public function getHsindex(Request $request)
    {
       $uid = session('uid');
        //根据uid查询shop_order_hs表

        $back = DB::table('shop_order_hs')->where('uid',$uid)->get();
        // dd($callback);
        $shop = [];
        $goods = [];
        foreach($back as $k=>$v)
        {
            $shop[$v->sid] = DB::table('shop_shop')->where('sid',$v->sid)->first();
            $goods[$v->gid] = DB::table('shop_goods')->where('gid',$v->gid)->first();
        }
       $user = self::user();
            $users = [];
       $pay = [];
      $dsh = [];
      $tuhuo = [];
       foreach($user as $k=>$v)
       {
            if($v->state==4)
            {
                $users[] = $v;
            }

            if($v->state==0 || $v->state==1)
            {
                $pay[] = $v;
            }
            if($v->state==3 ||$v->state==6)
            {
                $dsh[] = $v;
            }
            if($v->state==2)
            {
                $tuhuo[] = $v;
            }
       }

       $s = 1;
       

        //解析模板 分配数据
         return view('home.order.callback',['user'=>$user,'users'=>$users,'back'=>$back,'pay'=>$pay,'s'=>$s,'shop'=>$shop,'goods'=>$goods,'dsh'=>$dsh,'tuhuo'=>$tuhuo]);
    }

    //订单回收
    public function getReply(Request $request)
    {
    	//提取数据
    	$hid = $request->only(['hid']);

    	//查询回收站
    	$callback = DB::table('shop_order_hs')->where('hid',$hid['hid'])->first();
    	// dd($callback);
    	//提取数据 插入订单表和订单详情表
    	$order = ['oid'=>$callback->oid,'ormb'=>$callback->ormb,
                   'uid'=>$callback->uid,'rec'=>$callback->rec,
                   'addr'=>$callback->addr,'tel'=>$callback->tel,
                   'umsg'=>$callback->umsg,'otime'=>$callback->otime,
                   ];
        //查询订单表,看是否有oid
            $ordert = DB::table('shop_order')->where('oid',$order['oid'])->get();
            if(empty($ordert)){
                //插入订单表中
                $orders = DB::table('shop_order')->insert($order);
            }
        
        $detail = ['oid'=>$callback->oid,'gid'=>$callback->gid,
                   'buyprice'=>$callback->buyprice,'buycnt'=>$callback->buycnt];
        //插入订单详情表中
        $details = DB::table('shop_detail')->insert($detail);

        //删除回收站表
        $res = DB::table('shop_order_hs')->where('hid',$hid['hid'])->delete();
        if($res){
        	return redirect('/home/order/hsindex');
        }else{
        	return back();
        }
    	

    }

    //订单详情
    public function getDetails(Request $request)
    {
    	//提取订单id
    	$did = $request->only(['did']);
    	// 查询订单的两个表
    	$detail = DB::table('shop_detail')->where('did',$did['did'])->first();

    	$order = DB::table('shop_order')->where('oid',$detail->oid)->first();
    	//查询商品
    	$goods = DB::table('shop_goods')->where('gid',$detail->gid)->first();
    	// dd($goods);
    	$state = [
            '0'=>'待付款','1'=>'取消交易','2'=>'已退款','3'=>'待收货','4'=>'待评价','5'=>'OK','6'=>'已发货'];
    	return view('home.order.details',['goods'=>$goods,'detail'=>$detail,'order'=>$order,'state'=>$state]);
    }

    //回收站商品的订单详情
    public function getHsdetail(Request $request)
    {
    	//提取订单id
    	$hid = $request->only(['hid']);
    	// 查询订单的两个表
    	$detail = DB::table('shop_order_hs')->where('hid',$hid['hid'])->first();
    	
    	
    	//查询商品
    	$goods = DB::table('shop_goods')->where('gid',$detail->gid)->first();
    	// dd($goods);
    	$state = [
    		'0'=>'待付款','1'=>'取消交易','2'=>'已退款','3'=>'待收货','4'=>'待评价','5'=>'OK','6'=>'已发货'
    	];
    	return view('home.order.det',['goods'=>$goods,'detail'=>$detail,'state'=>$state]);

    }

    //交易快照
    public function getPhone(Request $request)
    {
    	//提取gid
    	$gid = $request->only(['gid']);
    	// 查询商品信息
    	$goods = DB::table('shop_goods')->where('gid',$gid)->first();
    	
    	$goods_det = DB::table('shop_goods_detail')->where('gid',$gid)->first();
    	$goods_pic = DB::table('shop_goods2_pic')->where('gid',$gid)->get();
    	//查询商品图片表
    	$allgood = DB::table('shop_goods2_pic')->where('gid',$gid)->get();

    	//查询商铺信息
    	$shop = DB::table('shop_shop')->where('sid',$goods->sid)->first();
    	// dd($gid);
    	return view('home.order.goods',['goods'=>$goods,'shop'=>$shop,'allgood'=>$allgood,'goods_det'=>$goods_det,'goods_pic'=>$goods_pic]); 
    }

    //待评价页面显示
    public function getPingjia(Request $request)
    {
        $uid = session('uid');
        //根据uid查询shop_order_hs表
        $back = DB::table('shop_order_hs')->where('uid',$uid)->get();
        //获取session中的uid
       $user = self::user();
           $users = [];
       $pay = [];
      $dsh = [];
      $tuhuo = [];
       foreach($user as $k=>$v)
       {
            if($v->state==4)
            {
                $users[] = $v;
            }

            if($v->state==0 || $v->state==1)
            {
                $pay[] = $v;
            }
            if($v->state==3 || $v->state==6)
            {
                $dsh[] = $v;
            }
            if($v->state==2)
            {
                $tuhuo[] = $v;
            }
       }
       

       $s = 4;
        //解析模板分配数据
        return view('home.cout.cout',['user'=>$user,'users'=>$users,'back'=>$back,'pay'=>$pay,'s'=>$s,'dsh'=>$dsh,'tuhuo'=>$tuhuo]);
    }



    //待收货
    public function getDsh(Request $request)
    {
        $uid = session('uid');

        //根据uid查询shop_order_hs表
        $back = DB::table('shop_order_hs')->where('uid',$uid)->get();
        //获取session中的uid
       $user = self::user();
           $users = [];
       $pay = [];
      $dsh = [];
      $tuhuo = [];
       foreach($user as $k=>$v)
       {
            if($v->state==4)
            {
                $users[] = $v;
            }

            if($v->state==0 || $v->status==1)
            {
                $pay[] = $v;
            }
            if($v->state==3 ||$v->state==6)
            {
                $dsh[] = $v;
            }
            if($v->state==2)
            {
                $tuhuo[] = $v;
            }
       }
       $dshh = [];
       foreach($dsh as $k=>$v)
       {
            if(!in_array($v->oid,$dshh)){
                $dshh[]=$v->oid;
            }else{
                    $v->biaozhi = 1;
            }
                
       }
       // dd($dsh);



       $s = 3;
        //解析模板分配数据
        return view('home.order.dsh',['user'=>$user,'users'=>$users,'back'=>$back,'pay'=>$pay,'s'=>$s,'dsh'=>$dsh,'tuhuo'=>$tuhuo]);
            }
        
            
    

     //退货
    public function getTuhuo(Request $request)
    {
        $uid = session('uid');

        //根据uid查询shop_order_hs表
        $back = DB::table('shop_order_hs')->where('uid',$uid)->get();
        //获取session中的uid
       $user = self::user();
           $users = [];
       $pay = [];
      $dsh = [];
      $tuhuo = [];
       foreach($user as $k=>$v)
       {
            if($v->state==4)
            {
                $users[] = $v;
            }

            if($v->state==0 || $v->state==1)
            {
                $pay[] = $v;
            }
            if($v->state==3 || $v->state==6)
            {
                $dsh[] = $v;
            }
            if($v->state==2)
            {
                $tuhuo[] = $v;
            }
       }


       $s = 2;
        //解析模板分配数据
        return view('home.order.out',['user'=>$user,'users'=>$users,'back'=>$back,'pay'=>$pay,'s'=>$s,'dsh'=>$dsh,'tuhuo'=>$tuhuo]);
    }

    //退款退货
    public function getOut(Request $request)
    {
        //提取oid
        $did = $request->only(['did']);
        
        $state = ['state'=>'2'];
        //通过did修改订单以及订单详情表
        $res = DB::table('shop_detail')->where('did',$did['did'])->update($state);

        if($res)
        {
           return redirect('/home/order/dsh');
        }else{
            return back();
        }
    }

    //付款
    public function getPay(Request $request)
    {
        //提取数据
        $did = $request->only(['did']);
        $state = ['state'=>3];
        //修改状态
        $res = DB::table('shop_detail')->where('did',$did['did'])->update($state);

        if($res){
            return redirect('/home/order/dsh');
        }else{
            return back();
        }

    }

    //待评价清单
    public static function user()
    {   
        $uid = session('uid');
        $users = DB::table('shop_users')
            ->join('shop_order', 'shop_users.uid', '=', 'shop_order.uid')
            ->join('shop_detail', 'shop_order.oid', '=', 'shop_detail.oid')
            ->join('shop_goods', 'shop_detail.gid', '=', 'shop_goods.gid')
            ->join('shop_shop', 'shop_goods.sid', '=', 'shop_shop.sid')
            ->where('shop_users.uid','=',$uid)
            ->select('shop_users.*', 'shop_order.*', 'shop_detail.*','shop_goods.*','shop_shop.*')
            ->get();
            return $users;
    }

    //全部订单显示
    public function getQbdd()
    {
        $uid = session('uid');
        //根据uid查询shop_order_hs表

        $back = DB::table('shop_order_hs')->where('uid',$uid)->get();
        $user = self::user();
        $users = [];
        $pay = [];
        $dsh = [];
        $tuhuo = [];
        foreach($user as $k=>$v)
        {
            if($v->state==4)
            {
                $users[] = $v;
            }

            if($v->state==0 || $v->state==1)
            {
                $pay[] = $v;
            }
            if($v->state==3 || $v->state==6)
            {
                $dsh[] = $v;
            }

             if($v->state==2)
            {
                $tuhuo[] = $v;
            }
        }

         $s = 7;
       
         //解析模板 分配数据
         return view('home.order.qbdd',['user'=>$user,'users'=>$users,'back'=>$back,'pay'=>$pay,'s'=>$s,'dsh'=>$dsh,'tuhuo'=>$tuhuo]);

    }

}

?>