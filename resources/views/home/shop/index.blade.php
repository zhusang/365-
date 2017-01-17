@extends('home.shop.head')

@section('con')

        <!-- 店铺的内容 -->
        <!-- preview=; screenType=; -->
        <!-- success loaded -->
        <input id="screenType" value="1" type="hidden">
        <input id="defaultFeedWall" value="1" type="hidden">
        <!-- isnotDecorate=0 ; defaultWallShow=1 ; -->
        <div class="shop-main" id="shop-main">
            <div class="ovbox mod_customMod mod_240">
                <div class="mod_list clearfix">
                    <div class="mod_item w240" data-id="5207946" data-width="240" data-type="customMod" data-title="">
                        <div class="customModContent minheight48">
                            <p></p>
                        </div>
                    </div>
                    

                    <!-- 自己写的大图显示 -->
                    <div>
                        @foreach($xct as $k=>$v)
                        <div style="float:left;">
                            <img src="{{$v->xpic}}"  width="100%" min-height="500px" border="0">
                        </div>
                        @endforeach
                    </div>



                    <div class="mod_item w240" data-id="5207948" data-width="240" data-type="customMod" data-title="">
                        <div class="customModContent minheight48">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-feed" id="shopFeed" data-ptp="_items">
                <input id="categoryId" value="" type="hidden">
                <input id="order" value="sale" type="hidden">
                <input id="pageindex" value="1" type="hidden">
                
                <!-- 店铺默认图墙 -->
                <div class="nav">
                    <br>
                </div>

               
                <!-- 商品遍历 -->
                <div class="list imagewall clearfix" id="J_ShopFeedList">
                    
                    @foreach($sgoods as $k=>$v)
                    <div class="item i_w_f youdian" tid="0"  >
                        <a href="/home/goods/index?gid={{$v->gid}}" class="img mls-item" target="_top">
                            <img class="mls-img" src="{{$v->gpic}}" alt="" width="225"></a>
                        <div class="favorite" style="position: relative;">
                            <a class="favaImg" href="javascript:;" data-tradeitemid="1jy6a46" tradeitemid="1jy6a46" tid="0"></a>
                        </div>
                        <p class="title">
                            <a href="/home/goods/index?gid={{$v->gid}}" target="_top">{{$v->gname}}</a></p>
                        <div class="goods-info clearfix">
                            <b class="price">
                                <i>￥</i>{{$v->price}}</b>
                            <span class="discount"></span>
                            <span class="fav-num">18795</span></div>
                    </div>
                    @endforeach
                <!-- 结束商品遍历 -->
                </div>
                <div class="pagination"></div>
            </div>
        </div>
@endsection