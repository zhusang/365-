<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
        <meta http-equiv="Cache-Control" content="no-transform ">
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>雅兮公主_蘑菇街</title>
        <style type="text/css">
            
.shop-header .user-info.hover {
    background: #f5f5f5 none repeat scroll 0 0;
}
.shop-header .user-info {
    /*background: #fff none repeat scroll 0 0;*/
    height: 80px;
    position: relative;
    width: 507px;
.wall_title {
    border-bottom: 1px solid #ccc;
    clear: both;
    color: #333;
    font-size: 20px;
    margin-top: 20px;
    padding-bottom: 10px;
}
}
        </style>
        <link rel="icon" href="/homecss/shopcss/yaxicss/images/171169993508.ico" type="image/x-icon">
        <link media="all" href="/homecss/shopcss/yaxicss/images/index.css" type="text/css" rel="stylesheet"></head>
        <link media="all" href="/homecss/shopcss/yaxicss/images/index_c.css" type="text/css" rel="stylesheet"></head>
    <body class="media_screen_1200">
        <!-- 顶部和右侧边栏 -->
        
         {!! \App\Http\Controllers\home\IndexController::tou() !!}

       
        <div class="promotionTopNavContainer"></div>
        <!-- 店铺公共头部-店铺信息 start -->
        <div class="shop-header">
        <div class="shop-header">
  <div class="header clearfix">
    <div class="user-info fl">
      <!-- 店铺logo等信息 end -->
      <div id="shopInfoBox">
        <a href="/shop?sid={{$shop->sid}}" class="avatar" title="{{$shop->sname}}">
          <img class="face fl" src="{{$shop->slogo}}"></a>
        <div class="shop-name fl">
          <div class="shop-score J-show-shop-score">
            <div class="name-wrap clearfix">
              <a href="/shop?sid={{$shop->sid}}" class="name fl" title="{{$shop->sname}}">{{$shop->sname}}</a>
              <p class="mark"></p>
            </div>
            <div class="shop-score J-show-shop-score">
              <p class="shop-star">
                <i class="on"></i>
                <i class="on"></i>
                <i class="on"></i>
                <i class="on"></i>
                <i class=""></i>
              </p>
              <p>
                <span class="s-cat">描述<b class="">4.52</b></span>
                <span class="s-cat">质量<b class="">4.51</b></span>
                <span class="s-cat">价格<b class="">4.52</b></span>
                <span class="s-cat">服务<b class="">4.54</b></span>
              </p>
              <div class="shop-info clearfix">
                <div class="shop-info-content clearfix">
                  <div class="info-box fl ">
                    <ol class="li li3">
                      <li>
                        <span class="tag">所在地区：</span>广东省广州市</li>
                      <li>
                        <span class="tag">商品数：</span>52</li>
                      <li>
                        <span class="tag">收藏数：</span>12392</li>
                      <li>
                        <span class="tag">销售量：</span>124186</li>
                      <li>
                        <span class="tag">创建时间：</span>2015年11月30日</li>
                      <li>
                        <span class="tag">店铺保证金：</span>已缴纳</li>
                      <li>
                        <img class="shop-individual-licen" src="/homecss/shopcss/yaxicss/images/upload_ifqtozjzmizdaylbguzdambqgyyde_182x45.png" alt=""></li>
                      <li class="tc mt10">
                        <a class="go-detail" href="#" target="_blank" rel="nofollow">查看详情</a></li>
                    </ol>
                  </div>
                  <ol class="li li1">
                    <li class="title">动态评分</li>
                    <li>描述相符:
                      <span class="num">4.52</span></li>
                    <li>质量满意:
                      <span class="num">4.51</span></li>
                    <li>价格合理:
                      <span class="num">4.52</span></li>
                    <li>服务周到:
                      <span class="num">4.54</span></li>
                  </ol>
                  <ol class="li li2">
                    <li class="title">比同行平均</li>
                    <li>
                      <span class="tag up">高</span>
                      <span class="num">3.67%</span></li>
                    <li>
                      <span class="tag up">高</span>
                      <span class="num">3.92%</span></li>
                    <li>
                      <span class="tag up">高</span>
                      <span class="num">4.39%</span></li>
                    <li>
                      <span class="tag up">高</span>
                      <span class="num">3.18%</span></li>
                  </ol>
                  <ol class="li li4">
                    <li class="title">本店</li>
                    <li>平均发货时间：
                      <span class="num">0.98</span>天</li>
                    <li>退货率：
                      <span class="num">3.97</span>%</li>
                    <li>有效投诉率：
                      <span class="num">0.01</span>%</li></ol>
                  <ol class="li li5">
                    <li class="title">行业</li>
                    <li>1.03 天</li>
                    <li>6.75 %</li>
                    <li>0.04 %</li></ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shop-action fl">
        <a class="J-shop-follow shop-follow header-icons fl" rel="nofollow" href="javascript:;">收藏</a>
        <div class="chart fl clearfix">
          <div class="mogutalk_widget_btn kefu fl mogutalk_widget4" data-bid="1ps8jk#23" data-style="widget4" data-from="shop-header"></div>
        </div>
      </div>
      <div class="icon-show-score J-show-shop-score"></div>
      <div class="line-right fr"></div>
    </div>
    <div class="shop-search">
      <div id="nav_search_form" class="top_nav_search">
        <form target="_blank" action="/search" method="get" id="top_nav_form">
          <div class="text-wrap clearfix">
            <input id="J_SearchKey" class="text ts_txt" autocomplete="off" name="search" placeholder="输入你想要的商品..." type="text">
            <a href="javascript:;" id="J_SearchInShop" class="search-inshop">搜本店</a>
            <input class="submit-btn" id="search-main" value="搜全站" type="submit"></div>
          <input name="t" value="bao" id="select_type" type="hidden"></form>
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
        </div>
    </div>

        <!-- 店铺公共头部-店铺信息 end -->
         <input id="shopId" value="1ps8jk" type="hidden">
        <input id="shopIdNumber" value="" type="hidden">
        <input id="shopBaseUrl" value="http://shop.mogujie.com/1ps8jk" type="hidden">
        <!-- topBanner -->
        <div class="ovbox mod_topBanner">
            <div class="mod_list clearfix">
                <div class="mod_item w1200" data-id="3147703" data-width="1200" data-type="topBanner" data-title="$commonTopBanner.layoutname">
                    <div class="mod_cont topbanner">
                        <a class="shop_bg_img" href="/shop?sid={{$shop->sid}}"  style="background: transparent url('{{$hengfu->spic}}') no-repeat scroll center center;"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- topNavgation -->
        <div class="ovbox mod_topNav blackStyle" style="margin-top: 0px;">
            <div class="mod_list clearfix">
                <div class="mod_item w1200" data-id="3147704" data-width="1200" data-type="topNav" data-title="$commonTopNav.layoutName">
                    <div class="mod_cont topNav">
                        <ol class="clearfix">
                            <li>
                                <a href="/shop?sid={{$shop->sid}}">首页</a></li>
                            <li class="all">
                                <a href="#">全部商品
                                    <em class="arrow"></em></a>
                            </li>
                            @foreach($tid as $k=>$v)
                            @if(empty($v->a))
                            <li class="z-nav-list">
                                <a href="/shop?sid={{$shop->sid}}&tid={{$v->tid}}">{{$v->tname}}</a>
                            </li>
                            @endif
                            @endforeach
                        </ol>
                        <div class="category_list slideer " style="display: none;">
                            <dl>
                                @foreach($tid as $k=>$v)
                                @if(empty($v->a))
                                <dd class="subMenu">
                                    <a href="/shop?sid={{$shop->sid}}&tid={{$v->tid}}">{{$v->tname}}</a>
                                </dd>
                                @endif
                                @endforeach
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @section('con')


        


        @show
        <!-- 页面尾部 -->
        <div class="foot J_siteFooter" data-ptp="_foot">
            <div class="mgj_copyright">
                <div class="mgj_footer_helper">
                    <div class="mgj_footer_helper_mod">
                        <div class="mgj_footer_helper_mod_container">
                            <h4 class="mgj_footer_helper_title color_666">- 新手帮助 -</h4>
                            <ul>
                                <li class="mgj_footer_helper_item">
                                    <a rel="nofollow" target="_top" class="color_999" href="#">常见问题</a></li>
                                <li class="mgj_footer_helper_item">
                                    <a rel="nofollow" target="_top" class="color_999" href="#">自助服务</a></li>
                                <li class="mgj_footer_helper_item">
                                    <a rel="nofollow" target="_top" class="color_999" href="#">联系客服</a></li>
                                <li class="mgj_footer_helper_item">
                                    <a rel="nofollow" target="_top" class="color_999" href="#">意见反馈</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mgj_footer_helper_mod">
                        <div class="mgj_footer_helper_mod_container">
                            <h4 class="mgj_footer_helper_title color_666">- 权益保障 -</h4>
                            <ul>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">全国包邮</div></li>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">7天无理由退货</div></li>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">退货运费补贴</div></li>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">限时发货</div></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mgj_footer_helper_mod">
                        <div class="mgj_footer_helper_mod_container">
                            <h4 class="mgj_footer_helper_title color_666">- 支付方式 -</h4>
                            <ul>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">微信支付</div></li>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">支付宝</div></li>
                                <li class="mgj_footer_helper_item">
                                    <div class="color_999">白付美支付</div></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mgj_footer_helper_mod">
                        <div class="mgj_footer_helper_mod_container">
                            <h4 class="mgj_footer_helper_title color_666">- 移动客户端下载 -</h4>
                            <ul>
                                <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                                    <div class="color_999">蘑菇街</div>
                                    <img class="mgj_footer_helper_quoer_code" src="/homecss/shopcss/yaxicss/images/upload_07dhaga6788g05g91890jjd7a4cc3_280x280.png"></li>
                                <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                                    <div class="color_999">美丽说</div>
                                    <img class="mgj_footer_helper_quoer_code" src="/homecss/shopcss/yaxicss/images/upload_5ii9f90fdide17hj3jkj3bfd121e3_280x280.png"></li>
                                <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                                    <div class="color_999">uni引力</div>
                                    <img class="mgj_footer_helper_quoer_code" src="/homecss/shopcss/yaxicss/images/upload_892b80cj47j51h95f44cai2e0b002_280x280.png"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mgj_footer_mgjinfo">
                    <ul>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_top" class="color_666" href="#">关于我们</a></li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_top" class="color_666" href="#">招聘信息</a></li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_top" class="color_666" href="#">联系我们</a></li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_top" class="color_666" href="#">商家入驻</a></li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_top" class="color_666" href="#">商家后台</a></li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_top" class="color_666" href="#">蘑菇商学院</a></li>
                        <li class="mgj_footer_mgjinfo_item">
                            <a rel="nofollow" target="_top" class="color_666" href="#">商家社区</a></li>
                    </ul>
                    <p class="mgjhostname color_999">©2017 Mogujie.com 杭州卷瓜网络有限公司</p></div>
                <div class="mgj_footer_copyright">
                    <p class="mgj_footer_copyright_container">
                        <span class="mgj_footer_copyright_span color_999">营业执照注册号：</span>
                        <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="/homecss/shopcss/yaxicss/images/upload_ifrdimtcgeztgzdchazdambqmeyde_2480x3508.jpg">330106000129004</a>
                        <b class="mgj_footer_b color_999">|</b>
                        <span class="mgj_footer_copyright_span color_999">网络文化经营许可证：</span>
                        <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="/homecss/shopcss/yaxicss/images/upload_59405ekk9ieijjcidl1fijcg04c69_960x1385.jpg">浙网文（2016）0349-219号</a>
                        <b class="mgj_footer_b color_999">|</b>
                        <span class="mgj_footer_copyright_span color_999">增值电信业务经营许可证：</span>
                        <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="/homecss/shopcss/yaxicss/images/idid_ifqtmylfmvqwiy3emmzdambqgyyde_1239x1753.png">浙B2-20110349</a>
                        <input type="hidden" name="sid" value="{{$shop->sid}}">
                        <b class="mgj_footer_b color_999">|</b>
                        <span class="mgj_footer_copyright_span color_999"></span>
                        <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="/homecss/shopcss/yaxicss/images/upload_506h1d771b5k20j9148ldjj0kdaab_960x1344.jpg">安全责任书</a>
                        <b class="mgj_footer_b color_999">|</b>
                        <span class="mgj_footer_copyright_span color_999"></span>
                        <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="#">浙公网安备 33010602002329号</a>
                        <b class="mgj_footer_b color_999">|</b></p>
                </div>
            </div>
        </div>
        <div style="visibility: hidden; position: absolute;" id="userdata_el"></div>
    <script type="text/javascript" src="/homecss/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/homecss/shopcss/yaxicss/js/yaxi.js"></script>
    </body>
</html>