<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class linkController extends Controller
{
    /*
        友情链接列表
    */
    public function getIndex(Request $request)
    {
        
            $link = DB::table('shop_link')->get();
        

        // dd($link);
        return view('admin.link.index',['link'=>$link]);
    }

    /*
		显示添加友情链接的页面
    */
	public function getAdd()
    {
    	return view('admin.link.add');
    }
	/*
		执行添加
	*/
	public function postInsert(Request $request)
    {
        
        $data = $request->only(['name','url']);

        // 执行添加
        $res = DB::table('shop_link')->insert($data);
        if($res){
            return redirect('/admin/link')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
    /*
        显示修改页面
    */
    public function getEdit(Request $request)
    {
        //获取传来的id
        $id = $request->input('id');
        //查询本条数据
        $link = DB::table('shop_link')->where('id',$id)->first();


        return view('admin.link.edit',['link'=>$link]);
    }
    /*
        完成修改
    */
    public function postUpdate(Request $request)
    {
        //获取到改后的内容
        // dd($request->all());
        $data = $request->only(['name','url']);
        $id = $request->input('id');
        $res = DB::table('shop_link')->where('id',$id)->update($data);
        if($res){
            return redirect('/admin/link')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }
    /*
        完成删除操作
    */
    public function getDelete(Request $request)
    {
        //接收ID
        $id = $request->input('id');
        
        // dd($id);
        //删除这个用户    
        $res = DB::table('shop_link')->delete($id);
        
        echo $res;
    }
    public function getStatus(Request $request)
    {
        // dd($request->all());
        //获取过来的值
        $data['status'] = $request->input('status');
        $id = $request->input('id');
        //修改状态
        $res = DB::table('shop_link')->where('id',$id)->update($data);
        echo $res;
    }   
}
