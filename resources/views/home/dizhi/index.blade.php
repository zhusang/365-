<!DOCTYPE html>
<html>
  
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>蘑菇街，我的买手街！</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="copyright" content="mogujie.com">
    <link rel="icon" href="/homecss/dizhicss/images/171169993508.ico" type="image/x-icon">
    <link media="all" href="/homecss/dizhicss/images/index.css" type="text/css" rel="stylesheet">
    <link media="all" href="/homecss/dizhicss/images/index_u.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/homecss/jquery-1.8.3.min.js"></script> 
    <style type="text/css">
        
        .address_pop {
            background: #fafafa none repeat scroll 0 0;
            border: 1px solid #efefef;
            margin: 30px 0 20px;
        }

        .address_pop {
            line-height: 38px;
            padding: 20px 20px 20px 0;
            position: relative;
        }

        body, html {
            color: #333;
        }


        .address_pop dt {
            color: #666;
            left: 0;
            position: absolute;
            text-align: right;
            width: 90px;
        }
        .address_pop {
            line-height: 38px;
        }


        .address_pop dd {
            padding-left: 106px;
            position: relative;
        }
        .address_pop {
            line-height: 38px;
        }


.address_pop .needicon {
    color: #ff5a00;
    font-size: 14px;
    font-style: normal;
    left: 90px;
    line-height: 14px;
    position: absolute;
    top: 14px;
}


.address_pop .textarea {
    border: 1px solid #c7c7c7;
    border-radius: 2px;
    color: #666;
    line-height: 16px;
    margin-bottom: 5px;
    margin-top: 5px;
    padding: 6px 8px;
    vertical-align: top;
}


.address_pop .text {
    border: 1px solid #c7c7c7;
    border-radius: 2px;
    color: #666;
    height: 12px;
    line-height: 12px;
    margin-bottom: 5px;
    margin-top: 5px;
    padding: 6px 8px;
}

.address_pop .breakline {
    display: block;
}

.address_pop .prompt {
    color: #999;
    padding-left: 8px;
}

.pt10 {
    padding-top: 10px !important;
}


.address_pop .cancel_btn, .address_pop .confirm_btn {
    display: inline-block;
    font: 0px/0 a;
    height: 34px;
    overflow: hidden;
}

.address_pop .confirm_btn {
    background: rgba(0, 0, 0, 0) url("http://s9.mogujie.cn/pic/140114/ubzlo_kqzekzkekrbdo6dwgfjeg5sckzsew_360x900.png") no-repeat scroll -200px -217px;
    width: 104px;
}


.address_pop .cancel_btn {
    background: rgba(0, 0, 0, 0) url("http://s9.mogujie.cn/pic/140114/ubzlo_kqzekzkekrbdo6dwgfjeg5sckzsew_360x900.png") no-repeat scroll -200px -251px;
    width: 68px;
}

.address_pop .cancel_btn, .address_pop .confirm_btn {
    display: inline-block;
    font: 0px/0 a;
    height: 34px;
    overflow: hidden;
}

    </style>
  </head>
  <body class="media_screen_1200">
        {!! \App\Http\Controllers\home\IndexController::tou() !!}
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
                <input data-tel="search_book" name="search" class="ts_txt fl" data-def="" value="" autocomplete="off" def-v="" type="text">
                <input value="搜  索" class="ts_btn" type="submit">
                <input name="t" value="bao" id="select_type" type="hidden"></form>
              <div class="top_search_hint"></div>
            </div>
            <div class="ts_hotwords"></div>
          </div>
        </div>
        <div class="mid_fr">
          <div class="nav_mogu_qrcode">
            <img src="/homecss/dizhicss/images/upload_iezggyjwgrrdgztfgmzdambqmmyde_300x300.png" alt="蘑菇街客户端下载" width="70" height="70">
            <p>蘑菇街客户端</p>
          </div>
        </div>
      </div>
    </div>
    <div id="body_wrap">
      <div class="mu_wrap wrap clearfix">
        <!-- 左边侧边栏 -->
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
                <div class="mu_nav">
                  <div class="mu_title">优惠特权</div>
                  <ul class="mu_nav_item" id="JCouponList">
                      <a href="/youhui">店铺优惠券</a></li>
                  </ul>
                </div>
                <div class="mu_nav">
                  <div class="mu_title">
                    
                    <a href="/dizhi">地址管理</a>
                    
                  </div>
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
                    <li>
                      <a href="/users">基本信息</a></li>
                    <li>
                      <a href="/users/files">修改头像</a></li>
                  </ul>
                </div>
              </div>
            </div>
        
<!-- 内容区开始 -->
        <div id="address_wrap">
          <div class="addr_right topay" isaddress="true">
            <h2 class="addr_title">地址管理</h2>
            <div class="addr_edit" id="J_s_addr_edit">
              <div class="add_new_addr clearfix">
                <span id="J_saddAddress">+添加地址</span></div>
              <div class="addressbox_warp">
                <div class="addressbox" id="J_sAddrWrap"></div>
              <!-- 表单部分 -->
                <div class="addressbox_warp biao" style="display:none">
                  <div class="addressbox" id="J_sAddrWrap"></div>
                  <div class="address_wrapper">
                    <div class="__addressPop">
                      <!-- 表单开始 -->
                    <form action="/dizhi/dizhi" method="post">
                      <dl class="address_pop">
                        <!-- 城市三级联动 -->
                        <dt>省：</dt>
                        <dd class="pt_ie6hack">
                          <i class="needicon">*</i>
                          <select id="s_province" name="province"></select>
                          <label class="dt" for="">市：</label>
                           <select id="s_city" name="city" ></select>
                          <label class="dt" for="">区：</label>
                           <select id="s_county" name="county" ></select>
                          </select>
                          <span class="prompt city_select"></span>
                        </dd>
                        

                        <dt>邮政编码：</dt>
                        <dd>
                          <i class="needicon">*</i>
                          <input data-type="c" data-errormsg="请填写正确的邮政编码" data-normal="" class="text formsize_normal J_postcode J_form vm" name="emilecode" value="" type="text">
                          <span class="prompt mail_select"></span>
                        </dd>
                        <dt>街道地址：</dt>
                        <dd>
                          <i class="needicon">*</i>
                          <textarea data-type="*" data-min="5" data-max="100" data-normal="请填写街道地址，最少5个字，最多不能超过100个字" data-errormsg="请填写街道地址，最少5个字，最多不能超过100个字" class="textarea formsize_large J_street J_form" name="street" cols="30" rows="3"></textarea>
                          <span class="prompt breakline">请填写街道地址，最少5个字，最多不能超过100个字</span></dd>
                        <dt>收货人姓名：</dt>
                        <dd>
                          <i class="needicon">*</i>
                          <input data-type="*" data-errormsg="请填写收货人" data-normal="" class="text formsize_normal J_name J_form vm" name="rec" value="" type="text">
                          <span class="prompt name_select"></span>
                        </dd>
                        <dt>手机：</dt>
                        <dd>
                          <i class="needicon">*</i>
                          <input data-type="phone" data-errormsg="请填写正确的联系号码" data-normal="" class="text formsize_normal J_mobile J_form vm" name="recphone" value="" type="text">
                          <span class="prompt mobile_select"></span>
                          {{csrf_field()}}
                        </dd>
                        <dt></dt>
                        <dd class="pt10 oper_btn">
                          <input class="confirm_btn J_okbtn mr10" type="submit" style="border:none;cursor:pointer;" value="确认地址">
                          <input class="cancel_btn J_cancelbtn" style="border:none;cursor:pointer;" value="取消">
                        </dd>
                      </dl>
                      </form>
                        <!-- 表单结束 -->
                    </div>
                  </div>
  <!-- <div class="addressbox addressfirst addresslist" action="/trade/address/addfororder"> </div> --></div>
                <!-- <div class="addressbox addressfirst addresslist" action="/trade/address/addfororder"> </div> --></div>
              <div class="addr_section default" aid="2133414760">
                <ul class="clearfix">
                  <li class="name">asdasdasdas</li>
                  <li class="addr" data-province="重庆" data-city="重庆市" data-area="南川区" data-street="32132132132132132">重庆重庆市南川区32132132132132132</li>
                  <li class="zcode">410256</li>
                  <li class="mobile">155****5465</li>
                  <li class="oper">
                    <a href="javascript:;" class="J_default" aid="2133414760">默认地址</a>
                    <a href="javascript:;" class="edit" aid="2133414760">编辑</a>
                    <a href="javascript:;" class="del nobd" aid="2133414760">删除</a></li>
                  <li class="enaddr"></li>
                </ul>
              </div>
              <div class="addr_section " aid="2131449098">
                <ul class="clearfix">
                  <li class="name">阿萨德傻傻的</li>
                  <li class="addr" data-province="北京" data-city="北京市" data-area="朝阳区" data-street="啊实打实按时阿萨德按时">北京北京市朝阳区啊实打实按时阿萨德按时</li>
                  <li class="zcode">410000</li>
                  <li class="mobile">131****3212</li>
                  <li class="oper">
                    <a href="javascript:;" class="J_default" aid="2131449098">设为默认</a>
                    <a href="javascript:;" class="edit" aid="2131449098">编辑</a>
                    <a href="javascript:;" class="del nobd" aid="2131449098">删除</a></li>
                  <li class="enaddr"></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
<!-- 内容区结束 -->


      </div>
    </div>
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
              <img class="mgj_footer_helper_quoer_code" src="/homecss/dizhicss/images/upload_07dhaga6788g05g91890jjd7a4cc3_280x280.png"></li>
            <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
              <div class="color_999">美丽说</div>
              <img class="mgj_footer_helper_quoer_code" src="/homecss/dizhicss/images/upload_5ii9f90fdide17hj3jkj3bfd121e3_280x280.png"></li>
            <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
              <div class="color_999">uni引力</div>
              <img class="mgj_footer_helper_quoer_code" src="/homecss/dizhicss/images/upload_892b80cj47j51h95f44cai2e0b002_280x280.png"></li>
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
        <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010602002329&amp;acm=3.mce.1_10_19kz0.32170.0.YRFq8JAFcWV.m_223514">浙公网安备 33010602002329号</a>
        <b class="mgj_footer_b color_999">|</b></p>
    </div>
  </div>
</div>
  <script type="text/javascript" src="/homecss/usercss/js/zuoche.js"></script>
  <script class="resources library" src="/admincss/assets/js/area.js" type="text/javascript"></script>     
  <script type="text/javascript" src="/homecss/dizhicss/js/dizhi.js"></script>
  <script type="text/javascript">_init_area();</script>

  </body>

</html>