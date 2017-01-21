@extends('home.layout.layout')
@section('con')

<link media="all" href="/house/goods/index.css" type="text/css" rel="stylesheet">



<div class="promotionTopNavContainer"></div>



  <div class="attention_nav">
    <div class="nav_container clearfix">
        <a href="javascript:;" class="attention_logo">我的收藏</a>
        <ul class="nav_ctrl">
            <li class="fst"><a href="/home/house/index">收藏的店铺</a></li>
            <li class="on"><a href="/home/house/goods">收藏的商品</a></li>
            <li><a href="/home/house/foot">足迹</a></li>
        </ul>
    </div>
</div>
    
<div id="body_wrap">
    <div class="mu_wrap wrap clearfix">
        <div id="imagewall_container">
       
        @foreach($goods as $k=>$v)
            <div class="iwf goods_item" data-tradeitemid="605813326">
                <a rel="nofollow" href="/home/goods/index?gid={{$v->gid}}" class="img" target="_top">
                    <img src="{{$v->gpic}}" alt="{{$v->gname}}">
                </a>
                <p class="title">
                    <a rel="nofollow" href="/home/goods/index?gid={{$v->gid}}" target="_top" style="width: 220px;">{{$v->gname}}
                    </a>
                </p>
                <div class="goods_info">
                    <b class="price_info">￥{{$v->tprice}}</b>
                    <span class="fav_num">{{$v->cnt}}
                        <img src="upload_27g4f1ch6akie83hacb676j622b9l_32x30.png" alt="">
                    </span>
                </div>
            </div>
        @endforeach
        
        </div>
  </div>
</div>
   

<div style="visibility: hidden; position: absolute;" id="userdata_el"></div></body>
@endsection
