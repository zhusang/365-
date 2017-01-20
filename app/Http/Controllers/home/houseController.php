<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class houseController extends Controller
{
    //显示商铺收藏

    public function getIndex(Request $request)
    {
        //获取uid
        $uid = session('uid');
        //查询收藏的商铺
        $house = DB::table('shop_favor')->where('uid',$uid)->get();
        
       
        $shop = [];
        foreach($house as $k=>$v)
        {
            $shop[] = DB::table('shop_shop')->where('sid',$v->sid)->first();
        }
        // dd($shop);
         //遍历商铺 通过sid查询六件商品
        $goods = [];
        foreach($shop as $k=>$v)
        {
            $goods[$v->sid] = DB::table('shop_goods')->where('sid',$v->sid)->paginate(6);
        }
        
       //解析模板分配到页面
        return view('home.house.index',['shop'=>$shop,'goods'=>$goods]);
        
    }

    //添加商铺收藏
    public function getAdd(Request $request)
    {
         //获取uid
        if(session('uid')){
            $uid = session('uid');
                //获取sid
                $sid = $request->only(['sid']);
              
                //收藏时间
                $addtime = time();
                $house = ['sid'=>$sid['sid'],'uid'=>$uid,'addtime'=>$addtime];

                //插入数据库
                $res = DB::table('shop_favor')->insert($house);
                if($res){
                    echo 1;
                }else{
                    echo 0;
                }
            }else{
                echo 0;
            }
    }

    //删除收藏
    public function getDelete(Request $request)
    {
        //提取sid
        $sid = $request->only(['sid']);

        //执行删除
        $res = DB::table('shop_favor')->where('sid',$sid['sid'])->delete();

        if($res)
        {
            return redirect('/home/house/index');
        }else{
            return back();
        }
    }

    //添加商品收藏
    public function getGoodsadd(Request $request)
    {
         //获取uid
        $uid = session('uid');
            //获取sid
            $gid = $request->only(['gid']);
          //判断是否已经收藏
            $goodsss = DB::select('select * from shop_favor_goods where uid = "'.$uid.'" and gid = "'.$gid['gid'].'"');
            if($goodsss){
                 echo 0;
            }else{
                //收藏时间
                $addtime = time();
                $house = ['gid'=>$gid['gid'],'uid'=>$uid,'addtime'=>$addtime];

                //插入数据库
                $res= DB::table('shop_favor_goods')->insert($house);
                echo 1;
            }     
    }

    //显示商品收藏
    public function getGoods(Request $request)
    {
        //获取uid
        $uid = session('uid');
        //查询收藏的商铺
        $house = DB::table('shop_favor_goods')->where('uid',$uid)->get();
        
         //遍历收藏 通过gid查询商品
        $goods = [];
        foreach($house as $k=>$v)
        {
            $goods[$v->gid] = DB::table('shop_goods')->where('gid',$v->gid)->first();
        }
       //解析模板分配到页面
        return view('home.house.goods',['house'=>$house,'goods'=>$goods]);
        
    }

    //足迹
    public function getFoot(Request $request)
    {
        //获取uid
        $uid = session('uid');
        
        //通过uid去查询数据库
        $foot = DB::select('select * from shop_foot order by ftime desc');
        

        //遍历查询商品
        $goods=[];
        foreach($foot as $k=>$v)
        {
            $goods[$v->gid] = DB::table('shop_goods')->where('gid',$v->gid)->first();
        }
        $list = $request->all();
        //解析模板分配数据
        return view('home.house.foot',['foot'=>$foot,'goods'=>$goods,'list'=>$list]);
    }

    

}
