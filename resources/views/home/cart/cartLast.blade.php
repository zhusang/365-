{!! \App\Http\Controllers\home\IndexController::tou() !!}
 <link media="all" href="/homecss/cartcss/images/cartLast.css" type="text/css" rel="stylesheet">
<body class="media_screen_1200">

    




  

<style>
    .innerwrap{  margin-right: -30px;  }
    .media_screen_960 { min-width: 960px; }

    .promotionTopNavContainer { height: 50px; overflow: hidden; display: none;}
    .promotionTopNavContainer a { display: block; width: 86px; height: 50px; overflow: hidden;}
    .promotionTopNavContainer a.first { width: 168px; }

    /** screnn-960 **/
    .media_screen_960 .promotionTopNavContainer .first{ width: 153px!important; }
    .media_screen_960 .promotionTopNavContainer a { width: 66px; }
    .media_screen_960 .promotionTopNavContainer a.last {width: 80px;}
    .wrap { position: relative;}
</style>

<div class="promotionTopNavContainer"></div>

    <!-- 中间区域 -->
    <!--<div class="header_mid clearfix">
    <div class="wrap">
    <a rel="nofollow" href="http://www.mogujie.com" class="logo" title="蘑菇街首页"></a>
    <div class="mid_fr">
    <div class="nav_mogu_qrcode">
    <img width="70" height="70" src="http://s18.mogucdn.com/p1/150929/upload_iezggyjwgrrdgztfgmzdambqmmyde_300x300.png" alt="蘑菇街客户端下载"/>
    <p>蘑菇街客户端</p>
    </div>
    </div>
    </div>
    </div>
    -->





    <div id="body_wrap">
      <div id="process_bar">
        <div class="g-header clearfix">
          <div class="g-header-in wrap clearfix">
            <div class="process-bar">
              <div class="md_process md_process_len4">
                <div class="md_process_wrap md_process_step2_5">
                  <div class="md_process_sd"></div>
                  <i class="md_process_i md_process_i1">1
                    <span class="md_process_tip">购物车</span></i>
                  <i class="md_process_i md_process_i2">2
                    <span class="md_process_tip">确认订单</span></i>
                  <i class="md_process_i md_process_i3">3
                    <span class="md_process_tip">支付</span></i>
                  <i class="md_process_i md_process_i4">
                    <img src="/homecss/cartcss/images/right.png" alt="" width="23" height="23">
                    <span class="md_process_tip">完成</span></i>
                </div>
              </div>
            </div>
            <a title="蘑菇街|我的买手街" href="http://www.mogujie.com/" target="_top">
              <div class="logo logo-generate"></div>
            </a>
          </div>
        </div>
      </div>
      <div id="pay_info">
        <div class="g-wrap wrap">
          <div class="cart_wrap">
            <!-- 页面内容 -->
            <div class="cart_page_wrap pt0">
              <h2 class="cart_stit">选择收货地址</h2>
              <div class="cart_address_wrap" id="cartAddress">
                <!-- 选择收获地址list -->
                <ul class="cart_address_list clearfix" style="height: 160px;" id="cartAddressList">
               @if(!empty($addr))
                @foreach($addr as $k=>$v)
                  <li id="{{$v->aid}}" >
                    <a href="javascript:;" class="cart_address_card addressCard " data-aid="2131278111">
                      <h5 class="cart_address_tit">{{$v->rec}}</h5>
                      <p class="cart_address_street">{{$v->street}}</p>
                      <p class="cart_address_zipinfo" data-postcode="467000" data-province="河南省" data-city="平顶山市" data-area="卫东区">{{$v->address}} {{$v->emailcode}}</p>
                      <p class="cart_address_mobile">{{$v->recphone}}</p>
                      <i class="cart_address_edit" style="display: none;">编辑</i></a>
                  </li>
                @endforeach
                @endif
                </ul>


                <!-- 管理收获地址 -->
                <ul class="cart_address_ctrl clearfix" id="addressCtrl">
                  <li>
                    <a href="javascript:;" class="cart_icon_link allAddressSwitch" style="display: none;">显示全部地址
                      <i class="cart_icon_quarw">down</i></a>
                  </li>
                  <li>
                    <a href="" target="_top">管理收货地址</a></li>
                  <li>
                    <a href="javascript:;" class="addOtherAddress">使用新地址</a></li>
                </ul>
                <div id="J_otherAddrWrap" style="display: none;">
                <div class="__addressPop">
                <dl class="address_pop">
                <input class="J_addressid" name="addressId" value="" type="hidden">
               

                <dd>所在地：</dd>
                      <dt class="location">
                       <label class="dt" for=""> 省：</label>
                        <select id="s_province"  class="J_province J_select w140 vm" name="province"></select>
                        <label  class="dt" for=""> 市：</label>
                        <select id="s_city" class="J_city J_select w100 vm" name="city" ></select>  
                        <label class="dt" for="">区：</label>
                        <select  id="s_county" class="J_area J_select w100 vm" name="s_county" ></select>  
                        
                           
                           
                      </dt>


                <dt> 邮政编码：</dt>
                <dd>
                <i class="needicon">*</i>
                <input data-type="c" errormsg="请填写正确的邮政编码" data-normal="" class="text formsize_normal J_postcode J_form vm" name="zip" type="text">
                <span class="prompt"></span>
                </dd>
                
                <dt>街道地址：</dt>
                <dd>
                <i class="needicon">*</i>
                <textarea data-type="*" data-min="5" data-max="100" data-normal="请填写街道地址，最少5个字，最多不能超过100个字" errormsg="请填写街道地址，最少5个字，最多不能超过100个字" class="textarea formsize_large J_street J_form" name="address" cols="30" rows="3">
                </textarea>
                <span class="prompt breakline">请填写街道地址，最少5个字，最多不能超过100个字</span>
                </dd>

                <dt>收货人姓名：</dt>
                <dd><i class="needicon">*</i>
                <input data-type="*" errormsg="请填写收货人" data-normal="" class="text formsize_normal J_name J_form vm" name="recName" type="text">
                <span class="prompt"></span>
                </dd>

                <dt>手机：</dt>
                <dd><i class="needicon">*</i>
                <input data-type="phone" errormsg="请填写正确的联系号码" data-normal="" class="text formsize_normal J_mobile J_form vm" name="recPhone" type="text">
                <span class="prompt"></span>
                </dd>

                <dt></dt>
                <dd class="pt10 oper_btn">
              </dd>
            </dl>
                <a href="javascript:;" id="submit" style="position: absolute;font-size:20px;width:100px;height:45px;line-height:45px;text-align:center;border-radius:5px 5px 5px 5px;color:white;background: #FFA701;" class="">确认地址
                </a>
                <a href="javascript:;" id="reset" style="font-size:20px;width:100px;height:45px;line-height:45px;text-align:center;border-radius:5px 5px 5px 5px;color:white;background: gray;position: absolute;left:150px;" class=""> 
                取消
                </a>
           </div>
         </div>
       </div>
              <h2 class="cart_stit pt10">确认商品信息</h2>
              <!-- 身份认证 -->
              <!-- 身份认证end -->
              <form action="http://buy.mogujie.com/trade/generateorder/confirmorder" id="orderForm" method="POST">
                <!-- orderForm -->
                <!-- 表格 -->
                <table class="cart_table" id="orderTable">
                  <thead>
                    <tr>
                      <th class="cart_table_goods_wrap">商品</th>
                      <th class="cart_table_goodsinfo_wrap">商品信息</th>
                      <th width="80">单价(元)</th>
                      <th width="80">数量</th>
                      <th class="cart_table_goodscut_wrap">优惠</th>
                      <th class="cart_table_goodsctrl_wrap">小计(元)</th></tr>
                  </thead>
                  <tbody>


                  @foreach($info as $k=>$v)
                    <!--店铺-->
                    @if(!empty($v['biaoZhi']))
                    <tr data-shopid="14pmc">
                      <td colspan="6" class="cart_group_head">
                        <label for="" class="cart_lightgray">店铺：</label>
                        <a href="http://shop.mogujie.com/14pmc" target="_top" class="cart_hoverline">
                          {{$v['sname']}}
                        </a>
                        <a href="javascript:;" class="cart_im_btn mr5 mogutalk_widget_btn mogutalk_btn" data-bid="14pmc#23">联系客服</a></td>
                    </tr>
                    @endif
                    <!--商品 遍历-->
                    <tr class="tr_checked item4shop1pdpbq" data-stockid="1om70bk">
                      <td class="cart_table_goods_wrap">
                        <!-- 商品 -->
                        <a href="" target="_top" class="cart_goods_img">
                          <img class="cartImgTip" src="{{$v['gpic']}}" alt="{{$v['gname']}}" width="78" height="78"></a>
                        <a href="" target="_top" class="cart_goods_t cart_hoverline" title="{{$v['gname']}}">{{$v['gname']}}</a></td>
                      <td>
                        <p class="cart_lh20">{{$v['type']}}</p>
                        <p class="cart_lh20">{{$v['size']}}</p></td>
                      <td class="cart_alcenter">
                        <!-- 单价 -->
                        <p class="cart_bold cart_itemUnit">{{$v['nowPrice']}}</p></td>
                      <td class="cart_alcenter">
                        <!-- 数量 -->
                        <p class="cart_itemNum">{{$v['goodsNum']}}</p></td>
                      <td class="cart_alcenter cartItemPromo" data-itemindex="0" data-shopindex="1" data-groupid="13yevhs">
                        <span class="cart_alcenter sku_promotion">{{$v['YouHui']}}:</span>
                        <span class="s_disScreen"></span>
                        <p class="J_extraPromo"></p>
                        <p class="ui-red-discount ui-red ui-red-packet-info"></p>
                      </td>
                      <td class="cart_alcenter">
                        <!-- 小计 -->
                        <p class="cart_font16 item_sum itemSum" data-price="{{$v['goodsSum']}}">{{$v['goodsSum']}}</p></td>
                    </tr>
                    <!--备注：-->
                    <tr class="tr_checked">
                      <td colspan="3" class="pl10 cart_largepding">
                        <label for="">备注：</label>
                        <input class="" name="message" id="{{$v['gid']}}" placeholder="补充填写其他信息，如有快递不到也请留言备注" style="color: rgb(204, 204, 204);font-size: 15px;width:350px;" value="补充填写其他信息，如有快递不到也请留言备注" type="text"></td>
                      <td colspan="3" class="pr15 cart_largepding">
                        <!-- 店铺优惠 -->
                        <div class="cart_table_discount shopPromo pt5 pr10 clearfix" data-shopindex="1" data-groupid="13yevhs"></div>
                        <!-- 店铺优惠end -->
                        <div class="cart_table_discount shopLogi pt5 pr10 clearfix" data-groupid="13yevhs">
                          <label>快递公司：</label>
                          <select name="" class="postage cart_vm" data-shopindex="1" data-groupid="13yevhs">
                            <option value="nationalfreepostage" selected="selected">全国包邮</option></select>
                          <span class="ml20 fr">快递运费：
                            <strong class="J_ShipExpense" data-groupid="13yevhs">¥ 0.00</strong></span>
                        </div>
                      </td>
                    </tr>
                    <!--合计-->
                    <tr class="tr_checked">
                      <td colspan="6" class="pl10 pr20 cart_largepding">
                        <div class="cart_table_disduce cart_lightgray cart_font16 fr">合计：
                          <span class="cart_red cart_bold cart_money shopSum" data-groupid="13yevhs">{{$v['goodsSum']}}</span>
                          <input class="shoppro" value="-1" name="" type="hidden"></div>
                      </td>
                    </tr>
                   @endforeach







                    <!-- 321红包 -->
                    <!-- 全场优惠 -->
                    <!-- 全场优惠 -->
                    <!-- 蘑豆 -->
                    <!-- 蘑豆end --></tbody>
                </table>
                <input name="addressId" id="addressId" value="2131278111" type="hidden">
                <input name="xmStoreId" id="xmStoreId" value="" type="hidden">
                <input name="xmMatched" id="xmMatched" value="" type="hidden">
                <input name="traceid" value="generateorder_2w26bpe85pfk" type="hidden">
               
                <input name="source" value="" type="hidden">
                <input name="channel" id="channel" value="" type="hidden"></form>
            </div>
          </div>
          <!-- footer显示价格 -->
          <div>
            <div class="cart_paybar">
              <a href="javascript:;" class="cart_surebtn fr">确认并付款 &gt;</a>
              <span class="cart_paybar_info_cost cart_red cart_bold cart_font26 cart_money fr goodsSum" finalprice="21261.33">¥{{$num}}</span>
              <div class="cart_paybar_info cart_pregray fr">
                <!-- 这里的商品不会变动，后端自己算出来就好了 -->共有
                <span class="cart_red goodsNum">{{$goodN}}</span>件商品，总计：</div>
              <a href="http://cart.mogujie.com/cart/mycart" class="cart_back cart_hoverline cart_pregray">返回购物车</a></div>
          </div>
        </div>
      </div>
      <form action="http://buy.mogujie.com/buy" method="post" id="compForm">
        <input name="postdata" id="preData" value="1mygkyc,12#,1om70bk,221#,1nnns6g,6#,1mnwb7u,1#,1morn4g,8#,1mnwb82,6#" type="hidden">
        <input name="ptp" id="prePtp" value="1.ii9Gy.0.0.fFbpl" type="hidden">
        <input name="ptp" id="preStockPtp" value="{&quot;1mygkyc&quot;:&quot;1.5niKTb._b_b1e8da1f3f6f11ba_wall_docs.5.F239E&quot;,&quot;1om70bk&quot;:&quot;1._mf1_1239_15261._keyword_32255.0.J5pAT&quot;,&quot;1nnns6g&quot;:&quot;1.yrSXW._b_3b1734645c6cdaf9_wall_docs.1.xZZKB&quot;,&quot;1mnwb7u&quot;:&quot;1.0v8DT._b_a681735fff9aaed6_wall_docs.2.NsZE3&quot;,&quot;1morn4g&quot;:&quot;1.__item_detail._rechot.0.9p7Eb&quot;,&quot;1mnwb82&quot;:&quot;1.0v8DT._b_a681735fff9aaed6_wall_docs.2.NsZE3&quot;}" type="hidden">
        <input name="orderFrom" id="preOrderFrom" value="cart" type="hidden"></form>
      <!-- dot 模版 header--></div>
    <div class="g-footer">
      <p title="mofa015027">
        <a href="http://www.mogujie.com/" target="_top">蘑菇街</a>|
        <a href="http://www.mogujie.com/joinin" target="_top">加入开放平台</a>© 2016 Mogujie.com,All Rights Reserved.</p></div>
    <div style="visibility: hidden; position: absolute;" id="userdata_el"></div>
        

  <script type="text/javascript" src="/homecss/jquery-1.8.3.min.js"></script>
        <script class="resources library" src="/admincss/assets/js/area.js" type="text/javascript"></script>    
        <script type="text/javascript">_init_area();</script>
  <!-- <script type="text/javascript" src="/homecss/cartcss/js/cartLast"></script> -->
  <script>
      //存放id  以及给每一个信息卡绑定单击事件 
     var id='';

        //给所有的信息框绑定单击事件
                for (var i = 0; i < $('.addressCard').length; i++) {
                  $('.addressCard').eq(i).click(function(){
                    //获取当前被点击的是谁 
                    id = $(this).parents('li').attr('id');
                    $(this).addClass('selected').parents('li').siblings().find('a').removeClass('selected');
                    
                    console.log(id);
                  });

                  }



    //绑定显示填写收货信息的文字框
     $('.addOtherAddress').click(function(){
      // alert(111);
      $('#J_otherAddrWrap').css('display','block');
     });
    var sheng='';
    var shi = '';
    var qu = '';
     var emailCode ='';
     var street = '';
     var rec = '';
     var recPhone = '';
     //绑定单击事件
      $('#submit').click(function(){
        //获取用户输入的值 
        //克隆一个地址 并且可以选择
        //获取省市区
         sheng = $('.J_province').val();
        //市\
         shi = $('.J_city').val();
        //区
         qu = $('.J_area').val();
          console.log(sheng,shi,qu);
        // console.log(sheng,shi,qu);
        //获取邮政编码
         emailCode = $('.J_postcode').val();
        //街道地址
         street = $('.J_street').val();
        //收货人姓名 
         rec = $('.J_name ').val();
        //收货人电话
         recPhone = $('.J_mobile').val();


        // console.log(sheng,shi,qu,emailCode,street,rec,recPhone);
        
        //只有这些值都不为空时才能提交走
        if (emailCode.length < 4) {
           //显示错误提示信息
           var error =$('.J_postcode').attr('errormsg');
            $('.J_postcode').css('border','red 1px solid');
           $('.J_postcode').next().css('color','red').html(error);
            istrue = false;
           return;
        }else{
           istrue = true;
        }

        if (street.length < 5) {
          //显示错误信息
          var error = $('.J_street').attr('errormsg');
         $('.J_street').css('border','red 1px solid');
           $('.J_street').next().css('color','red').html(error);
            istrue = false;
           return;
        }else{
           istrue = true;
        }
        
        if (rec.length < 2) {
          //显示错误信息
          var error = $('.J_name').attr('errormsg');
          $('.J_name').css('border','red 1px solid');
           $('.J_name').next().css('color','red').html(error);
            istrue = false;
           return;
        }else{
           istrue = true;
        }

        if (recPhone.length < 9) {
          //显示错误信息
          var error = $('.J_mobile').attr('errormsg');
          $('.J_mobile').css('border','red 1px solid');
           $('.J_mobile').next().css('color','red').html(error);
           istrue = false;
           return;
        }else{
          istrue = true;
        }

        if (sheng=='省份' || shi=='地级市' || qu=='市、县级市') {
          var newSpan = $('<span>请选择您的地区</span>')
          newSpan.css('color','red');
          newSpan.css('fontSize','16px');
          $('.location').append(newSpan);
          istrue = false;
            return;
        }else{
          $('.location').find('span').remove();
           istrue = true;
        }
       
        //当所有的都格式无错误时 才能提交信息
        if (istrue==true) {
          //隐藏当前输入信息框
           $('#J_otherAddrWrap').css('display','none');
          //把所有信息 发送走 存入数据库中
           $.get('/cart/addr',{sheng:sheng,shi:shi,qu:qu,emailCode:emailCode,street:street,rec:rec,recPhone:recPhone},function(data){
              if (data) {
                //拿到id 
                    // 克隆一份出来 信息框
                    var newCard = $('.addressCard').clone();
                   //修改内容
                   newCard.find('h5').html(rec);
                   newCard.find('p').eq(0).html(street);
                   newCard.find('p').eq(1).attr('data-province',sheng);
                   newCard.find('p').eq(1).attr('data-city',shi);
                   newCard.find('p').eq(1).attr('data-area',qu);
                   newCard.find('p').eq(2).html(recPhone);
                   newCard.removeClass('selected');
                   // console.log(newCard);
                   //插入新的div
                   var newLi = $('<li id="'+data+'"></li>');
                   var newli = newLi.append(newCard);
                  //放到页面上
                   $('#cartAddressList').append(newli);
                  
           
              //给所有的信息框绑定单击事件
                for (var i = 0; i < $('.addressCard').length; i++) {
                  $('.addressCard').eq(i).click(function(){
                    //获取当前被点击的是谁 
                    id = $(this).parents('li').attr('id');
                    $(this).addClass('selected').parents('li').siblings().find('a').removeClass('selected');
                    
                    console.log(id);
                  });
               



                }
              }

             

           })
          
          
        }

    });

                        //添加标识
                        var TianJia=1;
// 给每一个信息卡绑定鼠标移入事件
                for (var i = 0; i < $('.addressCard').length; i++) {
                    $('.addressCard').eq(i).hover(function(){
                        //鼠标移入
                        $(this).find('.cart_address_edit').css('display','block');
                        

                        //绑定单击事件
                        $(this).find('.cart_address_edit').click(function(){
                              
                              //获取当前点击的为谁
                              var id = $(this).parents('li').attr('id');
                              // alert(id);
                              
                              //获取当前点击的信息卡的所有信息
                              var rec = $(this).prev().prev().prev().prev().html();
                              var street = $(this).prev().prev().prev().html();
                              var sheng = $(this).prev().prev().attr('data-province');
                              var shi = $(this).prev().prev().attr('data-city');
                              var qu = $(this).prev().prev().attr('data-area');
                              var emailcode = $(this).prev().prev().attr('data-postcode');
                              var recphone = $(this).prev().html();
                              // console.log(rec,street,sheng,shi,qu,emailcode,recphone);
                              
                              //克隆一份编辑文本
                              var newJ = $('#J_otherAddrWrap').clone();
                              
                              //改变信息
                              //地址
                               newJ.find('.__addressPop').find('dl').find('#s_province').attr('value',sheng);
                               newJ.find('.__addressPop').find('dl').find('#s_city').remove();
                               newJ.find('.__addressPop').find('dl').find('#s_county').remove();
                              newJ.find('.__addressPop').find('dl').find('#s_province').next().html(shi);
                               newJ.find('.__addressPop').find('dl').find('#s_province').next().next().html(qu);

                              //邮证编码
                               newJ.find('.__addressPop').find('dl').find('.J_postcode').val(emailcode);
                               //街道地址
                               newJ.find('.__addressPop').find('dl').find('.J_street').val(street);
                               //收货人姓名
                               newJ.find('.__addressPop').find('dl').find('.J_name').val(rec);
                               //收货人手机号
                               newJ.find('.__addressPop').find('dl').find('.J_mobile').val(recphone);
                               //显示
                               newJ.css('display','block');
                              // console.log(newJ);
                              newJ.addClass('remove');
                              if (TianJia==1) {
                               //作为正在编辑的表示
                               TianJia = 2;
                               //插入修改文本
                               $('#cartAddress').append(newJ);
                              }

                          //当点击修改时获取当前所有的信息
                          newJ.find('#submit').click(function(){
                             // console.log(newJ.find('#submit'));
                             // alert(11);

                              //地址 shi  qu
                              var sheng = newJ.find('.__addressPop').find('dl').find('#s_province').val();
                               
                               //邮政编码
                               var emailcode = newJ.find('.__addressPop').find('dl').find('.J_postcode').val();
                                //街道地址
                               var street = newJ.find('.__addressPop').find('dl').find('.J_street').val();
                                //收货人姓名
                                var rec = newJ.find('.__addressPop').find('dl').find('.J_name').val();
                                //收货人手机号
                                var recphone = newJ.find('.__addressPop').find('dl').find('.J_mobile').val();
                                // console.log(sheng,shi,qu,emailcode,street,rec,recphone);
                                 
                                 //获取数据删除当前的修改框 
                                $(this).parents('#J_otherAddrWrap').remove();
                                //改变标识
                                TianJia=1;
                                //改成修改后的值
                               $('#'+id+'').find('.cart_address_tit').html(rec);
                               $('#'+id+'').find('.cart_address_street').html(street);
                               $('#'+id+'').find('.cart_address_zipinfo').html(sheng+shi+qu);
                               $('#'+id+'').find('.cart_address_zipinfo').attr('data-postcode',emailcode);
                               $('#'+id+'').find('.cart_address_zipinfo').attr('data-province',sheng);
                               $('#'+id+'').find('.cart_address_zipinfo').attr('data-city',shi);
                               $('#'+id+'').find('.cart_address_zipinfo').attr('data-area',qu);
                               $('#'+id+'').find('.cart_address_mobile').html(recphone);
                              
                               

                              //修改后发送ajxa修改数据库的值
                                $.get('/cart/editaddr',{aid:id,rec:rec,street:street,sheng:sheng,shi:shi,qu:qu,recphone:recphone,emailcode:emailcode},function(data){
                                  if (data==1) {
                                     $('#')
                                    console.log('收货修改');
                                  }
                                });
                              });

                            //给创建的信息框绑定取消修改事件
                            newJ.find('#reset').click(function(){
                                //删除当前的修改款
                                $(this).parents('#J_otherAddrWrap').remove();
                            });
                            
                              
                       
                        });
                    },function(){
                        //鼠标移出
                        $(this).find('.cart_address_edit').css('display','none');
                    });
                 
                }


      //取消按钮 点击后取消地址添加
      $('#reset').click(function(){
        //取消添加地址操作
        $('#J_otherAddrWrap').css('display','none');
      });

      //

      //绑定生成订单单击事件
      // 单击事件  单击时 发送ajax发送所有需要求信息  发送完ajax信息返回成功  跳转页面
      $('.cart_surebtn').click(function(){
        //获取当前选中的收货信息
        
        //收货人
       var rec = $('.selected').find('.cart_address_tit').html();

       //街道地址
       var street = $('.selected').find('.cart_address_street').html();

       //地址
       //省
      var sheng = $('.selected').find('.cart_address_zipinfo').attr('data-province');
      //市
      var shi = $('.selected').find('.cart_address_zipinfo').attr('data-city');
      //县区
      var qu = $('.selected').find('.cart_address_zipinfo').attr('data-area');
      //邮政编码
      var emailcode = $('.selected').find('.cart_address_zipinfo').attr('data-postcode');

      //电话号
      var recphone = $('.selected').find('.cart_address_mobile').html();

      //获取备注信息
      var message = new Array();
      for (var i = 0; i < $('input[name=message]').length; i++) {
        message[i] = $('input[name=message]').eq(i).val();
      }

      //把备注信息数组 通过||||拆分成字符串
      var msg =message.join('||||');

      //发送ajax 存入数据库
      $.get('/cart/order',{msg:msg,rec:rec,street:street,sheng:sheng,shi:shi,qu:qu,emailcode:emailcode,recphone},function(data){
        if (data==1) {
          //跳转页面
          location.href='http://mogu.cn/cart/clear';
        }
      });

      // console.log(message);
      });
  </script>
  </body>

</html>