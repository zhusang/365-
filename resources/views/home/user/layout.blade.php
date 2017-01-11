<!DOCTYPE html>
<html>
  
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>找回密码_蘑菇街</title>
    <meta name="keywords" content="蘑菇街,mogujie,买手,网购,买手街">
    <meta name="description" content="">
    <meta name="copyright" content="mogujie.com">
    <link rel="search" type="application/opensearchdescription+xml" href="http://portal.mogujie.com/opensearch.xml">
    <link rel="icon" href="/homecss/usercss/images/171169993508.ico" type="image/x-icon">
    <link media="all" href="/homecss/usercss/css/index_ff.css" type="text/css" rel="stylesheet"></head>
    <style type="text/css">
      .btn_check.disabled {
    background-position: -148px 0;
    cursor: default;
}

.formbox .error {
    background-position: 10px -39px;
    color: #ff5783;
    padding-left: 33px;
}


.formbox .success {
    background-position: 10px -79px;
    height: 22px;
    padding-left: 33px;
}
    </style>
  <body class="media_screen_1200 media_screen_960">
    <div id="body_wrap">
      <div class="registerbox">
        <div class="reg_hd">
          <a href="/" title="蘑菇街首页" class="logo_img"></a>
        </div>
        <div class="reg_bd find_pwd_wrap">
          <h3 class="fz14">安全设置-找回密码</h3>
          <div class="step_box step1_box">
            <!-- 内容区标头 -->
            @section('contitle')
            <ul class="clearfix nanji">
              <li>
                <span class="seqNumber">01/</span>
                <span>输入登录名</span></li>
              <li class="no2">
                <span class="seqNumber">02/</span>
                <span>验证信息</span></li>
              <li class="no3">
                <span class="seqNumber">03/</span>
                <span>重置密码</span></li>
            </ul>
            @show
          <!-- 内容区标头结束 -->
          </div>
          <!-- 内容区开始 -->
          @section('con')
          <div id="modelform" class="formbox info_verify_box">
            <form data-action="" class="formelem" method="post">
              <ul>
                <li>
                  <div class="ui-item inputbox validateitem ui-name">
                    <input maxlength="11" name="tel" value="" data-type="username" class="ui-input normalText display_u js_text_input" placeholder="请输入手机号" type="text">
                    <span id="phone" class="tips error display_u"></span></div>
                </li>
                <li class="lg_chk_wrap">
                  <p class="error" id="v2error"></p>
                  <div id="_content"></div>
                  <input class="imgchecklevel" type="hidden">
                  <span id="lg_chk_wrap"></span>
                </li>
              </ul>
              <input value="" id="imgcheckvalue" type="hidden">
              <div class="subbox">
                <a href="javascript:;" class="btn_check btn_sub_form disabled">下一步</a></div>
            </form>
          </div>
          @show
          <!-- 内容区结束 -->
          
          <div class="verify_foot clearfix">
            <b class="mr10 fl">上述方法无法找回？牙牙来帮助你：</b>
            <p>拨打客服热线：
              <b>0571-87361599</b>
            </p>
          </div>
        </div>
      </div>
      <div class="reg_ft" title="">&copy;Copyright 2010-2016 蘑菇街 Mogujie.com (增值电信业务经营许可证：浙B2-20110349)</div>
      </div>
      <script type="text/javascript" src="/homecss/assets/js/jquery-1.8.3.min.js"></script>
    @section('js')
    
    @show
    <div style="visibility: hidden; position: absolute;" id="userdata_el"></div>
  </body>

</html>