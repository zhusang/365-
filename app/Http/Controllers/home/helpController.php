<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class helpController extends Controller
{
	/*
		客户服务搜索
	*/
    public function getIndex()
    {
        
        return view('home.help.index');
    }

    /*
        搜索主页
    */
    public function getFind(Request $request)
    {
        // dd($request->all());
        //得到搜索的关键词
        $seach = $request->input('seach');
        // 去查找表中数据
        $help = DB::table('shop_help_text')
            ->join('shop_help', 'shop_help.id', '=', 'shop_help_text.cid')
            ->select('shop_help.*', 'shop_help_text.*')
            ->where('name','like','%'.$seach.'%')
            ->get();
        // dd($help);
        // 统计数组长度
        $len = count($help);
        // dd($len);
        $types = self::getZiLei(0);
        // 解析到页面
        return view('home.help.find',['types'=>$types,'seach'=>$seach,'len'=>$len,'help'=>$help]);
    }

    /*
        常见问题列表遍历
    */
    public function getFaqlist(Request $request)
    {
        $id = $request->input('id');
        // 去查找表中所有数据
        $help = DB::table('shop_help')->where('id',$id)->first();
        // dd($help);
        
        $types = self::getZiLei(0);
        // dd($types);
        return view('home.help.faqlist',['types'=>$types,'help'=>$help]);
    }
    /*
        显示问题解决方案
    */
    public function getFaqdetail(Request $request)
    {
        $id = $request->input('id');
        $text = DB::table('shop_help_text')
            ->join('shop_help', 'shop_help.id', '=', 'shop_help_text.cid')
            ->select('shop_help.*', 'shop_help_text.*')
            ->where('shop_help_text.cid',$id)
            ->first();
        // dd($text);
        $types = self::getZiLei(0);
        // dd($types);
        return view('home.help.faqdetail',['types'=>$types,'text'=>$text]);
    }


     /*
      定义方法循环遍历所有的子类
      */
          public static function getZiLei($id){
            
                 //拿当前的id 查询所有的子分类
                  $info = DB::table('shop_help')->where('zid',$id)->get();
                  // dd($info);
                   $data = [];
                  foreach ($info as $k => $v) {
                    $v->sub = self::getZiLei($v->id);
                    $data[] = $v;
                    // dd($v);
                  }
                  // dd($data);
                  return $data;
          }

}