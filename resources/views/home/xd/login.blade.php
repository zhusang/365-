<!DOCTYPE html>
<html>
  
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta charset="UTF-8">
    <title>商家后台</title>
    <link rel="icon" href="/homecss/xdcss/images/idid_ifqwmmrygrqtgnjumezdambqgyyde_57x57.png" type="image/x-icon">
    <!--[if lt IE 9]>
      <script type="text/javascript" src="https://s14.mogucdn.com/__newtown/mogu-global/assets/xiaodian/lib/es5-shim.min.js-756305f1.js,newtown/mogu-global/assets/xiaodian/lib/es5-sham.min.js-1a4ee9fc.js,newtown/mogu-global/assets/xiaodian/lib/console-polyfill.min.js-9c6e0616.js,newtown/mogu-global/assets/xiaodian/lib/json3.min.js-3e5137f1.js"></script>
    <![endif]-->
    <link media="all" href="/homecss/xdcss/images/index.css" type="text/css" rel="stylesheet"></head>
  
  <body class="  pace-done">
    <div class="pace  pace-inactive">
      <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
        <div class="pace-progress-inner"></div>
      </div>
      <div class="pace-activity"></div>
    </div>
    <div id="J_ManageTopNav">
      <div class="layout-nav-wrapper clearfix" data-reactid=".1">
        <div class="layout-logo" data-reactid=".1.0">
          <a href="/xdadmin" data-reactid=".1.0.0">
            <img src="/homecss/xdcss/images/idid_ifrwkobyguygmmjqmqzdambqhayde_198x32.png" alt="商家后台" data-reactid=".1.0.0.0" width="188px" height="32px"></a>
        </div>
        <div class="layout-menu" data-reactid=".1.1">
          <a href="#" class="nav-item nav-item-0" target="_top" data-reactid=".1.1.$0">入驻蘑菇街</a></div>
        <div class="layout-user" data-reactid=".1.2"></div>
      </div>
    </div>
    <div id="J_ManageBody">
      <div id="J_ManageContent">
        <div id="J_Page">
          <div data-reactid=".4">
            <div class="login-wrapper" data-reactid=".4.0">
              <div class="tab-wrapper clearfix" data-reactid=".4.0.0">
                <a href="javascript:;" class="item fl active" data-reactid=".4.0.0.0">蘑菇街商家</a>
               </div>
              <div class="user-password-wrapper" data-reactid=".4.0.2">
              <form action="/xdlogin/dologin" method="post">
                <input class="input" placeholder="手机号/昵称" data-reactid=".4.0.2.0" name="uname" value="">
                <input class="input" placeholder="密码" data-reactid=".4.0.2.1" name="upwd" type="password">
                <div data-reactid=".4.0.2.2"></div>
                <div data-reactid=".4.0.2.3"></div>
                <div data-reactid=".4.0.2.4" style="width: 100%;height:25px;margin: 5px;">
                <!-- 错误信息反馈 -->
                
                @if(session('error'))
                  <span style="color:#f55">
                    {{session('error')}}
                  </span>
                @endif
                
                </div>
                <!-- 极验验证码 -->
                    {!! Geetest::render('embed') !!}
                <div class="login-btn-wrapper" data-reactid=".4.0.2.5">
                  {{csrf_field()}}
                  <input class="btn-login" data-reactid=".4.0.2.5.1" type="submit" value='登录' style="border:none" >
                </form>
                  <p class="clearfix register-password" data-reactid=".4.0.2.5.3">
                    <a class="fl text-primary" href="/user/register" target="_top" data-reactid=".4.0.2.5.3.0">去注册</a>
                    <a class="fr" href="/user/findpwd" target="_top" data-reactid=".4.0.2.5.3.1">忘记密码</a></p>
                  <span id="transmark" style="display: none; width: 0px; height: 0px;"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="J_ManageFooter">
      <div data-reactid=".2">
        <div class="layout-footer-wrapper" data-reactid=".2.2">
          <div class="footer-bottom-line clearfix" data-reactid=".2.2.0">
            <div class="footer-bottom-link fl" data-reactid=".2.2.0.0">
              <div class="bottom-link-detail clearfix" data-reactid=".2.2.0.0.0">
                <a class="bottom-link0 fl" href="#" target="_top" data-reactid=".2.2.0.0.0.$0">关于小店</a>
                <a class="bottom-link1 fl" href="#" target="_top" data-reactid=".2.2.0.0.0.$1">意见反馈</a>
                <a class="bottom-link2 fl" href="#" target="_top" data-reactid=".2.2.0.0.0.$2">服务中心</a></div>
              <div class="bottom-link-title" data-reactid=".2.2.0.0.1">©2014-2017 Mogujie.com 杭州卷瓜网络有限公司</div></div>
            <div class="footer-certify fr" data-reactid=".2.2.0.1">
              <span data-reactid=".2.2.0.1.$0">
                <span data-reactid=".2.2.0.1.$0.0">营业执照注册号</span>
                <a target="_top" href="/homecss/xdcss/images/upload_ifrdimtcgeztgzdchazdambqmeyde_2480x3508.jpg" style="border-left: medium none;" data-reactid=".2.2.0.1.$0.1">330106000129004</a></span>
              <span data-reactid=".2.2.0.1.$1">
                <span data-reactid=".2.2.0.1.$1.0">ICP备案号</span>
                <a target="_top" href="#" style="border-left: medium none;" data-reactid=".2.2.0.1.$1.1">浙ICP备10044327号-3</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="mc-modal-wrap" style="position: fixed; display: none; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1025;" data-reactid=".0">
        <div style="position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; opacity: 0.5; z-index: 5;" data-reactid=".0.0"></div>
      </div>
    </div>
    <div>
      <div class="mc-modal-wrap" style="position: fixed; display: none; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1025;" data-reactid=".3">
        <div style="position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; opacity: 0.5; z-index: 5;" data-reactid=".3.0"></div>
      </div>
    </div>
  </body>

</html>