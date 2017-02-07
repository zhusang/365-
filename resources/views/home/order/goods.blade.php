@extends('home.layout.layout')
@section('title')
{{$goods->gname}}
@endsection
@section('con')
  
     {!! \App\Http\Controllers\home\shopController::getDptou() !!}


  
  <div class="shop-detail wrap"> 
   <!-- 商品详情信息 --> 
   <div class="detail-goods clearfix"> 
    <!-- 商品左侧 --> 
    <div class="goods-left"> 
     <div class="goods-box clearfix"> 
      <!-- 商品信息 --> 
      <div class="goods-info fl" id="J_GoodsInfo"> 
       <div class="goods-info-box"> 
        <h1 class="goods-title">{{$goods->gname}}</h1> 
        <!-- 商品价格 --> 
        <div class="goods-price goods-pro"> 
         <dl class="clearfix"> 
          <dt>
           原价：
          </dt> 
          <dd class="price-w">
           <span>&yen;</span>
           <span id="J_Price">{{$goods->price}}</span>
          </dd> 
         </dl> 
         <dl class="clearfix"> 
          <dt class="price-x">
           现价：
          </dt> 
          <dd> 
           <div class="price-box"> 
            <span class="price-u">&yen;</span> 
            <span id="J_NowPrice" class="price-n">{{$goods->tprice}}</span> 
           </div> 
          </dd> 
         </dl> 
        </div> 
        <div class="goods-meta goods-pro"> 
         <dl class="clearfix"> 
          <dt>
           客服：
          </dt> 
          <dd> 
           <div class="mogutalk_widget_btn kefu" data-bid="14mcy#23" data-style="default" data-from="goodsdetail_skumtalk">
            <iframe src="" width="85" height="24" frameborder="0" scrolling="no" marginheight="0" allowtransparency="true"></iframe>
           </div> 
          </dd> 
         </dl> 
        </div> 
        <div class="goods-sku goods-pro" id="J_GoodsSku"> 
         <div class="content"> 
          <div class="box"> 
           <dl class="style clearfix"> 
            <dt>
             颜色：
            </dt> 
            <dd> 
             <ol class="J_StyleList style-list clearfix"> 
              <li class="img" title="图片色"><img src="http://s2.mogucdn.com/p2/161117/66851757_11l5flad5el77c9l6jlg9d1d3kgad_640x960.jpg_100x100.jpg" /><b></b></li> 
             </ol> 
            </dd> 
           </dl> 
           <dl class="size clearfix"> 
            <dt>
             尺码：
            </dt> 
            <dd> 
             <ol class="J_SizeList size-list clearfix"> 
              <li>均码</li> 
             </ol> 
            </dd> 
           </dl> 
          </div> 
         </div> 
        </div> 
        <ul class="goods-services clearfix"> 
         <li class="fl">
          <a href="" target="_blank"><img src="/phonecss/610_0.png" /></a></li> 
         <li class="fl"><a href="" target="_blank"><img src="/phonecss/310_0.png" /></a></li> 
         <li class="fl"><a href="" target="_blank"><img src="/phonecss/430_0.png" /></a></li> 
         <li class="fl"><a href="" target="_blank"><img src="/phonecss/110_0.png" /></a></li> 
        </ul> 
        <div class="goods-snapshot clearfix"> 
         <p class="snapshot-icon fl">你正在查看此商品的交易快照</p> 
         <a class="snapshot-link fr" href="/detail/1k59n3y" target="_blank">点此查看商品最新信息&gt;</a> 
        </div> 
       </div> 
      </div> 
      <!-- 商品图片 --> 
      <div class="goods-img fl" id="J_GoodsImg"> 
       <!-- 大图 --> 
       <div class="big-img"> 
        <!--判断是否显示sku对应的大图--> 
        <img id="J_BigImg" src="{{$goods->gpic}}"  alt="" width="440" /> 
        <!-- 优选图标 --> 
       </div> 
       <!-- 小图 --> 
       <div id="J_SmallImgs" class="small-img"> 
        <div class="box"> 
         <div class="list"> 
          <ul class="clearfix" style="text-align: center;"> 
          @foreach($goods_pic as $k=>$v)
           <li><img class = 'xiaotu' src="{{$v->spic}}" /></li> 
          @endforeach
          </ul> 
         </div> 
        </div> 
        <a href="javascript:;" class="left-btn arrow-btn"></a> 
        <a href="javascript:;" class="right-btn arrow-btn"></a> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- 商品详情主体 --> 
   <div class="detail-main" id="J_ModuleDetail"> 
    <!-- 商品导航 --> 
    <div class="main-nav-wrap"> 
    <style>
      .main-nav-fixed{position:fixed;top:0px;}
      
      
    </style>
     <div class="main-nav" id="J_GoodsNav" style='width:1200px'> 
      <ul class="list clearfix "> 
       <li data-id="J_ModuleDetail" class="c"><a href="javascript:;">商品详情</a></li> 
      </ul> 
      <div class="tags"> 
       <a href="javascript:;"  class='anc_size_info'>尺码材质</a> 
       <b>|</b> 
       <a href="javascript:;" class="anc_model_img">穿着效果</a> 
       <b>|</b> 
      </div> 
     </div> 
    </div> 
    <!-- 顶栏 --> 
    <div class="main-size" id="abcd"> 
     <h1 class="title">尺码材质 size</h1> 
     <div class="content"> 
      <!-- 材质 --> 
      <div class="stuff"> 
       <table> 
        <tbody> 
         <tr> 
          <td>袖型：常规袖</td> 
          <td>尺码：均码</td> 
          <td>风格：学院,韩系</td> 
         </tr> 
         <tr> 
          <td>厚薄：加厚</td> 
          <td>版型：宽松</td> 
          <td>材质：马海毛</td> 
         </tr> 
         <tr> 
          <td>颜色：图片色</td> 
          <td>元素：拼接,拼色/撞色</td> 
          <td>衣长：中长款（66-80cm）</td> 
         </tr> 
         <tr> 
          <td>衣门襟：套头</td> 
          <td>领型：圆领</td> 
          <td>图案：条纹</td> 
         </tr> 
         <tr> 
          <td>季节：秋冬</td> 
          <td>袖长：长袖</td> 
         </tr>
        </tbody> 
       </table> 
      </div> 
      <!-- 尺码 --> 
      <div class="size"> 
       <table> 
        <tbody> 
         <tr class="name"> 
          <td>尺码</td> 
          <td>肩宽</td> 
          <td>衣长</td> 
          <td>胸围</td> 
          <td>袖长</td> 
         </tr> 
         <tr> 
          <td>均码</td> 
          <td>57</td> 
          <td>70</td> 
          <td>122</td> 
          <td>47</td> 
         </tr> 
        </tbody> 
       </table> 
       <p class="desc">手工测量会有2-3cm的误差哦，介意的MM勿拍哦！！！！</p> 
      </div> 
      <div class="img-box"> 
      </div> 
     </div> 
    </div> 
    <div class="main-show module-item" id="abcde"> 
     <h1 class="title">穿着效果 show</h1> 
     <div class="content"> 
      <div class="desc"> 
       <p class="start"></p> 
       <p class="text">{{$goods_det->gdesc}}</p> 
       <p class="end"></p> 
      </div> 
      <div class="img-box"> 
      @foreach($goods_pic as $k=>$v)
       <div class="item"> 
        <div class="img"> 
         <img class="img-pre-lazyload" d-src="" alt="" width="640" height="960" src="{{$v->bpic}}" /> 
        </div> 
       </div>
       @endforeach  
      </div> 
     </div> 
    </div> 
   </div> 
  </div>
@endsection
@section('js')
<script type="text/javascript">
    //鼠标移入事件
    
    $('.all').mouseover(function()
    { 
      $('.slideer').css('display','block');
    })
    
    //鼠标移除事件
    $('.all').mouseout(function()
    { 
      $('.slideer').css('display','none');
    })

    
    //联系客服
       var a = 1;

      $('.kefu').click(function(){
        if(a==1){
          $(this).next().html('客服热线:00000');
          a = 2;
          return false;
        }else{
          $(this).next().html('');
          a = 1;
          return false;
        }
      });

    
    
    
    //选择尺码
    $('.size-list').children().click(function()
    {
      $(this).addClass('c').siblings().removeClass('c');
    })


    //修改商品图片
    $('.xiaotu').mouseover(function()
    {
      var xiaotu = $(this)[0].src;
      $('#J_BigImg').attr('src',xiaotu);
    
    })

    //选项定位
    $('.anc_size_info').click(function()
    {
      window.location.hash = "#abcd";
      $(this).eq(0).addClass('c').siblings().removeClass('c');
      

      
    })

    $('.anc_model_img').click(function()
    {
      window.location.hash = "#abcde";
      $(this).eq(0).addClass('c').siblings().removeClass('c');
      
      
    })

    $('.anc_detail_img').click(function()
    {
      window.location.hash = "#abcdef";
      $(this).eq(0).addClass('c').siblings().removeClass('c');
     
      
    })

    //绑定页面滚动距离事件
    $(window).scroll(function()
    {
      var a = $(document).scrollTop();
     
       if(a >=1100)
       {
        $('.main-nav').addClass('main-nav-fixed');
       }else{
        $('.main-nav').removeClass('main-nav-fixed');
       }
    })

     

</script>
@endsection

