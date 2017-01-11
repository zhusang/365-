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
                    <form action="http://search.mogujie.com/search" method="get" id="top_nav_form">
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
        <div class="mu_wrap wrap clearfix">
  <div id="navListWrap">
  <div class="mu_nav_wrap"> 
  <div class="mu_nav_info"> 
  <div class="mu_nav_info_avatar"> 
  <div class="mu_nav_info_avatar_mk"></div> 
  <img src="/ordercss/04.jpg" width="100" height="100"> 
  </div>  <p class="mu_nav_info_uname">{{$user->uname}}</p>  
  </div> <div class="mu_nav mu_expand">
   <div class="mu_title">我的订单</div> 
   <ul class="mu_nav_item"> 
       <li> <a href="/home/order/index?uid={{session('uid')}}">全部订单</a> </li> 
       <li class="c"> 
       <a href="/home/order/index?uid={{session('uid')}}"> 待付款 <i id="unpaidOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li> <a href=""> 待收货 <i id="unReceivedOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li> <a href=""> 待评价 <i id="waitingRateOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
       <li> <a href=""> 退货退款 <i class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> <!-- 新增，stage=8 回收站订单 --> 
       <li> <a href="/home/order/hsindex?uid={{$users[0]->uid}}"> 订单回收站 <i id="recyleOrder" class="mu_nav_count"><i class="mu_nav_count_arw"></i></i> </a> </li> 
   </ul> </div> 
   <div class="mu_nav"> <div class="mu_title"><a href="">我的钱包</a></div> </div>
    <div class="mu_nav"> <div class="mu_title"><a href="">我的理财</a></div> </div> 
    <div class="mu_nav"> <div class="mu_title">优惠特权</div> 
    <ul class="mu_nav_item" id="JCouponList"> 
        <li><a href="">会员中心</a></li> <!-- <li ><a href="http://www.mogujie.com/trade/credit/modouv2/index">我的蘑豆</a></li> --> 
        <li><a href="">店铺优惠券</a></li>
        <li><a href="">现金券</a></li>
    </ul> </div> 
    <div class="mu_nav"> 
    <div class="mu_title">
        <a href="">地址管理</a></div> </div> 
    <div class="mu_nav"> 
    <div class="mu_title">安全设置</div> 
    <ul class="mu_nav_item"> 
        <li><a href="">设置密码</a></li> 
        <li><a href="">绑定手机</a></li> 
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
    
   
  <div id="orderWrap">
   <div class="order-list"> 
   
   @foreach($users as $k=>$v)
   
   @if($v->state == 0)
    <div class="order-section unpaid"  data-payid="{{$v->oid}}"> 
    <input type="hidden" value='{{$v->did}}' id='oid'>
     <table class="order-table"> 
      <tbody> 
       <tr class="order-table-header"> 
        <td colspan="7"> 
         <div class="order-info fl"> 
          <span class="no"> 订单编号:<span class="order_num">{{$v->oid}}</span> </span> 
          <span class="deal-time"> 成交时间:<?php echo date('Y-m-d H:i:s',$v->otime); ?> </span> 
          <a class="shop-name" target="_blank" href="http://shop.mogujie.com/14iz4"> 店铺:<?php echo $shop[$v->sid]->sname; ?> <span> &nbsp;</span> </a> 
         </div> <a href="javascript:;" class="mogutalk_btn" data-bid="14iz4#28"> <span class="icon icon-contact">联系商家</span> </a> </td> 
       </tr> 
       <tr class="order-table-item last"> 
        <td class="goods"> <a class="pic" href="/home/goods/index?gid={{$v->gid}}" title="查看宝贝详情" hidefocus="true" target="_blank"> <img src="{{$v->gpic}}" alt="查看宝贝详情" width="70" /> </a> 
         <div class="desc"> 
          <p> <a href="/home/goods/index?gid={{$v->gid}}">{{$v->gname}}</a> <a class="snapshot" href="http://www.mogujie.com/trade/order/snap?orderId=1neoxx6ia4" target="_blank">[交易快照]</a> </p> 
          <p>颜色：白色</p> 
          <p>尺码：XL</p> 
          <ul class="ui-tags-list clearfix"> 
           <li class="ui-tags-item"> <img class="ui-tag-pic" src="/ordercss/idid_ifrtqmrqmzswenrrgyzdambqhayde_18x18.png" alt="" /> 
            <div class="ui-tag-text ui-hide"> 
             <a class="ui-tag-link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=893">72小时发货</a> 
             <span class="ui-icon-arrow"></span> 
            </div> </li> 
           <li class="ui-tags-item"> <img class="ui-tag-pic" src="/ordercss/idid_ifrtkztgmyyggnrrgyzdambqhayde_18x18.png" alt="" /> 
            <div class="ui-tag-text ui-hide"> 
             <a class="ui-tag-link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=892">7天无理由退货</a> 
             <span class="ui-icon-arrow"></span> 
            </div> </li> 
          </ul> 
         </div> </td> 
        <td class="price"> <p class="price-old">{{$v->price}}</p> <p>{{$v->tprice}}</p> </td> 
        <td class="quantity">{{$v->buycnt}}</td> 
        <td class="aftersale"> </td> 
        <td class="total" rowspan="1"> <p class="total-price">￥ {{$v->tprice*$v->buycnt}}</p> <p> (包邮) </p> </td> 
        
        <td class="status" rowspan="1"> <p class="wait_pay liujing">待付款</p> <a href="/home/detail/index?oid={{$v->oid}}" class="order-link go-detail-link" target="_blank">订单详情</a> </td> 
        <td class="other" rowspan="1"><a href='/home/order/callback?did={{$v->did}}' class='delete'></a></td> 
       </tr> 
       <tr class="order-table-footer"> 
        <td colspan="4"> 
         <ul> 
          <li> <p class="timer" data-time="86225">订单失效时间:
          <?php 
                 $time = $v->otime+86400; 
           echo date('Y-m-d H:i:s',$time); ?></p>
          </li> 
          <li> <a class="order-link order-cancel" href="javascript:;" data-payid="33018460009802">取消订单</a> </li> 
         </ul> </td> 
        <td class="total"> <span class="sub">总计：</span>￥{{$v->tprice*$v->buycnt}}</td> 
        <td class="status"> <p class="wait_pay">等待付款</p> </td> 
        <td class="other"> <a class="order-btn primary order-pay" target="_blank" href="/home/pay/index?oid={{$v->oid}}" class='alert'>付款</a> </td> 
       </tr> 
      </tbody> 
     </table> 
    </div>
     @else
     <div class="order-section unpaid finished" data-payid="{{$v->oid}}"> 
     <table class="order-table"> 
      <tbody> 
       <tr class="order-table-header"> 
        <td colspan="7"> 
         <div class="order-info fl"> 
          <span class="no"> 订单编号:<span class="order_num">{{$v->oid}}</span> </span> 
          <span class="deal-time"> 成交时间:<?php echo date('Y-m-d H:i:s',$v->otime); ?> </span> 
          <a class="shop-name" target="_blank" href="http://shop.mogujie.com/14iz4"> 店铺:<?php echo $shop[$v->sid]->sname; ?><span> &nbsp;</span> </a> 
         </div> <a href="javascript:;" class="mogutalk_btn" data-bid="14iz4#28"> <span class="icon icon-contact">联系商家</span> </a> </td> 
       </tr> 
       <tr class="order-table-item last"> 
        <td class="goods"> <a class="pic" href="/home/goods/index?gid={{$v->gid}}" title="查看宝贝详情" hidefocus="true" target="_blank"> <img src="{{$v->gpic}}" alt="查看宝贝详情" width="70" /> </a> 
         <div class="desc"> 
          <p> <a href="/home/goods/index?gid={{$v->gid}}">{{$v->gname}}</a> <a class="snapshot" href="http://www.mogujie.com/trade/order/snap?orderId=1neoxx6ia4" target="_blank">[交易快照]</a> </p> 
          <p>颜色：白色</p> 
          <p>尺码：XL</p> 
          <ul class="ui-tags-list clearfix"> 
           <li class="ui-tags-item"> <img class="ui-tag-pic" src="/ordercss/idid_ifrtqmrqmzswenrrgyzdambqhayde_18x18.png" alt="" /> 
            <div class="ui-tag-text ui-hide"> 
             <a class="ui-tag-link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=893">72小时发货</a> 
             <span class="ui-icon-arrow"></span> 
            </div> </li> 
           <li class="ui-tags-item"> <img class="ui-tag-pic" src="/ordercss/idid_ifrtkztgmyyggnrrgyzdambqhayde_18x18.png" alt="" /> 
            <div class="ui-tag-text ui-hide"> 
             <a class="ui-tag-link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=892">7天无理由退货</a> 
             <span class="ui-icon-arrow"></span> 
            </div> </li> 
          </ul> 
         </div> </td> 
        <td class="price"> <p class="price-old">{{$v->price}}</p> <p>{{$v->tprice}}</p> </td> 
        <td class="quantity">{{$v->buycnt}}</td> 
        <td class="aftersale"></td> 
        <td class="total" rowspan="1"> <p class="total-price">￥ {{$v->tprice*$v->buycnt}}</p> <p> (包邮) </p> </td> 
        
        <td class="status" rowspan="1"> <p class="wait_pay liujing">订单取消</p> <a href="/home/detail/index?oid={{$v->oid}}" class="order-link go-detail-link" target="_blank">订单详情</a> </td> 
        <td class="other" rowspan="1"><a href='/home/order/callback?did={{$v->did}}' class='alert'>删除订单</a>

        </td> 
       </tr> 
       
      </tbody> 
     </table> 
    </div>
    @endif
    
    @endforeach
    
   </div>
   <div id="paginator-list"></div>
  </div>
  
  </div>

</div>
  </div>

  @endsection
  @section('js')
    <script type="text/javascript">
    //删除弹选框
    $('.alert').click(function()
    {
      if(confirm('你确定要将这件宝贝移入回收站吗'))
      {

      }else{
        return false;
      }
      
    })

        //对左边栏的鼠标移入移出事件
        $('.mu_nav').mouseover(function()
        {
            $(this).addClass('mu_expand');
        })

         $('.mu_nav').mouseout(function()
        {
            $(this).removeClass('mu_expand');
        })

         //取消订单
         $('.order-link').click(function()
         {
            
           //修改代付款文本为取消订单
            $(this).parent().parent().parent().parent().prev().find('.status').find('.liujing').html('取消订单');
            //给td添加文本
            $(this).parent().parent().parent().parent().prev().find('.status').next().find('a').html('删除订单');
            

            //获得oid
            var did = $(this).parent().parent().parent().parent().parent().parent().parent().find('#oid').val();
            var int = $(this);
            
            //发送ajax修改数据库中state的状态为1
            $.get('/home/order/update',{state:1,did:did},function(data)
            {
                if(data){
                    //修改上边边框颜色
                    int.parent().parent().parent().parent().parent().parent().parent().addClass('finished');
                    //移出最下边的td
                    int.parent().parent().parent().parent().remove();
                }else{
                  $(this).parent().parent().parent().parent().prev().find('.status').next().find('a').html('');
                }
            },'json');
         })

         


    </script>
  @endsection
