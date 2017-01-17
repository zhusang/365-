@extends('home.layout.layout')
@section('con')
<link media="all" href="/house/index.css" type="text/css" rel="stylesheet">
<div class="promotionTopNavContainer"></div>



  <div class="attention_nav">
    <div class="nav_container clearfix">
        <a href="javascript:;" class="attention_logo">我的收藏</a>
        <ul class="nav_ctrl">
            <li class="fst on"><a href="/home/house/index">收藏的店铺</a></li>
            <li><a href="/home/house/goods">收藏的商品</a></li>
            <li><a href="/home/house/foot">足迹</a></li>
        </ul>
    </div>
</div>
    
  <div id="body_wrap">
        <div class="wrap collection clearfix">
   
    <!-- 遍历商铺 -->
   
    <div class="attention_list">
        <div class="fixedbox">
            <div class="result_list">
                <ul class="list" id="imagewall_shop">
                 @foreach($shop as $k=>$v)
                    <li class="clearfix" data-id="14pzm">
                        <a class="hdimg" href="/shop?sid={{$v->sid}}">
                            <img src="{{$v->slogo}}" alt="">
                        </a>
                        <div class="detail">
                            <h4>{{$v->sname}}</h4>
                            <p>数量:
                                <span>{{$v->snum}}</span>
                            </p> 
                            <p>商铺价格比: {{$v->spic}}</p> 
                        </div> 
                        <a class="cancel" href="/home/house/delete?sid={{$v->sid}}">取消关注</a>
                    </li>
                     @endforeach
                </ul>
            </div>
        </div>
    </div>
   
    <div class="imagewall_wrap" style="min-height: 403px;">
        <div id="imagewall_good" class="shop_show">
            <div class="shop_item">
            @foreach($shop as $k=>$v)
                <div class="shop_msg clearfix">
                    <h4 class="shop_name">{{$v->sname}}</h4>
                    <span>商品总数量：{{$v->snum}}</span>
                </div>
                <div class="image_wall clearfix">
                @foreach($goods[$v->sid] as $kk=>$vv)
                    <div class="iwf">
                        <a href="/home/goods/index?gid={{$vv->gid}}" class="img">
                            <img src="{{$vv->gpic}}" alt="">
                        </a>
                        <p class="title">{{$vv->gname}}</p>
                        <div class="goods_info">
                            <b class="price_info">￥{{$vv->tprice}}</b>
                            
                        </div>
                    </div>
                @endforeach  
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div></div>

    <div class="foot J_siteFooter" data-ptp="_foot"></div>
<div style="visibility: hidden; position: absolute;" id="userdata_el"></div></body>
@endsection
