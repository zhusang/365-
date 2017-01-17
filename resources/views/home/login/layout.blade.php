<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 网页标签头部的图标 -->
    <link rel="icon" href="/homecss/logincss/images/171169993508.ico" type="image/x-icon">
    <title>
      @yield('title')_蘑菇街
    </title>

    <script type="text/javascript" src="/homecss/logincss/js/jquery-1.11.1.min.js"></script>

    @section('css')
    <link media="all" href="/homecss/logincss/css/index.css" type="text/css" rel="stylesheet">
    @show
    <style type="text/css">
    .login_wrap .logo_img { background: transparent url('/homecss/logincss/images/upload_ie4gkmjvgvqtiytdg4zdambqgiyde_220x52.png') no-repeat scroll 0% 0%; display: inline-block; width: 220px; height: 52px; }

      .login_wrap .logo_img { background: transparent url('/homecss/logincss/images/upload_ifrtkyztgzqtiytdg4zdambqhayde_440x104.png') no-repeat scroll 0% 0% / 100% auto; display: inline-block; width: 220px; height: 52px; }

    .country_select { float: left; width: 110px; height: 40px; margin-right: 10px; line-height: 1.5; border: 1px solid rgb(196, 196, 196); border-radius: 0px; color: rgb(51, 51, 51); font-size: 14px; padding: 4px 35px 4px 16px; -moz-appearance: none; background: rgb(255, 237, 235) url('/homecss/logincss/images/upload_52ff95279ih8leahhhl4l91l5729f_41x39.png') no-repeat scroll 100% center; outline: 0px none; transition: border-color 0.15s ease-in-out 0s; }

    .toggle-qrcode { height: 46px; width: 46px; background: transparent url('/homecss/logincss/images/upload_ie4tmnzrmuydmmbqhazdambqgqyde_46x46.png') no-repeat scroll 0% 0%; }

    .toggle-regular { height: 53px; width: 53px; background: transparent url('/homecss/logincss/images/upload_ifrdcojvgftdmmbqhazdambqmeyde_52x53.png') no-repeat scroll 0% 0%; }

    .scan-login { position: absolute; height: 80px; left: 60px; top: 30px; width: 200px; background: transparent url('/homecss/logincss/images/upload_ie4wiojrg43dombqhazdambqgqyde_190x37.png') no-repeat scroll 0% 0%; }
    .error_tip { background: rgb(255, 255, 248) url('/homecss/logincss/images/o613k_kqzfunswozbg2s2ugfjeg5sckzsew_16x16.png') no-repeat scroll 12px center; border: 1px solid rgb(255, 215, 151); height: 30px; line-height: 30px; color: rgb(255, 24, 119); width: 273px; padding-left: 40px; margin-bottom: 9px; display: none; }
    </style>
  </head>
  <body class="media_screen_1200">
    
    <div id="body_wrap">
      <div class="login_wrap">
      @section('logo')
        <div class="logo_wrap">
          <div class="logo">
            <a title="蘑菇街" href="http://mg.cn/" class="logo_img">
            </a>
          </div>
        </div>
      @show
        <div class="content clearfix" style="background: transparent url('/homecss/logincss/images/upload_541i9di2b3icf9j13f24e0bg7b1i6_1920x600.png') no-repeat scroll 0% 0%;">

          <div class="lg_banner" >
  

          </div>
          
         @section('con')
         <div class="rg_left" id="rg_content">
          <div class="lg_left ui-option-main-box" id="lg_content">

            <!-- 登录方式tab -->
            <div class="toggle-qrcode">
            </div>
            <div class="qrcode-wrapper hidden">
              <div class="toggle-regular">
              </div>
              <div class="scan-login">
              </div>
              <div id="qrcodeimg">
              </div>
              <a class="click-download" href="http://www.mogujie.com/apps/mobile?ptp=1.6AiTYG0q._foot.10.RoGbZ"
              target="_top">
                点击下载蘑菇街APP
              </a>
            </div>
            <div class="login_mod_tab">
              <div class="fl mod">
                <a class="lo_mod tab_on" lo-mod="normal" href="javascript:;" title="普通登入">
                  普通登录
                </a>
              </div>
              <div class="fl mod">
                <a class="eb_mod" lo-mod="ebmod" href="javascript:;" title="手机免密码登入">
                  手机无密码登录
                </a>
              </div>
            </div>
            <div id="signform" class="formbox">
              <p class="error_tip"  style="display:none;">
                  @if(session('error'))
                  <p class="error_tip"  style="display:block;">
                          {{session('error')}}
                  </p>
                  @endif
               </p>
              <div class="lg_form">

                <form method="post" action="/user/dologin">
                 
                  <!-- 正常登录 start -->
                  <div class="mod_box lo_mod_box" data-isshow="0">
                    <div class="ui-sign-item ui-name-item lg_item lg_name">
                      <input maxlength="32" class="ui-input pwd_text" data-type="username" name="uname"
                      placeholder="昵称/手机号" style="border-color: rgb(207, 207, 207);" value=""
                      type="text">
                    </div>
                    <div class="ui-sign-item ui-sign-common-item lg_item lg_pass">
                      <input maxlength="32" class="ui-input pwd_text" data-type="loginpassword"
                      name="pass" value="" placeholder="密码" style="border-color: rgb(207, 207, 207);"
                      type="password">
                    </div>
                  </div>
                  {{csrf_field()}}
                  <!-- 正常登录 end -->
                  
                  
                  <div class="lg_login clearfix">
                    <input value="登录" class="sub" type="submit">
                  </div>
                  <div class="ot_login">
                    <div class="ot_btn clearfix">
                      <a class="ui-ot-btn mr-42" href="javascript:;" data-type="qq">
                        <img src="/homecss/logincss/images/upload_5763lkilh8f7abid345gbhh167d79_19x19.png">
                        QQ登录
                      </a>
                      <a class="ui-ot-btn mr-42" href="javascript:;" data-type="weixin">
                        <img src="/homecss/logincss/images/upload_8d4dd486c18961b55lf0hbe5ebf7l_18x19.png">
                        微信登录
                      </a>
                      <a class="ui-ot-btn" href="javascript:;" data-type="sina">
                        <img src="/homecss/logincss/images/upload_5i9ki009bi6kkc7lg3iibbbel7f6k_18x19.png">
                        微博登录
                      </a>
                    </div>
                  </div>
                  <div class="lg_reg">
                    <a class="findpwd" href="http://mg.cn/user/findpwd">
                      忘记密码
                    </a>
                    <a class="regist" href="http://mg.cn/user/register">
                      免费注册
                    </a>
                  </div>
                  <input value="" id="imgcheckvalue" type="hidden">
                </form>
              </div>
            </div>
          </div>
        </div>
     </div>
      </div>
       @show
    <div class="login_foot">
      <div class="foot J_siteFooter" data-ptp="_foot">
        <div class="mgj_copyright">
          <div class="mgj_footer_helper">
            <div class="mgj_footer_helper_mod">
              <div class="mgj_footer_helper_mod_container">
                <h4 class="mgj_footer_helper_title color_666">
                  - 新手帮助 -
                </h4>
                <ul>
                  <li class="mgj_footer_helper_item">
                    <a rel="nofollow" target="_top" class="color_999" href="#">
                      常见问题
                    </a>
                  </li>
                  <li class="mgj_footer_helper_item">
                    <a rel="nofollow" target="_top" class="color_999" href="#">
                      自助服务
                    </a>
                  </li>
                  <li class="mgj_footer_helper_item">
                    <a rel="nofollow" target="_top" class="color_999" href="#">
                      联系客服
                    </a>
                  </li>
                  <li class="mgj_footer_helper_item">
                    <a rel="nofollow" target="_top" class="color_999" href="#">
                      意见反馈
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="mgj_footer_helper_mod">
              <div class="mgj_footer_helper_mod_container">
                <h4 class="mgj_footer_helper_title color_666">
                  - 权益保障 -
                </h4>
                <ul>
                  <li class="mgj_footer_helper_item">
                    <div class="color_999">
                      全国包邮
                    </div>
                  </li>
                  <li class="mgj_footer_helper_item">
                    <div class="color_999">
                      7天无理由退货
                    </div>
                  </li>
                  <li class="mgj_footer_helper_item">
                    <div class="color_999">
                      退货运费补贴
                    </div>
                  </li>
                  <li class="mgj_footer_helper_item">
                    <div class="color_999">
                      限时发货
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="mgj_footer_helper_mod">
              <div class="mgj_footer_helper_mod_container">
                <h4 class="mgj_footer_helper_title color_666">
                  - 支付方式 -
                </h4>
                <ul>
                  <li class="mgj_footer_helper_item">
                    <div class="color_999">
                      微信支付
                    </div>
                  </li>
                  <li class="mgj_footer_helper_item">
                    <div class="color_999">
                      支付宝
                    </div>
                  </li>
                  <li class="mgj_footer_helper_item">
                    <div class="color_999">
                      银联支付
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="mgj_footer_helper_mod">
              <div class="mgj_footer_helper_mod_container">
                <h4 class="mgj_footer_helper_title color_666">
                  - 移动客户端下载 -
                </h4>
                <ul>
                  <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                    <div class="color_999">
                      蘑菇街
                    </div>
                    <img class="mgj_footer_helper_quoer_code" src="/homecss/logincss/images/upload_07dhaga6788g05g91890jjd7a4cc3_280x280.png">
                  </li>
                  <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                    <div class="color_999">
                      美丽说
                    </div>
                    <img class="mgj_footer_helper_quoer_code" src="/homecss/logincss/images/upload_5ii9f90fdide17hj3jkj3bfd121e3_280x280.png">
                  </li>
                  <li class="mgj_footer_helper_item mgj_footer_helper_item_last">
                    <div class="color_999">
                      uni引力
                    </div>
                    <img class="mgj_footer_helper_quoer_code" src="/homecss/logincss/images/upload_892b80cj47j51h95f44cai2e0b002_280x280.png">
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="mgj_footer_mgjinfo">
            <ul>
              <li class="mgj_footer_mgjinfo_item">
                <a rel="nofollow" target="_top" class="color_666" href="#">
                  关于我们
                </a>
              </li>
              <li class="mgj_footer_mgjinfo_item">
                <a rel="nofollow" target="_top" class="color_666" href="#">
                  招聘信息
                </a>
              </li>
              <li class="mgj_footer_mgjinfo_item">
                <a rel="nofollow" target="_top" class="color_666" href="#">
                  联系我们
                </a>
              </li>
              <li class="mgj_footer_mgjinfo_item">
                <a rel="nofollow" target="_top" class="color_666" href="#">
                  商家入驻
                </a>
              </li>
              <li class="mgj_footer_mgjinfo_item">
                <a rel="nofollow" target="_top" class="color_666" href="#">
                  商家后台
                </a>
              </li>
              <li class="mgj_footer_mgjinfo_item">
                <a rel="nofollow" target="_top" class="color_666" href="#">
                  蘑菇商学院
                </a>
              </li>
              <li class="mgj_footer_mgjinfo_item">
                <a rel="nofollow" target="_top" class="color_666" href="#">
                  商家社区
                </a>
              </li>
            </ul>
            <p class="mgjhostname color_999">
              ©2017 Mogujie.com 杭州卷瓜网络有限公司
            </p>
          </div>
          <div class="mgj_footer_copyright">
            <p class="mgj_footer_copyright_container">
              <span class="mgj_footer_copyright_span color_999">
                营业执照注册号：
              </span>
              <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="/homecss/logincss/images/upload_ifrdimtcgeztgzdchazdambqmeyde_2480x3508.jpg">
                330106000129004
              </a>
              <b class="mgj_footer_b color_999">
                |
              </b>
              <span class="mgj_footer_copyright_span color_999">
                网络文化经营许可证：
              </span>
              <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="/homecss/logincss/images/upload_59405ekk9ieijjcidl1fijcg04c69_960x1385.jpg">
                浙网文（2016）0349-219号
              </a>
              <b class="mgj_footer_b color_999">
                |
              </b>
              <span class="mgj_footer_copyright_span color_999">
                增值电信业务经营许可证：
              </span>
              <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="/homecss/logincss/images/idid_ifqtmylfmvqwiy3emmzdambqgyyde_1239x1753.png">
                浙B2-20110349
              </a>
              <b class="mgj_footer_b color_999">
                |
              </b>
              <span class="mgj_footer_copyright_span color_999">
              </span>
              <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="/homecss/logincss/images/upload_506h1d771b5k20j9148ldjj0kdaab_960x1344.jpg">
                安全责任书
              </a>
              <b class="mgj_footer_b color_999">
                |
              </b>
              <span class="mgj_footer_copyright_span color_999">
              </span>
              <a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="#">
                浙公网安备 33010602002329号
              </a>
              <b class="mgj_footer_b color_999">
                |
              </b>
            </p>
          </div>
        </div>
      </div>
    </div>
    {{session()->forget('uid')}}
    <script type="text/javascript">
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
    </script>
@section('js')
    
@show
  </body>
</html>