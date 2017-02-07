<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class helpController extends Controller
{
    // 主页显示
    public function getIndex(Request $request)
    {
        $num = $request->input('num',5);
        //判断有没有查询条件
        if ($request->input('keywords')){
           $texts = DB::table('shop_help_text')
            ->join('shop_help', 'shop_help.id', '=', 'shop_help_text.cid')
            ->select('shop_help.*', 'shop_help_text.*')
            ->where('name','like','%'.$request->input('keywords').'%')
            ->paginate($num);
        }else{
            $texts = DB::table('shop_help_text')
            ->join('shop_help', 'shop_help.id', '=', 'shop_help_text.cid')
            ->select('shop_help.*', 'shop_help_text.*')
            ->paginate($num);
        }
        // dd($texts);
        $list = $request->all();
        //解析一个模板
        return view('admin.help_text.index',['texts'=>$texts,'list'=>$list]);






        //查找数据库内所有的问题解决方案
        // $texts = DB::table('shop_help_text')->get();

        // $texts = DB::table('shop_help_text')
        //     ->join('shop_help', 'shop_help.id', '=', 'shop_help_text.cid')
        //     ->select('shop_help.*', 'shop_help_text.*')
        //     ->get();
        // // dd($texts);


        // return view('admin.help_text.index',['texts'=>$texts]);
    }


    /*
        商品添加界面
    */

    public function getAdd()
    {
        //得到编译后的分类
        $cate = $this->getCates();
        //解析页面
        return view('admin.help_text.add',['cates'=>$cate]);
    } 

    /*
        执行添加
    */
    public function postInsert(Request $request)
    {
        //获得所有的内容
        // $data = $request->all();
        // dd($data);
        $data = $request->only(['cid','text']);
        // dd($data);
        
        $res = DB::table('shop_help_text')->insert($data);
        
        if ($res) {
            return redirect('/admin/help/index')->with('success','问题解决方案添加成功');
        }else{
            return back()->with('error','问题解决方案添加失败');
        }
    }

    /*
        删除商品
    */
    public function getDelete(Request $request)
    {
        //获取id
        $id = $request->input('id');
        //执行删除
        $res = DB::table('shop_help_text')->delete($id);

        echo $res;
    }
    
    /*
        显示一个修改页面
    */
    public function getEdit(Request $request)
    {
        //获得id
        $id = $request->input('id');
        //取数据
        $text = DB::table('shop_help_text')->where('id',$id)->first();
        // dd($goods);
        //类别
        $cates = $this->getCates();
        //显示在页面
        return view('admin/help_text/edit',['text'=>$text,'cates'=>$cates]);
    }
    /*
        执行修改
    */
    public function postUpdate(Request $request)
    {
        // dd($request->all());
        //取得数据
        $data = $request->only(['cid','text']);
        //取id
        $id = $request->input('id');
        //执行修改
        $res = DB::table('shop_help_text')->where('id',$id)->update($data);
        if ($res) {
            return redirect('admin/help/index')->with('success','修改信息成功');
        }else{
            return back()->with('error','修改信息失败');
        }
    }

    /*
        封装方法完成格式化显示
    */
    private function getCates()
    {
        //获取
        $cates = DB::select("select *,concat(path,',',id) as paths from shop_help order by paths");
        foreach ($cates as $k => $v){
            $arr = explode(',',$v->paths);
            $res = count($arr)-1;
            $cates[$k]->name = str_repeat('|---', $res).$v->name;
        }
        // dd($cates);
        return $cates;
    }
}
