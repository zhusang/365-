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
        if(!$uid){
        	dd('未登录');
        	return view('user.login');
        }

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
        $shop = DB::table('shop_shop')->where('sid',$order->did)->first();
        $orders = DB::table('shop_order')->where('oid',$order->oid)->first();
        
        $callback =['oid'=>$order->oid,'ormb'=>$orders->ormb,
                    'uid'=>$orders->uid,'rec'=>$orders->rec,
                    'addr'=>$orders->addr,'tel'=>$orders->tel,
                    'umsg'=>$orders->umsg,'otime'=>$orders->otime,
                    'gid'=>$order->gid,'buyprice'=>$order->buyprice,
                    'sid'=>$shop->sid];
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

        // dd($shop);
        //解析模板 分配数据
         return view('home.order.callback',['callback'=>$callback,'user'=>$user,'shop'=>$shop,'goods'=>$goods]);
    }

}

?>