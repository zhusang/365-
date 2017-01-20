@extends('home.order.layout')

@section('tttt')
	<div class="col-lg-3 col-lg-offset-4">
      @if(session('error'))
          <div style='width:110px;height:40px;background-color:red;margin:40px auto;font-size:25px' class='jcj'>
              {{session('error')}}
          </div>
      @endif
  </div>
   @if($pay)
  <div id="orderWrap">
   <div class="order-list"> 
   
   @foreach($pay as $k=>$v)

   <input type="hidden" value='{{$v->did}}' id='did'>
   @if($v->state == 0)
    <div class="order-section unpaid"  data-payid="{{$v->oid}}"> 
    <input type="hidden" value='{{$v->did}}' id='oid'>
     <table class="order-table"> 
      <tbody> 
       <tr class="order-table-header"> 
        <td colspan="7"> 
        <input type="hidden" value='{{$v->oid}}' class='input'>
         <div class="order-info fl"> 
          <span class="no"> 订单编号:<span class="order_num">{{$v->oid}}</span> </span> 
          <span class="deal-time">成交时间:<?php echo date('Y-m-d H:i:s',$v->otime); ?> </span> 
          <a class="shop-name" target="_blank" href=""> 店铺:<?php echo $v->sname; ?> <span> &nbsp;</span> </a> 
         </div> <a href="javascript:;" class="mogutalk_btn" data-bid="14iz4#28"> <span class="icon icon-contact">联系商家</span> </a> </td> 
       </tr> 
       <tr class="order-table-item last"> 
        <td class="goods"> <a class="pic" href="/home/goods/index?gid={{$v->gid}}" title="查看宝贝详情" hidefocus="true" target="_blank"> <img src="{{$v->gpic}}" alt="查看宝贝详情" width="70" /> </a> 
         <div class="desc"> 
          <p> <a href="/home/goods/index?gid={{$v->gid}}">{{$v->gname}}</a> <a class="snapshot" href="/home/order/phone?gid={{$v->gid}}" target="_blank">[交易快照]</a> </p> 
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
        
        <td class="status" rowspan="1"> <p class="wait_pay liujing">待付款</p> <a href="/home/order/details?did={{$v->did}}" class="order-link go-detail-link" target="_blank">订单详情</a> </td> 
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
        <td class="other"> <a class="order-btn primary order-pay" target="_blank" href="/home/order/pay?did={{$v->did}}" class='alert'>付款</a> </td> 
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
          <a class="shop-name" target="_blank" href="http://shop.mogujie.com/14iz4"> 店铺:<?php echo $v->sname; ?><span> &nbsp;</span> </a> 
         </div> <a href="javascript:;" class="mogutalk_btn" data-bid="14iz4#28"> <span class="icon icon-contact">联系商家</span> </a> </td> 
       </tr> 
       <tr class="order-table-item last"> 
        <td class="goods"> <a class="pic" href="/home/goods/index?gid={{$v->gid}}" title="查看宝贝详情" hidefocus="true" target="_blank"> <img src="{{$v->gpic}}" alt="查看宝贝详情" width="70" /> </a> 
         <div class="desc"> 
          <p> <a href="/home/goods/index?gid={{$v->gid}}">{{$v->gname}}</a> <a class="snapshot" href="/home/order/phone?gid={{$v->gid}}" target="_blank">[交易快照]</a> </p> 
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
        
        <td class="status" rowspan="1"> <p class="wait_pay liujing">订单取消</p> <a href="/home/order/details?did={{$v->did}}" class="order-link go-detail-link" target="_blank">订单详情</a> </td> 
        <td class="other" rowspan="1"><a href='/home/order/callback?did={{$v->did}}' class='alert'>删除订单</a>

        </td> 
       </tr> 
      </tbody> 
     </table> 
    </div>
    @endif
    @endforeach
    @endif
    @if($dsh)
  <div id="orderWrap">
   <div class="order-list"> 
   
   @foreach($dsh as $k=>$v)
   @if($v->state == 3)
  
    <div class="unpaid"  data-payid="{{$v->oid}}">
   
    <div class="unpaid"  data-payid="{{$v->oid}}" style='margin-top:30px'>
    
    <input type="hidden" value='{{$v->did}}' id='oid'>
     <table class="order-table"> 
      <tbody> 
        
       <tr class="order-table-header"> 
        <td colspan="7"> 
        <input type="hidden" value='{{$v->oid}}' class='input'>
         <div class="order-info fl"> 
          <span class="no"> 订单编号:<span class="order_num">{{$v->oid}}</span> </span> 
          <span class="deal-time"> 成交时间:<?php echo date('Y-m-d H:i:s',$v->otime); ?> </span> 
          <a class="shop-name" target="_blank" href=""> 店铺:<?php echo $v->sname; ?> <span> &nbsp;</span> </a> 
         </div> <a href="javascript:;" class="mogutalk_btn" data-bid="14iz4#28"> <span class="icon icon-contact">联系商家</span> </a>

          </td> 
       </tr> 
        
      
      
       <tr class="order-table-item last"> 
        <td class="goods"> <a class="pic" href="/home/goods/index?gid={{$v->gid}}" title="查看宝贝详情" hidefocus="true" target="_blank"> <img src="{{$v->gpic}}" alt="查看宝贝详情" width="70" /> </a> 
         <div class="desc"> 
          <p> <a href="/home/goods/index?gid={{$v->gid}}">{{$v->gname}}</a> <a class="snapshot" href="/home/order/phone?gid={{$v->gid}}" target="_blank">[交易快照]</a> </p> 
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
             <a class="ui-tag-link" href="javascript:;">7天无理由退货</a> 
             <span class="ui-icon-arrow"></span> 
            </div> </li> 
          </ul> 
         </div> </td> 
        <td class="price"> <p class="price-old">{{$v->price}}</p> <p>{{$v->tprice}}</p> </td> 
        <td class="quantity">{{$v->buycnt}}</td> 
        <td class="aftersale"> 
          <a class="order-link" href="/home/order/out?did={{$v->did}}">退款</a>
        </td> 
        <td class="total" rowspan="1"> <p class="total-price">￥ {{$v->tprice*$v->buycnt}}</p> <p> (包邮) </p> </td> 
        
        <td class="status" rowspan="1"> <p class="wait_pay liujing">待收货</p> <a href="/home/order/details?did={{$v->did}}" class="order-link go-detail-link" target="_blank">订单详情</a> 
        </td> 
        <td class="other" rowspan="1"><a href='javascript:;' class='tixing'>提醒商家发货</a></td> 
       </tr> 
      
      </tbody> 
     </table> 
    </div>
   @elseif($v->state == 6)
   <div class="order-list">
        <div class="order-section" data-payid="{{$v->oid}}">
          <table class="order-table">
            <tbody>
              <tr class="order-table-header">
                <td colspan="7">
                  <div class="order-info fl">
                    
                      <span class="no"> 订单编号： 
                        <span class="order_num"> {{$v->oid}} </span> 
                      </span> 

                      <span class="deal-time"> 成交时间：<?php echo date('Y-m-d H:i:s',$v->otime);?> 
                      </span>  
                        <a class="shop-name" target="_blank" href="http://shop.mogujie.com/14m9m"> 店铺:
                          <span><?php echo $v->sname; ?></span>
                        </a>  
                  </div> 
                  <a href="javascript:;" class="mogutalk_btn" data-bid="14m9m#28"> 
                    <span class="icon icon-contact">联系商家</span>
                  </a>
                </td>
              </tr>
              <tr class="order-table-item last">
                <td class="goods">
                  <a class="pic" href="/home/goods/index?gid={{$v->gid}}" title="查看宝贝详情" hidefocus="true" target="_blank">
                    <img src='<?php echo $v->gpic; ?>' alt="查看宝贝详情" width="70">
                  </a>
                  <div class="desc">
                    <p><a href="/home/goods/index?gid={{$v->gid}}" target="_blank">{{$v->gname}}
                      </a>
                      <a class="snapshot" href="/home/order/phone?gid={{$v->gid}}" target="_blank">[交易快照]</a>
                    </p>
                    <p>颜色：浅 紫</p>
                    <p>尺码：均码</p>
                    <ul class="ui-tags-list clearfix">  <li class="ui-tags-item"> <img class="ui-tag-pic" src="http://s7.mogujie.com//p1/160114/idid_ifrtqmrqmzswenrrgyzdambqhayde_18x18.png" alt=""> <div class="ui-tag-text ui-hide"> <a class="ui-tag-link" href="">72小时发货</a> <span class="ui-icon-arrow"></span> </div> </li><li class="ui-tags-item"> <img class="ui-tag-pic" src="http://s7.mogujie.com//p1/160114/idid_ifrtkztgmyyggnrrgyzdambqhayde_18x18.png" alt=""> <div class="ui-tag-text ui-hide"> <a class="ui-tag-link" href="">7天无理由退货</a> <span class="ui-icon-arrow"></span> </div> </li>  </ul>  </div> </td>

                    <td class="price">  <p class="price-old">{{$v->price}}</p> <p>{{$v->tprice}}</p>  </td> <td class="quantity">{{$v->buycnt}}</td> <td class="aftersale">  </td>  <td class="total" rowspan="1">  <p class="total-price">￥ {{$v->tprice*$v->buycnt}}</p>   <p>  (包邮) </p>   </td> <td class="status" rowspan="1"> <p class="">待收货</p> <a href="/home/order/details?did={{$v->did}}" class="order-link go-detail-link" target="_blank">订单详情</a>  </td> 
                    <td class="other" rowspan="1">
                      <ul>
                        <li>
                          <a class="order-link order-recover recover-btn order-btn" href="/home/cout/qrsh?did={{$v->did}}" data-url="/trade/order/recoveryrecycleorder" >确认收货</a> 
                        </li> 
                        <li> 
                          <a class="order-link order-delete delete-btn" href="/home/cout/delete?oid={{$v->oid}}" data-shopid="{{$v->oid}}">订单删除
                          </a> 
                        </li> 
                      </ul>   
                      <ul>      
                      </ul>  
                  </td>  
                </tr>     
            </tbody> 
          </table> 
        </div>  
        <div id="paginator-list"></div>
      </div>
    
    @endif
    @endforeach
    @endif
      @if($users)
    @if($users[0]->state ==4)

      @foreach($users as $k=>$v)
    
      <div class="order-list">
        <div class="order-section finished" data-payid="{{$v->oid}}">
          <table class="order-table">
            <tbody>
              <tr class="order-table-header">
                <td colspan="7">
                  <div class="order-info fl">
                    
                      <span class="no"> 订单编号： 
                        <span class="order_num"> {{$v->oid}} </span> 
                      </span> 

                      <span class="deal-time"> 成交时间：<?php echo date('Y-m-d H:i:s',$v->otime);?> 
                      </span>  
                        <a class="shop-name" target="_blank" href="http://shop.mogujie.com/14m9m"> 店铺:
                          <span><?php echo $v->sname; ?></span>
                        </a>  
                  </div> 
                  <a href="javascript:;" class="mogutalk_btn" data-bid="14m9m#28"> 
                    <span class="icon icon-contact">联系商家</span>
                  </a>
                </td>
              </tr>
              <tr class="order-table-item last">
                <td class="goods">
                  <a class="pic" href="/home/goods/index?gid={{$v->gid}}" title="查看宝贝详情" hidefocus="true" target="_blank">
                    <img src='<?php echo $v->gpic; ?>' alt="查看宝贝详情" width="70">
                  </a>
                  <div class="desc">
                    <p><a href="/home/goods/index?gid={{$v->gid}}" target="_blank">{{$v->gname}}
                      </a>
                      <a class="snapshot" href="/home/order/phone?gid={{$v->gid}}" target="_blank">[交易快照]</a>
                    </p>
                    <p>颜色：浅 紫</p>
                    <p>尺码：均码</p>
                    <ul class="ui-tags-list clearfix">  <li class="ui-tags-item"> <img class="ui-tag-pic" src="http://s7.mogujie.com//p1/160114/idid_ifrtqmrqmzswenrrgyzdambqhayde_18x18.png" alt=""> <div class="ui-tag-text ui-hide"> <a class="ui-tag-link" href="">72小时发货</a> <span class="ui-icon-arrow"></span> </div> </li><li class="ui-tags-item"> <img class="ui-tag-pic" src="http://s7.mogujie.com//p1/160114/idid_ifrtkztgmyyggnrrgyzdambqhayde_18x18.png" alt=""> <div class="ui-tag-text ui-hide"> <a class="ui-tag-link" href="">7天无理由退货</a> <span class="ui-icon-arrow"></span> </div> </li>  </ul>  </div> </td>

                    <td class="price">  <p class="price-old">{{$v->price}}</p> <p>{{$v->tprice}}</p>  </td> <td class="quantity">{{$v->buycnt}}</td> <td class="aftersale">  </td>  <td class="total" rowspan="1">  <p class="total-price">￥ {{$v->tprice*$v->buycnt}}</p>   <p>  (包邮) </p>   </td> <td class="status" rowspan="1"> <p class=""> 待评价 </p> <a href="/home/order/details?did={{$v->did}}" class="order-link go-detail-link" target="_blank">订单详情</a>  </td> 
                    <td class="other" rowspan="1">
                      <ul>
                        <li>
                          <a class="order-link order-recover recover-btn order-btn" href="/home/cout/index?gid={{$v->gid}}&oid={{$v->oid}}" data-url="/trade/order/recoveryrecycleorder" >评价</a> 
                        </li> 
                        <li> 
                          <a class="order-link order-delete delete-btn" href="/home/cout/delete?oid={{$v->oid}}" data-shopid="{{$v->oid}}">订单删除
                          </a> 
                        </li> 
                      </ul>   
                      <ul>      
                      </ul>  
                  </td>  
                </tr>     
            </tbody> 
          </table> 
        </div>  
        <div id="paginator-list"></div>
      </div>
     
       @endforeach     
    @endif
    @endif
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

    

        //左侧框单机事件
       var a = 1;
      $('.mu_nav').click(function(){
        if(a==1){
          $(this).addClass('mu_expand').siblings().removeClass('mu_expand');
          a = 2;
        }else{
          $(this).removeClass('mu_expand');
          a = 1;
        }
      });

         //取消订单
         $('.order-link').click(function()
         {
            
           //修改代付款文本为取消订单
            $(this).parent().parent().parent().parent().prev().find('.status').find('.liujing').html('取消订单');
            //给td添加文本
            $(this).parent().parent().parent().parent().prev().find('.status').next().find('a').html('删除订单');
            

            //获得did
            var did = $('#did').val();

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
                  int.parent().parent().parent().parent().prev().find('.status').next().find('a').html('');
                  //修改代付款文本为取消订单
                  int.parent().parent().parent().parent().prev().find('.status').find('.liujing').html('待付款');
                 alert('取消失败');

                }
            },'json');
         })

         $('.tixing').click(function()
         {
            $(this).html('已提醒商家发货');
         })


    </script>
  @endsection