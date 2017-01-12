<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\UserInsertRequest;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    //显示数据
    public function getIndex(Request $request)
    {
    	//判断是否有查询条件
        if($request->input('keywords')){
            $shops = DB::table('shop_shop')->where('sname','like','%'.$request->input('keywords').'%')->paginate(3);
        }else{
            $shops = DB::table('shop_shop')->paginate(3);
        }
       $list = $request->all();
    	//解析模板分配数据到页面
        
    	   return view('admin.shop.index',['shops'=>$shops,'list'=>$list]);
       
    }

    //添加店铺
    public function getAdd()
    {
        //解析添加页面
        return view('admin.shop.add');
    }

    //执行添加
    public function postDoadd(Request $request)
    {   
        //表单验证
        $this->validate($request,[
                'sname'=>'required',
                'slogo'=>'required',
                'sint'=>'required',
            ],[
                'sname.required'=>'商铺名不能为空',
                'slogo.required'=>'商铺logo不能为空',
                'sint.required'=>'商铺介绍不能为空',
            ]);
        //提取数据
        $shop = $request->only(['sname','slogo','sint']);
        
        $shop['slogo'] = $this->upload($request,'slogo');
        //执行插入
        $res = DB::table('shop_shop')->insert($shop);
        if($res){
            return redirect('admin/shop/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
        
    }
    //图片处理函数
     private function upload($request,$filename)
    {   
        
        if($request->hasFile($filename)){
            //获取文件后缀名
            $suffix = $request->file($filename)->getClientOriginalExtension();
            //随机文件名
            $name = md5(time().rand(1,99999));
            $request->file($filename)->move('./puloads/', $name.'.'.$suffix);
            return '/puloads/'.$name.'.'.$suffix;
        }
    }
    //删除
    public function getDelete(Request $request)
    {
        //提取数据
        $sid =  $request->only(['sid']);
        $res = DB::table('shop_shop')->where('sid',$sid)->delete();

        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    //修改
    public function getEdit(Request $request)
    {   
        //提取id
        $sid = $request->all();
        //查询数据显示页面
        $shop = DB::table('shop_shop')->where('sid',$sid)->first();
        return view('admin.shop.edit',['shop'=>$shop]);
    }

    //执行修改
    public function postUpdate(Request $request)
    {
        //提取数据
        $shop = $request->only(['sname','sid','sint',]);

        //判断是否有图片上传
        if($request->hasFile('slogo'))
        {
            $data['slogo']=$this->upload($request,'slogo');
        }
        //执行修改
        $res = DB::table('shop_shop')->where('sid',$shop['sid'])->update($shop);
        if($res){
            return redirect('admin/shop/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }
        //店铺详情
    public function getDetails(Request $request)
    {
        //提取数据
        $sid = $request->only(['sid']);
        $a = $sid['sid'];
        

        $shop = DB::table('shop_shop')->where('sid',$a)->first();
        $shops = DB::table('shop_shop_hengfu')->where('sid',$a)->first();
        // dd($shops);
            
        //解析模板分配数据
        return view('admin.shop.details',['shop'=>$shop,'shops'=>$shops]);

    }
    
    //ajax修改文本
    public function getXiugai(Request $request)
    {
        //获取数据
        $shop = $request->all();
        
        //执行修改
        $res = DB::table('shop_shop')->where('sid',$shop['sid'])->update($shop);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    //添加图片
    public function getAddtu(Request $request)
    {
        //提取数据
        $sid = $request->only('sid');

        //解析页面 分配数据
        return view('admin.shop.addtu',['sid'=>$sid]);
    }


    //执行添加横幅图片
    public function postSpicadd(Request $request)
    {
        //提取数据
        $tu = $request->only(['sid']);
        
        
        //查询数据 看是否已上传过图片
        $file = DB::table('shop_shop_hengfu')->where('sid',$tu['sid'])->first();
        if($file){
            return back()->with('error','已经有横幅了,如要修改请到修改页面');
        }else{
            //处理图片
            $fileName = $this->Upload($request,'spic');
            if ($fileName) {
            //如果添加了图片
                $tu['spic'] = $fileName;
            }
            //执行添加
            $res = DB::table('shop_shop_hengfu')->insert($tu);
            if($res){
                return redirect('admin/shop/index')->with('success','添加成功');
            }else{
                return back()->with('error','添加失败');
            }
        }


        
    }

    //执行添加宣传图片
    public function postXpicadd(Request $request)
    {
        //提取数据
        $tu = $request->only(['sid']);

        //处理图片
        $fileName = $this->Upload($request,'xpic');
        if ($fileName) {
        //如果添加了图片
            $tu['xpic'] = $fileName;
        }
        //执行添加
        $res = DB::table('shop_shop_xc')->insert($tu);
        if($res){
            return redirect('admin/shop/index')->with('success','添加成功');
            }else{
                return back()->with('error','添加失败');
            }
    }

    //查看图片
    public function getShow(Request $request)
    {
        //提取数据
        $show = $request->only(['sid']);
        //查询数据库
        $pic = DB::table('shop_shop_xc')->where('sid',$show)->get();
        //解析模板分配数据
        return view('admin.shop.show',['pic'=>$pic]);
    }

    //删除图片
    public function getTudelete(Request $request)
    {
        //提取数据
        $id = $request->only(['id','sid']);
        //删除数据
        $res = DB::table('shop_shop_xc')->where('id',$id['id'])->delete();
        if($res){
            return redirect('admin/shop/show?sid='.$id['sid'])->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
    

}
