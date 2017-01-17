@extends('home.shop.head')

@section('con')
    
    <div id="body_wrap" class="mgjpc">
      <div class="wall_goods_box" id="wall_goods_box">
        <!-- 商品图墙 渲染模版 -->
        <div class="defaultWall">
          <!-- 图墙为空提示 -->
          <!-- 图墙标题 -->
          <div class="wallTitle_container">
            <div class="wall_title"><?php echo $_GET['chaxun'];?>
            <span id="transmark" style="display: none; width: 0px; height: 0px;"></span></div>
          </div>
          <!-- 图墙排序选择导航 -->
          <!-- 图墙主体 -->
          @if($sgoods)
          <div class="wallBase_container">
            <div class="wall_base">
               @foreach($sgoods as $k=>$v)
              <div class="goods_item">
                <a ref="nofollow" target="_top" href="/home/goods/index?gid={{$v->gid}}" class="J_dynamic_imagebox" suffix-ratio="2:3">
                  <img class="J_dynamic_img fill_img" src="{{$v->gpic}}" alt=""></a>
                <a ref="nofollow" target="_top" href="/home/goods/index?gid={{$v->gid}}" class="good_info_container">
                  <p class="title">{{$v->gname}}</p>
                  <div class="goods_info">
                    <b class="price_info yahei">¥{{$v->price}}</b>
                    <span class="fav_num">19590
                      <img src="/homecss/shopcss/yaxicss/images/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png" alt=""></span></div>
                </a>
              </div>  
              @endforeach
              </div>
            </div>
          @else
                <br>
                <br>
                <br>
                <br>
                
               <div style="font-size:28px;text-align:center;">/(ㄒoㄒ)/~~没有找到与搜索条件相符的商品...</div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
          @endif

@endsection           