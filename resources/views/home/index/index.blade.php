@extends('Home.Muban.layout')

<!-- 内容 -->
@section('con')
        <!-- ============================================================== -->
                <div id="body_wrap"> <div class="page_activity  "><div class="module_row module_row_285061 MOD_ID_248606 has-log-mod" data-mid="285061" data-versionid="842853" data-editable="0" data-acm="3.mf.1_0_0.0.0.0.mf_15261_285061"><div class="mod_row MCUBE_MOD_ID_248606 J_mod_row_show" style="width: 100%; background-color: rgb(195, 79, 68);">

        
    <input id="J_searchbar_flag" value="show" type="hidden">
    <input class="gifImg" value="" type="hidden">

    <textarea style="display: none;" class="schema_config">{
        "mSlider" : {"warn":"\u56fe\u7247\u5c3a\u5bf8800x440","topic":"mSlide","maitTemplateIDs":"117","sourceType":"mce","sourceKey":"19221","__key":648865,"coolData":false,"number":"","sourceKey-bak":19221,"maitTemplateID":"117"},
        "navItem1SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"coat","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18784","__key":355787,"coolData":false,"number":"","sourceKey-bak":30263,"maitTemplateID":"1"},
        "navItem2SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"skirt","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18895","__key":539257,"coolData":false,"number":"","sourceKey-bak":18895,"maitTemplateID":"1"},
        "navItem3SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"pants","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18907","__key":967936,"coolData":false,"number":"","sourceKey-bak":30263,"maitTemplateID":"1"},
        "navItem4SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"underwear","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18913","__key":390736,"coolData":false,"number":"","sourceKey-bak":18895,"maitTemplateID":"1"},
        "navItem5SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"shoes","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18917","__key":285,"coolData":false,"number":"","sourceKey-bak":30263,"maitTemplateID":"1"},
        "navItem6SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"boyfriend","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18922","__key":333396,"coolData":false,"number":"","sourceKey-bak":18895,"maitTemplateID":"1"},
        "navItem7SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"bag","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18926","__key":260519,"coolData":false,"number":"","sourceKey-bak":30263,"maitTemplateID":"1"},
        "navItem8SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"sport","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18930","__key":268290,"coolData":false,"number":"","sourceKey-bak":18895,"maitTemplateID":"1"},
        "navItem9SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"makeups","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18934","__key":974877,"coolData":false,"number":"","sourceKey-bak":30263,"maitTemplateID":"1"},
        "navItem10SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"decoration","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18939","__key":600799,"coolData":false,"number":"","sourceKey-bak":30263,"maitTemplateID":"1"},
        "navItem11SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"household","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18943","__key":487682,"coolData":false,"number":"","sourceKey-bak":18895,"maitTemplateID":"1"},
        "navItem12SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"baby","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18949","__key":509578,"coolData":false,"number":"","sourceKey-bak":18895,"maitTemplateID":"1"},
        "navItem13SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"food","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18957","__key":842481,"coolData":false,"number":"","sourceKey-bak":30263,"maitTemplateID":"1"},
        "navItem14SK": {"warn":"\u5728\u53f3\u4fa7\u5bfc\u5165\u9ea6\u7530\u6570\u636e -&gt;","topic":"merchandise","maitTemplateIDs":"1","sourceType":"mce","sourceKey":"18961","__key":835563,"coolData":false,"number":"","sourceKey-bak":18895,"maitTemplateID":"1"}
    }</textarea>

                <!-- 背景色变换 类 -->                                        
    <div class="image-wrapper">
                                            
        <div class="pc_banner_wrapper clearfix">
            <!-- 导航 -->
    <!-- ==============   轮播图旁边的分类  ==================== -->
            <div class="pc_indexPage_nav_menu fl cube-acm-node has-log-mod">

    <!-- ================第一层分类 ============================-->
                <ul class="nav_list dropdown-menu" id='cate' role="mebu">
                @foreach($types as $k => $v)


                    <li class="nav_li nav_li_first" data-topic="<?php echo trim($v->datatype); ?>" >
                        <dl class="nav_wrap type" style="">
                            <dt>
                                <a rel="nofollow" class="catagory" target="_top" href="{{url('/search')}}?tt={{$v->datatype}}&tid={{$v->tid}}" tid="<?php echo trim($v->tid); ?>"> {{ $v->tname }} 
                                </a>
                            </dt>
                            <dd>
                                <span>
                                  @foreach($v->sub as $kk => $vv)
                                    <a rel="nofollow" class="first" target="_top" href="{{url('/search')}}?tt={{$vv->datatype}}&tid={{$vv->tid}}" tid="<?php echo trim($vv->tid); ?>"> {{ $vv->tname }}
                                    </a>
                                    &nbsp;
                              
                                 @endforeach

                                </span>
                            </dd>
                        </dl>
                    </li>
                @endforeach

                    
                </ul>
        <!-- ========================= 第一层分类结束 =============================== ========== -->
    <!-- =========================== 菜单鼠标放上显示大图 ===================================== -->
            <div class="nav_more" id="TopType" style="display: none;z-index: 999;">
       
                <!-- 遍历所有的顶级分类 -->
                @foreach($types as $k => $v)
                <div class="sub_catagory <?php echo trim($v->datatype); ?>" style="display: none;">
                     <!-- 主标题 -->
                    <h2>
                        <a rel="nofollow" target="_top" href="{{url('/search')}}?tt={{$v->datatype}}&tid={{$v->tid}}"
                        tid="<?php echo trim($v->tid); ?>"
                        >
                        {{$v->tname}}
                        </a>
                    </h2>
                @foreach($v->sub as $kk => $vv)
                     <dl class="nav_more_wrap">
                    <dt>
                    <!-- 小标题一 -->
                        <a rel="nofollow" target="_top" href="{{url('/search')}}?tt={{$vv->datatype}}&tid={{$vv->tid}}"
                        tid="<?php echo trim($vv->tid); ?>"
                        >      {{$vv->tname}}
                        </a>

                </dt>
                    <dd class="more_list clearfix">
                    @foreach($vv->sub as $kkk => $vvv)
                        <a rel="nofollow" data-ext-acm="3.mce.1_10_1889o.18898.0.9sMq7qHmFye.m_191954" target="_top" href="{{url('/search')}}?tt={{$vvv->datatype}}&tid={{$vvv->tid}}" style="color: rgb(153, 153, 153);" tid="<?php echo trim($vvv->tid); ?>"> {{ $vvv->tname }}
                        </a>
                    @endforeach
                        
                        
                    </dd>
                </dl>
                @endforeach
                </div>
                @endforeach

                
                    

                    




                   



                  


                    
                    
                   
                </div>
            </div>

<!--================================== TOP轮播================================ -->
        <div class="item_slider fl lazyData" data-source-type="mce" data-source-key="19221" data-manual="true">
            <div class="mslide_content_box" id="pc_banner_top"> 
                <div class="mslide_banners" id='toplb' data-eventid="016001000" style="background-color: rgb(195, 79, 68);">  
                <!-- 遍历轮播图 -->
                @foreach($lunbo as $k=>$v)
                <!-- 1 -->
                 <a rel="nofollow" class="preload_box_0 mslide_banner J_dynamic_imagebox cube-acm-node has-log-mod mslide_banner_show" data-ext-acm="3.mce.1_10_19w6e.19221.0.qxkq7qHmjkp.m_230775" data-log-content="acms=3.mce.1_10_19w6e.19221.0.qxkq7qHmjkp.m_230775;indexs=0;url=" href="#" img-src="" target="_top" style='
                <?php if ($k==0) {
                 echo 'z-index: 1; display: block;';
                }else{echo 'z-index: 0; display: none;';}
                ?>
                '> 
                    <img class="" id="{{$v->id}}" src="{{$v->pic}}" alt="" 
                    <?php
                      if($k==0){
                        echo "data-adaptive-background='1'
                    data-description='grandpa'";
                      }
                    ?>>
                 </a> 

                @endforeach 

                 </div>
                <!-- 轮播图的按钮  当鼠标放上时会到相应的图片 -->
                 <div class="mslide_dot_box anim_mslide_dot_box clearfix" id='toplbb'>
                    <!-- 1 -->
                     <a href="javascript:;" style="background:skyblue;border-radius: 50%;width: 16px;height: 16px;" class="dot_default">
                     <img class="dot_show_img" style="background:blue;border-radius: 50%;width: 16px;height: 16px;" src="/HomeCss/assets/images/o61vu_ieydmm3bmi2geodgmiytambqgiyde_40x40.png">
                     </a>
                        <!-- 2 -->
                     <a href="javascript:;"  style="background:white;border-radius: 50%;width: 16px;height: 16px;" class="dot_default">
                     <img class="dot_show_img" style="animation: 4000ms cubic-bezier(0.6, 0, 0.6, 1) 0s normal none 1 running rotate; background: transparent none repeat scroll 0% 0%;" src="/HomeCss/assets/images/o61vu_ieydmm3bmi2geodgmiytambqgiyde_40x40.png">
                     </a>
                        <!-- 3 -->
                     <a href="javascript:;"  style="background:white;border-radius: 50%;width: 16px;height: 16px;" class="dot_default">
                     <img class="dot_show_img" style="animation: 4000ms cubic-bezier(0.6, 0, 0.6, 1) 0s normal none 1 running rotate; background: transparent none repeat scroll 0% 0%;" src="/HomeCss/assets/images/o61vu_ieydmm3bmi2geodgmiytambqgiyde_40x40.png">
                     </a>
                        <!-- 4 -->
                     <a href="javascript:;"  style="background:white;border-radius: 50%;width: 16px;height: 16px;" class="dot_default">
                     <img class="dot_show_img" style="animation: 4000ms cubic-bezier(0.6, 0, 0.6, 1) 0s normal none 1 running rotate; background: transparent none repeat scroll 0% 0%;" src="/HomeCss/assets/images/o61vu_ieydmm3bmi2geodgmiytambqgiyde_40x40.png">
                     </a>
                            <!-- 5 -->
                     <a href="javascript:;"  style="background:white;border-radius: 50%;width: 16px;height: 16px;" class="dot_default">
                     <img class="dot_show_img" style="animation: 4000ms cubic-bezier(0.6, 0, 0.6, 1) 0s normal none 1 running rotate; background: transparent none repeat scroll 0% 0%;" src="/HomeCss/assets/images/o61vu_ieydmm3bmi2geodgmiytambqgiyde_40x40.png">
                     </a>
                        <!-- 6 -->
                     <a href="javascript:;"  style="background:white;border-radius: 50%;width: 16px;height: 16px;" class="dot_default">
                     <img class="dot_show_img" style="animation: 4000ms cubic-bezier(0.6, 0, 0.6, 1) 0s normal none 1 running rotate; background: transparent none repeat scroll 0% 0%;" src="/HomeCss/assets/images/o61vu_ieydmm3bmi2geodgmiytambqgiyde_40x40.png">
                     </a>
            </div>
        </div>
    </div>
<!-- =========================  轮播图结束  ========================= -->


<!--============================ 用户信息 =========================-->
            <div class="user_info fl">
                <div class="base_info">
                @if($user)
                <!-- ======= 登陆显示用户头像 ====== -->
                    <a rel="nofollow" target="_top" href="#" class="avatar" style="background-color: rgb(255, 255, 255); background-image: url('{{$user->pic}}'); background-size: 100% auto;">
                    </a>
                    <!-- ===== 登陆后会员标志 ===== -->
                    <a rel="nofollow" target="_blank" href="http://pc.mogujie.com/member/member.html" class="member" style="background: transparent url('/HomeCss/assets/images/upload_ifqwimzrgq4tenjrguzdambqgyyde_72x72.png') no-repeat scroll center center / 100% 100%;">
                        
                    </a>
                @else
                <!-- ======= 未登录显示默认头像 ========= -->
                    <a rel="nofollow" target="_top" href="#" class="avatar" style="background-color: #ff94c6; background-image: url('/HomeCss/assets/images/touxiang.png'); background-size: 45% auto;">
                    </a>
                @endif

                 @if($user)   
                <!-- ========== 登陆后显示问候语 以及 用户名 ========= -->
                    <div class="welcome">
                        <span class="txt">
                            <?php 

                                  date('Y-m-d H:i:s',time());
                                  $h = date('H');

                                  if ($h<9) {
                                    echo '早上好';
                                  }elseif ($h<12) {
                                    echo '上午好';
                                  }elseif ($h<14) {
                                    echo '中午好';
                                  }elseif ($h<19) {
                                    echo '傍晚好';
                                  }elseif ($h<24) {
                                    echo '晚上好';
                                  }else{
                                    echo '凌晨好';
                                  }

                             ?>
                        ！</span>
                        <span class="name">{{$user->uname}}</span>
                    </div>
                  <!--================= 登录显示 ================================== -->
                   
            
                    <a rel="nofollow" class="privileged" target="_top" href="#">
                        <span class="privilid-text">会员中心</span>
                    </a>
                    
                    <a rel="nofollow" target="_top" href="//order.mogujie.com/order/list4buyer" class="order_info" style="display: block;">
                        <ul class="wrapper clearfix">
                            <li class="order fl">
                                <p class="title">待付款</p>
                                <p class="num unpaidOrderCount">0</p>
                            </li>
                            <li class="order fl">
                                <p class="title m_title">待收货</p>
                                <p class="num unReceivedOrderCount">0</p>
                            </li>
                            <li class="order fl">
                                <p class="title">待评价</p>
                                <p class="num waitingRateOrderCount">0</p>
                            </li>
                        </ul>
                    </a>
                    
                   @else
                <!-- ============ 未登录显示问候语; 不显示用户名  ============= -->
                
                <div class="welcome" style="display: block;">
                        <span class="txt">菇凉好！</span>
                        <span class="name"><strong>欢迎来到蘑菇街~</strong></span>
                    </div>
            <!--================= 未登录显示 ================================== -->
                    <a rel="nofollow" href="/user/login" class="login_btn" style="display: block;"><span>登录</span></a>

                    <div class="register" style="display: block;">
                        <a rel="nofollow" target="_top" href="/user/register">免费注册</a>
                        <a rel="nofollow" target="_top" href="#">开小店</a>
                    </div>

                  @endif
                </div>
                <!--  -->
                <div class="foot_wrapper lazyData" data-source-type="mce" data-source-key="30799" data-manual="true" data-ptp="_keyword_30799">

                      <a rel="nofollow" target="_top" href="#" class="user-propa cube-acm-node has-log-mod" data-log-content="3.mce.1_10_19viq.30799.0.qxkq7qHmjji.m_230349" data-ext-acm="3.mce.1_10_19viq.30799.0.qxkq7qHmjji.m_230349"> 
                          <div class="propaganda">
                               <p class="top_title">保暖围巾</p> 
                               <p class="top-desc">保暖囤货 温暖过冬</p> 
                          </div>
                           <div class="live_show" style="background-image: url('/HomeCss/assets/images/nu_237ca16lk9deeih7184kl67hcg7f3_130x130.png');"> 
                           </div> 
                       </a> 
                 </div>

            </div>

<!-- =========================== 下拉分类菜单 =========================== -->

        <div class="pc_indexPage_nav_menu fl cube-acm-node out" id="float_nav_menu" style="position: fixed; top: 50px; height: 440px; z-index: 9999; display: none; background-color: rgba(51, 51, 51, 0.9); left: 349.5px;">
                
                <!-- <ul class="nav_list dropdown-menu" id="floatmenu" role="mebu"> -->

               <ul class="nav_list dropdown-menu" id="floatmenu" role="mebu">
                @foreach($types as $k => $v)


                    <li class="nav_li nav_li_first" data-topic="<?php echo trim($v->datatype); ?>" style="color:white;" >
                        <dl class="nav_wrap" style="">
                            <dt>
                                <a rel="nofollow" class="catagory" target="_top" href="#" style="color: rgb(255, 255, 255);"
                                tid="<?php echo trim($v->tid); ?>"
                                > {{ $v->tname }} </a>
                            </dt>
                            <dd>
                                <span>
                                  @foreach($v->sub as $kk => $vv)
                                    <a rel="nofollow" class="first" target="_top" href="#" style="color: rgb(255, 255, 255);"
                                    tid="<?php echo trim($v->tid); ?>"
                                    > {{ $vv->tname }}
                                    </a>
                                    &nbsp;
                              
                                 @endforeach

                                </span>
                            </dd>
                        </dl>
                    </li>
                @endforeach

               

                    
                </ul>
                <div class="nav_more" id="leftmenu" style="display: none;">
                    
                 <!-- 遍历所有的顶级分类 -->
                @foreach($types as $k => $v)
                <div class="sub_catagory <?php echo trim($v->datatype); ?>" style="display: none;">
                     <!-- 主标题 -->
                    <h2>
                        <a rel="nofollow" target="_top" href="#">
                        {{$v->tname}}
                        </a>
                    </h2>
                @foreach($v->sub as $kk => $vv)
                     <dl class="nav_more_wrap">
                    <dt>
                    <!-- 小标题一 -->
                        <a rel="nofollow" target="_top" href="#">      {{$vv->tname}}
                        </a>

                </dt>
                    <dd class="more_list clearfix">
                    @foreach($vv->sub as $kkk => $vvv)
                        <a rel="nofollow" data-ext-acm="3.mce.1_10_1889o.18898.0.9sMq7qHmFye.m_191954" target="_top" href="#" style="color: rgb(153, 153, 153);"> {{ $vvv->tname }}
                        </a>
                    @endforeach
                        
                        
                    </dd>
                </dl>
                @endforeach
                </div>
                @endforeach
                    
                    <!-- ================================================================== -->
                 
                        <!-- ================================================================== -->



                    
                   
                </div>
        </div>
    <!-- ======================  分类菜单结束  ============================ -->
            </div>
    </div>
</div>
</div>

<div class="module_row module_row_284730 MOD_ID_261706" data-mid="284730" data-versionid="843419" data-editable="0" data-acm="3.mf.1_0_0.0.0.0.mf_15261_284730">

    <div class="mod_row MCUBE_MOD_ID_261706 J_mod_row_show">
 
 <!--==============================js特效 左边移动变色div======================================= -->
    <div class="left-nav" id="leftnab_hidebox" style="display: none;">
        <div class="bd">
            <div class="nav-list clearfix"> 

                <a href="javascript:;" class="nav-item yahei" data-pos-index="1"> 专题</a> 
                <!-- 遍历所有一级分类 -->
                @foreach($types as $k=>$v)
                <a href="javascript:;" class="nav-item yahei" data-pos-index="3"> {{$v->tname}}</a> 
                @endforeach

            </div>
        </div>
    </div>
<!-- ========================= 移动变色特效结束  ============================= -->

</div>
</div>



<div class="module_row module_row_284735 MOD_ID_238815 has-log-mod" data-mid="284735" data-versionid="857436" data-editable="0" data-acm="3.mf.1_0_0.0.0.0.mf_15261_284735">
<div class="mod_row MCUBE_MOD_ID_238815 J_mod_row_show">
    

<!-- ================ 快抢 ========================== -->
   <div class="lazyData spcate-fastbuy-data fl" data-source-key="32247" data-ptp="_keyword_32247" data-manual="true" data-source-type="mce" data-floornum="">
                <!--快抢入口 容器-->
        <div class="spcate-entry-container fl spcate-fastbuy">
        

        <!--主区块-->
        <a class="spcate-mainblock fl spcate-block cube-acm-node has-log-mod" href="//qiang.mogujie.com/fastbuy/index?topId=1dopy&amp;topType=2&amp;eventTime=1483613575" target="_top" data-log-index="0"> 
        <div class="spcate-maintitle yahei spcate-colorfont">限时快抢</div>  
        

        <div class="spcate-label"> 
        <!--快抢价--> 
        </div> 

        <div class="spcate-maingoodsimg J_dynamic_imagebox" data-ptp="_keyword_32247">
       		 <img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_09ecbgaie2af9c3jed1j90b1c0de9_240x240.png_240x240.v1cac.png" alt="">
        </div>
        </a>



        <!--副区块-->
        <div class="spcate-subblocks fl">
         <a class="spcate-subblock spcate-block cube-acm-node has-log-mod" href="/buyone" data-log-content="3.mce.1_10_19oh0.32247.0.qxkq7qHmjjn.m_225782" data-log-index="1" target="_top" data-ext-acm="3.mce.1_10_19oh0.32247.0.qxkq7qHmjjn.m_225782"> 
	         <div class="spcate-subinfos fl"> 
	         	<div class="spcate-maintitle yahei">一元抢购</div>  
	         	<div class="spcate-subtitle yahei spcate-colorfont">整点抢好运</div>  
	         </div> 
	         <div class="spcate-subgoodsimg fr J_dynamic_imagebox" img-src="" data-ptp="_keyword_32247">
	         	<img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_10b69kd7b3i6gf04kddd0fb1dhbkd_180x180.png" alt="">
	         </div>
          </a> 

          <a class="spcate-subblock spcate-block cube-acm-node has-log-mod" href="" data-log-content="3.mce.1_10_19oho.32247.0.qxkq7qHmjjo.m_225794" data-log-index="2" target="_top" data-ext-acm="3.mce.1_10_19oho.32247.0.qxkq7qHmjjo.m_225794"> 
          <div class="spcate-subinfos fl"> 
          
          <div class="spcate-subtitle yahei spcate-colorfont">每天10点上新</div> 
          </div> 
          <div class="spcate-subgoodsimg fr J_dynamic_imagebox" img-src="" data-ptp="_keyword_32247"><img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_37jccal16d80fijcc0be6b5255392_180x180.png" alt=""></div>
          </a>
          </div>
          </div>
       </div>


 <!-- ================== 快抢第二个入口 ====================== -->
        <div class="lazyData spcate-tuan-data fl" data-source-key="32248" data-ptp="_keyword_32248" data-manual="true" data-source-type="mce" data-floornum="">
                <!--快抢入口 容器-->
        <div class="spcate-entry-container fl spcate-tuan"><!--主区块-->
         
          <a class="spcate-mainblock fl spcate-block cube-acm-node has-log-mod" href="" data-log-content="3.mce.1_10_19oh2.32248.0.qxkq7qHmjjj.m_225783" data-log-index="0" target="_top" data-ext-acm="3.mce.1_10_19oh2.32248.0.qxkq7qHmjjj.m_225783"> 

          <div class="spcate-maintitle yahei spcate-colorfont">团购特卖</div> 
         <!-- ==========  图一  ========= -->
            <div class="spcate-subtitle yahei spcate-colorfont">年末抄底价</div> 
            <div class="spcate-maingoodsimg J_dynamic_imagebox" img-src="" data-ptp="_keyword_32248">
            <img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_5k116ecgb65281egb35jh251kdaj8_324x384.png" alt="">
            </div>
            </a>

            <!--副区块-->
            <div class="spcate-subblocks fl">
            

             <a class="spcate-subblock spcate-block cube-acm-node has-log-mod" href="" data-log-content="3.mce.1_10_19oh6.32248.0.qxkq7qHmjjk.m_225785" data-log-index="1" target="_top" data-ext-acm="3.mce.1_10_19oh6.32248.0.qxkq7qHmjjk.m_225785"> 
             <div class="spcate-subinfos fl"> 
             <div class="spcate-maintitle yahei">品牌特卖</div>  
             <div class="spcate-timer spcate-colorfont" style="" data-time-left="54425000">
            <!-- ================ 时间 ============ -->
             		<span class="h"></span>
             </div>  
             </div> 
             <!-- ========== 图二 ========= -->
             <div class="spcate-subgoodsimg fr J_dynamic_imagebox" img-src="" data-ptp="_keyword_32248"><img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_8a4k0d79ag25bag5b2g6jg0ha3g3j_180x180.png" alt="">
             </div>
             </a>

          <a class="spcate-subblock spcate-block cube-acm-node has-log-mod" href="" data-log-content="3.mce.1_10_19oj0.32248.0.qxkq7qHmjjl.m_225818" data-log-index="2" target="_top" data-ext-acm="3.mce.1_10_19oj0.32248.0.qxkq7qHmjjl.m_225818"> 
              <div class="spcate-subinfos fl"> 
              	<div class="spcate-maintitle yahei">入仓质检</div> 
              	<div class="spcate-subtitle yahei spcate-colorfont">劣一赔三</div> 
              </div> 
              <!--======== 图片三=========== -->
              <div class="spcate-subgoodsimg fr J_dynamic_imagebox" img-src="" data-ptp="_keyword_32248"><img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_0k79e3jb7ij7fhcgk0c7i38fg1b4d_180x180.png" alt="">
       		 </div> 
        </a>

        </div>
        </div>
      </div>


        <div class="lazyData spcate-banner-data fl" data-source-key="32249" data-ptp="_keyword_32249" data-manual="true" data-source-type="mce" data-floornum="">
    <!-- =========== 快捷入口三 ================== -->
        <!--banner 容器-->
        <a class="spcate-entry-container spcate-banner cube-acm-node fl has-log-mod" href="" target="_top" data-log-content="3.mce.1_10_19r56.32249.0.qvKq7qHj8VH.m_227513" data-log-index="0"> 
       	 <div class="bannerTitle yahei">超值囤货</div> 
        	<div class="bannerSubTitle yahei">量贩年礼</div> 
        <div class="J_dynamic_imagebox bannerImg" img-src="" data-ptp="_keyword_32249">
        <!-- 图片三 -->
        <img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_19biacf8b1b20jk16b0iebi5aaebg_240x240.png" alt="">
        </div>
        </a>
            
        </div>
    </div>
  </div>


   <div class="bbtn" id="bbtn1" style="background: rgba(0,0,0,0.5);position: absolute;width: 20px;height:50px;top:1008px;left:160px;z-index:99999;cursor:pointer;color:white;font-size: 30px;">&lt;</div>
<div class="bbtn" id="bbtn2" style="background: rgba(0,0,0,0.5);position: absolute;width: 20px;height:50px;top:1008px;left:1090px;z-index:99999;cursor:pointer;color:white;font-size: 30px;">&gt;</div>


<!--=================================== 精选专题轮播图============================================= -->
<div class="module_row module_row_284734 MOD_ID_245345 has-log-mod" data-mid="284734" data-versionid="850192" data-editable="0" data-acm="3.mf.1_0_0.0.0.0.mf_15261_284734">
<div class="mod_row MCUBE_MOD_ID_245345 J_mod_row_show">

        
        
    <div class="careful_choice_module floor-con" data-module-title="专题">
        <!-- 左侧轮播占位 -->
        <div class="lazyData left_choice fl" data-source-type="mce" data-source-key="32255" data-manual="true" data-ptp="_keyword_32255">
  <div class="mslide_content_box" id="careful_choice_slider">
                  <div class="mslide_title">
                            <span class="mslide_title_block"></span>精选专题
                        </div>
 
  <div class="mslide_banners">
<!-- 控制轮播 -->
    <div id="ztlb" style="width:6000px;">
<!-- 控制轮播 -->

<!-- ===================  精选店铺专题 轮播第一大图 ========================== -->
<!-- 遍历所有轮播店铺 -->
    <div id="shop" class="mslide_banner preload_box_0 cube-acm-node  has-log-mod mslide_banner_show" data-log-content="3.mce.1_10_19wjk.32255.0.qvKq7qHj99H.m_231012" data-log-index="0" style="left: 0px;">
   
    @foreach($shoplb as $k=>$v)
   	
        <!-- 第一轮播大图 -->
        <div class="mslide_content_items fl" id="newa">
        
        <!-- ========大图======  -->
        	<!-- 大图跳转到店铺 -->
           	<!-- ==== 店铺链接 =====-->
              <a rel="nofollow" href="/shop?sid={{$v->sid->sid}}" class="J_dynamic_imagebox mslide_content_item_top  cube-acm-node loading_bg_70 has-log-mod" img-src="" target="_top" data-ext-acm="3.mce.1_10_19wjk.32255.0.qvKq7qHj99H.m_231012">
                      <div class="mslide_user_pic J_dynamic_imagebox" img-src="">
                     	<!--==== 店铺名称 ====-->
                          <span class="mslide_user_name"><?php echo $v->sid->sname;?></span>
                     	 	<img class="J_dynamic_img fill_img" src="" alt="">
                     </div>
                  
                   <!--===== 店铺logo图片 ====-->
                  <img class="J_dynamic_img fill_img" src="<?php echo $v->sid->slogo;?>" alt="">
              </a>
             

            <div class="mslide_content_item_goods">    
                   <!-- 店铺轮播小图一 -->
                   <!-- 小图都跳转到 商品详情 -->
                  
	            <a rel="nofollow" href="/home/goods/index?gid=<?php echo $v->lpic->gid;?>" class="mslide_content_good fl cube-acm-node has-log-mod" target="_top" data-ext-acm="3.mce.1_10_.33778.0.qvKq7qHj99I.m_4973178">
	                <div class="mslide_content_good_pic cube-acm-node J_dynamic_imagebox loading_bg_70 has-log-mod" img-src="" suffix-ratio="1:1">
	                				<!-- 商品图片 -->
	               	 	<img class="J_dynamic_img fill_img" src="<?php echo $v->lpic->gpic;?>" alt="">
	                </div>
	                							<!-- 商品价格 -->
	                <div class="mslide_content_good_price yahei ">¥<?php echo $v->lpic->price;?></div>
	            </a>
	       
	    
	       <!-- 小图二 -->
	      
	            <a rel="nofollow" href="/home/goods/index?gid=<?php echo $v->lpic2->gid;?>" class="mslide_content_good fl cube-acm-node has-log-mod" target="_top" data-ext-acm="3.mce.1_10_.33778.0.qvKq7qHj99J.m_4973184">
	                <div class="mslide_content_good_pic cube-acm-node J_dynamic_imagebox loading_bg_70 has-log-mod" img-src="" suffix-ratio="1:1">
	                	<!-- ==== 商品小图 ===== -->
	                	<img class="J_dynamic_img fill_img" src="<?php echo $v->lpic2->gpic;?>" alt="">
	                </div>
	                <!-- 商品价格 -->
	                <div class="mslide_content_good_price yahei ">¥<?php echo $v->lpic2->price;?></div>
	            </a>
	       
	    
	        <!-- 小图三 -->
	       
	            <a rel="nofollow" href="/home/goods/index?gid=<?php echo $v->lpic3->gid;?>" class="mslide_content_good fl cube-acm-node has-log-mod" target="_top" data-ext-acm="3.mce.1_10_.33778.0.qvKq7qHj99K.m_4973182">
	                <div class="mslide_content_good_pic cube-acm-node J_dynamic_imagebox loading_bg_70 has-log-mod" img-src="" suffix-ratio="1:1">
	                <!-- 商品小图 -->
	                	<img class="J_dynamic_img fill_img" src="<?php echo $v->lpic3->gpic;?>" alt=""></div>
	               	<!--商品价格  -->
	                <div class="mslide_content_good_price yahei ">¥<?php echo $v->lpic3->price;?>
	                </div>
	            </a>
	       
	    
	        <!-- 小图四 -->
	         
	            <a rel="nofollow" href="/home/goods/index?gid=<?php echo $v->lpic4->gid;?>" class="mslide_content_good fl cube-acm-node has-log-mod" target="_top" data-ext-acm="3.mce.1_10_.33778.0.qvKq7qHj99L.m_4973183">
	                <div class="mslide_content_good_pic cube-acm-node J_dynamic_imagebox loading_bg_70 has-log-mod" img-src="" suffix-ratio="1:1">
	                <!-- ==商品小图 === -->
	                <img class="J_dynamic_img fill_img" src="<?php echo $v->lpic4->gpic;?>" alt=""></div>
	                <!-- 商品价格 -->
	                <div class="mslide_content_good_price yahei ">¥<?php echo $v->lpic4->price;?></div>
	            </a>
	       
				  </div>
      </div>
   
		@endforeach

<!-- ======= 控制轮播结束 ======= -->
        </div>
<!-- ======== 控制轮播结束 ========= -->
</div>      

    <!-- =============  轮播图 换图按钮  =================== -->
                
               <!--  <div id="ztlbb" class="mslide_dot_box num_mslide_dot_box clearfix" style="position: absolute;top:-60px;">
                <a href="javascript:;" style='background: black; border-radius: 50%;' class="dot_default dot_show">01</a>
                <a href="javascript:;" style='background: black; border-radius: 50%;' class="dot_default">02</a>
                <a href="javascript:;" style='background: black; border-radius: 50%;' class="dot_default">03</a>
                <a href="javascript:;" style='background: black; border-radius: 50%;' class="dot_default">04</a>
                <a href="javascript:;" style='background: black; border-radius: 50%;' class="dot_default">05</a> -->
                <!-- dot_default {
                    background-position: -100px -40px;
                    color: #fff;
                    font-size: 11px;
                    height: 29px;
                    line-height: 30px;
                    padding: 0;
                    text-align: center;
                    width: 29px;
                } -->

                </div>
                </div>
        </div>

<!--=========================== 右侧流行元素占位 =====================================-->
        <div class="lazyData right_popular fr" data-source-type="mce" data-source-key="32259" data-manual="true" data-ptp="_keyword_32259">
            <div class="right_popular_content">
                <div class="right_popular_title">
                    流行元素
                </div>
                <div class="right_popular_goods">
    
        <a rel="nofollow" href="/search?tt=coat&tid=45" class="right_popular_content_good fl cube-acm-node has-log-mod" target="_top" data-ext-acm="3.mce.1_10_19wkq.32259.0.qvKq7qHj8ZI.m_231033" data-log-content="3.mce.1_10_19wkq.32259.0.qvKq7qHj8ZI.m_231033" data-log-index="0">
            <div class="right_popular_good_pic J_dynamic_imagebox loading_bg_70" img-src="">
              <img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_6kcgd4ikgb9k9135b59d7ac10372h_250x250.jpg_200x9999.v1c7e.70.jpg" alt="">
            </div>
            <div class="right_popular_good_title text-hide">外套套装</div>
        </a>
    

    
        <a rel="nofollow" href="/search?tt=coat&tid=93" class="right_popular_content_good fl cube-acm-node has-log-mod" target="_top" data-ext-acm="3.mce.1_10_19wks.32259.0.qvKq7qHj8ZJ.m_231034" data-log-content="3.mce.1_10_19wks.32259.0.qvKq7qHj8ZJ.m_231034" data-log-index="1">
            <div class="right_popular_good_pic J_dynamic_imagebox loading_bg_70" img-src="">
              <img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_2d0gaj940h1lg7g76i6a8e8310keg_250x250.jpg_200x9999.v1c7e.70.jpg" alt="">
            </div>
            <div class="right_popular_good_title text-hide">短发怎么穿</div>
        </a>
    

    
        <a rel="nofollow" href="/search?tt=coat&tid=48" class="right_popular_content_good fl cube-acm-node has-log-mod" target="_top" data-ext-acm="3.mce.1_10_19wky.32259.0.qvKq7qHj8ZK.m_231037" data-log-content="3.mce.1_10_19wky.32259.0.qvKq7qHj8ZK.m_231037" data-log-index="2">
            <div class="right_popular_good_pic J_dynamic_imagebox loading_bg_70" img-src="">
              <img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_2cd8d80h44hg5gb5610d55gdj508c_250x250.jpg_200x9999.v1c7e.70.jpg" alt="">
              </div>
            <div class="right_popular_good_title text-hide">棉服外套</div>
        </a>
    

    
        <a rel="nofollow" href="/search?tt=coat&tid=49" class="right_popular_content_good fl cube-acm-node has-log-mod" target="_top" data-ext-acm="3.mce.1_10_19wl0.32259.0.qvKq7qHj8ZL.m_231038" data-log-content="3.mce.1_10_19wl0.32259.0.qvKq7qHj8ZL.m_231038" data-log-index="3">
            <div class="right_popular_good_pic J_dynamic_imagebox loading_bg_70" img-src="">
              <img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_35fbl6fa916fi2cdjkklh27d6di3a_250x250.jpg_200x9999.v1c7e.70.jpg" alt=""></div>
            <div class="right_popular_good_title text-hide">毛绒绒</div>
        </a>
    

    
        <a rel="nofollow" href="/search?tt=coat&tid=53" class="right_popular_content_good fl cube-acm-node has-log-mod" target="_top" data-ext-acm="3.mce.1_10_19wl4.32259.0.qvKq7qHj8ZM.m_231040" data-log-content="3.mce.1_10_19wl4.32259.0.qvKq7qHj8ZM.m_231040" data-log-index="4">
            <div class="right_popular_good_pic J_dynamic_imagebox loading_bg_70" img-src="">
              <img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_16k29ih57gkke6j2590je1ihb2c46_250x250.jpg_200x9999.v1c7e.70.jpg" alt=""></div>
            <div class="right_popular_good_title text-hide">高领衫</div>
        </a>
    

    
        <a rel="nofollow" href="/search?tt=coat&tid=51" class="right_popular_content_good fl cube-acm-node has-log-mod" target="_top" data-ext-acm="3.mce.1_10_19wl6.32259.0.qvKq7qHj8ZN.m_231041" data-log-content="3.mce.1_10_19wl6.32259.0.qvKq7qHj8ZN.m_231041" data-log-index="5">
            <div class="right_popular_good_pic J_dynamic_imagebox loading_bg_70" img-src="">
              <img class="J_dynamic_img fill_img" src="/HomeCss/assets/images/upload_03id2k27k10hiadjh22bbc1dfleii_250x250.jpg_200x9999.v1c7e.70.jpg" alt=""></div>
            <div class="right_popular_good_title text-hide">派克大衣</div>
        </a>
    
					</div>
            	</div>
        	</div>
    	
    	</div>
    
	</div>
</div>
<!-- ======================  精选专题轮播结束    ================================= -->


<!-- =========== ====================== 推荐商家轮播图结束========================  =========== -->



<!-- 商品推荐 -->
@foreach($TuiJian as $k=>$v)
<div class="module_row module_row_284737 MOD_ID_260932 has-log-mod" data-mid="284737" data-versionid="844217" data-editable="0" data-acm="3.mf.1_0_0.0.0.0.mf_15261_284737">
<div class="mod_row MCUBE_MOD_ID_260932">
                                        
    <input class="bigPos" value="right" type="hidden">
    <input class="recommendContent" value="goods" type="hidden">

    

    <!--标题链接-->
    <div class="lazyData clearfix" data-ptp="_keyword_32270" data-source-type="mce" data-source-key="32270" data-manual="true">
        <div class="cateTitleBar yahei">
            <div class="sideIcon" style="background-color: rgb(173, 190, 123);"></div>
            {{$v->tname}}
            <div class="cateLinkBox"></div>
        </div>
    </div>


    <div class="floor-con clearfix" data-module-title="{{$v->tname}}">
        <!--左边大图-->
        <div class="lazyData clearfix fl" data-ptp="_keyword_18859" data-source-type="mce" data-source-key="18859" data-manual="true">
            <div class="big-banner-con fl loading_bg_120">
                <a rel="nofollow" target="_top" href="/search?tt={{$v->datatype}}&tid={{$v->tid}}" class="big-banner-con J_dynamic_imagebox cube-acm-node yahei has-log-mod" img-src="" data-log-content="3.mce.1_10_19w7c.18859.0.qvKq7qHkz6N.m_230792" data-log-index="0" data-ext-acm="3.mce.1_10_19w7c.18859.0.qvKq7qHkz6N.m_230792"> 
                    <div class="title title-base bigBanner-color text-hide yahei" style="color:gray;margin-top: 0px;margin-left: -80px;">  {{$v->tname}}
                    </div> 
                    <div class="sub-title title-base bigBanner-color text-hide yahei" style="color: rgb(153, 153, 153);">
                    </div> 
                    <div class="check-more subTitle-color text-hide" style="color: rgb(51, 51, 51);"> 去看看 
                    </div>
                    <img class="J_dynamic_img fill_img" src="@if(!empty($v->goods->gpic)){{$v->goods->gpic}}@endif" style="width:200px;height:280px;" alt="">
                </a>
            </div>
        </div>


        <div class="allColContainer fl">
            <!--大图商品-->
            <div class="lazyData clearfix fl one-pic-container" data-ptp="_keyword_32264" data-source-type="mce" data-source-key="32264" data-manual="true" style="float: left;">
                <a rel="nofollow" target="_top" href="/search?tt={{$v->datatype}}&tid={{$v->tid}}" class="one-pic J_dynamic_imagebox cube-acm-node has-log-mod" img-src="" data-log-content="3.mce.1_10_19pwc.32264.0.qvKq7qHkz7R.m_226706" data-log-index="0" data-ext-acm="3.mce.1_10_19pwc.32264.0.qvKq7qHkz7R.m_226706" style="float:undefined;" data-ptp="_keyword_32264"> 
                  <div class="title top-title title-color text-hide yahei" style="color: rgb(102, 102, 102);">
                  </div> 

                    <div class="sub-title top-subTitle subTitle-color text-hide yahei" style="color: red;margin-left: -10px;margin-top: -40px;">@if(!empty($v->goods->gdesc)) {{$v->goods->gdesc}} @endif
                    </div>
                       @if(!empty($v->goods->bpic)) 
                      <img class="J_dynamic_img fill_img" src="{{$v->goods->bpic}}" alt="">
                        @endif
               </a>
            </div>
            <!--四个方块-->
            <div class="lazyData clearfix fl" data-ptp="_keyword_32269" data-source-type="mce" data-source-key="32269" data-manual="true">
                <div class="multi-col-con fl">
                  <div class="multi-pic">   
                    @if(!empty($v->sub))
                    @foreach($v->sub as $kk=>$vv)
                    @if(!empty($vv->goods->gid))
                      <a rel="nofollow" target="_top" href="/home/goods/index? gid={{$vv->goods->gid}}" class="multi-pic-item-2 fl cube-acm-node has-log-mod" data-log-content="3.mce.1_10_19wu8.32269.0.qvKq7qHkz8S.m_231204" data-log-index="0" data-ext-acm="3.mce.1_10_19wu8.32269.0.qvKq7qHkz8S.m_231204"> 
                        <div class="top-title title-color text-hide yahei" style="color: rgb(102, 102, 102);"> {{$vv->tname}} 
                        </div> 

                        <div class="pic-box J_dynamic_imagebox" img-src="" data-ptp="_keyword_32269">
                             <img class="J_dynamic_img fill_img" src="{{$vv->goods->gpic}}" alt="">
                        </div> 
                      </a>   
                    @endif
                    @endforeach
                    @endif
                  </div>
                </div>
            </div>
        </div>


        <!--右边推荐-->
        <div class="lazyData clearfix fl tofuData" data-ptp="_keyword_31235" data-source-type="mce" data-source-key="31235" data-manual="true">
           
            <div class="tofu-col-con fl">
                <div class="recGoodsTitle yahei">
                  大家都在买
                </div>
                @foreach($v->allBuy as $e=>$f)
                @foreach($f as $ee=>$ff)
                <a class="recGoodsBox clearfix cube-acm-node has-log-mod" href="/home/goods/index?gid={{$ff->gid}}" target="_top" data-log-content="3.mce.1_4_1k58ss6.31235..Ay9q7qHpXMF.p_3_1-lc_201" data-log-index="0" data-ext-acm="3.mce.1_4_1k58ss6.31235..Ay9q7qHpXMF.p_3_1-lc_201"> 
                  <div class="recGoodsPicBox J_dynamic_imagebox fl" suffix-ratio="1:1" img-src="">
                      <img class="J_dynamic_img fill_img" src="{{$ff->gpic}}" alt="">
                  </div>

                  <div class="recGoodsInfo yahei"> 
                      <div class="goodsDesc">{{$ff->gname}}</div> 
                      <div class="goodsPrice">¥ {{$ff->tprice}}</div> 
                  </div>
                </a>
                @endforeach
                @endforeach


               

          </div>

      </div>

      
      <!-- 右边推荐结束 -->

      </div>
  </div>
</div>
@endforeach
  <!-- 商品推荐结束 -->









<div class="module_row module_row_284789 MOD_ID_157253 has-log-mod" data-mid="284789" data-versionid="850936" data-editable="0" data-acm="3.mf.1_0_0.0.0.0.mf_15261_284789"><div class="mod_row MCUBE_MOD_ID_157253">
    
            
            
    
    <div class="margin-block-box clearfix" style="margin-top: 20px;">
    </div>
    <div class="imagebox_title_content">
        <span class="imagebox_title_name fl">猜你喜欢</span>
    </div>

    <div class="wall_goods_box" id="wall_goods_box">

        <div class="param_container">

            
            <input class="ajax_url" value="" type="hidden">

            <input class="ajax_param" param-name="cKey" value="pc-index" autocomplete="off" type="hidden">
            <input class="ajax_param" param-name="fcid" value="52014" autocomplete="off" type="hidden">
            <input class="ajax_param" param-name="pid" value="9750" autocomplete="off" type="hidden">
            <input class="ajax_param" param-name="searchTag" value="" autocomplete="off" type="hidden">
            <input class="ajax_param" param-name="sort" value="pop" autocomplete="off" type="hidden">

            <input class="ajax_param" param-name="page" value="3" autocomplete="off" type="hidden">

            <input class="ajax_param" param-name="ratio" value="2:3" autocomplete="off" type="hidden">
            <input class="ajax_param" param-name="_version" value="1" type="hidden">

            <!-- 自定义参数配置 -->
       </div>

        <div class="" id="J_scroll_wallbox" style="height: auto;">

              
                         

      <div class="iwf goods_item" id="div" style="display: none;margin-right:10px;margin-top:10px;" data-tradeitemid="1k5ujj2" goods-index="0" is-exposed="true">
          <a rel="nofollow" href="/home/goods/index?gid=34" class="img J_dynamic_imagebox loading_bg_120" target="_top" suffix-model="end" suffix-ratio="2:3" img-src="http://s2.mogucdn.com/p2/161202/63057406_165g5e4i6fgd07f68e86l8lljhfhd_800x1200.jpg_280x420.v1cAC.70.jpg" need-remove="no" data-ptp-customc="_b_7c0d9456f3665fd9_wall_docs">
             <!-- 主图 -->
              <img class="J_dynamic_img fill_img" style="width:220px;height:320px;" src="/uploads/4d4226fd1fa703f6bafda3763f8863b9.png" alt="">
          </a>
          <p></p>
          <a rel="nofollow" target="_top" href="" class="goods_info_container">
              <p class="title fl" style="height: 44px;overflow: hidden;"></p>
              <div class="goods_info fl">
                  <b class="price_info yahei">￥188.00</b>
                  <span class="fav_num fr" style="margin-left: 140px;"><font>0</font>
                      <img src="/homecss/assets/images/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png" style="width:20px;"alt="">
                  </span>
              </div>
          </a>
      </div> 



      


    


     


              
        
             



              </div>
          </div>
      </div>
    </div>
  </div> 
</div>


        <!-- ================================内容结束 ============================= -->
@endsection

<!-- js特效 -->
@section('js')
<!-- 引入js特效 -->
<script type="text/javascript" src="/homecss/assets/js/index.js"></script>

@endsection

