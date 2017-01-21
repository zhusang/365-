            
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
                <div class="mu_nav mu_expand pb40">
                  <div class="mu_title">帐号设置</div>
                  <ul class="mu_nav_item">
                    <li class="c">
                      <a href="/users">基本信息</a></li>
                    <li>
                      <a href="/users/files">修改头像</a></li>
                  </ul>
                </div>
              </div>
            </div>
<script type="text/javascript" src="/homecss/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="/homecss/usercss/js/zuoche.js"></script>