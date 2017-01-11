<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    //显示数据
    public function getIndex()
    {
    	//查询数据库
    	$types = DB::select("select *,concat(path,',',tid) as paths from shop_type order by paths");
    	foreach($types as $k=>$v)
    	{
    		$arr = explode(',',$v->path);
    		$len = count($arr)-1;
    		$types[$k]->tname = str_repeat('|-----',$len).$v->tname;
    	}
    	//解析模板分配数据到页面
    	return view('admin.type.index',['types'=>$types]);
    }

    //显示添加页面
    public function getAdd()
    {	
    	//从数据库查询数据
    	$types = DB::select("select *,concat(path,',',tid) as paths from shop_type order by paths");
    	foreach($types as $k=>$v)
    	{
    		$arr = explode(',',$v->path);
    		$len = count($arr)-1;
    		$types[$k]->tname = str_repeat('|-----',$len).$v->tname;
    	}
    	
    	return view('admin.type.add',['types'=>$types]);
    }
    //执行添加
    public function postDoadd(Request $request)
    {
    	//提取数据
    	$data = $request->only(['pid','tname','datatype']);
    	//查询父类得到父类的path
    	$type = DB::table('shop_type')->where('tid',$data['pid'])->first();
        if($type){

        	//拼接添加类的path
        	$data['path'] = $type->path.','.$type->tid;
        }else{
            $data['path']=0;
        }
        
    	//执行插入数据库
    	$res = DB::table('shop_type')->insert($data);
    	if($res){
    		return redirect('/admin/type/index')->with('success','添加成功');
    	}else{
    		return back()->with('error','添加失败');
    	}
    }

    //删除分类
    public function getDelete(Request $request)
    {	
    	//提取数据
    	$tid = $request->all();
    	//判断下边是否有子类
    	$res = DB::table('shop_type')->where('pid',$tid)->get();
    	//判断下边是否有商品
			//思路  通过tid去查商品表  有值不删  无值删
    	if($res){
    		return redirect('/admin/type/index')->with('error','删除失败,下边有子类');
    	}else{
    		$del = DB::table('shop_type')->where('tid',$tid)->delete();
    		echo $del;
    	}

    }

    //添加子类
    public function getZadd(Request $request)
    {
    	$tid = $request->all();
    	//从数据库查询数据
    	$types = DB::table('shop_type')->where('tid',$tid)->first();

    	return view('admin.type.zadd',['types'=>$types]); 
    }

    //修改
    public function getUpdate(Request $request)
    {
    	//提取数据
    		$tid = $request->all();
    	// 查询数据库
    		$type = DB::table('shop_type')->where('tid',$tid)->first();
    	//解析模板  分配数据
    		return view('admin.type.edit',['type'=>$type]);
    }

    //执行修改
    public function postDoupdate(Request $request)
    {
    	$tname = $request->only(['tid','tname','datatype']);
    	//执行修改
    	$res = DB::table('shop_type')->where('tid',$tname['tid'])->update($tname);
    	if($res){
    		return redirect('admin/type/index')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改成功');
    	}

    }
}
