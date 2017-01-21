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
		   
		   //分页
		   //获取每页显示条数
		   		$num = $request->input('num',5);
		   //判断是否有查询条件
		   		if ($request->input('gname')) {
		   			$gname = $request->input('gname');
		   			$goods = DB::table('shop_goods')->where('gname','like','%'.$gname.'%')->paginate($num);
		   		}else{
           			$goods = DB::table('shop_goods')->paginate($num);
		   		}
		   
		   	//查询出商品的所属分类是什么
		   		foreach ($goods as $k => $v) {
		   			$info = DB::table('shop_type')->where('tid',$v->tid)->first();
		   			// dd($info);
		   			$v->tname = $info->tname;
		   			//查询出商品是否为抢购商品
		   				$res = DB::table('shop_quickgoods')->where('gid',$v->gid)->first();
		   				if ($res) {
		   						//抢购商品为 quick值一
		   						$v->quick = 1;
		   					}else{
		   						//不是抢购商品 quick 值为2
		   						$v->quick = 2;
		   					}	
		   		}
		  
		   		
		   //获取所有的查询条件 为分页后翻页保持条件用
		   		$list = $request->all();

		    	 // dd($goods);
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
	  	//验证信息
	  		if (empty($request->input('tid'))) {
	  			return back()->with('error','请选择商品类型');
	  		}
	  		if (empty($request->input('sid'))) {
	  			return back()->with('error','请选择商铺');
	  		}

	  		if (empty($request->input('gname'))) {
	  			return back()->with('error','请输入商品名称');
	  		}
			
			if (empty($request->input('price'))) {
	  			return back()->with('error','请输入商品价格');
	  		}

	  		if (empty($request->input('tprice'))) {
	  			return back()->with('error','请输入商品促销价格');
	  		}

	  		if (empty($request->input('cnt'))) {
	  			return back()->with('error','请输入商品库存');
	  		}

	  		if (empty($request->input('gdesc'))) {
	  			return back()->with('error','请输入商品描述');
	  		}

	  		if (empty($request->input('gpic'))) {
	  			return back()->with('error','请上传商品图片');
	  		}


	  		
		  	//获取到所有的添加信息 除了pic 和 token
		  		$info = $request->except(['_token','pic']);
		  		$info['ctime'] = time();
		  	//调用方法处理上传的图片

	  	

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
		  	// 给店铺添加商品
		  		if(!empty($request->input('sid'))){
		  			//每次添加店铺商品加一  并且返回店铺id
		  			$ss = DB::table('shop_shop')->where('sid',$info['sid'])->increment('snum',1);
		  			// $ss = DB::select('update shop_shop snum=snum++ where sid='.$info['sid']);
		  		}
		  	// dd($ss);
		  	//执行添加数据
		  		$gid = DB::table('shop_goods')->insertGetid($info);
		  		$data['gid'] = $gid;
		  		$res = DB::table('shop_goods_detail')->insert($data);

		  		if ($res && $ss) {
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
	  		// $res3 = DB::table('shop_goods2_pic')->where('gid',$gid)->delete();
	  		// dd($res3);
	  	//返回数据
	  	if ($res1 && $res2) {
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
	  	//查询出当前商品的店铺
	  			$good = DB::table('shop_shop')
            					->join('shop_goods', 'shop_goods.sid', '=', 'shop_shop.sid')
            					->select('shop_goods.*', 'shop_shop.*')
            					->where('shop_goods.gid',$info->gid)
            					->first();
            
	  	//分配页面 分配数据
            						// dd($good);
	  		return view('admin/goods/detail',['info'=>$info,'good'=>$good]);

	  		// return view('admin/goods/detail',['info'=>$info]);

	 	
	  }

	  /*加入抢购商品*/
	  public function getQuickgoods(Request $request){
	  	//获取当前要拿到的商品id
	  		$gid = $request->input('gid');
	  	//查询当前gid是存在
	  		$info = DB::table('shop_quickgoods')->where('gid',$gid)->first();
	  	//查询抢购商品表 有几个抢购商品
	  		$quick = DB::table('shop_quickgoods')->get();
	  		if(count($quick)==7){
	  			echo 3;
	  			return;
	  		}
	  		
	  	//为空时我才添加
	  	if (empty($info)) {	  
	  		$data['gid']=$gid; 
	  	//把当前的商品加到抢购商品中
	  		$res = DB::table('shop_quickgoods')->insert($data);
	  		if ($res) {
	  			echo 1;
	  		}else{
	  			echo 2;
	  		}
	  	}else{
	  		echo 2;
	  	}
	  }


	  /*取消抢购商品*/
	  public function getQuxiao(Request $request)
	  {	
	  		//获取到要取消抢购的商品id
	  			$gid = $request->input('gid');
	  		//查询是否在抢购商品里
	  			$info = DB::table('shop_quickgoods')->where('gid',$gid)->first();
	  		//如果在抢购商品中
	  		if ($info) {
	  			//进行删除
	  				$res = DB::table('shop_quickgoods')->where('gid',$gid)->delete();
	  			//返回结果
	  				echo $res;
	  		}else{
	  			//返回结果
	  			echo 2;
	  		}

	  }

	  // 查询当前商品是否为抢购商品
	  public function getCx(Request $request)
	  {
	  		$gid = $request->input('gid');
	  		//查询是否在抢购商品里
	  			$info = DB::table('shop_quickgoods')->where('gid',$gid)->first();
	  		if ($info) {
	  			echo 1;
	  		}else{
	  			echo 2;
	  		}
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
