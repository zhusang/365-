<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class coutController extends Controller
{
    
    //用户评价显示评价页面
    public function getIndex(Request $request)
    {
        //获取商品id
        $gid = $request->only(['gid','oid']);
        // 查询商品信息
        $goods = DB::table('shop_goods')->where('gid',$gid['gid'])->first();

        //查询商品信息
        return view('home.cout.index',['goods'=>$goods,'gid'=>$gid]);
    }

    //处理提交过来的数据
    public function postButton(Request $request)
    {
        //提取数据
        $cout = $request->only(['cout','miaoshu','squ','ser','spic','uid','sid','gid']);
        $oid = $request->only(['oid']);
        //处理图片
        $fileName = $this->getUpload($request,'pprice');
        
        $cout['pprice']=$fileName;
        $cout['ptime'] = time(); 
       
        
       //插入数据库
        $res = DB::table('pingjia')->insert($cout);
        //修改订单状态
        $status = ['status'=>5];
        $state = ['state'=>5];
        $status = DB::table('shop_order')->where('oid',$oid['oid'])->update($status);
        $state = DB::table('shop_detail')->where('oid',$oid['oid'])->update($state);

        //通过sid查询店铺
        $shop = DB::table('pingjia')->where('sid',$cout['sid'])->get();
        //获得数组长度
        $length = count($shop);
        //遍历数组
        $ser = '';
        $squ = '';
        $miaoshu = '';
        $spic = '';
        foreach($shop as $k=>$v)
        {
            $ser += floatval($v->ser);
            $squ += floatval($v->squ);
            $miaoshu += floatval($v->miaoshu);
            $spic += floatval($v->spic);
        }
        //获得比值
        $sers = round($ser/$length,2);
        $squs = round($squ/$length,2);
        $miaoshus = round($miaoshu/$length,2);
        $spics = round($spic/$length,2);
        //将比值压入数组  修改商铺
        $shops = ['ser'=>$sers,'squ'=>$squs,'miaoshu'=>$miaoshus,'spic'=>$spics];
        $shopss = DB::table('shop_shop')->where('sid',$cout['sid'])->update($shops);
        if($res && $status && $state){
            //修改店铺的三个比值

            return redirect('/home/order/pingjia');
        }else{
            return back();
        }
    }

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
    

        
       
}

?>