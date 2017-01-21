@include('home.user.top')
    <div id="body_wrap">
      <div id="body_content_wrap">
        <div id="body" class="fm970">
          <div class="per_wrap clearfix" id="per_wrap">
            
          <!-- 左侧栏 -->
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
                    <a href="/dizhi">地址管理</a></div>
                </div>
                <div class="mu_nav mu_expand">
                  <div class="mu_title">安全设置</div>
                  <ul class="mu_nav_item">
                    <li  class="c">
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
<script type="text/javascript" src="/homecss/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="/homecss/usercss/js/zuoche.js"></script>
            
    <div class="per_content_wrap" id="per_content_wrap">
            <!-- 主题内容区 -->
            @if(session('success'))
              <!-- 遮罩层 -->
               
               
              <div class="light_box_fullbg" style="display: block;"></div>
              <!-- 提示框 -->
              <div class="vp_wrap" id="vp_wrap" style="display: block; opacity: 1; margin-left: -201px; margin-top: -108px;">
              <h5 class="vp_t">提示</h5>
              <a href="javascript:;" class="vp_cls">×</a>
              <div class="v_pop_box">
                <div class="vp_alert vp_inner" style="display: block;">
                  <p class="vp_cnt">{{session('success')}}</p>
                  <a href="javascript:;" class="vp_btn vp_btn_red vp_ok s">确定</a></div>
              </div>
            </div>        
            @endif
            @if(session('error'))
            <!-- 遮罩层 -->
               
              <div class="light_box_fullbg" style="display: block;"></div>
              <!-- 提示框 -->
              <div class="vp_wrap" id="vp_wrap" style="display: block; opacity: 1; margin-left: -201px; margin-top: -108px;">
              <h5 class="vp_t">提示</h5>
              <a href="javascript:;" class="vp_cls">×</a>
              <div class="v_pop_box">
                <div class="vp_alert vp_inner" style="display: block;">
                  <p class="vp_cnt">{{session('error')}}</p>
                  <a href="javascript:;" class="vp_btn vp_btn_red vp_ok e">确定</a></div>
              </div>
            </div>                 
            @endif
           


              <div class="main_content">
                <div class="content_header">用户密码</div>
                <div class="content_form">
                  <form class="pwd_input_form formbox" action="/users/pwds" method="post">
                    <p class="infoset validateitem current_input">
                      <span class="label">当前密码&nbsp;</span>
                      <input class="info_input currentpwd ui-input"  type="password">
                      <span class="tips display_u a"></span>
                    </p>
                    <p class="infoset validateitem inputbox">
                      <span class="label">新密码&nbsp;</span>
                      <input class="info_input newpwd ui-input" data-type="newpassword" name="pwd" id="js_passbox" type="password">
                      <span class="tips display_u b">密码需要是字母或数字，最小6位，最大20位</span>
                    </p>
                    <p class="infoset validateitem">
                      <span class="label">确认密码&nbsp;</span>
                      <input class="info_input confirmpwd ui-input" data-type="repass" data-rebox="js_passbox" type="password">
                      <span class="tips display_u c"></span>
                    </p>
                    {{csrf_field()}}
                    <!-- 极验验证码 -->
                    {!! Geetest::render('popup') !!}
                    <div class="subbox">
                      &nbsp; &nbsp; <button class="confirm_button" >确认</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
</div>
    <script type="text/javascript" src="/homecss/usercss/js/xgpwd.js"></script>
 </body>
</html>