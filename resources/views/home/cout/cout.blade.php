@extends('home.order.layout')

@section('tttt')

    <div class="mu_content_wrap">
    @if($users)
    @if($users[0]->status ==4)

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
                    <ul class="ui-tags-list clearfix">  <li class="ui-tags-item"> <img class="ui-tag-pic" src="http://s7.mogujie.com//p1/160114/idid_ifrtqmrqmzswenrrgyzdambqhayde_18x18.png" alt=""> <div class="ui-tag-text ui-hide"> <a class="ui-tag-link" href="">72小时发货</a> <span class="ui-icon-arrow"></span> </div> </li>  <li class="ui-tags-item"> <img class="ui-tag-pic" src="http://s7.mogujie.com//p1/160114/idid_ifrtkztgmyyggnrrgyzdambqhayde_18x18.png" alt=""> <div class="ui-tag-text ui-hide"> <a class="ui-tag-link" href="">7天无理由退货</a> <span class="ui-icon-arrow"></span> </div> </li>  </ul>  </div> </td>

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
      @else
      <div id="orderWrap"><div class="order-list-empty clearfix"> <div class="empty-icon fl"></div> <div class="empty-content fl"> <h5 class="empty-title">  <p>哎呀，此状态下没有待评价的订单！</p>  </h5></div></div></div>

                    
             
    @endif
    @else
      <div id="orderWrap"><div class="order-list-empty clearfix"> <div class="empty-icon fl"></div> <div class="empty-content fl"> <h5 class="empty-title">  <p>哎呀，此状态下没有待评价的订单！</p>  </h5></div></div></div>
    @endif
  </div>
  
  </div>

</div>
  </div>

  @endsection

  @section('js')
    <script type="text/javascript">
        //对左边栏的鼠标移入移出事件
        $('.mu_nav').mouseover(function()
        {
            $(this).addClass('mu_expand');
        })

         $('.mu_nav').mouseout(function()
        {
            $(this).removeClass('mu_expand');
        })
    



    </script>
  @endsection
