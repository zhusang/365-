<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
	  /*
	    商品首页
	   */
	  public function getIndex(Request $request)
	  { 	

		    /*查询出所有的商品数据*/
		    	// $goods = DB::table('shop_goods')->get();
		   
		   //分页
		   //获取每页显示条数
		   		$num = $request->input('num',1);
		   //判断是否有查询条件
		   		if ($request->input('gname')) {
		   			$gname = $request->input('gname');
		   			$goods = DB::table('shop_goods')->where('gname','like','%'.$gname.'%')->paginate($num);
		   			// $goods = DB::table('shop_goods')
        //     					->join('shop_goods_detail', 'shop_goods.gid', '=', 'shop_goods_detail.gid')
        //     					->select('shop_goods.*', 'shop_goods_detail.*')
        //     					->where('gname','like','%'.$gname.'%')
        //    						->paginate($num);
		   		}else{
		   			// $goods = DB::table('shop_goods')
        //     					->join('shop_goods_detail', 'shop_goods.gid', '=', 'shop_goods_detail.gid')
        //     					->select('shop_goods.*', 'shop_goods_detail.*')
        //    						->paginate($num);
           		$goods = DB::table('shop_goods')->paginate($num);
		   		}
		   
		   	// ===============
		   	//查询出商品的所属分类为什么 
		   		foreach ($goods as $k => $v) {
		   			$info = DB::table('shop_type')->where('tid',$v->tid)->first();
		   			$v->tname = $info->tname;
		   		}
		   //获取所有的查询条件 为分页后翻页保持条件用
		   		$list = $request->all();

		    	
		    //分配模板数据
		    return view('Admin/Goods/index',['goods'=>$goods,'list'=>$list]);
	  }

	  /*商品添加页*/
	  public function getAdd(Request $request)
	  {
		  	//查询出所有的分类
		  		$types = self::getZiLei(0);
		  	//查询出所有的店铺
		  		$shops = DB::table('shop_shop')->get();
		  		// dd($types);

		  	return view('Admin/Goods/add',['types'=>$types,'shops'=>$shops]);
	  }

	  /*执行商品添加*/
	  public function postInsert(Request $request)
	  {	
	  	// dd($request->all());
	  			//获取到修改的参数
		  		$info = $request->except(['_token','pic','gid','status','gdesc']);
		  		$data = $request->only(['status','gdesc']);

		  		
		  	//调用方法处理 上传图片
		  		$fileName = $this->getUpload($request,'pic');
		  		if ($fileName) {
		  			$info['gpic']=$fileName; 
		  		}
		  	//添加时间
		  		$data['ctime'] = time();
		  	
		  	//执行添加数据
		  		$gid = DB::table('shop_goods')->insertGetid($info);
		  		$data['gid'] = $gid;
		  		$res = DB::table('shop_goods_detail')->insert($data);
		  		if ($res) {
		  			//成功
		  				return redirect('admin/goods/index')->with('success','添加商品成功');
		  		}else{
		  			//失败
		  				return back()->with('error','添加商品失败');
		  		}
	  }

//=========================== 商品小图  ======================
	  /*商品小图列表*/
	  public function getSpicshow(Request $request)
	  {
	  		//获取到要查看哪个商品的小图
	  			$gid = $request->input('gid');
	  		//查询出这个商品的所有小图
	  			$spics = DB::table('shop_goods2_pic')->where('gid',$gid)->get();
	  			// dd($spics);
	  		//把每个小图的所属商品都查询处理
	  			foreach ($spics as $k => $v) {
	  				$info = DB::table('shop_goods')->where('gid',$v->gid)->first();
	  				$v->gname = $info->gname;
	  			}
	  			//分配模板 分配数据
	  			return view('admin/goods/SpicShow',['pics'=>$spics,'gid'=>$gid]);
	  }

	  /*添加商品小图*/
	  public function getSpic(Request $request)
	  {

	  		//分配模板
	  			return view('admin/goods/SpicAdd');
	  			
	  }
	  /*执行添加小图*/
	  public function postSpicadd(Request $request)
	  {		
	  	// dd($request->all());
	  		$data = [];
	  		$data['gid'] = $request->input('gid');
	  		//调用方法来处理添加的图片
	  			$fileName = $this->getUpload($request,'spic');
	  			if ($fileName) {
	  				//如果添加了图片
	  				$data['spic'] = $fileName;
	  			}
				// dd($data);
	  		//如果有id
	  		if ($request->input('id')) {
	  			$res = DB::table('shop_goods2_pic')->where('id',$request->input('id'))->update($data);
	  		}else{
	  		//普通添加
	  			$res = DB::table('shop_goods2_pic')->insert($data);
	  		}
	  			if ($res) {
	  					//成功执行
	  					return redirect('admin/goods/spicshow?gid='.$data['gid'].'')->with('success','添加成功');
	  			}else{
	  					//失败执行
	  					return back()->with('error','添加失败');
	  			}
	  }

	  // 执行添加上身效果图
	  public function postBpicadd(Request $request)
	  {		

	  		$data = [];
	  		$data['gid'] = $request->input('gid');
	  		//调用方法来处理添加的图片
	  			$fileName = $this->getUpload($request,'bpic');
	  			if ($fileName) {
	  				//如果添加了图片
	  				$data['bpic'] = $fileName;
	  			}
	  			// dd($data);
	  		//如果有id
	  		if ($request->input('id')) {
	  			$res = DB::table('shop_goods2_pic')->where('id',$request->input('id'))->update($data);
	  		}else{
	  			//执行添加
	  			$res = DB::table('shop_goods2_pic')->insert($data);
	  		}
	  		
	  			if ($res) {
	  					//成功执行
	  					return redirect('admin/goods/spicshow?gid='.$data['gid'].'')->with('success','添加成功');
	  			}else{
	  					//失败执行
	  					return back()->with('error','添加失败');
	  			}
	  		
	  }

	  /*商品小图删除*/
	  public function getSpicdel(Request $request)
	  {	
	  	// dd($request->all());
	  		//获取到我要删除的小图id
	  			$id = $request->input('id');
	  		//执行删除操作
	  			$res = DB::table('shop_goods2_pic')->where('id',$id)->delete();
	  			// dd($res);
	  		//返回结果
	  			echo $res;
	  }
 //===========================   商品小图操作结束  ========================

	  
	   /*
        封装函数进行图片操作
     */
	    public function getUpload($request,$pic)
	    {   
		     //判断如果上传了图片
		        if ($request->hasFile($pic)) {
		            //获取上传图片的后缀名称
		                $HouZhui = $request->file($pic)->getClientOriginalExtension();
		            //设置图片名称
		                $fileName = md5(time()).'.'.$HouZhui;
		            //移动图片
		                $request->file($pic)->move('./uploads/',$fileName);
		            //返回图片路径
		                return '/uploads/'.$fileName;
		        }
	    }
	    /**/

	   /*
		修改操作
	   */
	  public function getEdit(Request $request)
	  {
		  	//获取到传递过来的id
		  		$gid = $request->input('gid');
		  	//根据id查询出这个商品的信息
		  		// $good = DB::table('shop_goods')->where('gid',$gid)->first();
		  		$good = DB::table('shop_goods')
            					->join('shop_goods_detail', 'shop_goods.gid', '=', 'shop_goods_detail.gid')
            					->select('shop_goods.*', 'shop_goods_detail.*')
            					->where('shop_goods.gid',$gid)
            					->first();
           // dd($goods);
		  	//查询出所有的分类
		  		$types = DB::select('select *,concat(path,",",tid) as npath from shop_type order by npath');

		  	return view('Admin/Goods/edit',['good'=>$good,'types'=>$types]);
	  }


	  /*
	  	执行修改
	   */
	  public function postUpdate(Request $request)
	  {
		  	//获取到修改的参数
		  		$info = $request->except(['_token','pic','gid','status','gdesc']);
		  		$gid = $request->input('gid');
		  		$data = $request->only(['status','gdesc']);
		  		
		  	//调用方法处理 上传图片
		  		$fileName = $this->getUpload($request,'gpic');
		  		if ($fileName) {
		  			$info['gpic']=$fileName; 
		  		}
		  		// dd($info);
		  	//执行修改操作
		  		$res = DB::table('shop_goods')->where('gid',$gid)->update($info);
		  		$res2 = DB::table('shop_goods_detail')->where('gid',$gid)->update($data);
		  		if ($res || $res2 ) {
		  			//修改成功
		  				return redirect('admin/goods/index')->with('success','修改成功');
		  		}else{
		  			//修改失败
		  			return back()->with('error','修改失败');
		  		}
	  }

	  /*
	  	删除操作
	   */
	  public function getDelete(Request $request)
	  {	
	  	//获取到要删除的gid
	  		$gid = $request->input('gid');
	  	//执行删除
	  		$res1 = DB::table('shop_goods')->where('gid',$gid)->delete();
	  		$res2 = DB::table('shop_goods_detail')->where('gid',$gid)->delete();
	  		$res3 = DB::table('shop_goods2_pic')->where('gid',$gid)->delete();
	  	//返回数据
	  	if ($res1 && $res2 && $res3) {
	  		echo 1;
	  	}
	  		
	  }
	  /*
	  	商品详情
	   */
	  public function getDetail(Request $request)
	  {
	  	//查询出当前商品的详细数据
	  		$info = DB::table('shop_goods_detail')->where('gid',$request->input('gid'))->first();
	  	//分配页面 分配数据
	  		return view('admin/goods/detail',['info'=>$info]);
	 	dd($info);
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
