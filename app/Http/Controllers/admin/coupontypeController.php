<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class coupontypeController extends Controller
{
    //显示数据
    public function getIndex()
    {
    	//查询数据库
        $coupon = DB::table('coupon_types')->get();
        
        //解析模板  分配数据
        return view('admin.coupon.index',['coupon'=>$coupon]);
    	
    }

    //添加分类
    public function getAdd()
    {
    	return view('admin.coupon.add');
    }

    //执行添加
    public function postDoadd(Request $request)
    {
        //提取类型
        $ctname = $request->only(['ctname','money']);

        //插入数据库
        $res = DB::table('coupon_types')->insert($ctname);

        if($res){
            return redirect('/admin/coupontype/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    //修改
    public function getXiugai(Request $request)
    {
        //提取数据
        $shuju = $request->only(['cid','ctname']);

        //修改数据库
        $res = DB::table('coupon_types')->where('cid',$shuju['cid'])->update($shuju);

        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    //删除
    public function getDelete(Request $request)
    {
        //提取数据
        $cid = $request->only(['cid']);
        //删除数据
        $res = DB::table('coupon_types')->where('cid',$cid)->delete();

        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    //修改页面
    public function getEdit(Request $request)
    {
        $cid = $request->only(['cid']);
        $res = DB::table('coupon_types')->where('cid',$cid)->first();
        return view('admin.coupon.edit',['res'=>$res]);
    }

    //自行修改
    public function postUpdate(Request $request)
    {
        $cou = $request->only(['cid','ctname','money']);

        $res = DB::table('coupon_types')->where('cid',$cou['cid'])->update($cou);

        if($res){
            return redirect('/admin/coupontype/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }

}
