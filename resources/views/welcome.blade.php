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
                $('#ztlb').children().eq(j).addClass('mslide_banner_show').fadeIn(750).css({left:'0px'}).siblings().removeClass('mslide_banner_show').css({left:'-950px'});
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
                $('#dplb').children().eq(k).addClass('mslide_banner_show').fadeIn(750).css({left:'0px'}).siblings().removeClass('mslide_banner_show').css({left:'-950px'});
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
        // 设置克隆标志 只克隆一次
        	  	var pp = 1;
        // 设置克隆标志 只可以克隆一次
     			var ppp = 1;
        $(window).scroll(function(){
        //获取文档滚动距离
            var TT = $(this).scrollTop();
        //判断滚动距离
            if ( 570 < TT) {
            	//弹出菜单
                    $('.Menu').fadeIn(450).css('display','block');
               	//复制一份搜索框
               		var newDiv = $('#nav_search_form').clone(true);
               	//设置属性
               		newDiv.css({position:'relative',marginTop:'7px'}).find('.ts_hotwords').css('display','none');
               		newDiv.find('.search_inner_box').css({position:'absolute',top:'0px'});
               	if(pp==1){
               	//添加到弹出菜单中
               			pp = 0;
               			$('.Topsearch').append(newDiv);
               			
               		}
            }
            if (TT < 570) {
            	//收起菜单
                	$('.Menu').css('display','none');
                //关闭分类菜单
         			$('#float_nav_menu').css('display','none');
            }
        });
            
        //当鼠标放上时弹出分类菜单
         $('.Topfixed').mouseover(function(){
         	//改变样式
         	$('#Topmenu').css('display','inline-block');

	         	//显示分类菜单
	         		$('#float_nav_menu').css({display:'',left:'160.5px'});
			         		//拷贝一份分类菜单
			         			// var newMenu = $('#float_nav_menu').clone(true);
			         		//设置属性
			         			// newMenu.css({display:'',zIndex:'9999'});
			         		//插入到页面中
			         		// if(ppp==1){
			         			// ppp =0 ;
			         			// $('#Topmenu').append(newMenu);
			         		// }
	         			
         });
         $('#Topmenu').mouseout(function(){
         	//关闭分类菜单
         		$('#float_nav_menu').css('display','none');
         })
       
        
     // =================  左边a标签移动 根据相应内容的变色 ===================
     	//文档滚动事件
     	$(window).scroll(function(){
     		 //获取文档滚动距离
           		 var leftT = $(this).scrollTop();
           	//判断文档滚动距离
           		if ( leftT >780) {
           		
						$('#leftnab_hidebox').css('display','block');
							floor(leftT);
           		}

           		if (leftT < 778) {
           			
           				$('#leftnab_hidebox').css('display','none');
           		}
     	});



     //定义函数 设置a标签的变色
     	function floor(Top)
     	{	
     		var arr = [];
     		for (var i = 0; i < $('.floor-con').length; i++) {
     			//获取到每一个a标签的距离文档距离
     				arr[i]= $($('.floor-con')[i]).offset().top;
     			//调用函数给每一个a标签绑定单击事件
     				$this = $('.nav-list').find('a').eq(i);
     				click($this,arr[i]);
     			//如果当前距离 大于等于 某一个a标签文档距离
     				if( arr[i]-100 <= Top){
     					//获取到当前元素的 data-module-title属性值
     						value = $($('.floor-con')[i]).attr('data-module-title');
     					//往 与当前属性值相同的a标签属性添加 背景颜色属性
     						$('.nav-list').find('a').eq(i).fadeIn(1000).css({color:'white',background:'#ff6363'}).siblings().css({color:'black',background:'white'});

     				}
     		}
     		// console.log(Top);
     		// console.log(arr);
     		
     	}	
     //封装函数 给每一个a标签绑定单击事件
     function click($this,Top){
     	$this.click(function(){
     		//转换样式
     			$this.fadeIn(1000).css({color:'white',background:'#ff6363'}).siblings().css({color:'black',background:'white'});
     		//移动文档位置
     			$(window).scrollTop(Top-50);
     	});
     }


     // ==========================  分类菜单
     // //查看是否存在某个值
     // $('div').is('.redColor')
     
     var value = null;
     for (var i = 0; i < $('#cate').find('li').length; i++) {
     	var cate = $('#cate').find('li');
     	//给每个li绑定鼠标移入事件
     	$(cate[i]).mouseover(function(){
     		//获取属性值
     			value = $(this).attr('data-topic');
     		if(value){
     			$('#TopType').css('display','block');
		  		  //遍历循环右边的菜单栏
		  		  for (var ii = 0; ii < $('#TopType').find('.sub_catagory').length; ii++) {
			     		
			     		var th = $('#TopType').find('.sub_catagory').eq(ii);
			     	//判断是否含有这个class属性
			     		if (th.is('.'+value)) {
			     			th.css('display','block').siblings().css('display','none');
			     		}
			     		
			     	//显示	
					}

		  	}
     	
     	});	
     	//鼠标移出事件
     	$(cate[i]).mouseout(function(){
     			$('#TopType').css('display','none');
     	});
     		
  	}

//======================================下拉分类菜单==========================
var values = null;
  	for (var a = 0; a < $('#floatmenu').find('li').length; a++) {
  		$($('#floatmenu').find('li')[a]).mouseover(function(){
	  				//获取属性值
	     			values = $(this).attr('data-topic');
	     			// alert(values);
	     		if(values){
	     			$('#leftmenu').css('display','block');
			  		  //遍历循环右边的菜单栏
			  		  for (var ii = 0; ii < $('#leftmenu').find('.sub_catagory').length; ii++) {
				     		
				     		var th = $('#leftmenu').find('.sub_catagory').eq(ii);
				     		console.log(th);
				     		console.log(values);
				     	//判断是否含有这个class属性
				     		if (th.is('.'+values)) {
				     			//如果有 显示右图内容
				     			th.css('display','block').siblings().css('display','none');
				     		}
				     		
				     	//显示	
						}

			  	}
  		});
  	}
	   
     
</script>
@endsection

