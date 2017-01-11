<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   
    //首页
        public function getIndex()
        {   
	            //查询出所有的分类数据
	            	$types = self::getZiLei(0);
	            	// dd($types);
	            	// foreach ($types as $k => $v) {
	            	// 	foreach ($v->sub as $kk => $vv) {
	            	// 		dd($vv->tname);
	            	// 	}
	            	// }
	            	return view('home/index/index',['types'=>$types]);
        }
    //搜索框
    	public function getSearch(Request $request)
    	{	
    		// dd($request->all());
    		
    		//拿到要搜索的条件
    			$q = $request->input('search');
    			// dd($q);
    		//查询所有分类
	            	$types = self::getZiLei(0);
	        

	         if(empty($request->input('tt'))){
	    		//查询所有相关商品
	    			$infos = DB::table('shop_goods')->where('gname','like','%'.$q.'%')->get();
	    		
	    			// dd($infos);
	    			foreach ($infos as $k => $v) {
	 
	    				$t = DB::table('shop_type')->where('tid',$v->tid)->first();


	    			}
	    		//拿到具体查询的类型
	    		// dd($t);
	    			if (!empty($t)) {
		    			$datatype = $t->datatype;
		         		$tid = $t->tid;
	    			}else{
	    			//如果没有查到信息
	    				$tid = 0;
	    				$datatype = null;
	    			}

	         }else{
	         	//拿到具体查询的类型 选项卡
	         	$datatype = $request->input('tt');
	         	//显示相关商品
	         	$tid = $request->input('tid');
	         }

	        
    		// dd($datatype);
    		// dd($types);
    		return view('home/index/search',['types'=>$types,'datatype'=>$datatype,'tid'=>$tid]);
    	}

    //列表页ajax获取内容
    	public function getList(Request $request)
    	{
    		// dd($request->all());
			// dd($good);
    		//获取到要查询的内容
    			$tid = $request->input('tid');
    			$num = $request->input('num');
    		//调用方法 查询出来包括自己的所有分类
    			$types = self::getZiLei($tid);
    		// dd($types);
    		//如果有子类就连带子类的商品一起查询出来
		if (!empty($types)) {
			// dd($types);
    			$str = '';
			//遍历拿到所有的tid
    			foreach ($types as $k => $v) {
    				$str .= $v->tid.',';
    				foreach ($v->sub as $kk => $vv) {
    					$str .= $vv->tid.',';
    					foreach ($vv->sub as $kkk => $vvv) {
    						$str .= $vvv->tid.',';
    					}
    				}
    			}
			//去除多余逗号
    				$str = rtrim($str,',');
    				$arr = explode(',', $str);
    			// dd($str);
			//查询所有在范围内的商品    ->whereBetween('votes', [1, 100])
    				// $info = DB::table('shop_goods')->whereIn('tid',$arr)->paginate($num);
    				$info = DB::table('shop_goods')
            					->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
            					->select('shop_goods.*','shop_goods_detail.*')
            					->whereIn('tid',$arr)
            					->paginate($num);


			//如果传了maxPrice minPrice 价格区间==================================================
    				if ($request->input('minPrice')) {
					//拼接查询条件
    						$price = [$request->input('minPrice'),$request->input('maxPrice')];
    						  //Laravel 5 中需要开启QueryLog
    							// DB::connection()->enableQueryLog();
    					//进行查询
    						// $info = DB::table('shop_goods')->whereIn('tid',$arr)->whereBetween('price',$price)->paginate($num);
    						$info = DB::table('shop_goods')
            					->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
            					->select('shop_goods.*','shop_goods_detail.*')
            					->whereIn('tid',$arr)
            					->whereBetween('price',$price)
            					->paginate($num);
    					
    				// dd($info);
    				 	//这里为查询操作
    					// dd(DB::getQueryLog());
    				}
    				// dd($price);
    				
    		//如果传了order 销量排序==============================================================
    				// $info = DB::table('shop_goods')->whereIn('tid',$arr)->orderBy('scnt','desc')->paginate($num);
    			if ($request->input('order')) {
    				// dd($request->input('order'));
    			
    				$info = DB::table('shop_goods')
            					->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
            					->select('shop_goods.*','shop_goods_detail.*')
            					->whereIn('tid',$arr)
            					->orderBy('scnt','desc')
            					->paginate($num);
    				// dd($info);
    			}


    		//如果传了new 新品=============================================================
    			if ($request->input('xin')) {
    				// dd($request->input('new'));
    				
    				 //Laravel 5 中需要开启QueryLog
    							// DB::connection()->enableQueryLog();

    				$info = DB::table('shop_goods')
            					->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
            					->select('shop_goods.*','shop_goods_detail.*')
            					->whereIn('tid',$arr)
            					->where('status',0)
            					->paginate($num);
            		//这里为查询操作
    					// dd(DB::getQueryLog());
    				// dd($info);
    			}


		}else{

    		//如果没有子类 就直接查当前商品下的所有商品
    		//从数据库查询所有相关商品
	    			// $info = DB::table('shop_goods')->where('tid',$tid)->paginate($num);
	    			$info = DB::table('shop_goods')
            					->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
            					->select('shop_goods.*','shop_goods_detail.*')
            					->where('tid',$tid)
            					->paginate($num);

	    			// dd($info);
    		

    		//如果传了maxPrice minPrice  价格区域========================================
    				if ($request->input('minPrice')) {
    					//拼接查询条件
    						$price = [$request->input('minPrice'),$request->input('maxPrice')];
    					//进行查询
    					// $info = DB::table('shop_goods')->where('tid',$tid)->whereBetween('price',$price)->paginate($num);
    					$info = DB::table('shop_goods')
            					->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
            					->select('shop_goods.*','shop_goods_detail.*')
            					->where('tid',$tid)
            					->whereBetween('price',$price)
            					->paginate($num);

    				// dd($info);
    				 	//这里为查询操作
    					// dd(DB::getQueryLog());
    				}


    		//如果传了order 销量排序==============================================================
    					if ($request->input('order')) {
    				// dd($request->input('order'));
    			
    				$info = DB::table('shop_goods')
            					->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
            					->select('shop_goods.*','shop_goods_detail.*')
            					->where('tid',$tid)
            					->orderBy('scnt','desc')
            					->paginate($num);
    				// dd($info);
    			}


    		//如果传了new 新品=============================================================
    			if ($request->input('xin')) {
    				// dd($request->input('order'));
    			
    				$info = DB::table('shop_goods')
            					->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
            					->select('shop_goods.*','shop_goods_detail.*')
            					->where('tid',$tid)
            					->where('status',0)
            					->paginate($num);
    				// dd($info);
    			}
	    		
    		}
	    			$arr = [];
	    			foreach ($info as $k => $v) {
	    				$arr[] = $v;
	    			}
    			// dd($arr);
    			// echo $info;d
    			echo json_encode($arr);
    	}

    

      /*
     商品分类
      定义方法循环遍历所有的子类
	  */
	  public static function getZiLei($id){
	    
		     //拿当前的id 查询所有的子分类
		      $info = DB::table('shop_type')->where('pid',$id)->get();
		      // dd($info);
		       $data = [];
		      foreach ($info as $k => $v) {
		        $v->sub = self::getZiLei($v->tid);
		        $data[] = $v;
		        // dd($v);
		      }
		      // dd($data);
		      return $data;
	  }
}
