@extends('home.layout.layout')

@section('con')
<link media="all" href="/cout/index.css" type="text/css" rel="stylesheet">

<div class="promotionTopNavContainer"></div>
    <!-- 中间区域 -->
<!-- 中间区域 -->
<div class="header_mid clearfix">
    <div class="wrap">
        <a rel="nofollow" href="/" class="logo" title="蘑菇街首页"></a>
        <div class="normal-search-content">
            <div class="top_nav_search" id="nav_search_form"> <!--搜索框 -->
                <div class="search_inner_box clearfix">
                    <div class="selectbox" data-v="1">
                        <span class="selected">搜商品</span>
                        <ol>
                            <li class="current" data-index="bao"><a href="#">商品</a></li>
                            <li data-index="shop"><a href="#">店铺</a></li>
                        </ol>
                    </div>
                    <form action="/search" method="get" id="top_nav_form">
                        <input data-tel="search_book" name="search" class="ts_txt fl" type="text">
                        <input value="搜  索" class="ts_btn" type="submit">
                        <input name="t" value="bao" id="select_type" type="hidden">
                        <input name="ptp" value="1.vfGie.0.0.F1H15" type="hidden">
                    </form>
                    <div class="top_search_hint"></div>
                </div>

                <div class="ts_hotwords"><a rel="nofollow" class="ts_hotword" href="#">韩版毛衣</a><a rel="nofollow" class="ts_hotword" href="#">短靴</a><a rel="nofollow" class="ts_hotword" href="#">男士外套</a><a rel="nofollow" class="ts_hotword" href="#">新款包包</a><a rel="nofollow" class="ts_hotword" href="#">羽绒服</a><a rel="nofollow" class="ts_hotword" href="#">打底裤</a><a rel="nofollow" class="ts_hotword" href="#">睡衣</a><a rel="nofollow" class="ts_hotword" href="#">行李箱</a><a rel="nofollow" class="ts_hotword" href="">套装</a></div>
            </div>
        </div>
        <div class="mid_fr">
            <div class="nav_mogu_qrcode">
                <img src="/ordercss/upload_ifrdsnjugizgkn3ghezdambqmeyde_280x280.png" alt="蘑菇街客户端下载" width="70" height="70">
                <p>蘑菇街客户端</p>
            </div>
        </div>
    </div>
</div>

<form class="add_pic_form" method="post" enctype="multipart/form-data" action="/home/cout/button"> 
{{ csrf_field()}}
  <div id="body_wrap">
   <div id="body" class="fm960"> 
    <div class="hsborder"> 
     <h2 class="comment_header">商品评价</h2>
    </div> 
    <div class="comment_tips"> 
    </div> 
    <div class="contentbox"> 
     
      <input name="orderId" value="1ngwo5dbm4" type="hidden" /> 
      <ul class="commentlist"> 
       <li class="clearfix"> 
        <div class="goodsitem"> 
         <div class="imgbox clearfix"> 
          <a target="_top" hidefocus="true" title="查看宝贝详情" href="/home/goods/index?gid={{$goods->gid}}" class="pic fl"> <img alt="" src="{{$goods->gpic}}" /> </a> 
          <div class="txt fl"> 
           <div class="title">
            {{$goods->gname}}
           </div> 
           <div class="logo">
            <img src="/cout/16fh3g_ie2tgojtmftdkmbtgazdambqhayde_74x31.png" />
           </div> 
           <div class="infos"> 
            <p>价格:{{$goods->price}}</p> 
            <p>款式:适中</p> 
           </div> 
          </div> 
         </div> 
         <div class="comment_txt clearfix"> 
          <div class="comment_title fl"> 
           <p>商品评价</p> 
          </div> 
          <div class="comment_box"> 
           <textarea name="cout"  style="color: rgb(204, 204, 204);" class='neirong'></textarea> 
           <div class="add_pic_box"> 
             
            <input name="forbidAddImg_1ngwo5dr1o" value="false" type="hidden" /> 
            <span class="add_pic"></span> 
            <span class="pic_no">可以晒美图哦</span> 
           </div> 
           <div class="imglist clearfix">
           
           <!-- 上传图片 -->
           <div class="imgbox" style='display:none'>
              <span>
                <img id="nickPic" src="" width='70px' height='70px' class="del tupian">
              </span>
           </div> 
            

            <input class="imgpath" name="img_1ngwo5dr1o" value="" type="hidden" /> 
            <input name="type_1ngwo5dr1o" value="2" type="hidden" /> 
            <input name="itemId_1ngwo5dr1o" value="1k5jntc" type="hidden" /> 
           </div> 
          </div> 
         </div> 
        </div> 
        <style type="text/css">
            .commentlist .rank_line .on{background-position:-1px 3px;}
            
        </style>
        <div class="assessbox"> 
         <p class="rank_line star_box clearfix">
            <b>描述相符：</b>
            <span class="star_wrap"> 
             <i class="star star1" id='1分'></i>
             <i class="star star2" id='2分'></i> 
             <i class="star star3" id='3分'></i> 
             <i class="star star4" id='4分'></i> 
             <i class="star star5" id='5分'></i> 
             <i class="bubble">0分</i> 
            </span> 
            <input name="miaoshu" value="0" type="hidden" class='miaoshu'/> </p> 
         
         <p class="rank_line star_box clearfix"> <b>商品质量：</b> <span class="star_wrap"> 
         <i class="star star1" id='1分'></i>
         <i class="star star2" id='2分'></i> 
         <i class="star star3" id='3分'></i> 
         <i class="star star4" id='4分'></i> 
         <i class="star star5" id='5分'></i>  
         <i class="bubble">0分</i> 
         </span> <input name="squ" value="0" type="hidden" class='zhiliang'/> </p> 


         <p class="rank_line star_box clearfix"> <b>价格合理：</b> <span class="star_wrap"> 
         <i class="star star1" id='1分'></i>
         <i class="star star2" id='2分'></i> 
         <i class="star star3" id='3分'></i> 
         <i class="star star4" id='4分'></i> 
         <i class="star star5" id='5分'></i> 
         <i class="bubble">0分</i> 
         </span> <input name="spic" value="0" type="hidden" class='jiage'/> </p> 
         <!-- <p class="rank_line suit_item clearfix"> <b>是否合身：</b> <a href="javascript:;" class="suit_item_a cur">正好</a> <a href="javascript:;" class="suit_item_a">偏大</a> <a href="javascript:;" class="suit_item_a">偏小</a> <input name="suit_1ngwo5dr1o" value="1" type="hidden"> </p>  <p class="rank_line user_item clearfix">  </p> --> 
         <p class="rank_line star_box clearfix"> <b>服务满意：</b> <span class="star_wrap"> 
         <i class="star star1" id='1分'></i>
         <i class="star star2" id='2分'></i> 
         <i class="star star3" id='3分'></i> 
         <i class="star star4" id='4分'></i> 
         <i class="star star5" id='5分'></i> 
         <i class="bubble">0分</i> 
         </span> <input name="ser" value="0" type="hidden" class='fuwu'/> </p> 
        </div> </li> 
      </ul> 
      <div class="subbox"> 
       <input value="发表评价" type="submit" id='button'/> 
      </div> 
    
     <div class="comment_toolbar clearfix"> 
     </div> 
     <div class="user-comment-box" id="J_u_commentbox" data-itemid="undefined"></div> 
    </div> 
      <input value="{{session('uid')}}" type="hidden" name='uid' class='uid'/> 
     <input value="{{$goods->gid}}" type="hidden" name='gid' class='gid'/> 
     <input value="{{$goods->sid}}" type="hidden" name='sid' class='sid'/> 
     <input value="{{$gid['oid']}}" type="hidden" name='oid' class='oid'/> 
     <input  type="file"  name="pprice" class="add_file_el" id="uploadAvartar" onchange='javascript:show();hhhh();' style="top: 480px; left: 267.5px;"/> 
 </form>

     
 



  @endsection
  @section('js')
   <script type="text/javascript" src="/homecss/logincss/js/files_upfiles.js"></script>
    <script type="text/javascript">
      //提交评价
      // $('#button').click(function()
      // {
      //   //获取评价内容
      //   var cout = $('.neirong').val();
      //   //获取评价图片
      //   var pprice = $('.add_file_el').val();
      //   //获取描述
      //   var miaoshu = $('.miaoshu').val();
        
      //   //获取质量
      //   var squ = $('.zhiliang').val();
      //   //获取服务
      //   var ser = $('.fuwu').val();
       
      //   //获取价格
      //   var spic = $('.jiage').val();
      //   //获取sid
      //   var sid = $('.sid').val();
      //   //获取uid 
      //   var uid = $('.uid').val();
      //   //获取hid
      //   var gid = $('.gid').val();
      //   //发送ajax提交数据到控制器
      //   $.get('/home/cout/button',{cout:cout,pprice:pprice,miaoshu:miaoshu,squ:squ,ser:ser,spic:spic,gid:gid,sid:sid,uid:uid},function(data)
      //   {
      //     if(data){
      //       alert('评价成功,去看看其他宝贝吧');
      //     }else{
      //       alert('评价失败');
      //     }
      //   },'json');
      // })
      //评价描述......
      $('.star').click(function()
      {
        $(this).next().removeClass('on').next().removeClass('on').next().removeClass('on').next().removeClass('on');
        $(this).addClass('on').prev().addClass('on').prev().addClass('on').prev().addClass('on').prev().addClass('on');
        var a = $(this).attr('ID');
        str = a.substring(0, 1);
        $(this).parent().find('.bubble').html(a);
        $(this).parent().next().val(str);
      })

      //晒图
      function hhhh()
      {
      $('.imgbox').css('display','block');
        $('.pic_no').html('点击图片可取消晒图');

      }
      //点击图片取消晒图
      $('.del').click(function()
      {
        $(this).parent().parent().css('display','none');
        $(this).attr("src","");
        $('.pic_no').html('可以晒美图哦');
        var tp = $('.add_file_el').val('');
      })

    </script>
  @endsection
