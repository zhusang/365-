<div class="mgj_rightbar" data-ptp="_sidebar" style="right: 0px;">
            <!--空的右侧边栏-->
            <div id="mgj_rightbar_top_blank" class="mgj_rightbar_960"></div>
            <!--方便定margin的空dediv-->
            <div id="mgj_rightbar_blank_div"></div>
            <!--用户头像-->
            @if($user)
            <div class="sidebar-item mgj-my-avatar">
                <a target="_top" href="/users" rel="nofollow">
                    <div class="img">
                        <img src="{{$user->pic}}" alt="" width="20" height="20"></div>
                </a>
            </div>
            @endif
            <!--购物车-->
            <div class="sidebar-item mgj-my-cart" style="left: 0px;">
                <a target="_top" href="http://cart.mogujie.com/cart/mycart" rel="nofollow">
                    <i class="s-icon"></i>
                    <div class="s-txt">购物车</div>
                    <div class="num" style="display: none;"></div>
                </a>
            </div>
            <!--优惠券-->
            <div class="sidebar-item mgj-my-coupon">
                <a target="_top" rel="nofollow" href="http://www.mogujie.com/trade/promotion/user/shopcoupon">
                    <i class="s-icon"></i>
                    <div class="s-txt">优惠券</div>
                    <div class="num" style="display: block;">1</div></a>
            </div>
            <!--钱包-->
            <div class="sidebar-item mgj-my-wallet">
                <a target="_top" rel="nofollow" href="https://payuserp.mogujie.com/wallet/home">
                    <i class="s-icon"></i>
                    <div class="s-txt">钱包</div></a>
            </div>
            <!--足迹-->
            <div class="sidebar-item mgj-my-browserlog">
                <a target="_top" rel="nofollow" href="http://track.mogujie.com/">
                    <i class="s-icon"></i>
                    <div class="s-txt">足迹</div></a>
            </div>
           <div class="sideBottom">
                <!--回到顶部-->
                <div class="sidebar-item mgj-back2top show" style="display:block;left: 0px;">
                    <a rel="nofollow" href="javascript:;">
                        <i class="s-icon"></i>
                    </a>
                </div>
            </div>
        </div>

<!-- ========-========================== 顶部头部 =================================== -->
<div id="header" class="header_2015 J_sitenav" data-ptp="_head">
    <div class="wrap clearfix"><a rel="nofollow" href="/" class="home fl">蘑菇街首页</a><ul class="header_top">@if($user)<li class="s1 has_icon user_meta"><a rel="nofollow" href="javascript:;">{{$user->uname}}</a><a rel="nofollow" href="/member" target="_top"></a><i class="icon_delta"></i><ol class="ext_mode" id="menu_personal"><li class="s2"><a target="_top" rel="nofollow" href="/users">个人设置</a></li><li class="s2"><a rel="nofollow" href="/user/logout">退出</a></li></ol></li><li class="s1 has_line message_center"><a rel="nofollow" href="javascript:;" class="ext_module mogutalk_btn J_msg open_msg micon __trace__" data-from="shopwidget_message" data-trace="global,shopwidget_message,click">消息<span class="num m_num" style="display: none;"></span></a></li><li class="s1 has_icon has_line user_fav"><a rel="nofollow" href="javascript:;">我的收藏</a><i class="icon_delta"></i><ul class="ext_mode"><li class="s2"><a target="_top" rel="nofollow" href="//favorite.mogujie.com/active/goodsfavs">收藏的商品</a></li><li class="s2"><a target="_top" rel="nofollow" href="//favorite.mogujie.com/active/shopfavs">收藏的小店</a></li><li class="s2"><a target="_top" rel="nofollow" href="//track.mogujie.com/">浏览足迹</a></li></ul></li>@else<li class="s1 show-nologin"><a rel="nofollow" href="/user/register">注册</a></li><li class="s1 show-nologin"><a rel="nofollow" href="/user/login">登录</a></li>@endif<li class="s1 myorder has_line"><a href="//order.mogujie.com/order/list4buyer" target="_top" class="text display_u" ref="nofollow">我的订单</a></li><li class="s1 has_line shopping_cart_v2"><a class="cart_info_wrap" href="//cart.mogujie.com/cart/mycart?traceid=" target="_top" ref="nofollow"><span class="cart_info">购物车</span></a><i class="icon_delta"></i><span class="shopping_cart_loading"></span></li><li class="s1 has_line has_icon custom_item"><a rel="nofollow" href="/help" ref="nofollow" target="_top">客户服务</a><i class="icon_delta"></i><ol class="ext_mode"><li class="s2"><a target="_top" rel="nofollow" href="/help">消费者服务</a></li><li class="s2"><a target="_top" rel="nofollow" href="//service.xiaodian.com/">商家服务</a></li><li class="s2"><a target="_top" rel="nofollow" href="/rule/index">规则中心</a></li></ol></li><li class="s1 has_line has_icon myxiaodian"><a href=".xiaodian.com/" ref="nofollow" target="_top" class="text display_u">我的小店</a><i class="icon_delta"></i><ol class="ext_mode"><li class="s2"><a target="_top" rel="nofollow" href=".xiaodian.com/pc/shopadmin/shopface">管理后台</a></li><li class="s2"><a target="_top" rel="nofollow" href="//bbs.xiaodian.com/">商家社区</a></li><li class="s2"><a target="_top" rel="nofollow" href="//peixun.xiaodian.com/">商家培训</a></li><li class="s2"><a target="_top" rel="nofollow" href=".xiaodian.com/pc/joinmarket">市场入驻</a></li></ol></li></ul></div>
</div>




