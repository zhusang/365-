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

            //==============================查询用户信息
                // //查询已登录的用户id
                $uid = session('uid');

                // 查找关于这个用户的信息
                $user = DB::table('shop_users')->where('uid',$uid)->first();

            //============================= 查询出所有的分类信息
    	            //查询出所有的分类数据
    	            	$types = self::getZiLei(0);
                    //查询出店铺轮播图信息
                           $info = DB::table('shop_shop_lunbo')->get();
                            foreach ($info as $k => $v) {
                            //店铺信息
                                $v->sid = DB::table('shop_shop')->where('sid',$v->sid)->first();
                            // 商品信息
                                $v->lpic = DB::table('shop_goods')->where('gid',$v->lpic)->first();
                                $v->lpic2 = DB::table('shop_goods')->where('gid',$v->lpic2)->first();
                                $v->lpic3 = DB::table('shop_goods')->where('gid',$v->lpic3)->first();
                                $v->lpic4 = DB::table('shop_goods')->where('gid',$v->lpic4)->first();
                            }
                        // dd($info);

            //===========================把每层分类下的商品的第一个商品压入到数组中
                    //调用方法 查询出来包括自己的所有分类
                        $TuiJian1 = self::getZiLei(0);
                      // 每个分类下边的商品压入到goods中 
                      foreach ($TuiJian1 as $a => $b) {
                       //查询出每个一级分类下边第一个商品
                         $TuiJian = self::getZiLei($b->tid);
                          $str = '';
                        //遍历拿到所有的tid
                            foreach ($TuiJian as $k => $v) {
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
                        //查询所有在范围内的商品
                                $TJinfo = DB::table('shop_goods')
                                            ->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
                                            ->join('shop_goods2_pic','shop_goods2_pic.gid','=','shop_goods.gid')
                                            ->select('shop_goods.*','shop_goods_detail.*','shop_goods2_pic.bpic')
                                            ->whereIn('tid',$arr)
                                            ->first();
                        //压入
                                $b->goods = $TJinfo;

                        // 把二级分类下的所有商品取出一个压入goods
                            foreach ($b->sub as $c => $d) {
                        //查询出每个二级分类下边第一个商品
                         $TuiJian2 = self::getZiLei($d->tid);
                          $sbr = '';
                        //遍历拿到所有的tid
                            foreach ($TuiJian2 as $e => $f) {
                                $sbr .= $f->tid.',';
                                foreach ($f->sub as $ee => $ff) {
                                    $sbr .= $ff->tid.',';
                                    foreach ($ff->sub as $eee => $fff) {
                                        $sbr .= $fff->tid.',';
                                    }
                                }
                            }
                        //去除多余逗号
                                $sbr = rtrim($sbr,',');
                                $brr = explode(',', $sbr);
                        //查询所有在范围内的商品
                                $TJinfo2 = DB::table('shop_goods')
                                            ->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
                                            ->join('shop_goods2_pic','shop_goods2_pic.gid','=','shop_goods.gid')
                                            ->select('shop_goods.*','shop_goods_detail.*','shop_goods2_pic.bpic')
                                            ->whereIn('tid',$brr)
                                            ->first();
                        //压入
                                $d->goods = $TJinfo2;
                               // =================================
                            }

                             }
                            // dd($TuiJian1);
                 
                        //分配模板数据
    	            	return view('home/index/index',['types'=>$types,'shoplb'=>$info,'user'=>$user,'TuiJian'=>$TuiJian1]);
            }

       


    	            	
            /*
            设置静态方法给头部和右侧导航分配$user变量
        */
        public static function tou()
        {
                //查询已登录的用户id
                $uid = session('uid');

                // 查找关于这个用户的信息
                $user = DB::table('shop_users')->where('uid',$uid)->first();
                //将用户信息分配到页面
                return view('home/muban/head-top',['user'=>$user]);
        }


    //搜索框
        	public function getSearch(Request $request)
        	{	
                // //查询已登录的用户id
                $uid = session('uid');

                // 查找关于这个用户的信息
                $user = DB::table('shop_users')->where('uid',$uid)->first();

        		// dd($request->all());
              // //查询已登录的用户id
                    $uid = session('uid');

                // 查找关于这个用户的信息
                     $user = DB::table('shop_users')->where('uid',$uid)->first();   
        		
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
        		return view('home/index/search',['types'=>$types,'datatype'=>$datatype,'tid'=>$tid,'user'=>$user]);
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
        加载抢购图片
    */
        public function getQuickgoods(Request $request)
        {
            //查询出所有的抢购图片
                $goods = DB::table('shop_quickgoods')->get();
                // dd($goods);
           //通过每一个商品的gid 查询出所有的
               $infos = [];
                foreach ($goods as $k => $v) {
                  $infos[] = DB::table('shop_goods')->where('gid',$v->gid)->first();
                }
                // dd($infos);
            echo json_encode($infos);
        }


    /*
        加载店铺轮播图
     */
        public function getShoplunbo(Request $request)
        {
           //查询所有的前台轮播店铺信息

                // $info = DB::table('shop_shop_lunbo')
                //     ->join('shop_goods', 'shop_shop_lunbo.sid', '=', 'shop_goods.sid')
                //     ->join('shop_shop', 'shop_shop_lunbo.sid', '=', 'shop_shop.sid')
                //     ->select('shop_shop_lunbo.lpic','shop_shop_lunbo.lpic2','shop_shop_lunbo.lpic3','shop_shop_lunbo.lpic4','shop_shop_lunbo.sid', 'shop_shop.slogo', 'shop_shop.sname','shop_goods.price')
                //     ->get();
                 $info = DB::table('shop_shop_lunbo')->get();
                foreach ($info as $k => $v) {
                //店铺信息
                    $v->sid = DB::table('shop_shop')->where('sid',$v->sid)->first();
                // 商品信息
                    $v->lpic = DB::table('shop_goods')->where('gid',$v->lpic)->first();
                    $v->lpic2 = DB::table('shop_goods')->where('gid',$v->lpic2)->first();
                    $v->lpic3 = DB::table('shop_goods')->where('gid',$v->lpic3)->first();
                    $v->lpic4 = DB::table('shop_goods')->where('gid',$v->lpic4)->first();
                }
                dd($info);
        }

    /*
        加载猜你喜欢图片
     */
    public function getLike(Request $request)
    {   
       //每页显示的条数
            $num = $request->input('num');
        //查询所有的信息
            // $likes = DB::table('shop_goods')->paginate($num);
        $likes = DB::table('shop_goods')
            ->join('shop_goods_detail','shop_goods.gid','=','shop_goods_detail.gid')
            ->select('shop_goods.*','shop_goods_detail.*')
            ->paginate($num);



            $brr = [];
            foreach ($likes as $k => $v) {
                $brr[] = $v;
            }
           echo json_encode($brr);

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
