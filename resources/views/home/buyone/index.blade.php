@extends('Home.Muban.layout')
   <!-- 内容 -->
@section('con')
<!-- ================================================================================================= -->

<link media="all" href="/homecss/buyonecss/css/yiyuan.css" type="text/css" rel="stylesheet">
    

    <div id="body_wrap" class="media_screen_1200">
      <div class="page_activity   screen-width-960 ">
        <div class="module_row module_row_10706 MOD_ID_35 has-log-mod" data-mid="10706" data-versionid="641558" data-editable="0" data-acm="3.mf.1_0_0.0.0.0.mf_1419_10706">
          <div class="mod_row MCUBE_MOD_ID_35 clearfix" style="width: px; background-color: ;" id="singlebanner">
            <input name="aBTabConfig" class="aBTabConfig" data-tabname="banner" data-isjointab="no" type="hidden">
            <div class="margin-block-box" style=" ">
              <!-- 根据填写中心区域宽度计算banner高度 -->
              <!-- 如果中心区域宽度每填或者选择沾满屏宽，就读取图片高度 -->
              <div class="bg_imgbox J_dynamic_imagebox full-width-wrap" style="height: 420px;">
                <img class="J_dynamic_img" src="/homecss/buyonecss/images/upload_56ibc5cg7bbg1kca72dkba366gabi_1900x420.jpg_999x999.v1c0.jpg" alt=""></div>
            </div>
          </div>
        </div>
        <div class="module_row module_row_10707 MOD_ID_6703 has-log-mod" data-mid="10707" data-versionid="338523" data-editable="0" data-acm="3.mf.1_0_0.0.0.0.mf_1419_10707">
          <div class="mod_row MCUBE_MOD_ID_6703" id="ID__seckill_smartwall">
            <div class="seckill-list clearfix" id="seckill-list">
             @foreach($buyGoods as $k=>$v)
              <div class="seckill-item fl">
                <div class="item-body">
                  <a href="http://shop.mogujie.com/detail/17okdci" target="_top" class="item-image J_dynamic_imagebox" need-remove="no">
                    <img class="J_dynamic_img" src="{{$v->gpic}}" alt=""></a>
                  <div class="item-timer">
                    <i class="icon-timer"></i>
                    <span class="date">02月15日</span>
                    <span class="time">10:00</span></div>
                  <div class="title yahei text_hide">{{$v->gname}}</div>
                  <div class="detail clearfix yahei">
                    <div class="price fl">
                      <img src="/homecss/buyonecss/images/upload_ie4tantgg44gmyzqmezdambqgqyde_42x38.png" alt="1元">
                      <del class="orgPrice">
                        <em>¥</em>{{$v->price}}</del></div>
                    <div class="btn-box">
                      <a href="/home/goods/index?gid={{$v->gid}}" target="_top" class="buy-btn soldout" data-ptp-cache-id="1._mf1_913_1419.0.0.nFubi">等待开抢</a></div>
                  </div>
                  <div class="stock-tag">
                    <span class="stock-tag-number">{{$v->cnt}}件</span></div>
                  <div class="layout">
                    
                  </div>
                </div>
              </div>
            @endforeach
             

            </div>
          </div>
        </div>
        <div class="module_row module_row_10799 MOD_ID_6833 has-log-mod" data-mid="10799" data-versionid="642574" data-editable="0" data-acm="3.mf.1_0_0.0.0.0.mf_1419_10799">
          <div class="mod_row MCUBE_MOD_ID_6833" id="ID__fastbuy_smartwall">
            <!-- -->
            <!-- //$list=M odel_FastBuy_Service::getRecommendItems(null, 12) -->
            <!-- // $list=$ data['formData']['list']['models']; -->
            <!--ajax请求地址-->
            <input class="ajax_url" value="http://qiang.mogujie.com/jsonp/recommendItem/1" type="hidden">
            <!--ajax请求参数-->
            <input class="ajax_param" param-name="" value="" type="hidden">
            <div class="wall-banner J_dynamic_imagebox" need-remove="no">
              <img class="J_dynamic_img" src="/homecss/buyonecss/images/upload_49a8jb43ee9ll7735b96b6j2j8b46_307x60.png_999x999.v1c0.png"  alt="">
            </div>
            <div class="wall-container">
            <!-- == 抢购热门 == -->
              <div class="wall-list clearfix">
                @foreach($info as $k=>$v)
                @if($v->scnt < 10)
                <div class="iwf fl">
                  <a href="#" class="img-wrap J_dynamic_imagebox" need-remove="no" target="_top" suffix-model="end" suffix-ratio="3:4">
                    <img class="J_dynamic_img" src="{{$v->gpic}}" alt="" style="height:260px;">
                    </a>
                  <p class="title yahei text_hide">{{$v->gname}}</p>
                  <div class="goods_info">
                    <div class="fav_num">
                      <strong>¥{{$v->tprice}}</strong>
                      <del>¥{{$v->price}}</del></div>
                  </div>
                  <a class="btnbanner" href="/home/goods/index?gid={{$v->gid}}" target="_top">立即购买
                  </a>
                </div>
                @endif
              @endforeach
                
              </div>
              <!-- ==== 抢购热门 ==== -->
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <div class="foot J_footertimer" data-ptp="_foot" data-svrtime="1462348289">
      <div class="wrap foot_wrap clearfix">
        <div class="foot_info">
          <a rel="nofollow" class="info_logo" href="http://www.mogujie.com/"></a>
          <div class="info_text">
            <p>营业执照注册号：
              <a rel="nofollow" href="upload_ifrdimtcgeztgzdchazdambqmeyde_2480x3508.jpg" target="_top">330106000129004</a></p>
            <p>增值电信业务经营许可证：
              <a rel="nofollow" target="_top" href="idid_ifqtmylfmvqwiy3emmzdambqgyyde_1239x1753.png">浙B2-20110349</a></p>
            <p style="height: auto;">网络文化经营许可证：
              <a rel="nofollow" target="_top" href="upload_59405ekk9ieijjcidl1fijcg04c69_960x1385.jpg">浙网文（2016）0349-219号</a></p>
            <p>
              <a rel="nofollow" target="_top" href="upload_506h1d771b5k20j9148ldjj0kdaab_960x1344.jpg">安全责任书</a></p>
            <p>
              <a target="_top" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010602002329" style="display: inline-block; text-decoration: none; height: 20px; line-height: 20px;">
                <img src="/homecss/buyonecss/images/upload_ifrgemjwgq3gemzthazdambqmeyde_20x20.png" style="float: left;">
                <span style="color: rgb(153, 153, 153);">&nbsp;浙公网安备 33010602002329号</span></a>
            </p>
            <p class="mgjhostname" title="guomai036059">©2016 Mogujie.com 杭州卷瓜网络有限公司</p></div>
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
              <a rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e14090533010053532r3hn000000&amp;ct=df&amp;a=1&amp;pa=500267&amp;tp=1.0.20.0.28.KXYH9AB" class="kx" target="_top"></a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- 牙牙はとてもかわいいね -->
  
 @endsection
