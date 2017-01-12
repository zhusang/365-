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
                    <form action="" method="get" id="top_nav_form">
                        <input data-tel="search_book" name="q" class="ts_txt fl" data-def="毛衣" value="百搭保暖毛衣" autocomplete="off" def-v="百搭保暖毛衣" type="text">
                        <input value="搜  索" class="ts_btn" type="submit">
                        <input name="t" value="bao" id="select_type" type="hidden">
                        <input name="ptp" value="1.vfGie.0.0.F1H15" type="hidden">
                    </form>
                    <div class="top_search_hint"></div>
                </div>

                <div class="ts_hotwords"><a rel="nofollow" class="ts_hotword" href="http://list.mogujie.com/s?q=%E6%AF%9B%E8%A1%A3&amp;from=hotword">韩版毛衣</a><a rel="nofollow" class="ts_hotword" href="http://list.mogujie.com/s?q=%E7%9F%AD%E9%9D%B4&amp;from=hotword">短靴</a><a rel="nofollow" class="ts_hotword" href="http://list.mogujie.com/s?q=%E7%94%B7%E5%A3%AB%E5%A4%96%E5%A5%97&amp;from=hotword">男士外套</a><a rel="nofollow" class="ts_hotword" href="http://list.mogujie.com/s?q=%E6%96%B0%E6%AC%BE%E5%8C%85%E5%8C%85&amp;from=hotword">新款包包</a><a rel="nofollow" class="ts_hotword" href="http://list.mogujie.com/s?q=%E7%BE%BD%E7%BB%92%E6%9C%8D&amp;from=hotword">羽绒服</a><a rel="nofollow" class="ts_hotword" href="http://list.mogujie.com/s?q=%E6%89%93%E5%BA%95%E8%A3%A4&amp;from=hotword">打底裤</a><a rel="nofollow" class="ts_hotword" href="http://list.mogujie.com/s?q=%E7%9D%A1%E8%A1%A3&amp;from=hotword">睡衣</a><a rel="nofollow" class="ts_hotword" href="http://list.mogujie.com/s?q=%E8%A1%8C%E6%9D%8E%E7%AE%B1&amp;from=hotword">行李箱</a><a rel="nofollow" class="ts_hotword" href="http://list.mogujie.com/s?q=%E5%A5%97%E8%A3%85&amp;from=hotword">套装</a></div>
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
   <div id="body" class="fm960"> 
    <div class="muorder"> 
     <div class="mu_wrap"> 
      <h2 class="mu_head">订单详情</h2> 
      <div class="mu_d_lines mu_d_mrgin"> 
       <span class="mw">订单编号: {{$order->oid}}</span> 
       <span class="mw">当前状态：<span class="cancel">{{$state[$detail->state]}}</span></span> 
      </div> 
      <div class="md_process mu_d_mrgin"> 
       <!-- 预售 --> 
       <!-- 普通 --> 
       <div class="md_process_wrap md_process_step1"> 
        <div class="md_process_sd"></div> 
        <i class="md_process_i md_process_i1"> 1 <span class="md_process_tip">提交订单</span> <span class="md_process_tip_bt"><?php echo date('Y-m-d H:i:s',$order->otime);?></span> </i> 
        <i class="md_process_i md_process_i2"> 2 <span class="md_process_tip">买家支付</span> </i> 
        <i class="md_process_i md_process_i3"> 3 <span class="md_process_tip">卖家发货</span> </i> 
        <i class="md_process_i md_process_i4"> 4 <span class="md_process_tip">确认收货</span> </i> 
        <i class="md_process_i md_process_i5"> 5 <span class="md_process_tip">评价</span> </i> 
       </div> 
      </div> 
      <div class="mu_d_info"> 
       <h5 class="mu_d_info_tit">详细信息</h5> 
       <dl class="mu_d_infolist"> 
        <dt>
         收 货 人：
        </dt> 
        <dd>
         {{$order->rec}}
        </dd> 
        <dt>
         收货地址：
        </dt> 
        <dd>
         {{$order->addr}}
        </dd> 
        <dt>
         买家留言：
        </dt> 
        <dd>
        {{$order->umsg}}
        </dd> 
        <dt>
         联系电话：
        </dt> 
        <dd>
          {{$order->tel}} 
        </dd> 
       </dl> 
      </div> 
      <div class="mu_d_orderlist mu_d_mrgin"> 
       <h5 class="mu_d_info_tit">商品清单</h5> 
       <ul class="mo_orderlist"> 
        <li class="mo_orderitem"> 
         <ul class="mo_orderitem_thlist clearfix"> 
          <li class="td_goods">商品</li> 
          <li class="td_price">单价（元）</li> 
          <li class="td_count">数量</li> 
          <li class="td_wipay">交易状态</li> 
          <li class="td_ictrl">店铺优惠</li> 
          <li class="td_afmak">全场优惠</li> 
          <li class="td_total">订单额（元）</li> 
         </ul> 
         <ul class="mo_orderitem_det clearfix"> 
          <li class="td_colrow"> 
           <ul class="td_colrow_wrap clearfix"> 
            <li class="td_goods"> 
             <div class="td_wrap txtleft"> 
              <a href="/home/goods/index?gid={{$detail->gid}}" title="{{$goods->gname}}" target="_blank"> <img src="{{$goods->gpic}}" alt="{{$goods->gname}}" class="mo_orderitem_gdimg" width="60" height="60" /> </a> 
              <p class="mo_orderitem_h mo_orderitem_gdinfo mb4"> <a href="/home/goods/index?gid={{$detail->gid}}" title="{{$goods->gname}}" target="_blank">{{$goods->gname}}</a> </p> 
              <p class="mo_orderitem_d mo_orderitem_gdinfo">颜色：图片色</p> 
              <p class="mo_orderitem_d mo_orderitem_gdinfo">尺码：均码</p> 
             </div> </li> 
            <li class="td_price"> 
             <div class="td_wrap"> 
              <p class="mu_money mu_org_money">&yen; {{$goods->price}}</p> 
              <p class="mu_money">&yen; {{$goods->tprice}}</p> 
              <p class="ui-red-packet-fee"></p> 
             </div> </li> 
            <li class="td_count"> 
             <div class="td_wrap">
              {{$detail->buycnt}}
             </div> </li> 
           </ul> </li> 
          <li class="td_wipay mo_orderitem_lfence"> 
           <div class="td_wrap"> 
            <span class="cancel">{{$state[$detail->state]}}</span> 
           </div> </li> 
          <li class="td_ictrl mo_orderitem_lfence"> 
           <div class="td_wrap"> 
           </div> </li> 
          <li class="td_afmak mo_orderitem_lfence"> 
           <div class="td_wrap"> 
           </div> </li> 
          <li class="td_total mo_orderitem_lfence"> 
           <div class="td_wrap"> 
            <span class="mo_orderitem_money_gray mu_money">&yen; {{$goods->tprice*$detail->buycnt}}</span> 
           </div> </li> 
         </ul> </li> 
       </ul> 
       <!-- 2016.11.11满返 --> 
       <div class="ui-return-cash"> 
        <div class="ui-pay"> 
         <div class="ui-pay-part clearfix"> 
          <p class="ui-content ui-pay-cash fr"> <span class="ui-title">实付金额(含蘑豆)：</span> <span class="ui-value ui-pink fr">￥{{$goods->tprice*$detail->buycnt}}</span> </p> 
         </div> 
        </div> 
       </div> 
       <dl class="mu_d_infolist"> 
        <dt>
         买家备注：
        </dt> 
        <dd>
        @if($order->umsg)
         {{$order->umsg}}
         @else
         暂无备注
         @endif
        </dd> 
       </dl> 
      </div> 
     </div> 
    </div> 
   </div>
  </div>
 

  @endsection
 
