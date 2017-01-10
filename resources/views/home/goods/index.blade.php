@extends('home.layout.layout')
@section('title')
{{$goods->gname}}
@endsection
@section('con')

<!-- 店铺信息-店铺信息 start -->
  <div class="shop-header"> 
   <div class="header clearfix"> 
    <div class="user-info fl hover"> 
     <div class="shop-name fl"> 
      <div class="name-wrap clearfix"> 
       <a href="" class="" title="风景在你左右">风景在你左右</a> 
       <p class="mark"> </p> 
      </div> 
      <!-- 评分信息 --> 
      <div class="shop-score J-show-shop-score"> 
       <div class="left_star"> 
        <b class="level" style="width: 68px;"></b> 
       </div> 
       <p> <span class="s-cat">描述<b>4.67</b>
            </span> <span class="s-cat">价格<b>4.66</b></span>
             <span class="s-cat">质量<b>4.64</b></span>
              <span class="s-cat">服务<b>4.68</b></span> 
        </p> 
       <!-- 下拉列表 --> 
       <div class="shop-info clearfix">
        <div class="shop-info-content clearfix">
         <div class="info-box fl">
          <ul class="">
           <li><span class="tag">所在地区：</span>广东省惠州市</li>
           <li><span class="tag">商品数：</span>98</li>
           <li><span class="tag">收藏数：</span>23901</li>
           <li><span class="tag">销售量：</span>114888</li>
           <li><span class="tag">创建时间：</span>2014年07月21日</li>
           <li><span class="tag">店铺保证金：</span>已缴纳</li>
           <li><img class="shop-individual-licen" src="/homegoods/upload_ifqtozjzmizdaylbguzdambqgyyde_182x45.png" alt="" /></li>
           <li class="tc mt10"><a class="go-detail" href="http://liuhuiyun.mogujie.com/credit" target="_top" rel="nofollow">查看详情</a></li>
          </ul>
         </div>
         <ol class="li li1">
          <li class="title">动态评分</li>
          <li>描述相符：<span class="num">4.67</span></li>
          <li>质量满意：<span class="num">4.64</span></li>
          <li>价格合理：<span class="num">4.66</span></li>
          <li>服务周到：<span class="num">4.68</span></li>
         </ol>
         <ol class="li li2">
          <li class="title">比同行平均</li>
          <li><span class="tag up">高</span><span class="num">5.18%</span></li>
          <li><span class="tag up">高</span><span class="num">5.45%</span></li>
          <li><span class="tag up">高</span><span class="num">5.67%</span></li>
          <li><span class="tag up">高</span><span class="num">4.93%</span></li>
         </ol>
         <ol class="li li4">
          <li class="title"> 本店 </li>
          <li>平均发货时间：<span class="num">0.70</span>天</li>
          <li>退货率：<span class="low">4.86</span>%</li>
          <li>有效投诉率：<span class="num">0.00</span>%</li>
         </ol>
         <ol class="li li5">
          <li class="title"> 行业 </li>
          <li>0.97 天</li>
          <li>3.94 %</li>
          <li>0.03 %</li>
         </ol>
        </div>
       </div> 
      </div> 
     </div> 
     <div class="shop-action fl"> 
      <a class="J-shop-follow shop-follow header-icons fl " rel="nofollow" href="" data-shopid="14suk"> 收藏 </a> 
      <a href="" class="chart fl clearfix"> 
       <div class="mogutalk_widget_btn  fl mogutalk_widget4" data-bid="14suk#23" data-style="widget4" data-from="shop-header"></div><span></span> </a> 
     </div> 
     <div class="icon-show-score J-show-shop-score"></div> 
     <div class="line-right fr"></div> 
    </div> 
    <div class="shop-search"> 
     <div id="nav_search_form" class="top_nav_search"> 
      <form target="_blank" action="http://search.mogujie.com/search" method="get" id="top_nav_form"> 
       <div class="text-wrap clearfix"> 
        <input id="J_SearchKey" class="text ts_txt" autocomplete="off" name="q" placeholder="输入你想要的商品..." def-v="气质必备毛呢外套" data-def="毛呢外套" value="气质必备毛呢外套" type="text" />
        <a href="javascript:;" data-baseurl="http://shop.mogujie.com/14suk" id="J_SearchInShop" class="search-inshop">搜本店</a>
        <input class="submit-btn" value="搜全站" type="submit" /> 
       </div> 
       <input name="t" value="bao" id="select_type" type="hidden" /> 
      </form> 
      <div class="top_search_hint"></div> 
     </div> 
    </div> 
    <div class="shop-search-list seatch_type_msearch ts_type fl" id="seach_type"> 
     <div class="search-list-box fl"> 
      <p class="no-tip tip_none">暂无相关热门关键词</p> 
      <ul class="search-tip search_tip"></ul> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 店铺公共头部-店铺信息 end --> 
  <input id="shopId" value="14suk" type="hidden" /> 
  <input id="shopBaseUrl" value="http://shop.mogujie.com/" type="hidden" /> 
  <input id="shopBaseUrlSec" value="http://shop.mogujie.com/14suk" type="hidden" /> 
  <!-- topBanner --> 
  <div class="ovbox mod_topBanner"> 
   <div class="mod_list clearfix"> 
    <div class="mod_item w1200" data-id="273839" data-width="1200" data-type="topBanner" data-title="$commonTopBanner.layoutname"> 
     <div class="mod_cont topbanner"> 
      <a class="shop_bg_img" href="http://shop.mogujie.com/14suk" data-src="/homegoods/http://s17.mogucdn.com/b7/pic/150827/16rd6l_iezdezrwmi2timrugmzdambqmmyde_1920x150.jpg" style="background: transparent url('16rd6l_iezdezrwmi2timrugmzdambqmmyde_1920x150.jpg') no-repeat scroll center center;"></a> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- topNavgation --> 
  <div class="ovbox mod_topNav blackStyle"> 
   <div class="mod_list clearfix"> 
    <div class="mod_item w1200" data-id="273840" data-width="1200" data-type="topNav" data-title="$commonTopNav.layoutName"> 
     <div class="mod_cont topNav"> 

      <ol class=""> 
       <li><a href="http://shop.mogujie.com/14suk">首页</a></li> 
       
       <li class="all"><a href="">全部商品</a>
          <div class="category_list slideer" style="display: none;"> 
             <dl> 
              @foreach($allgood as $k=>$v)
              @foreach($v as $kk=>$vv)
              <dd class="subMenu"> 
               <a href="/home/goods/index?gid={{$vv->gid}}">{{$vv->gname}}</a> 
              </dd> 
              @endforeach
              @endforeach
             </dl> 
            </div> 
       </li>
       @foreach($paths as $k=>$v) 
       <li class="z-nav-list"> <a href="http://shop.mogujie.com/14suk/list/index?categoryId=1368563"> {{$v->tname}} </a> </li> 
      @endforeach
      </ol> 

      
     </div> 
    </div> 
   </div> 
  </div> 
  <div id="body_wrap"> 
   <input id="shopid" value="14suk" type="hidden" /> 
   <input id="J_ShopId" value="14suk" type="hidden" /> 
   <input id="J_ShopUserId" value="12diqeq" type="hidden" /> 
   <input id="J_PageType" value="item" type="hidden" /> 
   <input id="iteminfoid" value="18n00tc" type="hidden" /> 
   <input id="J_ItemId" value="18n00tc" type="hidden" /> 
   <input id="J_RushId" value="" type="hidden" /> 
   <input id="sellerId" value="12diqeq" type="hidden" /> 
   <input id="J_SellerId" value="12diqeq" type="hidden" /> 
   <input id="J_DetailRefer" value="http://shop.mogujie.com/14suk/list/index?categoryId=1368563&amp;ptp=1.__item_detail.0.0.zH1b1" type="hidden" /> 
   <input id="J_CartLuckyDrawData" data-istimerange="true" type="hidden" /> 
   <div class="shop-detail"> 
    <div class="detail-primary clearfix"> 
     <div class="primary-goods"> 
      <div class="clearfix"> 
       <div class="fl goods-info goods-info-normal" id="J_GoodsInfo"> 
        <div class="info-box"> 
         <h1 class="goods-title"><span itemprop="name">{{$goods->gname}}</span></h1> 
         <div class="goods-prowrap goods-main"> 
          <div class="clearfix main-box"> 
           <dl class="clearfix property-box"> 
            <dt class="property-type property-type-origin">
             价格：
            </dt> 
            <dd class="property-cont property-cont-origin"> 
             <span id="J_OriginPrice" class="price">&yen;{{$goods->price}}</span> 
            </dd> 
           </dl> 
           <dl class="clearfix property-box"> 
            <dt class="property-type property-type-now">
             促销价：
            </dt> 
            <dd class="property-cont property-cont-now fl"> 
             <span id="J_NowPrice" class="price">&yen;{{$goods->tprice}}</span> 
            </dd> 
            <dd class="property-extra fr"> 
             <span class="mr10">评价： <span class="num"> 42 </span> </span> 
             <span>累计销量： <span class="num J_SaleNum">{{$goods->scnt}}</span> </span> 
            </dd> 
           </dl> 
           <div id="J_ModulePromotions">
            <dl class="clearfix promotions-box"> 
             <dt>
              店铺优惠：
             </dt> 
             <dd class="clearfix"> 
              <div class="module-promotions clearfix"> 
               <!-- 店铺优惠列表 --> 
               <div class="promotion-box"> 
                <span class="info shopPromotion-info">
                    待完成店铺优惠表遍历联查
                </span> 
                <span class=""></span> 
                <div class="favorable-list"> 
                 <ul> 
                  <div class="favorable-item fl"> 
                   <span class="dot fl">▪</span> 
                   <span class="fl">购物满169元立减10元</span> 
                  </div> 
                  <div class="favorable-item fl"> 
                   <span class="dot fl">▪</span> 
                   <span class="fl">购物满199元立减15元</span> 
                  </div> 
                  <div class="favorable-item fl"> 
                   <span class="dot fl">▪</span> 
                   <span class="fl">购物满299元立减20元</span> 
                  </div> 
                  <div class="favorable-item fl"> 
                   <span class="dot fl">▪</span> 
                   <span class="fl">购物满499元立减30元</span> 
                  </div> 
                 </ul> 
                 <b></b> 
                </div> 
               </div> 
               <!-- 满包邮 --> 
              </div> 
             </dd>
            </dl>
           </div> 
          </div> 
         </div> 
         <div class="goods-prowrap goods-im"> 
          <dl class="clearfix"> 
           <dt>
            客服：
           </dt> 
           <dd>
            <div class="mogutalk_widget_btn kefu mogutalk_default" data-bid="14suk#23" data-style="default" data-from="goodsdetail_skumtalk"></div><div></div>
           </dd> 
          </dl> 
         </div> 
         <div class="goods-prowrap goods-sku" id="J_GoodsSku"> 

          <div class="content"> 
           <div class="pannel-title"> 
            <span class="choose-goods-info">选择商品信息</span> 
            <b class="J_PannelClose pannel-close"></b> 
           </div> 
           <div class="box"> 
            <dl class="style clearfix" style="display: block;"> 
             <dt>
              款式：
             </dt> 
             <dd> 
              <ol class="J_StyleList style-list clearfix">
               <li class="img" value="1"  title="真皮小白鞋">
                  <img src="{{$goods->gpic}}"/>
                  <b></b>
                  
                </li>
                <input type='hidden' id='gid' value="{{$goods->gid}}">
              </ol> 
              <div id='div' style = 'color:red; font-size:20px'></div>
             </dd> 
            </dl> 
            <dl class="size clearfix" style="display: block;"> 
             <dt>
              尺码：
             </dt> 
             <dd> 
              <ol class="J_SizeList size-list clearfix">
               <li class="" value="35" title="35">35</li>
               <li class="" value="36" title="36">36</li>
               <li class="" value="37" title="37">37</li>
               <li class="" value="38" title="38">38</li>
               <li class="" value="39" title="39">39</li>
               <li class="" value="40" title="40">40</li>
              </ol> 
             </dd> 
            </dl> 
            <dl class="clearfix"> 
             <dt>
              数量：
             </dt> 
             <dd class="num clearfix"> 
              <div id="J_GoodsNum" class="goods-num fl" data-stock="2025"> 
               <span class="num-reduce"></span> 
               <input class="num-input" value="1" type="text" /> 
               <span class="num-add "></span> 
               <input type='hidden' class='hidden-val' value = "{{$goods->cnt}}">
              </div> 
              <div class="J_GoodsStock goods-stock fl" value="{{$goods->cnt}}">
               库存{{$goods->cnt}}件
              </div> 
              <div class="J_GoodsStockTip goods-stock-tip fl">
               您所填写的商品数量超过库存！
              </div> 
             </dd> 
            </dl> 
           </div> 
          </div> 
          <div class="goods-buy clearfix"> 
           <a href="javascript:;" id="J_BuyNow" class="fl mr10 buy-btn buy-now">立刻购买</a> 
           <input value="nodapei" id="dapeiShow" type="hidden" /> 
           <a href="javascript:;" id="J_BuyCart" class="fl mr10 buy-cart buy-btn">加入购物车</a> 
           
          </div> 
         </div> 
         <div class="goods-social clearfix"> 
          <div class=" fav  item" goodsid="0" tradeitemid="18n00tc" tid="0">
           <b></b>
           <span class="fav-num">2359</span>
          </div> 
          <div class="share item"> 
           <b></b>分享 
           <div class="share-w clearfix"> 
            <a target="_top" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2Fwww.mogujie.com%2Fcps%2Fopen%2Ftrack%3Fchannel%3D19%26uid%3D128yxgi%26target%3Dhttp%253A%252F%252Fshop.mogujie.com%252Fdetail%252F18n00tc&amp;title=%E6%BD%AE%E7%88%86%E8%A1%97%E5%A4%B4%E7%9A%84%E4%B8%80%E6%AC%BE%E5%B0%8F%E7%99%BD%E9%9E%8B%EF%BC%8C%E7%BB%AD%E5%86%99%E7%BB%8F%E5%85%B8%E3%80%82%E7%8B%A0%E6%97%B6%E5%B0%9A~%E7%8B%A0%E7%99%BE%E6%90%AD~%E5%A5%B3%E7%A5%9E%E4%BB%AC%E9%83%BD%E5%9C%A8%E7%A9%BF~%E8%BE%BE%E4%BA%BA%E5%BF%85%E5%A4%87%E7%B2%BE%E5%93%81%E5%93%A6%EF%BC%81%EF%BC%81&amp;pics=http://s2.mogucdn.com/p1/160315/16rd6l_ifrdsyjxgrswimbvg4zdambqmeyde_640x960.jpg_468x468.jpg" class="forqzone" title="关注QQ空间" rel="nofollow"></a> 
            <a target="_top" href="http://widget.renren.com/dialog/share?resourceUrl=http%3A%2F%2Fwww.mogujie.com%2Fcps%2Fopen%2Ftrack%3Fchannel%3D19%26uid%3D128yxgi%26target%3Dhttp%253A%252F%252Fshop.mogujie.com%252Fdetail%252F18n00tc&amp;title=%E6%BD%AE%E7%88%86%E8%A1%97%E5%A4%B4%E7%9A%84%E4%B8%80%E6%AC%BE%E5%B0%8F%E7%99%BD%E9%9E%8B%EF%BC%8C%E7%BB%AD%E5%86%99%E7%BB%8F%E5%85%B8%E3%80%82%E7%8B%A0%E6%97%B6%E5%B0%9A~%E7%8B%A0%E7%99%BE%E6%90%AD~%E5%A5%B3%E7%A5%9E%E4%BB%AC%E9%83%BD%E5%9C%A8%E7%A9%BF~%E8%BE%BE%E4%BA%BA%E5%BF%85%E5%A4%87%E7%B2%BE%E5%93%81%E5%93%A6%EF%BC%81%EF%BC%81&amp;thumbnail_url=http://s2.mogucdn.com/p1/160315/16rd6l_ifrdsyjxgrswimbvg4zdambqmeyde_640x960.jpg_468x468.jpg" class="forrenren" title="关注人人" rel="nofollow"></a> 
            <a target="_top" href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fwww.mogujie.com%2Fcps%2Fopen%2Ftrack%3Fchannel%3D19%26uid%3D128yxgi%26target%3Dhttp%253A%252F%252Fshop.mogujie.com%252Fdetail%252F18n00tc&amp;title=%E6%BD%AE%E7%88%86%E8%A1%97%E5%A4%B4%E7%9A%84%E4%B8%80%E6%AC%BE%E5%B0%8F%E7%99%BD%E9%9E%8B%EF%BC%8C%E7%BB%AD%E5%86%99%E7%BB%8F%E5%85%B8%E3%80%82%E7%8B%A0%E6%97%B6%E5%B0%9A~%E7%8B%A0%E7%99%BE%E6%90%AD~%E5%A5%B3%E7%A5%9E%E4%BB%AC%E9%83%BD%E5%9C%A8%E7%A9%BF~%E8%BE%BE%E4%BA%BA%E5%BF%85%E5%A4%87%E7%B2%BE%E5%93%81%E5%93%A6%EF%BC%81%EF%BC%81&amp;pic=http://s2.mogucdn.com/p1/160315/16rd6l_ifrdsyjxgrswimbvg4zdambqmeyde_640x960.jpg_468x468.jpg" class="forsina" title="关注sina" rel="nofollow"></a> 
            <a target="_top" href="http://www.mogujie.com/group/topic/1grvy/" class="forweixin" title="关注微信" rel="nofollow"></a> 
           </div> 
          </div> 
          <div class="report">
           <a target="_top" href="http://www.mogujie.com/trade/report/add?itemid=18n00tc" class="goods_report fl" rel="nofollow">举报</a>
          </div> 
         </div> 
         <div class="goods-extra clearfix"> 
          <div class="extra-services"> 
           <div class="fl clearfix label">
            服务承诺：
           </div> 
           <ul class="fl clearfix list"> 
            <li class="item"> <a class="link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=927" target="_top" title="" rel="nofollow"> <img src="/homegoods/idid_ie4timrzmq3tkzbzmezdambqgqyde_40x40.png" width="24" height="24" /> 退货补运费 </a> </li> 
            <li class="item"> <a class="link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=892" target="_top" title="" rel="nofollow"> <img src="/homegoods/idid_ifrtgojygu2dgzbzmezdambqhayde_40x40.png" width="24" height="24" /> 7天无理由退货 </a> </li> 
            <li class="item"> <a class="link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=895" target="_top" title="" rel="nofollow"> <img src="/homegoods/idid_ie3tmyjxhfrtgzbzmezdambqgayde_40x40.png" width="24" height="24" /> 全国包邮 </a> </li> 
            <li class="item"> <a class="link" href="http://www.mogujie.com/rule/mogu?categoryId=326&amp;ruleId=893" target="_top" title="" rel="nofollow"> <img src="/homegoods/idid_ifrdqobzmq3dizbzmezdambqmeyde_40x40.png" width="24" height="24" /> 72小时发货 </a> </li> 
           </ul> 
          </div> 
          <div class="extra-pay"> 
           <div class="fl clearfix label">
            支付方式：
           </div> 
           <div class="fl list list-nomaibei"></div> 
          </div> 
         </div> 
        </div> 
       </div> 
       <div class="fl goods-topimg" id="J_GoodsImg"> 
        <div class="big-img"> 
         <img id="J_BigImg" src="{{$goods->gpic}}" alt="{{$goods->gdesc}}" width="400" /> 
        </div> 
        <div id="J_SmallImgs" class="small-img" style="display: none;"> 
         <div class="box"> 
          <div class="list"> 
           <ul class="clearfix" style="text-align: center;"></ul> 
          </div> 
         </div> 
         <a class="left-btn arrow-btn" href="javascript:;"></a> 
         <a class="right-btn arrow-btn" href="javascript:;"></a> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="primary-slide"> 
      <div class="goods-recommend" id="J_ModuleLook" data-ptp="_rechot">
       <!-- 热卖推荐 -->
       <p class="title">
        <s></s><span>热卖推荐</span></p>
       <div class="list"> 
        <div class="box"> 
         <ul> 
         @foreach($allgood as $k=>$v)
         @foreach($v as $kk=>$vv)
          
          <li> <a href="/home/goods/index?gid={{$vv->gid}}" target="_top"> <img src="{{$vv->gpic}}" data-iids="1k4yi34" data-indexs="0" data-acms="3.mce.1_4_1k4yi34.5124..j8Sq7N7y7lZ.lc_201" class="loggered" width="120" /> </a> <span>{{$vv->price}}</span> </li> 

          @endforeach
          @endforeach
         </ul> 
        </div>
       </div>
      </div> 
     </div> 
    </div> 
    <div class="detail-content "> 
     <!-- 顶部 --> 
     <div class="col-top"> 
      <!-- 搭配购 --> 
      <div class="module-dapei" id="J_ModuleDapei"></div> 
     </div> 
     <!-- 主体 --> 
     <div class="col-main"> 
      <!-- 模块标签页 --> 
      <div class="module-tabpanel" id="J_ModuleTabpanel"> 
       <!-- 选项栏 --> 
       <div class="tabbar-box"> 
        <ul class="tabbar-list clearfix" id='option'> 
         <li data-panels="graphic,recommend" data-hasnav="true" class="tab-graphic xiangqing selected"> 
            <a href="javascript:;">商品详情</a>
         </li> 
         <li data-panels="rates" data-hasnav="false" class='leiji '> 
            <a href="javascript:;">累计评价<em>42</em></a> 
          </li> 
         <li data-panels="recommend" data-hasnav="false" class='tonglei'>
             <a href="javascript:;">本店同类商品</a>
         </li> 
         <li class="qrcode"> 
          <div class="qrcode-togger">
           手机扫码下单
           <!-- <br />快捷支付立减五元 -->
          </div> 
          <div class="qrcode-pic">
           <img src="/homegoods/qrcode" />
          </div> <i class="qrcode-mini"></i> <i class="qrcode-arrow"></i> </li> 
        </ul> 
       </div> 
       <div class=""> 
        <div class="bg-right"></div> 
        <div class="bg-left"></div> 
       </div> 
       <div class="tabbar-occupying"></div> 
       <!-- 选项页 --> 
       <div class="panel-box"> 
            <!-- 图文详情 --> 
            <div class="module-panel module-graphic " id="J_ModuleGraphic">
             <!-- 图文详情 -->
             <!--     注：PHP模板走的是本地模板文件：views/modules/module-graphic.php-->
             <!-- 商品描述 --> 
             <div id="J_Graphic_desc"> 
              <div class="panel-title"> 
               <h1>商品描述</h1> 
              </div> 
              <!-- 描述 --> 
              <div class="graphic-text">
               {{$goods->gdesc}}
              </div> 
             </div>
             <!-- 产品参数 --> 
             <div id="J_Graphic_产品参数"> 
              <div class="panel-title"> 
               <h1>产品参数</h1> 
              </div> 
              <!-- 产品参数 --> 
              <div class="graphic-block"> 
               <!-- 描述 --> 
               <!-- 表格 --> 
               <table class="parameter-table" id="J_ParameterTable"> 
                <tbody> 
                 <tr class=""> 
                  <td>颜色: 白色</td> 
                  <td>适用场地: 其他,地板,硬地,野外,山区</td> 
                  <td>装饰样式: 无</td> 
                 </tr> 
                 <tr class=""> 
                  <td>帮面材质: 人造革</td> 
                  <td>视觉效果: 无特殊效果</td> 
                  <td>风格: 运动,韩系,街头（潮人）</td> 
                 </tr> 
                 <tr class=""> 
                  <td>鞋底材质: 橡胶底</td> 
                  <td>性别: 女子</td> 
                  <td>功能: 轻便,透气,耐磨,吸汗,其他</td> 
                 </tr> 
                 <tr class=""> 
                  <td>鞋帮高度: 高帮</td> 
                  <td>鞋面材质: 人造革/PU</td> 
                  <td>闭合方式: 系带</td> 
                 </tr> 
                </tbody> 
               </table> 
              </div> 
             </div>
             <!-- 模块级别 --> 
             <div class="graphic-block"> 
              <!-- 图片列表 --> 
              <div id="J_Graphic_穿着效果"> 
               <div class="panel-title"> 
                <h1>穿着效果</h1> 
               </div> 
               <!-- 描述 --> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 137.143%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160317/16rd6l_ie4wgnjrmzrwiojvg4zdambqgqyde_640x960.jpg_750x999.jpg" src="/homegoods/16rd6l_ie4wgnjrmzrwiojvg4zdambqgqyde_640x960.jpg_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 108.857%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160309/16rd6l_ie4gcojtmqydqmbtg4zdambqgiyde_640x762.png_750x999.jpg" src="/homegoods/16rd6l_ie4gcojtmqydqmbtg4zdambqgiyde_640x762.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 115.857%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160309/16rd6l_ie4wmntegyytqmbtg4zdambqgqyde_640x811.png_750x999.jpg" src="/homegoods/16rd6l_ie4wmntegyytqmbtg4zdambqgqyde_640x811.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 70.2857%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160309/16rd6l_ie3wcmdbheydqmbtg4zdambqgayde_640x492.png_750x999.jpg" src="/homegoods/16rd6l_ie3wcmdbheydqmbtg4zdambqgayde_640x492.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 120.429%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s11.mogucdn.com/p1/160309/16rd6l_ifrtonlgmuydqmbtg4zdambqhayde_640x843.png_750x999.jpg" src="/homegoods/16rd6l_ifrtonlgmuydqmbtg4zdambqhayde_640x843.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 130.286%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160309/16rd6l_ifrgkyzqgiytqmbtg4zdambqmeyde_640x912.png_750x999.jpg" src="/homegoods/16rd6l_ifrgkyzqgiytqmbtg4zdambqmeyde_640x912.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 86.4286%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160309/16rd6l_ie4gmzlfgmytqmbtg4zdambqgiyde_640x605.png_750x999.jpg" src="/homegoods/16rd6l_ie4gmzlfgmytqmbtg4zdambqgiyde_640x605.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 68.5714%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160309/16rd6l_ifrdcojvguytqmbtg4zdambqmeyde_640x480.png_750x999.jpg" src="/homegoods/16rd6l_ifrdcojvguytqmbtg4zdambqmeyde_640x480.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 116%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160309/16rd6l_ie4tsyjzgyytqmbtg4zdambqgqyde_640x812.png_750x999.jpg" src="/homegoods/16rd6l_ie4tsyjzgyytqmbtg4zdambqgqyde_640x812.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 63.4286%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160317/16rd6l_ie3toyzvhfswiojvg4zdambqgayde_640x444.png_750x999.jpg" src="/homegoods/16rd6l_ie3toyzvhfswiojvg4zdambqgayde_640x444.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 128.857%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160317/16rd6l_ie4dinzxg5swiojvg4zdambqgiyde_640x902.png_750x999.jpg" src="/homegoods/16rd6l_ie4dinzxg5swiojvg4zdambqgiyde_640x902.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 66.1429%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160317/16rd6l_ifrtsndehbswiojvg4zdambqhayde_640x463.png_750x999.jpg" src="/homegoods/16rd6l_ifrtsndehbswiojvg4zdambqhayde_640x463.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 98.8571%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160317/16rd6l_ie4tqnjtgzswiojvg4zdambqgqyde_640x692.jpg_750x999.jpg" src="/homegoods/16rd6l_ie4tqnjtgzswiojvg4zdambqgqyde_640x692.jpg_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 66.8571%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160317/16rd6l_ie4danjqmfswiojvg4zdambqgiyde_640x468.png_750x999.jpg" src="/homegoods/16rd6l_ie4danjqmfswiojvg4zdambqgiyde_640x468.png_750x999.jpg" /> 
                </div> 
               </div> 
              </div> 
              <div id="J_Graphic_整体款式"> 
               <div class="panel-title"> 
                <h1>整体款式</h1> 
               </div> 
               <!-- 描述 --> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 70.2857%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160326/16rd6l_ifrgmobwmi2tiobyg4zdambqmeyde_640x492.png_750x999.jpg" src="/homegoods/16rd6l_ifrgmobwmi2tiobyg4zdambqmeyde_640x492.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 115.857%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160326/16rd6l_ifqtmytgmi2tiobyg4zdambqgyyde_640x811.png_750x999.jpg" src="/homegoods/16rd6l_ifqtmytgmi2tiobyg4zdambqgyyde_640x811.png_750x999.jpg" /> 
                </div> 
               </div> 
              </div> 
              <div id="J_Graphic_细节做工"> 
               <div class="panel-title"> 
                <h1>细节做工</h1> 
               </div> 
               <!-- 描述 --> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 84.8571%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160313/16rd6l_ifrwcolbgeydqnrug4zdambqhayde_640x594.png_750x999.jpg" src="/homegoods/16rd6l_ifrwcolbgeydqnrug4zdambqhayde_640x594.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 64%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s11.mogucdn.com/p1/160326/16rd6l_ie4wizjwme3diobyg4zdambqgqyde_640x448.png_750x999.jpg" src="/homegoods/16rd6l_ie4wizjwme3diobyg4zdambqgqyde_640x448.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 67.8571%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s2.mogucdn.com/p1/160326/16rd6l_ifqwemddhe3diobyg4zdambqgyyde_640x475.png_750x999.jpg" src="/homegoods/16rd6l_ifqwemddhe3diobyg4zdambqgyyde_640x475.png_750x999.jpg" /> 
                </div> 
               </div> 
               <div class="graphic-pic"> 
                <div class="pic-box" style="padding-bottom: 111.714%;"> 
                 <img class="lazy" style="left: -320px; display: block;" data-original="http://s11.mogucdn.com/p1/160326/16rd6l_ifrggnrtme3diobyg4zdambqmeyde_640x782.png_750x999.jpg" src="/homegoods/16rd6l_ifrggnrtme3diobyg4zdambqmeyde_640x782.png_750x999.jpg" /> 
                </div> 
               </div> 
              </div> 
             </div>
             <!-- 尺码说明 --> 
             <div id="J_Graphic_尺码说明"> 
              <div class="panel-title"> 
               <h1>尺码说明</h1> 
              </div> 
              <!-- 尺码说明 --> 
              <div class="graphic-block"> 
               <!-- 描述 --> 
               <div class="graphic-text">
                跟高2.5厘米 正常鞋码~
               </div> 
               <!-- 表格 --> 
               <table class="size-table"> 
                <thead> 
                 <tr> 
                  <td>尺码</td> 
                  <td>脚长</td> 
                 </tr> 
                </thead> 
                <tbody> 
                 <tr> 
                  <td>35</td> 
                  <td>225</td> 
                 </tr> 
                 <tr> 
                  <td>36</td> 
                  <td>230</td> 
                 </tr> 
                 <tr> 
                  <td>37</td> 
                  <td>235</td> 
                 </tr> 
                 <tr> 
                  <td>38</td> 
                  <td>240</td> 
                 </tr> 
                 <tr> 
                  <td>39</td> 
                  <td>245</td> 
                 </tr> 
                 <tr> 
                  <td>40</td> 
                  <td>250</td> 
                 </tr> 
                </tbody> 
               </table> 
               <!-- 提醒 --> 
               <div class="size-text">
                ※ 以上尺寸为实物人工测量，因测量当时不同会有1-2cm误差，相关数据仅作参考，以收到实物为准。
               </div> 
              </div> 
             </div>
            </div> 
            <!-- 累计评价 --> 
            <div class="module-panel module-rates ui-none" id="J_ModuleRates"> 
             <!-- 买家评价 --> 
             <div id="J_RatesBuyer"> 
              <div class="panel-title rates-title"> 
               <h1>买家评价</h1> 
              </div> 
              <!-- 买家评价 --> 
              <div class="rates-buyer"> 
               <!-- 评价分数 --> 
               <div class="comment-info"> 
                <ul class="clearfix"> 
                 <li class="score"> <span class="comment-star"><b style="width: 77px;"></b></span> <span class="numbox"> <b class="num-v">4.67</b><span class="num-s">分</span> </span> </li> 
                 <li> 
                  <div class="title">
                   价格合理
                  </div> 
                  <div class="cont"> 
                   <span class="comment-star"><b style="width: 86px;"></b></span> 
                   <span class="num-v">5.00</span> 
                  </div> </li> 
                 <li> 
                  <div class="title">
                   商品质量
                  </div> 
                  <div class="cont"> 
                   <span class="comment-star"><b style="width: 77px;"></b></span> 
                   <span class="num-v">4.34</span> 
                  </div> </li> 
                 <li class="last"> 
                  <div class="title">
                   描述相符
                  </div> 
                  <div class="cont"> 
                   <span class="comment-star"><b style="width: 77px;"></b></span> 
                   <span class="num-v">4.68</span> 
                  </div> </li> 
                </ul> 
               </div> 
               <div class="comment-content"> 
                <div class="tags clearfix"> 
                 <div class="list  open "> 
                  <a href="javascript:;" class="best" data-emotion="positive" data-property="质量">质量很好 (8)</a> 
                  <b>|</b> 
                  <a href="javascript:;" class="best" data-emotion="positive" data-property="服务">卖家服务很好 (5)</a> 
                  <b>|</b> 
                  <a href="javascript:;" class="best" data-emotion="positive" data-property="款式">款式好 (3)</a> 
                  <b>|</b> 
                 </div> 
                </div> 
                <!-- 导航 --> 
                <div class="nav clearfix"> 
                 <div class="comment-sort"> 
                  <input class="J_CommentSort" data-type="1" id="J_CommentSortDefault" name="commentSort" checked="checked" type="radio" />
                  <label for="J_CommentSortDefault"> 默认排序</label> 
                  <input class="J_CommentSort ml15" data-type="0" id="J_CommentSortTime" name="commentSort" type="radio" />
                  <label for="J_CommentSortTime"> 时间排序</label> 
                 </div> 
                 <a href="javascript:;" data-type="all" class="c">全部评价（42）</a> 
                 <a href="javascript:;" data-type="img" class="">晒图（12）</a> 
                </div> 
                <!-- 列表 --> 
                <div id="J_RatesBuyerList" class="comments">
                 <!--详情页交易评价列表--> 
                 <div class="item clearfix" data-id="17ine5y"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">淘***主</span> 
                     <span class="date">2016年04月13日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     很不错哦，质量也是很好的
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:36</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                    <div class="info-l"></div> 
                    <!-- 追加评价 --> 
                    <div class="info-z clearfix"> 
                     <span class="fl">追加评价：</span> 
                     <div class="content">
                      特别棒很喜欢，一拿回来就洗了下，期待穿起来～
                     </div> 
                     <span class="date fr">确认收货后36分钟追加</span> 
                    </div> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/upload_ie4wmoldguzdon3fg4zdambqgqyde_720x960.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <span> <img src="" height="400" /> </span> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtcnbzgbswgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="17egu1w"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">所***你</span> 
                     <span class="date">2016年04月08日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     鞋子，确实挺好看的，穿了好久过来评论的
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:36</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/upload_ifrggmrsgftdcytdg4zdambqmeyde_540x720.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <div class="img-box"> 
                       <span> <img src="" height="400" /> </span> 
                      </div> 
                     </div> 
                    </div> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtmoddmnsggntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="17cwa4e"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">安***福</span> 
                     <span class="date">2016年04月05日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     宝贝很棒 我特喜欢 码数有点偏大 不过这双鞋子真的超棒的 质量也很好 值得购买！
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:37</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/7ps_ifqwgmjzmrtdqzdcg4zdambqgyyde_720x960.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <div class="img-box"> 
                       <span> <img src="" height="400" /> </span> 
                      </div> 
                     </div> 
                    </div> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrwenjuhfsggntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="179auog"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">鹿***陆</span> 
                     <span class="date">2016年03月30日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     鞋子不好好检查就发货，换货要我自付费用不说，真的很浪费时间啊！！！
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:38</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/17t6k5_ifrgmnjqgy3tkzbzg4zdambqmeyde_720x1280.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/17t6k5_ifqtqntbgi3tkzbzg4zdambqgyyde_1280x720.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/17t6k5_ifqtsmbwmy3dkzbzg4zdambqgyyde_1280x720.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <div class="img-box"> 
                       <span> <img src="" height="400" /> </span> 
                      </div> 
                     </div> 
                    </div> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrwem3ggvswgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="1799nbk"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">m***2</span> 
                     <span class="date">2016年03月30日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     挺好看的，好评。
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:36</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                    <div class="info-l"></div> 
                    <!-- 追加评价 --> 
                    <div class="info-z clearfix"> 
                     <span class="fl">追加评价：</span> 
                     <div class="content">
                      挺好看的
                     </div> 
                     <span class="date fr">确认收货后2天追加</span> 
                    </div> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/7ps_ie4dkodcmfstqodbg4zdambqgiyde_720x952.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <span> <img src="" height="400" /> </span> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtcnbzgbswgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="178okcs"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">我***_</span> 
                     <span class="date">2016年03月29日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     特别喜欢，很白，质量不错，很轻，总在她家买鞋，喜欢
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:37</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                    <div class="info-l"></div> 
                    <!-- 追加评价 --> 
                    <div class="info-z clearfix"> 
                     <span class="fl">追加评价：</span> 
                     <div class="content">
                      第三次买鞋了，推荐哦
                     </div> 
                     <span class="date fr">确认收货后4分钟追加</span> 
                    </div> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/7ps_ie4dcmrxmu3dcobzg4zdambqgiyde_860x1530.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <span> <img src="" height="400" /> </span> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrwenbygrsggntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="17543ru"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">双***4</span> 
                     <span class="date">2016年03月24日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     很赞 很好看
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:38</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/7ps_ifqtmyjwg5qtkmbyg4zdambqgyyde_750x1000.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <div class="img-box"> 
                       <span> <img src="" height="400" /> </span> 
                      </div> 
                     </div> 
                    </div> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                    <div class="info-l"></div> 
                    <!-- 追加评价 --> 
                    <div class="info-z clearfix"> 
                     <span class="fl">追加评价：</span> 
                     <div class="content">
                      性价比高 赞赞滴
                     </div> 
                     <span class="date fr">确认收货后51秒钟追加</span> 
                    </div> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/7ps_ifrgcmlfgnrdkmbyg4zdambqmeyde_750x1000.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <span> <img src="" height="400" /> </span> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtmoddmnsggntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="16yelho"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">蘑***丽</span> 
                     <span class="date">2016年03月14日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     鞋子特别漂亮，还有小礼物，特别喜欢，质量很好，穿着很舒服，这个价钱值了，想购买的亲赶紧下手吧！
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:36</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/2bv13c_ifrdoyjwmiydqyjug4zdambqmeyde_218x378.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/2bv13c_ifrtemrsmeydqyjug4zdambqhayde_299x384.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/2bv13c_ie4tem3chaydqyjug4zdambqgqyde_291x385.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <div class="img-box"> 
                       <span> <img src="" height="400" /> </span> 
                      </div> 
                     </div> 
                    </div> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtgyjxmjrwgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="16yelhm"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">蘑***丽</span> 
                     <span class="date">2016年03月14日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     鞋子很好哦！穿上去超舒服的 好看又百搭，还是挺流行的款式，我超级喜欢的！！！嘻嘻！！
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:35</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/2bv13c_ifrtiztdgyydqyjug4zdambqhayde_468x468.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/2bv13c_ie4wmmjqguydqyjug4zdambqgqyde_468x468.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/2bv13c_ifrwmmrygiydqyjug4zdambqhayde_468x469.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <div class="img-box"> 
                       <span> <img src="" height="400" /> </span> 
                      </div> 
                     </div> 
                    </div> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtgyjxmjrwgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="16yehl6"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">小***娘</span> 
                     <span class="date">2016年03月14日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     鞋仔的款式很百搭，是我喜欢的类型！太棒了，美哒哒!!
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:37</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/ijjt3_ifrwgzryhbqtoyjug4zdambqhayde_281x365.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/ijjt3_ie4tszrrg5qtoyjug4zdambqgqyde_371x255.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/ijjt3_ifrtmyzwgrqtoyjug4zdambqhayde_386x288.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <div class="img-box"> 
                       <span> <img src="" height="400" /> </span> 
                      </div> 
                     </div> 
                    </div> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtmoddmnsggntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="1qgkdmm"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">喵***8</span> 
                     <span class="date">2016年10月31日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     36的鞋感觉让我穿出了37的感觉&#55357;&#56851;建议各位买的时候 拍小一码吧
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:36</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/upload_1a8402j661lb784dhff73k83gbfg9_730x1116.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/upload_5ad12d0034d19f0j8aed63h165i55_750x1004.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <div class="img-box"> 
                       <span> <img src="" height="400" /> </span> 
                      </div> 
                     </div> 
                    </div> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtgyjxmjrwgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="17cc176"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">凉***凉</span> 
                     <span class="date">2016年04月04日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m"></div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:35</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <div class="info-k show-img"> 
                     <ul class="list clearfix"> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/7ps_ifrwinlfgazgiodcg4zdambqhayde_1046x1394.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                      <li> 
                       <div class="img-box"> 
                        <span> <img src="/homegoods/7ps_ifqtqylfgazgiodcg4zdambqgyyde_1046x1394.jpg_100x100.jpg" width="40" /> </span> 
                       </div> </li> 
                     </ul> 
                     <div class="big-img"> 
                      <div class="img-box"> 
                       <span> <img src="" height="400" /> </span> 
                      </div> 
                     </div> 
                    </div> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtcnbzgbswgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="19g6d4k"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">疯***啊</span> 
                     <span class="date">2016年07月23日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     还可以吧，质量不是很好
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:37</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                    <div class="info-l"></div> 
                    <!-- 追加评价 --> 
                    <div class="info-z clearfix"> 
                     <span class="fl">追加评价：</span> 
                     <div class="content">
                      质量真心不好
                     </div> 
                     <span class="date fr">确认收货后23天追加</span> 
                    </div> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtgyjxmjrwgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="17yiiv6"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">你***1</span> 
                     <span class="date">2016年05月07日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     非常好看 没有瑕疵 好满意 同学朋友都说好看
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:38</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtcnbzgbswgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="17o8fuw"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">一***2</span> 
                     <span class="date">2016年04月21日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     鞋子挺不错的，跟描述的一样，大小也很合适。
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:40</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtmoddmnsggntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="17jvy28"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">妮***a</span> 
                     <span class="date">2016年04月15日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     挺好的，偏大半码
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:40</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrwenbygrsggntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="179u93w"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">哆***3</span> 
                     <span class="date">2016年03月31日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     鞋子挺好的，就是味道大了点，不过应该洗一洗就没事了，喜欢的可以买
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:37</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtmoddmnsggntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="179u5hy"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">朱***7</span> 
                     <span class="date">2016年03月31日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     还可以 就是味道有点重 我晒了一天 味道终于散去啦
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:37</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrwenjuhfsggntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="176gds2"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">暗***斯</span> 
                     <span class="date">2016年03月26日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     鞋子挺好的，虽然出现小插曲但是客服及时解决了，所以给五星好评，给客服点个赞～
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:40</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtgyjxmjrwgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="item clearfix" data-id="17624im"> 
                  <div class="info"> 
                   <div class="info-w"> 
                    <!-- 评价用户、时间 --> 
                    <div class="info-t clearfix"> 
                     <span class="name">刘***8</span> 
                     <span class="date">2016年03月25日</span> 
                    </div> 
                    <!-- 评价内容 --> 
                    <div class="info-m">
                     质量很好，码数标准，款式好看，而且没有异味，满意
                    </div> 
                    <!-- 商品属性 --> 
                    <div class="info-b clearfix"> 
                     <p> <span class="sku-choose">尺码:37</span> <span class="sku-choose">颜色:真皮小白鞋</span> </p> 
                     <p> </p> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-ios shop-detail-icons comment-mt">来自iOS客户端</a> --> 
                     <!-- <a href="http://www.mogujie.com/apps" target="_blank" class="from-android shop-detail-icons comment-mt">来自Android客户端</a> --> 
                    </div> 
                    <!-- 晒图 S --> 
                    <!-- 晒图 E --> 
                    <!-- 商家回复输入 --> 
                   </div> 
                  </div> 
                  <div class="face"> 
                   <img src="/homegoods/idid_ifrtgyjxmjrwgntfguzdambqhayde_160x160.jpg_64x64.jpg" /> 
                  </div> 
                 </div> 
                 <div class="pagination">
                  <a class="c">1</a>
                  <a rel="nofollow" href="http://shop.mogujie.com/ajax/pc.rate.ratelist/v1?pageSize=20&amp;sort=1&amp;isNewDetail=1&amp;itemId=18n00tc&amp;type=1&amp;page=2">2</a>
                  <a rel="nofollow" href="http://shop.mogujie.com/ajax/pc.rate.ratelist/v1?pageSize=20&amp;sort=1&amp;isNewDetail=1&amp;itemId=18n00tc&amp;type=1&amp;page=3">3</a>
                  <a rel="nofollow" href="http://shop.mogujie.com/ajax/pc.rate.ratelist/v1?pageSize=20&amp;sort=1&amp;isNewDetail=1&amp;itemId=18n00tc&amp;type=1&amp;page=2">下一页&gt;</a>
                 </div>
                </div> 
               </div> 
              </div> 
             </div> 
             <!-- 成交记录 --> 
             <div id="J_RatesOrder"> 
              <div class="panel-title rates-title"> 
               <h1>成交记录</h1> 
              </div> 
              <!-- 成交记录 --> 
              <div class="rates-order"> 
               <!-- 列表 --> 
               <div class="sale-list" id="J_RatesOrderList"></div> 
              </div> 
             </div> 
            </div> 
            <!-- 本店同类商品 --> 
            <div class="module-panel module-recommend ui-none" id="J_ModuleRecommend">
             <!-- 本店同类商品 -->
             <!--     注：PHP模板走的是本地模板文件：views/modules/module-recommend.php-->
             <!-- 本店同类商品列表 -->
             <div id="J_RecommendList"> 
              <div class="panel-title recommend-title"> 
               <h1>本店同类商品</h1> 
              </div> 
              <!-- 本店同类商品列表 --> 
              <div class="recommend-list"> 
               <!-- 列表 --> 
               <ul> 
                @foreach($allgood as $k=>$v)
                @foreach($v as $kk=>$vv)
                <li> 
                    <a class="pic" href="/home/goods/index?gid={{$vv->gid}}" target="_top"> 
                      <img class="lazy" src="{{$vv->gpic}}" data-iids="17s71zc" data-indexs="0" data-acms="3.mce.1_4_17s71zc.5148..j8Sq7N7zkCT.lc_201" style="display: block;" /> 
                    </a>
                    <a class="title" href="/home/goods/index?gid={{$vv->gid}}" target="_top">{{$vv->gname}}
                    </a> 
                 <div class="info"> 
                  <div class="price"> 
                   <em class="price-u">&yen;</em> 
                   <span class="price-n">{{$vv->price}}</span> 
                  </div> 
                  <div class="fav"> 
                   <em class="fav-i"></em> 
                   <span class="fav-n">{{$vv->scnt}}</span> 
                  </div> 
                 </div> </li> 
               @endforeach
               @endforeach
               </ul> 
              </div> 
             </div>
            </div> 
       </div> 
      </div> 
     </div> 
     <!-- 侧边栏 --> 
     <div class="col-sidebar"> 
      <!-- 店铺模块 --> 
      <div class="module-shop" id="J_ModuleShop"> 
       <!-- 店铺信息 --> 
       <div class="ui-box shop-info"> 
        <h3 class="ui-hd shop-hd "> 
         <div class="shop-name"> 
          <a class="text text-hasim" href="">风景在你左右 
           <div class="mogutalk_widget_btn  mogutalk_pc" data-bid="14suk#23" data-style="pc" data-from="goodsdetail_skumtalk"></div> </a> 
         </div> </h3> 
        <div class="shop-occupying"></div> 
        <div class="ui-bd"> 
         <div class="shop-evaluate"> 
          <ul> 
           <li> <p class="text">描述</p> <p class="num-def ">4.67</p> </li> 
           <li> <p class="text">价格</p> <p class="num-def ">4.66</p> </li> 
           <li> <p class="text">质量</p> <p class="num-def ">4.64</p> </li> 
           <li> <p class="text">服务</p> <p class="num-def ">4.68</p> </li> 
          </ul> 
         </div> 
         <div class="shop-btns"> 
          <a rel="nofollow" class="J-shop-follow shop-follow  btn-fav " href="javascript:;" data-shopid="14suk"> 收藏店铺 </a> 
          <a class="btn-goto" href="http://shop.mogujie.com/14suk">进入店铺</a> 
         </div> 
         <div class="shop-search"> 
          <i class="line"></i> 
          <form action="" method="get" id="J_ShopSearch"> 
           <input class="inptxt" name="q" value="" type="text" /> 
           <input class="btn btn_warning" value="店内搜索" type="submit" /> 
          </form> 
         </div> 
         <div class="shop-provide"> 
          <i class="line"></i> 
          <i class="arrow"></i> 
          <a class="pic" href="javascript:;"> <img class="img-lazyload" src="/homegoods/upload_ie2dsmbsmyydcmtbgmzdambqgiyde_150x26.png" width="150" height="26" /> </a> 
         </div> 
        </div> 
       </div> 
      </div> 
      <!-- 分类模块 --> 
      <div class="module-classify" id="J_ModuleClassify"> 
       <!-- 分类信息 --> 
       <div class="ui-box classify-info"> 
        <h3 class="ui-hd">本店分类</h3> 
        <div class="ui-bd"> 
         <!-- 列表 --> 
         <ul class="classify-list"> 
          <li> <a href="/home/goods/index">全部商品</a> </li> 
          @foreach($paths as $k=>$v)
          
          <li class="category-link"> 
              <a href="/home/goods/index?gid={{$v->tid}}">{{$v->tname}}</a> 
          </li> 
         
          @endforeach 
         </ul> 
        </div> 
       </div> 
      </div> 
      <!-- 看了又看模块 --> 
      <div class="module-repeat" id="J_ModuleRepeat">
       <!-- 看了又看 -->
       <!--     注：PHP模板走的是本地模板文件：views/modules/module-repeat.php-->
       <!-- 看了又看信息 -->
       <div class="ui-box repeat-info"> 
        <h3 class="ui-hd">看了又看</h3> 
        <div class="ui-bd"> 
         <!-- 列表 --> 
         <ul class="repeat-list"> 
         @foreach($allgood as $k=>$v)
         @foreach($v as $kk=>$vv)
          <li data-id="18lw87k">
           <a class="pic" href="/home/goods/index?gid={{$vv->gid}}" target="_top"> 
           <img class="lazy loggered" src="{{$vv->gpic}}"  data-iids="18lw87k" data-indexs="0" data-acms="3.mce.1_4_18lw87k.5123..Ay9q7N7znA8.lc_201" style="display: block;" /> </a> 
           <a class="title" href="/home/goods/index?gid={{$vv->gid}}" target="_top">{{$vv->gname}}</a> 
           <div class="info"> 
            <div class="price"> 
             <em class="price-u">&yen;</em> 
             <span class="price-n">{{$vv->price}}</span> 
            </div> 
            <div class="fav"> 
             <em class="fav-i"></em> 
             <span class="fav-n">{{$vv->scnt}}</span> 
            </div> 
           </div> </li> 
          @endforeach
          @endforeach
         </ul> 
        </div>
       </div>
      </div> 
     </div> 
     <!-- 扩展栏 --> 
     <div class="col-extra"> 
      <i class="bor-line bor-r"></i> 
      <i class="bor-line bor-b"></i> 
      <i class="bor-line bor-l"></i> 
      <!-- 购物车模块 --> 
      <div class="module-cart" id="J_ModuleCart"> 
       <div class="ui-box cart-info"> 
        <div class="ui-hd cart-hd"> 
         <a class="cart-name" id="cart" href="javascript:;"> <span><i></i>加入购物车</span> </a> 
        </div> 
        <div class="cart-occupying ui-hide"></div> 
       </div> 
      </div> 
      <!-- 右侧子导航模块 --> 
     </div> 
    </div> 
   </div> 

  </div>
@endsection
@section('js')
<script type="text/javascript">
  //鼠标移入事件
    
    $('.all').mouseover(function()
    { 
      $('.slideer').css('display','block');
    })
    
    //鼠标移除事件
    $('.all').mouseout(function()
    { 
      $('.slideer').css('display','none');
    })

    //联系客服
    $('.kefu').dblclick(function()
    {
      $(this).next().html('客服热线:00000');
      return false;
    })

    $('.kefu').click(function()
    {
      $(this).next().html('');
      return false;
    })
    

    //选择商品样式小图
    $('.img').click(function()
    {
      $(this).addClass('c').siblings().removeClass('c');
    })

    //选择尺码
    $('.size-list').children().click(function()
    {
      $(this).addClass('c').siblings().removeClass('c');
    })

     

      //商品数量
      //加
      $('.num-add').click(function()
      {
        var val = $(this).prev().val();
        val = Number(val)+1;
        $(this).prev().val(val);
       var cnt = $('.hidden-val').val();
        if(val > cnt){
          $('.goods-stock-tip').css('display','block');
        }else{
          $('.goods-stock-tip').css('display','none');
        } 
      })
      //减
      $('.num-reduce').click(function()
      {
        var val = $(this).next().val();

        val = Number(val)-1;
        if(val<=1){
          val = 1;
          $(this).next().val(val);
        }

        $(this).next().val(val);
        var cnt = $('.hidden-val').val();
        if(val < cnt){
         
          $('.goods-stock-tip').css('display','none');
        } 
      })

      //input修改
      $('.num-input').focus(function()
      {
        var val = $(this).val();
      })

      $('.num-input').blur(function()
      {
        var val = $(this).val();
        $(this).val(val);
        var cnt = $('.hidden-val').val();
        if(val > cnt){
          $('.goods-stock-tip').css('display','block');
        }else{
          $('.goods-stock-tip').css('display','none');
        } 
      })
      // document.getElementById("img").src;
      //立即购买
      $('#J_BuyNow').click(function()
      {
        var img = $('.style-list').find('.c').val();
        var size = $('.size-list').find('.c').val();
        var num = $('.num-input').val();
        var gid = $('#gid').val();
        
        $.get('/admin/order/add',{gid:gid,num:num,size:size,img:img},function(data){
            if (data){
                window.location.href='/home/order/index';
              }else{
                $('#div').html('请选择尺码和款式');
              }
        },'json');
      })
      //加入购物车
     $('#J_BuyCart').click(function()
      {
        
        var img = $('.style-list').find('.c').val();
        var size = $('.size-list').find('.c').val();
        var num = $('.num-input').val();
        var gid = $('#gid').val();
        
        $.get('/admin/cart/add',{gid:gid,num:num,size:size,img:img},function(data){
            if (data){
                window.location.href='/home/order/index';
              }else{
                $('#div').html('请选择尺码和款式');
              }
        },'json');
      })
     $('#cart').click(function()
      {
        
        var img = $('.style-list').find('.c').val();
        var size = $('.size-list').find('.c').val();
        var num = $('.num-input').val();
        var gid = $('#gid').val();
        
        $.get('/admin/cart/add',{gid:gid,num:num,size:size,img:img},function(data){
            if (data){
                window.location.href='/home/order/index';
              }else{
                $('#div').html('请选择尺码和款式');
              }
        },'json');
      })

     //选项卡操作
     $('.xiangqing').click(function()
     {
        $(this).addClass('selected');
        $('.leiji').removeClass('selected');
        $('.tonglei').removeClass('selected');
        $('#J_ModuleGraphic').removeClass('ui-none');
        $('#J_ModuleRates').addClass('ui-none');
        $('#J_ModuleRecommend').addClass('ui-none');
     })

     $('.leiji').click(function()
     {
        $(this).addClass('selected');
        $('.xiangqing').removeClass('selected');
        $('.tonglei').removeClass('selected');
         $('#J_ModuleGraphic').addClass('ui-none');
        $('#J_ModuleRates').removeClass('ui-none');
        $('#J_ModuleRecommend').addClass('ui-none');
     })

     $('.tonglei').click(function()
     {
        $(this).addClass('selected');
        $('.xiangqing').removeClass('selected');
        $('.leiji').removeClass('selected');
        $('#J_ModuleGraphic').addClass('ui-none');
        $('#J_ModuleRates').addClass('ui-none');
        $('#J_ModuleRecommend').removeClass('ui-none');
     })

     //扫码付款
     $('.qrcode').mouseover(function()
     {
        $('.qrcode-pic').css('display','block');
     })

      $('.qrcode').mouseout(function()
     {
        $('.qrcode-pic').css('display','none');
     })

</script>
@endsection

