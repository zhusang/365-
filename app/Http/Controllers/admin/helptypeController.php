<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class helptypeController extends Controller
{
    //显示数据
    public function getIndex()
    {
    	//查询数据库
    	$types = DB::select("select *,concat(path,',',id) as paths from shop_help order by paths");
    	foreach($types as $k=>$v)
    	{
    		$arr = explode(',',$v->path);
    		$len = count($arr)-1;
    		$types[$k]->name = str_repeat('|-----',$len).$v->name;
    	}
    	//解析模板分配数据到页面
    	return view('admin.help.index',['types'=>$types]);
    }

    //显示添加页面
    public function getAdd()
    {	
    	//从数据库查询数据
    	$types = DB::select("select *,concat(path,',',id) as paths from shop_help order by paths");
        // dd($types);
    	foreach($types as $k=>$v)
    	{
    		$arr = explode(',',$v->path);
    		$len = count($arr)-1;
    		$types[$k]->name = str_repeat('|-----',$len).$v->name;
    	}
    	
    	return view('admin.help.add',['types'=>$types]);
    }
    

    //执行添加
    public function postDoadd(Request $request)
    {
        // dd($request->all());    
    	//提取数据
    	$data = $request->only(['zid','name']);
    	//判断tname和datatype是否为空 

    	if($data['name']){
    		//查询父类得到父类的path
	    	$type = DB::table('shop_help')->where('id',$data['zid'])->first();
	        if($type){

	        	//拼接添加类的path
	        	$data['path'] = $type->path.','.$type->id;
	        }else{
	            $data['path']=0;
	        }
	    // dd($data);
	    	//执行插入数据库
	    	$res = DB::table('shop_help')->insert($data);
	    	if($res){
                // dd('成功');
	    		return redirect('/admin/helptype')->with('success','添加成功');
	    	}else{
                // dd('失败');
	    		return back()->with('error','添加失败');
	    	}
    	}else{
    		return redirect('/admin/helptype')->with('error','所有字段都不能为空');
    	}
    	
    }

    //删除分类
    public function getDelete(Request $request)
    {	
    	//提取数据
    	$id = $request->all();
    	//判断下边是否有子类
    	$res = DB::table('shop_helphelp')->where('zid',$id)->get();
    	//判断下边是否有商品
			//思路  通过tid去查商品表  有值不删  无值删
    	if($res){
    		return redirect('/admin/helptype/index')->with('error','删除失败,下边有子类');
    	}else{
    		$del = DB::table('shop_help')->where('id',$id)->delete();
    		echo $del;
    	}

    }

    //添加子类
    public function getZadd(Request $request)
    {
    	$id = $request->all();
    	//从数据库查询数据
    	$types = DB::table('shop_help')->where('id',$id)->first();

    	return view('admin.help.zadd',['types'=>$types]); 
    }

    //修改
    public function getUpdate(Request $request)
    {
    	//提取数据
    		$id = $request->all();
    	// 查询数据库
    		$type = DB::table('shop_help')->where('id',$id)->first();
    	//解析模板  分配数据
    		return view('admin.help.edit',['type'=>$type]);
    }

    //执行修改
    public function postDoupdate(Request $request)
    {
    	$name = $request->only(['id','name']);
    	//执行修改
    	$res = DB::table('shop_help')->where('id',$name['id'])->update($name);
    	if($res){
    		return redirect('admin/helptype')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改成功');
    	}

    }
}
