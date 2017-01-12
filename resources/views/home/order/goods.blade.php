@extends('home.layout.layout')

@section('con')

<!-- 店铺信息-店铺信息 start -->
  <div class="shop-header"> 
   <div class="header clearfix"> 
    <div class="user-info fl hover"> 
     <div class="shop-name fl"> 
      <div class="name-wrap clearfix"> 
       <a href="/home/shops/index?sid={{$shop->sid}}" class="" title="{{$shop->sname}}">{{$shop->sname}}</a> 
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
     <div class="J-show-shop-score"></div> 
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
  <input id="shopBaseUrl" value="" type="hidden" /> 
  <input id="shopBaseUrlSec" value="http://shop.mogujie.com/14suk" type="hidden" /> 
  <!-- topBanner --> 
  <div class="ovbox mod_topBanner"> 
   <div class="mod_list clearfix"> 
    <div class="mod_item w1200" data-id="273839" data-width="1200" data-type="topBanner" data-title="$commonTopBanner.layoutname"> 
     <div class="mod_cont topbanner"> 
      <a class="shop_bg_img" href="http://shop.mogujie.com/14suk" data-src="" style="background: transparent url('16rd6l_iezdezrwmi2timrugmzdambqmmyde_1920x150.jpg') no-repeat scroll center center;"></a> 
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
       <li><a href="/">首页</a></li> 
       
       <li class="all"><a href="">全部商品</a>
          <div class="category_list slideer" style="display: none;"> 
             <dl> 

             
              @if($allgood)
              @else
              @foreach($allgood as $k=>$v)
              @foreach($v as $kk=>$vv)

              <dd class="subMenu"> 
               <a href="/home/goods/index?gid={{$vv->gid}}">{{$vv->gname}}</a> 
              </dd> 
              @endforeach
              @endforeach
              @endif
             </dl> 
            </div> 
       </li>
     
      
       <li class="z-nav-list"> <a href="/list/index?tid=">  </a> </li> 
      
      </ol> 

      
     </div> 
    </div> 
   </div> 
  </div> 
  
  <div class="shop-detail wrap"> 
   <!-- 商品详情信息 --> 
   <div class="detail-goods clearfix"> 
    <!-- 商品左侧 --> 
    <div class="goods-left"> 
     <div class="goods-box clearfix"> 
      <!-- 商品信息 --> 
      <div class="goods-info fl" id="J_GoodsInfo"> 
       <div class="goods-info-box"> 
        <h1 class="goods-title">{{$goods->gname}}</h1> 
        <!-- 商品价格 --> 
        <div class="goods-price goods-pro"> 
         <dl class="clearfix"> 
          <dt>
           原价：
          </dt> 
          <dd class="price-w">
           <span>&yen;</span>
           <span id="J_Price">{{$goods->price}}</span>
          </dd> 
         </dl> 
         <dl class="clearfix"> 
          <dt class="price-x">
           现价：
          </dt> 
          <dd> 
           <div class="price-box"> 
            <span class="price-u">&yen;</span> 
            <span id="J_NowPrice" class="price-n">{{$goods->tprice}}</span> 
           </div> 
          </dd> 
         </dl> 
        </div> 
        <div class="goods-meta goods-pro"> 
         <dl class="clearfix"> 
          <dt>
           客服：
          </dt> 
          <dd> 
           <div class="mogutalk_widget_btn kefu" data-bid="14mcy#23" data-style="default" data-from="goodsdetail_skumtalk">
            <iframe src="" width="85" height="24" frameborder="0" scrolling="no" marginheight="0" allowtransparency="true"></iframe>
           </div> 
          </dd> 
         </dl> 
        </div> 
        <div class="goods-sku goods-pro" id="J_GoodsSku"> 
         <div class="content"> 
          <div class="box"> 
           <dl class="style clearfix"> 
            <dt>
             颜色：
            </dt> 
            <dd> 
             <ol class="J_StyleList style-list clearfix"> 
              <li class="img" title="图片色"><img src="http://s2.mogucdn.com/p2/161117/66851757_11l5flad5el77c9l6jlg9d1d3kgad_640x960.jpg_100x100.jpg" /><b></b></li> 
             </ol> 
            </dd> 
           </dl> 
           <dl class="size clearfix"> 
            <dt>
             尺码：
            </dt> 
            <dd> 
             <ol class="J_SizeList size-list clearfix"> 
              <li>均码</li> 
             </ol> 
            </dd> 
           </dl> 
          </div> 
         </div> 
        </div> 
        <ul class="goods-services clearfix"> 
         <li class="fl">
          <a href="" target="_blank"><img src="/phonecss/610_0.png" /></a></li> 
         <li class="fl"><a href="" target="_blank"><img src="/phonecss/310_0.png" /></a></li> 
         <li class="fl"><a href="" target="_blank"><img src="/phonecss/430_0.png" /></a></li> 
         <li class="fl"><a href="" target="_blank"><img src="/phonecss/110_0.png" /></a></li> 
        </ul> 
        <div class="goods-snapshot clearfix"> 
         <p class="snapshot-icon fl">你正在查看此商品的交易快照</p> 
         <a class="snapshot-link fr" href="/detail/1k59n3y" target="_blank">点此查看商品最新信息&gt;</a> 
        </div> 
       </div> 
      </div> 
      <!-- 商品图片 --> 
      <div class="goods-img fl" id="J_GoodsImg"> 
       <!-- 大图 --> 
       <div class="big-img"> 
        <!--判断是否显示sku对应的大图--> 
        <img id="J_BigImg" src="{{$goods->gpic}}"  alt="" width="440" /> 
        <!-- 优选图标 --> 
       </div> 
       <!-- 小图 --> 
       <div id="J_SmallImgs" class="small-img"> 
        <div class="box"> 
         <div class="list"> 
          <ul class="clearfix" style="text-align: center;"> 
          @foreach($goods_pic as $k=>$v)
           <li><img class = 'xiaotu' src="{{$v->spic}}" /></li> 
          @endforeach
          </ul> 
         </div> 
        </div> 
        <a href="javascript:;" class="left-btn arrow-btn"></a> 
        <a href="javascript:;" class="right-btn arrow-btn"></a> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- 商品详情主体 --> 
   <div class="detail-main" id="J_ModuleDetail"> 
    <!-- 商品导航 --> 
    <div class="main-nav-wrap"> 
    <style>
      .main-nav-fixed{position:fixed;top:0px;}
      
      
    </style>
     <div class="main-nav" id="J_GoodsNav" style='width:1200px'> 
      <ul class="list clearfix "> 
       <li data-id="J_ModuleDetail" class="c"><a href="javascript:;">商品详情</a></li> 
      </ul> 
      <div class="tags"> 
       <a href="javascript:;"  class='anc_size_info'>尺码材质</a> 
       <b>|</b> 
       <a href="javascript:;" class="anc_model_img">穿着效果</a> 
       <b>|</b> 
       <a href="javascript:;" class="anc_detail_img" >细节做工</a> 
       <b>|</b> 
      </div> 
     </div> 
    </div> 
    <!-- 顶栏 --> 
    <div class="main-size" id="abcd"> 
     <h1 class="title">尺码材质 size</h1> 
     <div class="content"> 
      <!-- 材质 --> 
      <div class="stuff"> 
       <table> 
        <tbody> 
         <tr> 
          <td>袖型：常规袖</td> 
          <td>尺码：均码</td> 
          <td>风格：学院,韩系</td> 
         </tr> 
         <tr> 
          <td>厚薄：加厚</td> 
          <td>版型：宽松</td> 
          <td>材质：马海毛</td> 
         </tr> 
         <tr> 
          <td>颜色：图片色</td> 
          <td>元素：拼接,拼色/撞色</td> 
          <td>衣长：中长款（66-80cm）</td> 
         </tr> 
         <tr> 
          <td>衣门襟：套头</td> 
          <td>领型：圆领</td> 
          <td>图案：条纹</td> 
         </tr> 
         <tr> 
          <td>季节：秋冬</td> 
          <td>袖长：长袖</td> 
         </tr>
        </tbody> 
       </table> 
      </div> 
      <!-- 尺码 --> 
      <div class="size"> 
       <table> 
        <tbody> 
         <tr class="name"> 
          <td>尺码</td> 
          <td>肩宽</td> 
          <td>衣长</td> 
          <td>胸围</td> 
          <td>袖长</td> 
         </tr> 
         <tr> 
          <td>均码</td> 
          <td>57</td> 
          <td>70</td> 
          <td>122</td> 
          <td>47</td> 
         </tr> 
        </tbody> 
       </table> 
       <p class="desc">手工测量会有2-3cm的误差哦，介意的MM勿拍哦！！！！</p> 
      </div> 
      <div class="img-box"> 
      </div> 
     </div> 
    </div> 
    <div class="main-show module-item" id="abcde"> 
     <h1 class="title">穿着效果 show</h1> 
     <div class="content"> 
      <div class="desc"> 
       <p class="start"></p> 
       <p class="text">{{$goods_det->gdesc}}</p> 
       <p class="end"></p> 
      </div> 
      <div class="img-box"> 
      @foreach($goods_pic as $k=>$v)
       <div class="item"> 
        <div class="img"> 
         <img class="img-pre-lazyload" d-src="" alt="" width="640" height="960" src="{{$v->bpic}}" /> 
        </div> 
       </div>
       @endforeach  
      </div> 
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
    
    
    //选择尺码
    $('.size-list').children().click(function()
    {
      $(this).addClass('c').siblings().removeClass('c');
    })


    //修改商品图片
    $('.xiaotu').mouseover(function()
    {
      var xiaotu = $(this)[0].src;
      $('#J_BigImg').attr('src',xiaotu);
    
    })

    //选项定位
    $('.anc_size_info').click(function()
    {
      window.location.hash = "#abcd";
      $(this).eq(0).addClass('c').siblings().removeClass('c');
      

      
    })

    $('.anc_model_img').click(function()
    {
      window.location.hash = "#abcde";
      $(this).eq(0).addClass('c').siblings().removeClass('c');
      
      
    })

    $('.anc_detail_img').click(function()
    {
      window.location.hash = "#abcdef";
      $(this).eq(0).addClass('c').siblings().removeClass('c');
     
      
    })

    //绑定页面滚动距离事件
    $(window).scroll(function()
    {
      var a = $(document).scrollTop();
     
       if(a >=1100)
       {
        $('.main-nav').addClass('main-nav-fixed');
       }else{
        $('.main-nav').removeClass('main-nav-fixed');
       }
    })

     

</script>
@endsection

