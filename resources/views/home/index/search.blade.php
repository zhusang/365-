@extends('Home.Muban.layout')


<!-- 内容 -->
@section('con')
<!-- ====================== 内容区域 ============================= -->
  <link media="all" href="/homecss/assets/css/search.css" type="text/css" rel="stylesheet"></head>
        <div id="body_wrap" 
        <?php
        if($tid == 0){
         echo 'style="background:white;"';
        }
        ?>
        >
            <div class="wrap">
                <div id="search_condition_box">
                    <div class="sp_topbanner clearfix" id="sp_topbanner" box='{{$tid}}'>
                <!-- 遍历所有的一级类 -->
                        <div class="sp_top_nav">
                            <ul class="nav_list">
                               <!--  <li class="on">
                                    <a href="">上衣</a>
                                </li> -->
                                @foreach($types as $k=>$v)
                                <!-- 如果判断标志相同就输出class属性 on -->
                                 <li class="<?php if($v->datatype==$datatype){echo 'on';}?>" tid="<?php echo trim($v->tid);?>">
                                    <a href="{{url('/search')}}?tt={{$v->datatype}}&tid={{$v->tid}}">{{$v->tname}}</a>
                                </li>
                               @endforeach
                            </ul>
                        </div>

                   <?php if($tid==0){echo '<div style="position:relative;left:60px;top:20px; width: 2300px;display: inline-block;font-size: 30px;">抱歉,没有找到您想要的商品,看看其他的商品吧</div>
                    <i><img src="/homecss/assets/images/NotF.jpg" alt="" style="width:200px;position:relative;left:60px;top:30px;"></i>';}?>
                        <div class="sp_type_nav" data-ptp="_cate">
                            <a class="right_img" target="_top" href="#">
                                <img src="/homecss/assets/images/er_11778chcakedjdg5akhcfdlhjk04e_200x240.jpg"></a>
                            <div class="type_sections">
                                
                                @foreach($types as $k=>$v)
                                @foreach($v->sub as $kk=>$vv)
                              
                                <?php if($vv->datatype==$datatype){
                                ?>
                                <div class="type_section first">
                                     <!-- 二级类 -->

                                    <dt>
                                        <a href="{{url('/search')}}?tt={{$vv->datatype}}&tid={{$vv->tid}}" tid="<?php echo trim($vv->tid);?>"><?php echo $vv->tname;?></a>
                                    </dt>

                                    <dd>
                                        <a class="cat_img" href="">
                                            <img src="/homecss/assets/images/er_6i98c9h7gck86fj2dhj0f477a9je0_130x130.jpg"></a>
                                        <ul>
                                        <!-- 三级类 -->
                                        @foreach($vv->sub as $kkk=>$vvv)
                                            <li>
                                                <a href="{{url('/search')}}?tt={{$vvv->datatype}}&tid={{$vvv->tid}}" class="" tid="<?php echo trim($vvv->tid);?>"><?php echo $vvv->tname;?></a>
                                            </li>
                                         @endforeach
                                        </ul>
                                    </dd>

                                </div>
                               <?php } ?>

                                @endforeach
                                @endforeach


                               



                              
                            </div>
                        </div>
                   

                    </div>
                </div>



         <!--======= 内容区标题 ======-->
                <h3 class="sub_title" id="category_all"><?php if($tid!=0){
                foreach($types as $k => $v){
                if($v->datatype==$datatype){
                echo $v->tname;
                }
                }
                }else{echo '所有商品';} ?></h3>


                <div class="wall_goods_box" id="wall_goods_box">
                    <!-- ajax 参数 param-name里填参数名 value填参数值-->
                    <div class="param_container">
                        <input class="ajax_param" param-name="_version" value="1" type="hidden">
                        <input class="ajax_url" value="http://list.mogujie.com/search" type="hidden">
                        <input class="ajax_param" param-name="sort" value="pop" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="_mgjuuid" value="9f7dcd2f-2743-45fe-9008-7657c9d7044e" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="width" value="220" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="showH" value="330" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="height" value="330" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="cKey" value="pc-wall-v1" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="page" value="1" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="userId" value="16gchak" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="action" value="clothing" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="fcid" value="" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="ad" value="0" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="ptp" value="1.Pr8XD.0.0.ixEro" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="showW" value="220" autocomplete="off" type="hidden">
                        <input class="ajax_param" param-name="ratio" value="2:3" type="hidden">
                    </div>
                    

                <!-- ================== 条件查询区域 ================== -->
                    <div class="nav_container">
                        <form data-ptp-customc="_b_7c0d9456f3665fd9_tagList" action="" method="GET">
                            <div class="sp_filter clearfix sort_nav">
                                <div class="nav_left fl clearfix">
                                    <div class="sort_container fl">
                                        <a data-ptp-customc="_b_7c0d9456f3665fd9_sortList" sort-key="pop" class="sort fl on" href="javascript:;" data-mark="sort" tab-index="0">综合
                                        </a>

                                        <a data-ptp-customc="_b_7c0d9456f3665fd9_sortList" sort-key="sell" class="sort fl" href="javascript:;" data-mark="sort" tab-index="1">销量
                                        </a>

                                        <a data-ptp-customc="_b_7c0d9456f3665fd9_sortList" sort-key="new" class="sort fl" href="javascript:;" data-mark="sort" tab-index="2">新品
                                        </a>

                                        </div>
                                    <div class="price fl">
                                        <div class="txt">
                                            <span class="rmb">￥</span>
                                            <input class="from" value="" name="minPrice" type="text"></div>
                                        <span class="divid">-</span>
                                        <div class="txt">
                                            <span class="rmb">￥</span>
                                            <input class="to" value="" name="maxPrice" type="text"></div>
                                        <a class="sbt definedprice" href="#" data-mark="definedPrice">确定</a></div>
                                    <ul class="price_choice fl">
                                        <li class="price_citem">
                                            <a data-ptp-customc="_b_7c0d9456f3665fd9_priceList" href="#" data-mark="price"><i>49</i>-<i>66</i></a></li>
                                        <li class="price_citem">
                                            <a data-ptp-customc="_b_7c0d9456f3665fd9_priceList" href="#" data-mark="price"><i>66</i>-<i>89</i></a></li>
                                        <li class="price_citem">
                                            <a data-ptp-customc="_b_7c0d9456f3665fd9_priceList" href="#" data-mark="price"><i>89</i>-<i>299</i></a></li>
                                    </ul>
                                </div>
                                <div class="nav_right fl clearfix"></div>
                            </div>
                        </form>
                    </div>


                    <!--插入图强html容器-->

     <!-- ======================= 遍历的商品 ======================== -->
                    <div class="common_goods_wall J_scroll_wallbox clearfix" id="common_goods_wall" style="">
                        

         <!-- ===================== 瀑布流复制的div =============== -->
                        <div class="iwf goods_item" id='div' style="display: none;" data-tradeitemid="1k5ujj2" goods-index="0" is-exposed="true">
                            <a rel="nofollow" href="" class="img J_dynamic_imagebox loading_bg_120" target="_top" suffix-model="end" suffix-ratio="2:3" img-src="http://s2.mogucdn.com/p2/161202/63057406_165g5e4i6fgd07f68e86l8lljhfhd_800x1200.jpg_280x420.v1cAC.70.jpg" need-remove="no" data-ptp-customc="_b_7c0d9456f3665fd9_wall_docs">
                               <!-- 主图 -->
                                <img class="J_dynamic_img fill_img" style="width:220px;height:320px;" src="63057406_165g5e4i6fgd07f68e86l8lljhfhd_800x1200.jpg_280x420.v1cac.70.jpg" alt="">
                            </a>
                            <a rel="nofollow" target="_top" href="" class="goods_info_container">
                                <p class="title fl" style="height: 44px;">CICISHOP秋季日系甜美百搭麂皮绒短款厚外套女6030</p>
                                <div class="goods_info fl">
                                    <b class="price_info yahei">¥265</b>
                                    <span class="fav_num fr"><font></font>
                                        <img src="/homecss/assets/images/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png" alt="">
                                    </span>
                                </div>
                            </a>
                        </div>

                        











                    </div>
                    <div class="page_container">
                        <div class="pagination pd_tb" style="">
                            <a href="http://list.mogujie.com/book/clothing/50003/1/pop?sort=pop&amp;action=clothing&amp;fcid=50003&amp;ad=0#category_all" rel="nofollow" class="c">1</a>

                            <a href="http://list.mogujie.com/book/clothing/50003/2/pop?sort=pop&amp;action=clothing&amp;fcid=50003&amp;ad=0#category_all" rel="nofollow" class="">2</a>

                            <a href="http://list.mogujie.com/book/clothing/50003/3/pop?sort=pop&amp;action=clothing&amp;fcid=50003&amp;ad=0#category_all" rel="nofollow" class="">3</a>

                            <a href="http://list.mogujie.com/book/clothing/50003/4/pop?sort=pop&amp;action=clothing&amp;fcid=50003&amp;ad=0#category_all" rel="nofollow" class="">4</a>

                            <a href="http://list.mogujie.com/book/clothing/50003/5/pop?sort=pop&amp;action=clothing&amp;fcid=50003&amp;ad=0#category_all" rel="nofollow" class="">5</a>

                            <i>...</i>
                            <a href="http://list.mogujie.com/book/clothing/50003/100/pop?sort=pop&amp;action=clothing&amp;fcid=50003&amp;ad=0#category_all" rel="nofollow" class="">100</a>

                            <a href="http://list.mogujie.com/book/clothing/50003/2/pop?sort=pop&amp;action=clothing&amp;fcid=50003&amp;ad=0#category_all" rel="nofollow" class="">下一页&gt;</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- ======================================内容结束========================================= -->

@endsection



@section('foot')
<!--==================== ===========================  蘑菇街尾部  ==================================== -->

<div class="foot J_siteFooter" data-ptp="_foot" style="background: rgb(245, 245, 245) none repeat scroll 0% 0%;"><div class="mgj_copyright"><div class="mgj_footer_helper"><div class="mgj_footer_helper_mod"><div class="mgj_footer_helper_mod_container"><h4 class="mgj_footer_helper_title color_666">- 新手帮助 -</h4><ul><li class="mgj_footer_helper_item"><a rel="nofollow" target="_top" class="color_999" href="/help/faq?con=%27commonproblem%27&amp;acm=3.mce.1_10_19kyo.32260.0.9sMq7qHSkR0.m_223508">常见问题</a></li><li class="mgj_footer_helper_item"><a rel="nofollow" target="_top" class="color_999" href="/help/selfservice?con=%27autoservice%27&amp;acm=3.mce.1_10_19kyk.32260.0.9sMq7qHSkR1.m_223506">自助服务</a></li><li class="mgj_footer_helper_item"><a rel="nofollow" target="_top" class="color_999" href="/help/contactus?con=%27callservice%27&amp;acm=3.mce.1_10_19kym.32260.0.9sMq7qHSkR2.m_223507">联系客服</a></li><li class="mgj_footer_helper_item"><a rel="nofollow" target="_top" class="color_999" href="//cs.mogujie.com/dispute/feedback.html?acm=3.mce.1_10_19kyi.32260.0.9sMq7qHSkR3.m_223505">意见反馈</a></li></ul></div></div><div class="mgj_footer_helper_mod"><div class="mgj_footer_helper_mod_container"><h4 class="mgj_footer_helper_title color_666">- 权益保障 -</h4><ul><li class="mgj_footer_helper_item"><div class="color_999">全国包邮</div></li><li class="mgj_footer_helper_item"><div class="color_999">7天无理由退货</div></li><li class="mgj_footer_helper_item"><div class="color_999">退货运费补贴</div></li><li class="mgj_footer_helper_item"><div class="color_999">限时发货</div></li></ul></div></div><div class="mgj_footer_helper_mod"><div class="mgj_footer_helper_mod_container"><h4 class="mgj_footer_helper_title color_666">- 支付方式 -</h4><ul><li class="mgj_footer_helper_item"><div class="color_999">微信支付</div></li><li class="mgj_footer_helper_item"><div class="color_999">支付宝</div></li><li class="mgj_footer_helper_item"><div class="color_999">白付美支付</div></li></ul></div></div><div class="mgj_footer_helper_mod"><div class="mgj_footer_helper_mod_container"><h4 class="mgj_footer_helper_title color_666">- 移动客户端下载 -</h4><ul><li class="mgj_footer_helper_item mgj_footer_helper_item_last"><div class="color_999">蘑菇街</div><img class="mgj_footer_helper_quoer_code" src="./images/upload_07dhaga6788g05g91890jjd7a4cc3_280x280.png"></li><li class="mgj_footer_helper_item mgj_footer_helper_item_last"><div class="color_999">美丽说</div><img class="mgj_footer_helper_quoer_code" src="./images/upload_5ii9f90fdide17hj3jkj3bfd121e3_280x280.png"></li><li class="mgj_footer_helper_item mgj_footer_helper_item_last"><div class="color_999">uni引力</div><img class="mgj_footer_helper_quoer_code" src="./images/upload_892b80cj47j51h95f44cai2e0b002_280x280.png"></li></ul></div></div></div><div class="mgj_footer_otherlink"><p class="mgj_footer_otherlink_container"><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href=".meilishuo.com/?mt=12.32159.r223043.29194&amp;acm=3.mce.1_10_19kqm.32159.0.9sMq7qHSl7u.m_223363">美丽说</a><b class="mgj_footer_b color_666"> | </b>
<a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="#">蘑菇街游戏</a>
<b class="mgj_footer_b color_666"> | </b>
<a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="#">淘粉吧</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/dapei/?acm=3.mce.1_10_19kr4.32159.0.9sMq7qHSl7x.m_223372">穿衣搭配</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/17moo0?acm=3.mce.1_10_19kr6.32159.0.9sMq7qHSl7y.m_223373">秋季女装新款</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/18eak?acm=3.mce.1_10_19kr8.32159.0.9sMq7qHSl7z.m_223374">秋季连衣裙长袖</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/11lyf2?acm=3.mce.1_10_19kra.32159.0.9sMq7qHSl7A.m_223375">秋季孕妇装</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//qianbao.qq.com/?acm=3.mce.1_10_19krc.32159.0.9sMq7qHSl7B.m_223376">QQ钱包</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href=".chinasspp.com/?acm=3.mce.1_10_19kre.32159.0.9sMq7qHSl7C.m_223377">时尚品牌网</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href=".jia.com/?acm=3.mce.1_10_19krg.32159.0.9sMq7qHSl7D.m_223378">装修</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/dapei/1jdi?acm=3.mce.1_10_19kri.32159.0.9sMq7qHSl7E.m_223379">背带裤搭配</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href=".eelly.com/?acm=3.mce.1_10_19kqu.32159.0.9sMq7qHSl7F.m_223367">衣联网</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href=".boosj.com/?acm=3.mce.1_10_19kqw.32159.0.9sMq7qHSl7G.m_223368">播视网视频</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href=".hc360.com/?acm=3.mce.1_10_19kqy.32159.0.9sMq7qHSl7H.m_223369">慧聪网</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/dapei/1167u?acm=3.mce.1_10_19o9w.32159.0.9sMq7qHSl7I.m_225654">衬衫搭配</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/dapei/16hle?acm=3.mce.1_10_19oa0.32159.0.9sMq7qHSl7J.m_225656">牛仔外套搭配图片</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/dapei/15jdxm?acm=3.mce.1_10_19oa2.32159.0.9sMq7qHSl7K.m_225657">冬装时尚搭配</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/dapei/125s5u?acm=3.mce.1_10_19oa4.32159.0.9sMq7qHSl7L.m_225658">针织衫搭配</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/dapei/11bm1q?acm=3.mce.1_10_19oa6.32159.0.9sMq7qHSl7M.m_225659">牛仔衣搭配</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/dapei/12u28?acm=3.mce.1_10_19oa8.32159.0.9sMq7qHSl7N.m_225660">风衣搭配</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/cate/mei_0_mianmo_11y?acm=3.mce.1_10_19oac.32159.0.9sMq7qHSl7O.m_225662">补水面膜排行榜</a><b class="mgj_footer_b color_666"> | </b><a rel="nofollow" target="_top" class="mgj_footer_a color_666" href="//ai.mogujie.com/?acm=3.mce.1_10_19kr0.32159.0.9sMq7qHSl7P.m_223370">爱蘑菇街</a><b class="mgj_footer_b color_666"> | </b></p></div><div class="mgj_footer_mgjinfo"><ul><li class="mgj_footer_mgjinfo_item"><a rel="nofollow" target="_top" class="color_666" href="/us?acm=3.mce.1_10_19kz6.32163.0.9sMq7qHSkR4.m_223517">关于我们</a></li><li class="mgj_footer_mgjinfo_item"><a rel="nofollow" target="_top" class="color_666" href="//job.mogujie.com/social?acm=3.mce.1_10_19kz8.32163.0.9sMq7qHSkR5.m_223518">招聘信息</a></li><li class="mgj_footer_mgjinfo_item"><a rel="nofollow" target="_top" class="color_666" href="/about?acm=3.mce.1_10_19kza.32163.0.9sMq7qHSkR6.m_223519">联系我们</a></li><li class="mgj_footer_mgjinfo_item"><a rel="nofollow" target="_top" class="color_666" href=".xiaodian.com/pc/joinmarket/fashion?acm=3.mce.1_10_19kzg.32163.0.9sMq7qHSkR7.m_223522">商家入驻</a></li><li class="mgj_footer_mgjinfo_item"><a rel="nofollow" target="_top" class="color_666" href=".xiaodian.com/pc/shopadmin/shopface?acm=3.mce.1_10_19kzi.32163.0.9sMq7qHSkR8.m_223523">商家后台</a></li><li class="mgj_footer_mgjinfo_item"><a rel="nofollow" target="_top" class="color_666" href="//peixun.xiaodian.com/?acm=3.mce.1_10_19kzk.32163.0.9sMq7qHSkR9.m_223524">蘑菇商学院</a></li><li class="mgj_footer_mgjinfo_item"><a rel="nofollow" target="_top" class="color_666" href="//bbs.xiaodian.com/?acm=3.mce.1_10_19kzm.32163.0.9sMq7qHSkRa.m_223525">商家社区</a></li></ul><p class="mgjhostname color_999">©2017 Mogujie.com 杭州卷瓜网络有限公司</p></div><div class="mgj_footer_copyright"><p class="mgj_footer_copyright_container"><span class="mgj_footer_copyright_span color_999">营业执照注册号：</span><a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="upload_ifrdimtcgeztgzdchazdambqmeyde_2480x3508.jpg">330106000129004</a><b class="mgj_footer_b color_999"> | </b><span class="mgj_footer_copyright_span color_999">网络文化经营许可证：</span><a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="upload_59405ekk9ieijjcidl1fijcg04c69_960x1385.jpg">浙网文（2016）0349-219号</a><b class="mgj_footer_b color_999"> | </b><span class="mgj_footer_copyright_span color_999">增值电信业务经营许可证：</span><a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="idid_ifqtmylfmvqwiy3emmzdambqgyyde_1239x1753.png">浙B2-20110349</a><b class="mgj_footer_b color_999"> | </b><span class="mgj_footer_copyright_span color_999"></span><a rel="nofollow" target="_top" class="mgj_footer_a color_999" href="upload_506h1d771b5k20j9148ldjj0kdaab_960x1344.jpg">安全责任书</a><b class="mgj_footer_b color_999"> | </b><span class="mgj_footer_copyright_span color_999"></span><a rel="nofollow" target="_top" class="mgj_footer_a color_999" href=".beian.gov.cn/portal/registerSystemInfo?recordcode=33010602002329&amp;acm=3.mce.1_10_19kz0.32170.0.9sMq7qHSl5t.m_223514">浙公网安备 33010602002329号</a><b class="mgj_footer_b color_999"> | </b></p></div></div></div>

<!-- <script type="text/javascript" src="/HomeCss/assets/js/vpop.js$1483598103.js"></script> 
<script type="text/javascript" src="/HomeCss/assets/js/nonav-mod.js$1483495894.js"></script> -->
<script src="/HomeCss/assets/js/w78av24zag4c0b0zflb3l81.js"></script> 


<!--=================== TOP弹出分类菜单 =========================-->
    <div class='Menu' style='width: 100%;height: 50px;background: white; position: fixed;top:0px;z-index: 9999; display:none;'>
    
            <div class='menu'>
        

            <a id="topA" class="menu1 out" style="width: 200px;height: 50px;position: relative;top:-10px;left:190px;line-height: 50px;display: inline-block;" >
                <div class="Topfixed">
                    <i style='display: inline-block;'>
                    <img src="/homecss/assets/images/logo.png" alt="" style="width:184px;">
                    </i>
                   
                </div>
            </a>
            
                <div class="Topsearch" style="position: absolute;width: 482px;height: 50px;margin-left: 320px;display: inline-block;line-height: 50px;">
                </div>
            
        
        </div>  
    </div>

    <!--  ==================== 分类菜单 ===============-->
    <div id='Topmenu' style="display:none; width: 256px;height: 490px;position: fixed;top: 0px;left: 160px; z-index: 1;">
            <!-- 鼠标移出遮盖层 -->
    </div>

    <!-- =============================== 蘑菇街尾部结束 ==================================== -->
      
@endsection

<!-- js特效 -->
@section('js')
<!-- 引入js特效 -->
<script type="text/javascript" src="/homecss/assets/js/index.js"></script>
<script type="text/javascript" src="/homecss/assets/js/search.js"></script>
<script type="text/javascript">
    for (var i = 0; i < $('.nav_list').find('li').length; i++) {
        $('.nav_list').find('li').eq(i).click(function(){
            //添加样式属性
                $(this).addClass('on').siblings().removeClass('on');
            //获取当前点击的类型
                var type = $(this).attr('datatype');
        });
       
    }


    //发送ajax请求图片
    //全局变量
        var num = 5;
    //加载标识
        var isLoading = 1;
    //定义每次加载页数
        //加载第一页
        var page = 1;
    //打开这个网页就自动调用一下 
         goods();
    //封装函数 进行加载图片
        function goods(minPrice,maxPrice){
            isLoading = 2;
            //获取当前网页要显示商品的类型
               var tid = $('#sp_topbanner').attr('box');
     //如果传了 这两个参数执行这里
         if (minPrice && maxPrice) {
                         $.get('/list',{tid:tid,num:num,page:page,minPrice:minPrice,maxPrice:maxPrice},function(data){
                            // console.log(data);
                            // console.log(page);
                        for (var i = 0; i < data.length; i++) {
                            //复制一份div
                                var newDiv = $('#div').clone();
                            //修改属性
                                newDiv.attr('goods-index',i);
                                newDiv.css('display','block');
                                newDiv.find('a').eq(0).find('img').attr('src',data[i].gpic);
                                newDiv.find('a').eq(1).find('p').html(data[i].gname);
                                newDiv.find('a').eq(1).find('div').find('b').html('￥'+data[i].price);
                                 
                                 newDiv.find('a').eq(1).find('div').find('span').find('font').text(data[i].vcnt);
                              
                                 
                            //执行插入
                               $('#common_goods_wall').append(newDiv);
                        }


                //页数自增
                    page++;
                //加载标识
                 isLoading = 1;
                },'json')
              
           
         }


         if(minPrice==null){
            //如果没传执行
            //加载页面自动发送ajax
                $.get('/list',{tid:tid,num:num,page:page},function(data){
                        for (var i = 0; i < data.length; i++) {
                            //复制一份div
                                var newDiv = $('#div').clone();
                            //修改属性
                                newDiv.attr('goods-index',i);
                                newDiv.css('display','block');
                                newDiv.find('a').eq(0).find('img').attr('src',data[i].gpic);
                                newDiv.find('a').eq(1).find('p').html(data[i].gname);
                                newDiv.find('a').eq(1).find('div').find('b').html('￥'+data[i].price);
                                 newDiv.find('a').eq(1).find('div').find('span').find('font').text(data[i].vcnt);
                            //执行插入
                               $('#common_goods_wall').append(newDiv);
                        }


                //页数自增
                    page++;
                //加载标识
                 isLoading = 1;
                },'json')
        
            }

    //如果传递的参数为order
    if (minPrice=='order') {
                    
          $.get('/list',{tid:tid,num:num,page:page,order:minPrice},function(data){
            // console.log(data);
            // console.log(page);
                for (var i = 0; i < data.length; i++) {
                    //复制一份div
                        var newDiv = $('#div').clone();
                    //修改属性
                        newDiv.attr('goods-index',i);
                        newDiv.css('display','block');
                        newDiv.find('a').eq(0).find('img').attr('src',data[i].gpic);
                        newDiv.find('a').eq(1).find('p').html(data[i].gname);
                        newDiv.find('a').eq(1).find('div').find('b').html('￥'+data[i].price);
                        newDiv.find('a').eq(1).find('div').find('span').find('font').text(data[i].vcnt);
                    
                    //执行插入
                       $('#common_goods_wall').append(newDiv);
                }


                //页数自增
                    page++;
                //加载标识
                 isLoading = 1;
                },'json')
                    
            }
    //如果传递的参数的为new 新品
    if (minPrice=='xin') {
                    
          $.get('/list',{tid:tid,num:num,page:page,xin:minPrice},function(data){
            // console.log(data);
            // console.log(page);
                for (var i = 0; i < data.length; i++) {
                    //复制一份div
                        var newDiv = $('#div').clone();
                    //修改属性
                        newDiv.attr('goods-index',i);
                        newDiv.css('display','block');
                        newDiv.find('a').eq(0).find('img').attr('src',data[i].gpic);
                        newDiv.find('a').eq(1).find('p').html(data[i].gname);
                        newDiv.find('a').eq(1).find('div').find('b').html('￥'+data[i].price);
                        newDiv.find('a').eq(1).find('div').find('span').find('font').text(data[i].vcnt);
                       
                    
                    //执行插入
                       $('#common_goods_wall').append(newDiv);
                }


                //页数自增
                    page++;
                //加载标识
                 isLoading = 1;
                },'json')
                    
            }


         }

        // goods();
       
        // console.log(page);
    //滚动事件的 全局变量
    var min = null;
    var max = null;
        //绑定滚动事件
    $(window).scroll(function(){
        //检测当前是否正在发起ajax请求
        if(isLoading==2){return}
        //获取整个文档的高度
        var sH = $(document).height();
        //获取文档滚动距离
        var sT = $(window).scrollTop();

        //获取可视区域高度
        var cH = $(window).height();
        //判断是否需要发起ajax请求 新的数据
        if(sH - sT - cH <= 350){
             if (min==null) {
             goods();    
             }
             if (min!=null && max!=null) {
                goods(min,max);
                
             }

             if (min=='order') {
                goods('order');
             }

             if (min=='xin') {
                goods('new');
             }
             
        }
    })
     //定位窗口
            // $(window).scrollTop(518);

    // 查询条件绑定单击事件
   console.log($('.price_choice').find('li'));
   for (var i = 0; i < $('.price_choice').find('li').length; i++) {
      $('.price_choice').find('li').eq(i).click(function(){

                //获取当期属性值
                    var leftv= $(this).find('a').find('i').eq(0).html();
                    var rightv= $(this).find('a').find('i').eq(1).html();
                //存入标识
                    min = leftv;
                    max = rightv;
                //把这两个值放入搜索框
                      $('input[name=minPrice]').val(leftv);
                      $('input[name=maxPrice]').val(rightv);
                 //获取当前网页要显示商品的类型
                        var tid = $('#sp_topbanner').attr('box');
                //清空当前所有显示的内容
                    $('#div').siblings().remove();
                //获取值发送ajax请求
                   // ==========================
                //调用函数发送ajax请求
                //修改页数为第一页
                      page=1;
                     goods(leftv,rightv);

                   // ==========================
        });
   }


   //确定提交 单击事件
    $('.sbt').click(function(){
          //获取当期属性值
                    leftv = $('input[name=minPrice]').val();
                    rightv = $('input[name=maxPrice]').val();
                //存入标识
                    min = leftv;
                    max = rightv;
                
                   //获取当前网页要显示商品的类型
                        var tid = $('#sp_topbanner').attr('box');
                //清空当前所有显示的内容
                    $('#div').siblings().remove();
                //获取值发送ajax请求
                   // ==========================
                //调用函数发送ajax请求
                //修改页数为第一页
                      page=1;
                     goods(leftv,rightv);
    });

    //绑定单击事件
    for (var i = 0; i < $('.sort_container').find('a').length; i++) {
       $('.sort_container').find('a').eq(i).click(function(){
          //添加样式
                $(this).addClass('on').siblings().removeClass('on');
          //获取索引
          //综合
                if ($(this).attr('tab-index')==0) {
                  //清空当前所有显示的内容
                    $('#div').siblings().remove();
                   page = 1;
                //清空标识
                     min =null;
                    max = null;
                   goods();
                }

         //获取索引
         //销量
            if ($(this).attr('tab-index')==1) {
                //清空当前所有显示的内容
                    $('#div').siblings().remove();
                   page = 1;
                //清空标识
                     min ='order';
                    max = null;

                //调用函数完成功能
                  goods('order');

            }
        //新品
            if ($(this).attr('tab-index')==2) {
               //清空当前所有显示的内容
                    $('#div').siblings().remove();
                   page = 1;
                //清空标识
                     min ='xin';
                    max = null;

            //调用函数完成功能
                  goods('xin');
            }
       });
    }
  
    
</script>

@endsection


