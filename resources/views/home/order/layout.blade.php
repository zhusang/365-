@extends('home.layout.layout')
@section('con')
<div class="promotionTopNavContainer"></div>
    <!-- 中间区域 -->
<!-- 中间区域 -->
<div class="header_mid clearfix">
    <div class="wrap">
        <a rel="nofollow" href="/" class="logo" title="蘑菇街首页"></a>
        <div class="normal-search-content">
            <div class="top_nav_search" id="nav_search_form"> <!--搜索框 -->
                <div class="search_inner_box clearfix">
                    <div class="selectbox" data-v="1">
                        <span class="selected">搜商品</span>
                        <ol>
                            <li class="current" data-index="bao"><a href="#">商品</a></li>
                            <li data-index="shop"><a href="#">店铺</a></li>
                        </ol>
                    </div>
                    <form action="/search" method="get" id="top_nav_form">
                        <input data-tel="search_book" name="search" class="ts_txt fl" type="text">
                        <input value="搜  索" class="ts_btn" type="submit">
                        <input name="t" value="bao" id="select_type" type="hidden">
                        <input name="ptp" value="1.vfGie.0.0.F1H15" type="hidden">
                    </form>
                    <div class="top_search_hint"></div>
                </div>

                <div class="ts_hotwords"><a rel="nofollow" class="ts_hotword" href="#">韩版毛衣</a><a rel="nofollow" class="ts_hotword" href="#">短靴</a><a rel="nofollow" class="ts_hotword" href="#">男士外套</a><a rel="nofollow" class="ts_hotword" href="#">新款包包</a><a rel="nofollow" class="ts_hotword" href="#">羽绒服</a><a rel="nofollow" class="ts_hotword" href="#">打底裤</a><a rel="nofollow" class="ts_hotword" href="#">睡衣</a><a rel="nofollow" class="ts_hotword" href="#">行李箱</a><a rel="nofollow" class="ts_hotword" href="">套装</a></div>
            </div>
        </div>
        <div class="mid_fr">
            <div class="nav_mogu_qrcode">
                <img src="/ordercss/upload_ifrdsnjugizgkn3ghezdambqmeyde_280x280.png" alt="蘑菇街客户端下载" width="70" height="70">
                <p>蘑菇街客户端</p>
            </div>
        </div>
    </div>
</div>

  <div id="body_wrap">
        <div class="mu_wrap wrap clearfix">
  <div id="navListWrap">
  <div class="mu_nav_wrap"> 
  <div class="mu_nav_info"> 
  <div class="mu_nav_info_avatar"> 
  <div class="mu_nav_info_avatar_mk"></div> 
  <img src="/ordercss/04.jpg" width="100" height="100"> 
  </div>  <p class="mu_nav_info_uname">
  </p>  
  </div> <div class="mu_nav mu_expand">
   <div class="mu_title">我的订单</div> 
   <ul class="mu_nav_item"> 
      @if($s == 0)
      <li class="" id='order'> 
       <a href="/home/order/qbdd"> 全部订单({{count($user)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li class="c" id='order'> 
       <a href="/home/order/index?uid={{session('uid')}}"> 待付款({{count($pay)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li id='order'> <a href="/home/order/dsh?uid={{session('uid')}}">待收货({{count($dsh)}}) <i id="unReceivedOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li class="" id='order'> <a href="/home/order/pingjia"> 待评价 ({{count($users)}}) <i id="waitingRateOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li id='order'> <a href="/home/order/tuhuo?uid={{session('uid')}}"> 退货退款({{count($tuhuo)}}) <i class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> <!-- 新增，stage=8 回收站订单 --> 
       <li  id='order'> <a href="/home/order/hsindex?uid={{session('uid')}}"> 订单回收站({{count($back)}}) <i id="recyleOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   </ul> </div> 
   @endif
   @if($s == 4)
   <li class="" id='order'> 
       <a href="/home/order/qbdd"> 全部订单({{count($user)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   <li class="" id='order'> 
       <a href="/home/order/index?uid={{session('uid')}}"> 待付款({{count($pay)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li id='order'> <a href="/home/order/dsh?uid={{session('uid')}}"> 待收货({{count($dsh)}}) <i id="unReceivedOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li class="c" id='order'> <a href="/home/order/pingjia"> 待评价 ({{count($users)}}) <i id="waitingRateOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li id='order'> <a href="/home/order/tuhuo?uid={{session('uid')}}"> 退货退款({{count($tuhuo)}}) <i class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> <!-- 新增，stage=8 回收站订单 --> 
       <li class='' id='order'> <a href="/home/order/hsindex?uid={{session('uid')}}"> 订单回收站({{count($back)}}) <i id="recyleOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   </ul> </div> 
   @endif
   @if($s == 1)
   <li class="" id='order'> 
       <a href="/home/order/qbdd"> 全部订单({{count($user)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   <li class="" id='order'> 
       <a href="/home/order/index?uid={{session('uid')}}"> 待付款({{count($pay)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li id='order'> <a href="/home/order/dsh?uid={{session('uid')}}"> 待收货({{count($dsh)}})  <i id="unReceivedOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li  id='order'> <a href="/home/order/pingjia"> 待评价 ({{count($users)}}) <i id="waitingRateOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li id='order'> <a href="/home/order/tuhuo?uid={{session('uid')}}"> 退货退款({{count($tuhuo)}}) <i class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> <!-- 新增，stage=8 回收站订单 --> 
       <li class="c" id='order'> <a href="/home/order/hsindex?uid={{session('uid')}}"> 订单回收站({{count($back)}}) <i id="recyleOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   </ul> </div> 
   @endif

   @if($s == 3)
   <li class="" id='order'> 
       <a href="/home/order/qbdd"> 全部订单({{count($user)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   <li class="" id='order'> 
       <a href="/home/order/index?uid={{session('uid')}}"> 待付款({{count($pay)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li class="c" id='order'> <a href="/home/order/dsh?uid={{session('uid')}}"> 待收货({{count($dsh)}})  <i id="unReceivedOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li  id='order'> <a href="/home/order/pingjia"> 待评价 ({{count($users)}}) <i id="waitingRateOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li id='order'> <a href="/home/order/tuhuo?uid={{session('uid')}}"> 退货退款({{count($tuhuo)}}) <i class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> <!-- 新增，stage=8 回收站订单 --> 
       <li   id='order'> <a href="/home/order/hsindex?uid={{session('uid')}}"> 订单回收站({{count($back)}}) <i id="recyleOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   </ul> </div> 
   @endif

   @if($s == 2)
   <li class="" id='order'> 
       <a href="/home/order/qbdd"> 全部订单({{count($user)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   <li class="" id='order'> 
       <a href="/home/order/index?uid={{session('uid')}}"> 待付款({{count($pay)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li id='order'> <a href="/home/order/dsh?uid={{session('uid')}}"> 待收货({{count($dsh)}})  <i id="unReceivedOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li  id='order'> <a href="/home/order/pingjia"> 待评价 ({{count($users)}}) <i id="waitingRateOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li class="c" id='order'> <a href="/home/order/tuhuo?uid={{session('uid')}}"> 退货退款({{count($tuhuo)}}) <i class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> <!-- 新增，stage=8 回收站订单 --> 
       <li   id='order'> <a href="/home/order/hsindex?uid={{session('uid')}}"> 订单回收站({{count($back)}}) <i id="recyleOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   </ul> </div> 
   @endif

   @if($s == 7)
   <li class="c" id='order'> 
       <a href="/home/order/qbdd"> 全部订单({{count($user)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   <li class="" id='order'> 
       <a href="/home/order/index?uid={{session('uid')}}"> 待付款({{count($pay)}}) <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li id='order'> <a href="/home/order/dsh?uid={{session('uid')}}"> 待收货({{count($dsh)}})  <i id="unReceivedOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li  id='order'> <a href="/home/order/pingjia"> 待评价 ({{count($users)}}) <i id="waitingRateOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li class="" id='order'> <a href="/home/order/tuhuo?uid={{session('uid')}}"> 退货退款({{count($tuhuo)}}) <i class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> <!-- 新增，stage=8 回收站订单 --> 
       <li   id='order'> <a href="/home/order/hsindex?uid={{session('uid')}}"> 订单回收站({{count($back)}}) <i id="recyleOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   </ul> </div> 
   @endif
   
   
    <div class="mu_nav"> <div class="mu_title">优惠特权</div> 
    <ul class="mu_nav_item" id="JCouponList"> 
        
        <li><a href="/youhui">店铺优惠券</a></li>
       
    </ul> </div> 
    <div class="mu_nav"> 
    <div class="mu_title">
        <a href="/dizhi">地址管理</a></div> </div> 
    <div class="mu_nav"> 
    <div class="mu_title">安全设置</div> 
    <ul class="mu_nav_item"> 
        <li><a href="/users/xgpwd">设置密码</a></li> 
        <li><a href="/users/sjhb">绑定手机</a></li> 
        <li><a href="">数字证书</a></li>
    </ul> </div> 
    <div class="mu_nav"> 
    <div class="mu_title">维权管理</div> 
    <ul class="mu_nav_item"> 
        <li><a href="">投诉管理</a></li> 
        <li><a href="">举报管理</a></li> 
    </ul> </div> 
    <div class="mu_nav pb40"> 
    <div class="mu_title">帐号设置</div> 
    <ul class="mu_nav_item"> 
        <li><a href="/users">基本信息</a></li> 
        <li><a href="/users/files">修改头像</a></li> 
    </ul> </div></div></div>
  <div class="mu_content_wrap">
    <div class="order-title">
        <ul class="order-title-column clearfix">
            <li class="goods">商品</li>
            <li class="price">单价(元)</li>
            <li class="quantity">数量</li>
            <li class="aftersale">售后</li>
            <li class="total">实付款(元)</li>
            <li class="status">交易状态</li>
            <li class="other">操作</li>
        </ul>
    </div>
  @section('tttt')

   @show
   @endsection
  
  
     


   
