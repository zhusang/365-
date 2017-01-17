<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class shopController extends Controller
{
   /*
		显示出商铺的首页
   */
	//店铺
	public function getIndex(Request $request)
	{
		//获取传来的查询条件
		$chaxun = $request->input('chaxun');
		session(['chaxun'=>$chaxun]);
		//获取传来的tid
		$tt = $request->input('tid');
		session(['tt'=>$tt]);
		//获取店铺的sid
		$sid = $request->input('sid');
		session(['sid'=>$sid]);
		// dd($sid);
		//通过sid找到商铺的信息
		$shop = DB::table('shop_shop')->where('sid',$sid)->first();
		$hengfu = DB::table('shop_shop_hengfu')->where('sid',$sid)->first();
		$xct = DB::table('shop_shop_xc')->where('sid',$sid)->get();
		$sgoods = DB::table('shop_goods')->where('sid',$sid)->get();
		
		// dd($sgoods);
		// dd($xct);
		// dd($shop);
		// dd($hengfu);

		//查找商铺下的商品分类情况
		//使用join进行联查
		$data = [];
		$arr = [];
		$tid = DB::table('shop_shop')
            ->join('shop_goods', 'shop_shop.sid', '=', 'shop_goods.sid')
            ->join('shop_type', 'shop_goods.tid', '=', 'shop_type.tid')
            ->select('shop_shop.*', 'shop_type.*')
            ->where('shop_shop.sid',$sid)
            ->get();
       
         //判断商品的分类是否重复
        foreach ($tid as $k => $v) {
        	if (in_array($v->tid,$data)) {
        		$v->a = 1;
        	}else{
      			$data[] = $v->tid;
        	}
        }

        // dd($data);
       // dd($tid);
       //查找是不是有查询的条件的商品
		

       //判断是否有tid的传入
        if($tt){
        	$res = DB::table('shop_type')->where('tid',$tt)->first();

        	$brr = [];
       		foreach ($sgoods as $k => $v) {
       			if ($v->tid == $tt) {
       				$brr[] = $v;
       			}
       		}

			//显示分类商品页
       		// dd($brr);
       		return view('home.shop.type',['shop'=>$shop,'hengfu'=>$hengfu,'xct'=>$xct,'brr'=>$brr,'tid'=>$tid,'res'=>$res]);
        
        }else{

        	if($chaxun){
        		$res = DB::table('shop_goods')->where('gname','like','%'.$chaxun.'%')->where('sid',$sid)->get();
        		return view('home.shop.chaxun',['shop'=>$shop,'hengfu'=>$hengfu,'xct'=>$xct,'sgoods'=>$res,'tid'=>$tid]);
        	}
        	//显示首页
			return view('home.shop.index',['shop'=>$shop,'hengfu'=>$hengfu,'xct'=>$xct,'sgoods'=>$sgoods,'tid'=>$tid]);
        }
	}

	public static function getDptou()
	{
		//获取session店铺的sid
		$sid = session('sid');
		// dd($sid);
		//通过sid找到商铺的信息
		$shop = DB::table('shop_shop')->where('sid',$sid)->first();
		$hengfu = DB::table('shop_shop_hengfu')->where('sid',$sid)->first();
		$xct = DB::table('shop_shop_xc')->where('sid',$sid)->get();
		$sgoods = DB::table('shop_goods')->where('sid',$sid)->get();
		
		// dd($sgoods);
		// dd($xct);
		// dd($shop);
		// dd($hengfu);

		//查找商铺下的商品分类情况
		//使用join进行联查
		$data = [];
		$arr = [];
		$tid = DB::table('shop_shop')
            ->join('shop_goods', 'shop_shop.sid', '=', 'shop_goods.sid')
            ->join('shop_type', 'shop_goods.tid', '=', 'shop_type.tid')
            ->select('shop_shop.*', 'shop_type.*')
            ->where('shop_shop.sid',$sid)
            ->get();
       
         //判断商品的分类是否重复
        foreach ($tid as $k => $v) {
        	if (in_array($v->tid,$data)) {
        		$v->a = 1;
        	}else{
      			$data[] = $v->tid;
        	}
        }

        return view('home.shop.head-top',['shop'=>$shop,'hengfu'=>$hengfu,'xct'=>$xct,'tid'=>$tid]);
	}
}
