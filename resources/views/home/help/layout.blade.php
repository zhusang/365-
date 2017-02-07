<!DOCTYPE html>
<html>
  
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>蘑菇街 - 我的买手街！</title>
    <link rel="icon" href="/homecss/helpcss/images_find/171169993508.ico" type="image/x-icon">
    <link media="all" href="/homecss/helpcss/images_find/index.css" type="text/css" rel="stylesheet">
    <style type="text/css">
  .detail_content .content_nav {
    border-bottom: 1px solid #f5f5f5;
    height: 47px;
    line-height: 47px;
    padding-left: 30px;
}
.detail_content .content_detail {
    min-height: 50px;
    padding-left: 30px;
}
body, button, input, select, textarea {
    font: 12px/1.6 tahoma,arial,sans-serif;
}
html, body {
    color: #333;
}

.detail_content {
    background-color: #fff;
    float: left;
    margin-left: 20px;
    min-height: 892px;
    width: 724px;
}
.detail_content .content_detail {
    min-height: 50px;
}

.detail_content .content_detail #problem_title {
    color: #333;
    font-size: 16px;
    padding: 20px;
    text-align: center;
}

.detail_content .content_detail #problem_detail {
    color: #666;
    font-size: 12px;
    padding: 20px;
}

element.style {
    font-size: 14px;
    line-height: 2;
}


.detail_content .content_review {
    margin-top: 40px;
    text-align: center;
}

.detail_content .content_review .detailRe_title p {
    color: #999;
    font-size: 12px;
    margin-bottom: 10px;
    margin-top: 40px;
}

.detail_content .content_review .detailRe_title .solve {
    background-image: url("http://s18.mogucdn.com/p1/160312/upload_ie4tkmlbmm4wgmbug4zdambqgqyde_16x14.png");
    background-position: 20px center;
    background-repeat: no-repeat;
}
.detail_content .content_review .detailRe_title button {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 36px;
    cursor: pointer;
    height: 36px;
    margin: 10px;
    padding-left: 30px;
    width: 100px;
}


.detail_content .content_review .detailRe_title .doubt {
    background-image: url("http://s16.mogucdn.com/p1/160312/upload_ie4gembrmm4wgmbug4zdambqgiyde_16x14.png");
    background-position: 15px center;
    background-repeat: no-repeat;
}

    </style>
    </head>
  
  <body class="media_screen_1200">
    <!-- 中间区域 -->
    <div class="helpcenter-header">
      <div class="head_body">
        <div class="floatDiv">
          <a href="/help" style="display: block;">
            <img src="/homecss/helpcss/images_find/upload_ie4gmztggrtdkobrg4zdambqgiyde_205x54.png">
          </a>
        </div>
        <div class="floatDiv head_nav">
          <ul>
            <li>
              <a href="/help">首页</a></li>
            <li>
              <a class="liselect" href="/help/faqlist?id=4">常见问题</a></li>
          </ul>
        </div>
        <div style="position: relative;">
          <form action="/help/find">
          <div class="floatDiv head_search">
            <input placeholder="请输入你的问题关键字" name="seach" id="searchHeader" onkeyup="inputkeyUpHeader();" value="" type="text">
            <button class="head_but" onclick="searchHeader()">
              <img src="/homecss/helpcss/images_find/upload_ifrdinjxgy4wgobrg4zdambqmeyde_11x14.png">
              <div>搜索</div></button>
          </div>
          </form>
          <div class="selectListHeader nopalyHeader"></div>
        </div>
      </div>
    </div>
    <!-- 页面内容 -->
    <div style="background-color: rgb(245, 245, 245); min-height: 500px;">
      <div style="height: 20px;"></div>
      <div id="body_wrap" style="width: 960px; margin-left: auto; margin-right: auto;">
        <div>
          <div class="detail_bar">
            <dl>
              <dt>
                <span>常见问题分类</span></dt>
              <dd class="" id="barContent">
                <ul class="allul">
                  

                  <!-- 列表遍历 -->
                  @foreach($types as $k=>$v)
                  <li class="firstli">
                    <div class="title">
                      <img class="liImg1" src="/homecss/helpcss/images_find/upload_ie4tgntgmu2timbug4zdambqgqyde_6x9.png">
                      <img style="display:none" class="liImg2" src="/homecss/helpcss/images_find/upload_ifrtizbxmy2timbug4zdambqhayde_9x6.png">
                      <span class="spanCl">{{$v->name}}</span>
                    </div>
                    
                    
                    <ul class="secondUl" style="display:  none;">
                    @foreach($v->sub as $kk=>$vv)
                      <li> 
                        <img src="/homecss/helpcss/images_find/upload_ifrtcylgmzrtimbug4zdambqhayde_4x4.png">
                        <a href="/help/faqlist?id={{$vv->id}}">{{$vv->name}}</a>
                      </li>
                      
                      @endforeach
                    </ul>
                  
                  </li>
                  @endforeach
                </ul>
              </dd>
            </dl>
          </div>
         


        @section('con')
           
        @show


          <div class="clear"></div>
        </div>
      </div>
      <div style="height: 20px;"></div>
    </div>
   









    <div class="foot J_footertimer" data-ptp="_foot" data-svrtime="1486273334">
      <div class="wrap foot_wrap clearfix">
        <div class="foot_info">
          <a rel="nofollow" class="info_logo" href="http://www.mogujie.com/"></a>
          <div class="info_text">
            <p>营业执照注册号：
              <a rel="nofollow" href="upload_ifrdimtcgeztgzdchazdambqmeyde_2480x3508.jpg" target="_top">330106000129004</a></p>
            <p>增值电信业务经营许可证：
              <a rel="nofollow" target="_top" href="upload_ifqwiyrtmjrtimzvhezdambqgyyde_600x852.jpg">浙B2-20110349</a></p>
            <p style="height: auto;">网络文化经营许可证：
              <a rel="nofollow" target="_top" href="upload_59405ekk9ieijjcidl1fijcg04c69_960x1385.jpg">浙网文（2016）0349-219号</a></p>
            <p>
              <a rel="nofollow" target="_top" href="upload_506h1d771b5k20j9148ldjj0kdaab_960x1344.jpg">安全责任书</a></p>
            <p>
              <a target="_top" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010602002329" style="display: inline-block; text-decoration: none; height: 20px; line-height: 20px;">
                <img src="upload_ifrgemjwgq3gemzthazdambqmeyde_20x20.png" style="float: left;">
                <span style="color: rgb(153, 153, 153);">&nbsp;浙公网安备 33010602002329号</span></a>
            </p>
            <p class="mgjhostname" title="mogu131230">©2017 Mogujie.com 杭州卷瓜网络有限公司</p></div>
        </div>
        <div class="foot_link">
          <dl class="link_company">
            <dt>公司</dt>
            <dd>
              <a rel="nofollow" href="http://www.mogujie.com/us" target="_top">关于我们</a></dd>
            <dd>
              <a rel="nofollow" href="http://job.mogujie.com/social" target="_top">招聘信息</a></dd>
            <dd>
              <a rel="nofollow" href="http://www.mogujie.com/about" target="_top">联系我们</a></dd>
          </dl>
          <dl class="link_consumer">
            <dt>消费者</dt>
            <dd>
              <a rel="nofollow" href="http://www.mogujie.com/help" target="_top">消费者服务</a></dd>
            <dd>
              <a rel="nofollow" href="http://www.mogujie.com/help/contactus?con=%27callservice%27" target="_top">意见反馈</a></dd>
            <dd>
              <a rel="nofollow" href="http://www.mogujie.com/apps/mobile" target="_top">手机版下载</a></dd>
          </dl>
          <dl class="link_business">
            <dt>商家</dt>
            <dd>
              <a rel="nofollow" href="http://www.xiaodian.com/pc/joinmarket" target="_top">商家入驻</a></dd>
            <dd>
              <a rel="nofollow" href="http://www.xiaodian.com/pc/shopadmin/shopface" target="_top">商家后台</a></dd>
            <dd>
              <a rel="nofollow" href="http://peixun.xiaodian.com/" target="_top">蘑菇商学院</a></dd>
            <dd>
              <a rel="nofollow" href="http://bbs.xiaodian.com/" target="_top">商家社区</a></dd>
          </dl>
          <dl class="link_safe">
            <dt>权威认证</dt>
            <dd>
              <!-- <a rel="nofollow" class="pa" onclick="window.open('http://bank.pingan.com/index.shtml','_blank')" target="_blank" href="javascript:;"></a> -->
              <a rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e14090533010053532r3hn000000&amp;ct=df&amp;a=1&amp;pa=500267&amp;tp=1.0.20.0.28.KXYH9AB" class="kx" target="_top"></a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- 牙牙はとてもかわいいね -->
    <!-- app访问h5页面，或者魔方h5页面不调用gtm-->
    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->
    <div style="visibility: hidden; position: absolute;" id="userdata_el"></div>

    <script type="text/javascript" src="/homecss/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/homecss/helpcss/help.js"></script>
  </body>

</html>