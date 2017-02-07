@extends('home.order.layout')
<!-- ========-========================== 顶部头部和右侧导航栏 =================================== -->
 {!! App\Http\Controllers\home\IndexController::tou() !!}
<!-- ================================== 顶部头部和右侧导航栏结束 ==================================== -->
@section('tttt')
    
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
        <td class="quantity">{{$v->gcnt}}</td> 
        <td class="aftersale"> 
          <a class="order-link" href="/home/order/out?did={{$v->did}}">退款</a>
        </td> 
        <td class="total" rowspan="1"> <p class="total-price">￥ {{$v->tprice*$v->gcnt}}</p> <p> (包邮) </p> </td> 
        
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

                    <td class="price">  <p class="price-old">{{$v->price}}</p> <p>{{$v->tprice}}</p>  </td> <td class="quantity">{{$v->gcnt}}</td> <td class="aftersale">  </td>  <td class="total" rowspan="1">  <p class="total-price">￥ {{$v->tprice*$v->gcnt}}</p>   <p>  (包邮) </p>   </td> <td class="status" rowspan="1"> <p class="">待收货</p> <a href="/home/order/details?did={{$v->did}}" class="order-link go-detail-link" target="_blank">订单详情</a>  </td> 
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
    @else
    <div id="orderWrap"><div class="order-list-empty clearfix"> <div class="empty-icon fl"></div> <div class="empty-content fl"> <h5 class="empty-title">  <p>哎呀，此状态下没有对应的订单！</p>  </h5></div></div></div>
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
            

            //获得oid
            var oid = $('.order_num').html();
            var int = $(this);
            
            //发送ajax修改数据库中state的状态为1
            $.get('/home/order/update',{status:1,oid:oid},function(data)
            {
                if(data){
                    //修改上边边框颜色
                    int.parent().parent().parent().parent().parent().parent().parent().addClass('finished');
                    //移出最下边的td
                    int.parent().parent().parent().parent().remove();
                }else{
                  $(this).parent().parent().parent().parent().prev().find('.status').next().find('a').html('');
                  //修改代付款文本为取消订单
                  $(this).parent().parent().parent().parent().prev().find('.status').find('.liujing').html('待付款');

                }
            },'json');
         })

         $('.tixing').click(function()
         {
            $(this).html('已提醒商家发货');
         })


    </script>
  @endsection
