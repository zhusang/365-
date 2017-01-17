@extends('home.layout.layout')
@section('con')
<link media="all" href="/house/goods/index.css" type="text/css" rel="stylesheet">



<div class="promotionTopNavContainer"></div>



  <div class="attention_nav">
    <div class="nav_container clearfix">
        <a href="javascript:;" class="attention_logo">我的收藏</a>
        <ul class="nav_ctrl">
            <li class="fst"><a href="/home/house/index">收藏的店铺</a></li>
            <li ><a href="/home/house/goods">收藏的商品</a></li>
            <li class="on"><a href="/home/house/foot">足迹</a></li>
        </ul>
    </div>
</div>
<div id="body_wrap">
    
<div class="footprint-wrap">

        <div class="his_wrap">

<div id="footprint-box" class="footprint-box J_scroll_wallbox clearfix" style="height: auto;">
 @foreach($foot as $k=>$v)
    <div class="goods_list_mod clearfix J_mod_hidebox J_mod_show" id="J_Dynmod_4nz3pdz7_4" style='display:inline-block; margin:20px 30px'>
   
<div class="his_section" style='margin:10px 0px'>
    <h3 class="section_title clearfix">
        <b><?php echo date('Y年m月d日 H:i:s',$v->ftime);?></b>
    </h3>
</div>
    <div class="item-li" style='float: left;width: 220px;'>
        <a href="/home/goods/index?gid={{$v->gid}}" target="_top" class="img">
        <img class="lazy"  alt="" src="{{$goods[$v->gid]->gpic}}" width='220px' height='330px'>

        </a>
        <p class="title" style="line-height: 20px;overflow: hidden;overflow-x: hidden;overflow-y: hidden;height: 20px;">{{$goods[$v->gid]->gname}}</p>

        <div class="info clearfix">
            <span class="salePrice">{{$goods[$v->gid]->price}}</span>
            <span class="price">￥{{$goods[$v->gid]->tprice}}</span>
        </div>
    </div>
        </div>
@endforeach
</div>
</div>
    

<div style="visibility: hidden; position: absolute;" id="userdata_el"></div></body>
@endsection
@section('js')
  
@endsection
