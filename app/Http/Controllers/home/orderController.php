<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    //显示商品详情

    public function getIndex(Request $request)
    {
        // 获取session中的uid
        $uid = $request->session()->get('uid');

        $user = DB::table('shop_users')->where('uid',$uid)->first();
        //联表联查 可以得到数据
        $users = DB::table('shop_users')
        ->join('shop_order', 'shop_users.uid', '=', 'shop_order.uid')
        ->join('shop_detail', 'shop_order.oid', '=', 'shop_detail.oid')
        ->join('shop_goods', 'shop_detail.gid', '=', 'shop_goods.gid')
        
        ->join('shop_goods_detail', 'shop_goods.gid', '=', 'shop_goods_detail.gid')
        
        ->select('shop_users.*', 'shop_order.*','shop_goods.*','shop_goods_detail.*', 'shop_detail.*')
        
        ->get();

        $shop = [];
        foreach($users as $k=>$v)
        {
        	$shop[$v->sid] = DB::table('shop_shop')->where('sid',$v->sid)->first();
        }
       
        //解析模板 分配数据
        return view('home.order.index',['user'=>$user,'users'=>$users,'shop'=>$shop]);
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
            
                return redirect('/home/order/index');

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
        $user = DB::table('shop_users')->where('uid',$uid)->first();
        //根据uid查询shop_order_hs表

        $callback = DB::table('shop_order_hs')->where('uid',$uid)->get();
        // dd($callback);
        $shop = [];
        $goods = [];
        foreach($callback as $k=>$v)
        {
            $shop[$v->sid] = DB::table('shop_shop')->where('sid',$v->sid)->first();
            $goods[$v->gid] = DB::table('shop_goods')->where('gid',$v->gid)->first();
        }

        
        //解析模板 分配数据
         return view('home.order.callback',['callback'=>$callback,'user'=>$user,'shop'=>$shop,'goods'=>$goods]);
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
        //插入订单表中
        $orders = DB::table('shop_order')->insert($order);
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
    		'0'=>'待付款','1'=>'取消交易','2'=>'已付款','3'=>'待评价','4'=>'订单完成'
    	];
    	return view('home.order.details',['goods'=>$goods,'detail'=>$detail,'order'=>$order,'state'=>$state]);
    }

    //回收站商品的订单详情
    public function getHsdetail(Request $request)
    {
    	//提取订单id
    	$hid = $request->only(['hid']);
    	// 查询订单的两个表
    	$detail = DB::table('shop_order_hs')->where('hid',$hid['hid'])->first();
    	// dd($detail);
    	// $order ={'oid':$detail->oid};
    	
    	//查询商品
    	$goods = DB::table('shop_goods')->where('gid',$detail->gid)->first();
    	// dd($goods);
    	$state = [
    		'0'=>'待付款','1'=>'取消交易','2'=>'已付款','3'=>'待评价','4'=>'订单完成'
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

}

?>