<!DOCTYPE html>
<html>
  
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>蘑菇街 - 我的买手街！</title>
    <meta name="keywords" content="蘑菇街,mogujie,买手,买手街,网购">
    <meta name="description" content="">
    <meta name="copyright" content="mogujie.com">
    <link rel="icon" href="/homecss/youhuicss/images/171169993508.ico" type="image/x-icon">
    <link media="all" href="/homecss/youhuicss/images/index.css" type="text/css" rel="stylesheet"></head>
  
  <body class="media_screen_1200">
     {!! App\Http\Controllers\home\IndexController::tou() !!}
    <div class="promotionTopNavContainer"></div>
    <!-- 中间区域 -->
    <div class="header_mid clearfix">
      <div class="wrap">
        <a rel="nofollow" href="/" class="logo" title="蘑菇街首页"></a>
        <div class="normal-search-content">
          <div class="top_nav_search" id="nav_search_form">
            <!--搜索框 -->
            <div class="search_inner_box clearfix">
              <div class="selectbox" data-v="1">
                <span class="selected">搜商品</span>
                <ol>
                  <li class="current" data-index="bao">
                    <a href="#">商品</a></li>
                  <li data-index="shop">
                    <a href="#">店铺</a></li>
                </ol>
              </div>
              <form action="/search" method="get" id="top_nav_form">
                <input data-tel="search_book" name="search" class="ts_txt fl" type="text">
                <input value="搜  索" class="ts_btn" type="submit">
                <input name="t" value="bao" id="select_type" type="hidden">
                <input name="ptp" value="" type="hidden"></form>
              <div class="top_search_hint is-not-ie8-hack"></div>
            </div>
            <div class="ts_hotwords">
              <a rel="nofollow" class="ts_hotword" href="#">韩版毛衣</a>
              <a rel="nofollow" class="ts_hotword" href="#">短靴</a>
              <a rel="nofollow" class="ts_hotword" href="#">男士外套</a>
              <a rel="nofollow" class="ts_hotword" href="#">新款包包</a>
              <a rel="nofollow" class="ts_hotword" href="#">羽绒服</a>
              <a rel="nofollow" class="ts_hotword" href="#">打底裤</a>
              <a rel="nofollow" class="ts_hotword" href="#">睡衣</a>
              <a rel="nofollow" class="ts_hotword" href="#">行李箱</a>
              <a rel="nofollow" class="ts_hotword" href="#">套装</a></div>
          </div>
        </div>
        <div class="mid_fr">
          <img src="/homecss/youhuicss/images/upload_13e082af9kk5fk9b40i0h50a36b66_440x180.png" alt="蘑菇街，我的买手街"></div>
      </div>
    </div>
    <div id="body_wrap">
      <div class="mu_wrap wrap clearfix">
        <div id="navListWrap">
         <div id="navListWrap">
              <div class="mu_nav_wrap">
                <div class="mu_nav_info">
                  <div class="mu_nav_info_avatar">
                    <div class="mu_nav_info_avatar_mk"></div>
                    <img src="{{$user->pic}}" width="100" height="100"></div>
                  <p class="mu_nav_info_uname">{{$user->uname}}</p></div>
                <div class="mu_nav">
                  <div class="mu_title">我的订单</div>
                  <ul class="mu_nav_item">
                    <li>
                      <a href="#">全部订单</a></li>
                    <li>
                      <a href="/home/order/index">待付款
                        <i id="unpaidOrder" class="mu_nav_count">
                          <i class="mu_nav_count_arw"></i></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">待收货
                        <i id="unReceivedOrder" class="mu_nav_count">
                          <i class="mu_nav_count_arw"></i></i>
                      </a>
                    </li>
                    <li>
                      <a href="/home/order/pingjia">待评价
                        <i id="waitingRateOrder" class="mu_nav_count">
                          <i class="mu_nav_count_arw"></i></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">退货退款
                        <i class="mu_nav_count">
                          <i class="mu_nav_count_arw"></i></i>
                      </a>
                    </li>
                    <!-- 新增，stage=8 回收站订单 -->
                    <li>
                      <a href="/home/order/hsindex">订单回收站
                        <i id="recyleOrder" class="mu_nav_count">
                          <i class="mu_nav_count_arw"></i></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="mu_nav">
                  <div class="mu_title">
                    <a href="#">我的钱包</a></div>
                </div>
                <div class="mu_nav">
                  <div class="mu_title">
                    <a href="#">我的理财</a></div>
                </div>
                <div class="mu_nav mu_expand">
                  <div class="mu_title">优惠特权</div>
                  <ul class="mu_nav_item" id="JCouponList">
                  <li class="c">
                      <a href="/youhui">店铺优惠券</a></li>
                  </ul>
                </div>
                <div class="mu_nav">
                  <div class="mu_title">
                    <a href="#">地址管理</a></div>
                </div>
                <div class="mu_nav">
                  <div class="mu_title">安全设置</div>
                  <ul class="mu_nav_item">
                    <li>
                      <a href="/users/xgpwd">设置密码</a></li>
                    <li>
                      <a href="/users/sjhb">绑定手机</a></li>
                  </ul>
                </div>
                <div class="mu_nav">
                  <div class="mu_title">维权管理</div>
                  <ul class="mu_nav_item">
                    <li>
                      <a href="#">投诉管理</a></li>
                    <li>
                      <a href="#">举报管理</a></li>
                  </ul>
                </div>
                <div class="mu_nav  pb40">
                  <div class="mu_title">帐号设置</div>
                  <ul class="mu_nav_item">
                    <li >
                      <a href="/users">基本信息</a></li>
                    <li>
                      <a href="/users/files">修改头像</a></li>
                  </ul>
                </div>
              </div>
            </div>
<script type="text/javascript" src="/homecss/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="/homecss/usercss/js/zuoche.js"></script>

       


        <div id="content_wrap" class="mu_content_wrap">
          <div id="content_tabs">
            <div class="main-tab">
              <a class="main-tab__item active" href="/youhui">店铺优惠券</a>
            </div>
          </div>
          <div id="content_coupon">
            <table class="main-coupon">
              <thead>
                <tr>
                  <th>优惠</th>
                  <th>名称</th>
                  <th>使用范围</th>
                  <th>使用说明</th>
                  <th>时间</th>
                </tr>
              </thead>
              <tbody>
              <!-- 优惠券遍历 -->
                @foreach($quan as $k=>$v)
                <tr class="main-coupon__available">
                  <td>
                    <b class="icon">蘑菇街
                      <!-- 本店铺通用 --></b></td>
                  <td>{{$v->ctname}}</td>
                  <td>
                    <a class="main-coupon__link" href="/shop?sid={{$v->sid}}">{{$v->sname}}</a></td>
                  <td>{{$v->ctname}}</td>
                  <td>
                    <p>开始: {{date('Y-m-d H:i:s',$v->activatetime)}}</p>
                    <p>结束: {{date('Y-m-d H:i:s',$v->endtime)}}</p>
                  </td>
                  <td>
                    <p>未使用</p>
                    <a class="main-coupon__link" href="/shop?sid={{$v->sid}}">马上使用</a></td>
                </tr>
                @endforeach
              <!-- 优惠券遍历束 -->
              

              </tbody>
            </table>
          </div>
          <div id="content_pagination">
          </div>
        </div>
      </div>
    </div>
   
<!-- 尾部 -->

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
                  <img class="mgj_footer_helper_quoer_code" src="/homecss/youhuicss/images/upload_07dhaga6788g05g91890jjd7a4cc3_280x280.png"></li>
                <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                  <div class="color_999">美丽说</div>
                  <img class="mgj_footer_helper_quoer_code" src="/homecss/youhuicss/images/upload_5ii9f90fdide17hj3jkj3bfd121e3_280x280.png"></li>
                <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                  <div class="color_999">uni引力</div>
                  <img class="mgj_footer_helper_quoer_code" src="/homecss/youhuicss/images/upload_892b80cj47j51h95f44cai2e0b002_280x280.png"></li>
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
            <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="upload_ifrdimtcgeztgzdchazdambqmeyde_2480x3508.jpg">330106000129004</a>
            <b class="mgj_footer_b color_999">|</b>
            <span class="mgj_footer_copyright_span color_999">网络文化经营许可证：</span>
            <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="upload_59405ekk9ieijjcidl1fijcg04c69_960x1385.jpg">浙网文（2016）0349-219号</a>
            <b class="mgj_footer_b color_999">|</b>
            <span class="mgj_footer_copyright_span color_999">增值电信业务经营许可证：</span>
            <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="idid_ifqtmylfmvqwiy3emmzdambqgyyde_1239x1753.png">浙B2-20110349</a>
            <b class="mgj_footer_b color_999">|</b>
            <span class="mgj_footer_copyright_span color_999"></span>
            <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="upload_506h1d771b5k20j9148ldjj0kdaab_960x1344.jpg">安全责任书</a>
            <b class="mgj_footer_b color_999">|</b>
            <span class="mgj_footer_copyright_span color_999"></span>
            <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="#">浙公网安备 33010602002329号</a>
            <b class="mgj_footer_b color_999">|</b></p>
        </div>
      </div>
    </div>
    <!-- 数据部门(晓海)要求在PC模板中添加ga统计信息， -->
    <div style="visibility: hidden; position: absolute;" id="userdata_el"></div>
  </body>

</html>