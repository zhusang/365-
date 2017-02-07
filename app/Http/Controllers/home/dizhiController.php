<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class dizhiController extends Controller
{
	/*
		用户地址信息展示
	*/
    public function getIndex()
    {   
        // 查出当前登录的用户
        $uid = session('uid');
        //查找
        $user = DB::table('shop_users')->where('uid',$uid)->first();


        //根据uid查出该用户的地址信息
        $addr = DB::table('shop_user_addr')->where('uid',$uid)->get();
        // dd($addr);
        foreach ($addr as $k => $v) {
            // $v->province = explode('||',$v->address);
            $v->province = explode('||',$v->address)[0];
            $v->city = explode('||',$v->address)[1];
            $v->county = explode('||',$v->address)[2];
        }
        // dd($addr);

    	//解析出显示地址的页面
        return view('home.dizhi.index',['user'=>$user,'addr'=>$addr]);
    }
    /*
        进行地址的添加
    */
    public function postDizhi(Request $request)
    {
        //获取当前用户的$uid
        // 查出当前登录的用户
        $uid = session('uid');
        //查找
        $user = DB::table('shop_users')->where('uid',$uid)->first();
        
        //接收到的数据
        // dd($request->all());
        $data = $request->only(['emailcode','street','rec','recphone']);
        //获取地址
        $province = $request->input('province');
        $city = $request->input('city');
        $county = $request->input('county');
        //拼接地址
        $data['address'] = $province.'||'.$city.'||'.$county;
        $data['uid'] = $uid;
        // dd($data);
        $res = DB::table('shop_user_addr')->where('uid',$uid)->insert($data);
        if($res){
            return back();
        }else{
            return back();
        }
    }

    /*
		接受ajax改变默认地址
    */
	public function getStatus(Request $request)
	{
		$data['status'] = $request->input('a');
		$aid = $request->input('aid');
		$uid = $request->input('uid');

		// dd($data);
		DB::table('shop_user_addr')->where('uid',$uid)->update(['status'=>0]);
		$res = DB::table('shop_user_addr')->where('aid',$aid)->update($data);
		if($res){
			echo 1;
		}else{
			echo 0;
		}
	}
	/*删除地址*/
	public function getDelete(Request $request)
	{
		$aid = $request->input('aid');

		$res = DB::table('shop_user_addr')->where('aid',$aid)->delete();
		if($res){
			echo 1;
		}else{
			echo 0;
		}
	}

    //接受ajax查询数据
    public function getAddr(request $request)
    {
        //接受过来的地址id
        $id = $request->input('id');
        // 查询数据
        $addr = DB::table('shop_user_addr')->where('aid',$id)->first();
        // dd($addr);
        echo json_encode($addr);
    }
    //接受改变后的数据
    public function postUpdate(Request $request)
    {
    
        //接收到的数据
        // dd($request->all());
        $data = $request->only(['emailcode','street','rec','recphone']);
        //获取地址
        $province = $request->input('province');
        $city = $request->input('city');
        $county = $request->input('county');
        //拼接地址
        $data['address'] = $province.'||'.$city.'||'.$county;
        // dd($data);
        // 获得你的aid
        $aid = $request->input('aid');

        $res = DB::table('shop_user_addr')->where('aid',$aid)->update($data);
        if($res){
            return back();
        }else{
            return back();
        }
    }
}