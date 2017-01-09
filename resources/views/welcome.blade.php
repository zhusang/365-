@extends('Home.Muban.layout')

@section('js')
<script>
/*============================ TOP轮播图  =============================*/

//设置全局变量
        var n = 0;
        var g = 0;
    //定义定时器开关
        var init = null;    
    //设置定时器
        init = setInterval(function(){
            if (n==6) {n=0;}
            
            //设置轮播图
            //                          attr({ src: "test.jpg", alt: "Test Image" })
                    $('#toplb').find('a').eq(n).addClass('mslide_banner_show').fadeIn(350).css({zIndex:'1',display:'block'}).siblings().removeClass('mslide_banner_show').css({zIndex:'0',display:'none'});
            
            //设置圆点
                    $('#toplbb').find('a').eq(n).css('backgroundColor','skyblue').siblings().removeClass('dot_show').css({backgroundColor:'white',borderRadius:'50%',width:'16px',height:'16px'});
            //调用函数以便达到 六个 不同的背景色
                if(n==0){
                    checkbg(n);
                    }
                if(n==1){
                    bg();
                }
                if (n==2) {
                    bgg();
                }
                if (n==3) {
                    bggg();
                }
                if (n==4) {
                    bgggg();
                }
                if (n==5) {
                    bggggg();
                }

                n++;
        },5000);

        

        // console.log($('#toplbb').find('a'));
            //绑定鼠标移入事件
                for (var i = 0; i < $('#toplbb').find('a').length; i++) {

                    $('#toplbb').find('a').eq(i).mouseover(function(){
                            n = $(this).index();

                        //设置圆点按钮
                        $(this).css('backgroundColor','skyblue').siblings().removeClass('dot_show').css({backgroundColor:'white',borderRadius:'50%',width:'16px',height:'16px'});
                        //设置轮播图
                            $('#toplb').find('a').eq(n).addClass('mslide_banner_show').css({zIndex:'1',display:'block'}).siblings().removeClass('mslide_banner_show').css({zIndex:'0',display:'none'});
                    });
                }
        // =========================  根据图片更换背景色   =========================
        //=========================    封装函数 ============================
            //  //清除背景色
                    // $('.image-wrapper').css('background','none');
            $.adaptiveBackground.run({ parent: '1' });
            function checkbg(abc)
            {

                
                //作用:  获取图片背景色作为父辈元素背景色
                //背景色给 含有类名image-wrapper
                // $(document).ready(function(){
                     // $.adaptiveBackground.run({ parent: '1' });
                // });

                //添加属性  data-adaptive-background     data-description
                    $('#toplb').find('a').eq(0).find('img').attr({'data-adaptive-background':'1','data-description':'grandpa'});
                //同辈移出属性  data-adaptive-background     data-description
                    $('#toplb').find('a').eq(0).siblings().find('img').removeAttr('data-description').removeAttr('data-adaptive-background');
                //设置背景色
                    $.adaptiveBackground.run({ parent: '1' });
            }

            function bg()
            {
                //清除背景色
                    $('.image-wrapper').css('background','none');
                //添加属性  data-adaptive-background     data-description
                $('#toplb').find('a').eq(1).find('img').attr({'data-adaptive-background':'1','data-description':'grandpa'});
                //同辈移出属性  data-adaptive-background     data-description
                    $('#toplb').find('a').eq(1).siblings().find('img').removeAttr('data-description').removeAttr('data-adaptive-background');
                //设置背景色
                     $.adaptiveBackground.run({ parent: '1' });
            }
            
            function bgg()
            {
                //清除背景色
                    $('.image-wrapper').css('background','none');
                //添加属性  data-adaptive-background     data-description
                $('#toplb').find('a').eq(2).find('img').attr({'data-adaptive-background':'1','data-description':'grandpa'});
                //同辈移出属性  data-adaptive-background     data-description
                    $('#toplb').find('a').eq(2).siblings().find('img').removeAttr('data-description').removeAttr('data-adaptive-background');
                //设置背景色
                     $.adaptiveBackground.run({ parent: '1' });
            }

            function bggg()
            {
                //清除背景色
                    $('.image-wrapper').css('background','none');
                //添加属性  data-adaptive-background     data-description
                $('#toplb').find('a').eq(3).find('img').attr({'data-adaptive-background':'1','data-description':'grandpa'});
                //同辈移出属性  data-adaptive-background     data-description
                    $('#toplb').find('a').eq(3).siblings().find('img').removeAttr('data-description').removeAttr('data-adaptive-background');
                //设置背景色
                     $.adaptiveBackground.run({ parent: '1' });
            }

            function bgggg()
            {
                //清除背景色
                    $('.image-wrapper').css('background','none');
                //添加属性  data-adaptive-background     data-description
                $('#toplb').find('a').eq(4).find('img').attr({'data-adaptive-background':'1','data-description':'grandpa'});
                //同辈移出属性  data-adaptive-background     data-description
                    $('#toplb').find('a').eq(4).siblings().find('img').removeAttr('data-description').removeAttr('data-adaptive-background');
                //设置背景色
                     $.adaptiveBackground.run({ parent: '1' });
            }

            function bggggg()
            {
                //清除背景色
                    $('.image-wrapper').css('background','none');
                //添加属性  data-adaptive-background     data-description
                $('#toplb').find('a').eq(5).find('img').attr({'data-adaptive-background':'1','data-description':'grandpa'});
                //同辈移出属性  data-adaptive-background     data-description
                    $('#toplb').find('a').eq(5).siblings().find('img').removeAttr('data-description').removeAttr('data-adaptive-background');
                //设置背景色
                     $.adaptiveBackground.run({ parent: '1' });
            }
        /*=====================  精选专题轮播图 ===============================*/
        //设置全局变量
        var j = 0;
        setInterval(function(){
            j++;
            if (j==5) {j=0;}
            //设置轮播图                                                 
                $('#ztlb').children().eq(j).addClass('mslide_banner_show').css({left:'0px'}).siblings().removeClass('mslide_banner_show').css({left:'-950px'});
                // $('#ztlb').children().eq(j).addClass('mslide_banner_show').animate({left:'0px'},200).siblings().removeClass('mslide_banner_show').css({left:'-950px'});
            //设置按钮
                    $('#ztlbb').children().eq(j).addClass('dot_show ').css('backgroundColor','pink').siblings().removeClass('dot_show').css('backgroundColor','black');

        },3090);

            //绑定鼠标移入事件
                for (var ii = 0; ii < $('#ztlbb').children().length; ii++) {

                    $('#ztlbb').children().eq(ii).mouseover(function(){
                            j = $(this).index();
                            
                        //设置圆点
                            $('#ztlbb').children().eq(j).addClass('dot_show ').css('backgroundColor','pink').siblings().removeClass('dot_show').css('backgroundColor','black');
                        //设置轮播图
                            $('#ztlb').children().eq(j).addClass('mslide_banner_show').css({left:'0px'}).siblings().removeClass('mslide_banner_show').css({left:'-950px'});
                    });
                }

        //*======================== 店铺轮播图  ========================*/
        //设置全局变量
        var k = 0;
        setInterval(function(){
            k++;
            if (k==4) {k=0;}
            //设置轮播图
                $('#dplb').children().eq(k).addClass('mslide_banner_show').css({left:'0px'}).siblings().removeClass('mslide_banner_show').css({left:'-950px'});
            //设置按钮
                $('#dplbb').children().eq(k).addClass('dot_show ').css('backgroundColor','pink').siblings().removeClass('dot_show').css('backgroundColor','black');
                    
        },3500);

            //绑定鼠标移入事件
                for (var iii = 0; iii < $('#dplbb').children().length; iii++) {

                    $('#dplbb').children().eq(iii).mouseover(function(){
                            k = $(this).index();
                            
                        //设置圆点
                            $('#dplbb').children().eq(k).addClass('dot_show ').css('backgroundColor','pink').siblings().removeClass('dot_show').css('backgroundColor','black');
                        //设置轮播图
                                $('#dplb').children().eq(k).addClass('mslide_banner_show').css({left:'0px'}).siblings().removeClass('mslide_banner_show').css({left:'-950px'});
                    });
                }

                
        // ========================= TOP弹出菜单 ===========================
        $(window).scroll(function(){
        //获取文档滚动距离
            var TT = $(this).scrollTop();
        //判断滚动距离
            if ( 570 < TT) {
                    $('.Menu').fadeIn(450).css('display','block');
                // $('.Menu').animate({display:'block'}, 300); 
            }
            if (TT < 570) {
                $('.Menu').css('display','none');
            }
        });
            
        
        
</script>
@endsection

