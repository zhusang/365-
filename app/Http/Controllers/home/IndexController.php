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
