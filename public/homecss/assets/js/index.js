


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
                var qq = 0;
             //启动定时器
                var inie = setInterval(movel,4000);
                //鼠标悬停事件
                    $('#shop').hover(function(){
                        //移入事件
                            clearInterval(inie);
                    },function(){
                        //移出事件
                        inie = setInterval(movel,4000); 
                    }); 

                    $('#bbtn1').hover(function(){
                        //移入事件
                            clearInterval(inie);
                    },function(){
                        //移出事件
                        inie = setInterval(movel,4000); 
                    });  

                    $('#bbtn2').hover(function(){
                        //移入事件
                            clearInterval(inie);
                    },function(){
                        //移出事件
                        inie = setInterval(movel,4000); 
                    });
             //无缝轮播克隆
                var newA = $('.mslide_content_items').clone();
                // console.log(newA);
                for (var i = 0; i < newA.length; i++) {
                   var newA1 = newA[0];
                   var newA2 = newA[1];
                   var newA3 = newA[2];
                }
                //插入新的
                $('#shop').append(newA1);
                $('#shop').append(newA2);
                $('#shop').append(newA3);

            //封装函数进行左移动
            function movel()
            {
                //自增
                    qq++;
                //
                if (qq==6) {
                    $('#shop').css('left','0px');
                    qq=1;
                }
                var newl = qq*951+'px';
                // console.log(newl);
                $('#shop').animate({left:'-'+newl},1900);

            }
            //封装函数进行右移动
            function mover()
            {
                //自动递减
                    qq--;
                if (qq == -1) {
                     $('#shop').css('left','-4755px');
                    qq=4; 
                }
                var newr = qq*951+'px';
                $('#shop').animate({left:'-'+newr},1900);
            }

            //绑定单击事件
            //向左移动
            $('#bbtn1').click(function(){
                movel();
            });
            //向右移动
            $('#bbtn2').click(function(){
                mover();
            });
      

                
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
         
         
        //TOP菜单单击事件
            $('#san').click(function(){
                $('#float_nav_menu').css('display','none');
            }); 

            //  $('.Topfixed').click(function(){
            //     $('#float_nav_menu').css('display','none');
            // });
           

       
        
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
     				click($this,arr[i],Top);
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
     function click($this,Top,OldTop){
     	$this.click(function(e){
     		//转换样式
     			$this.animate(1000).css({color:'white',background:'#ff6363'}).siblings().css({color:'black',background:'white'});
     		// //移动文档位置
       //          $(window).scrollTop(Top-50);
                // $(window).scrollTop(Top-50);
            //动画效果需要问一下
                var top = Top-50;
     			$(window).scrollTop(top);
                // console.log($(window).scrollTop());
                // var inte = setInterval(function(){
                //     if($(window).scrollTop() > Top)
                //     {
                //         clearInterval(inte);
                //     }
                //     $(window).scrollTop(OldTop += 10);
                // }, 10);
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

        //给右边菜单栏绑定鼠标移入事件
        
     		//获取属性值
     			value = $(this).attr('data-topic');
     		if(value){
                // alert(value);
     			// $('#TopType').css('display','block');
		  		  //遍历循环右边的菜单栏
		  		  for (var ii = 0; ii < $('#TopType').find('.sub_catagory').length; ii++) {
			     	$('#TopType').css('display','block');
			     		var th = $('#TopType').find('.sub_catagory').eq(ii);

			     	//判断是否含有这个class属性
			     		if (th.is('.'+value)) {
                            // console.log(value);
                            // console.log(th);
			     			th.css('display','block').siblings().css('display','none');
			     		}
			     	//显示	
					}

		  	}
     	
     	 //鼠标移出事件
      $('#TopType').mouseover(function(){

         	$('#TopType').css('display','block');
       
          });	
       //鼠标移出事件
     $('#TopType').mouseout(function(){
            $('#TopType').css('display','none');
        });

        }); 

  	

    }
    //鼠标移出事件
      for (var i = 0; i < $('#cate').find('li').length; i++) {
        var cate = $('#cate').find('li');
           $(cate[i]).mouseout(function(){
                $('#TopType').css('display','none');
           })
         }




    //鼠标移入事件
          
              
           

//======================================下拉分类菜单==========================
var values = null;
  	for (var a = 0; a < $('#floatmenu').find('li').length; a++) {
        //给每个li绑定鼠标移入事件
  		$($('#floatmenu').find('li')[a]).mouseover(function(){

                    //获取属性值
                    values = $(this).attr('data-topic');
                    // alert(values);
                if(values){
                    $('#leftmenu').css('display','block');
			  		  //遍历循环右边的菜单栏
			  		  for (var ii = 0; ii < $('#leftmenu').find('.sub_catagory').length; ii++) {
				     		
				     		var th = $('#leftmenu').find('.sub_catagory').eq(ii);
				     	
                                // th.css('display') = !th.css('display');        
                        //判断是否含有这个class属性
                            if (th.is('.'+values)) {
                                //如果有 显示右图内容
                               
				     			th.css('display','block').siblings().css('display','none');
				     		}
				     		
				     	//显示	
						}

			  	}
  		        //鼠标移入事件
                $('#leftmenu').mouseover(function(){
                    $(this).css('display','block');
                });
                //鼠标移出事件
                 $('#leftmenu').mouseout(function(){
                    $(this).css('display','none');
                });



        });

        // $($('#Topmenu').mouseout(function(){
        //     // th.css('display','none');
        //     $('#leftmenu').css('display','none');
        // });
  	}
        //给个li绑定鼠标移出事件
        for (var a = 0; a < $('#floatmenu').find('li').length; a++) {
                $($('#floatmenu').find('li')[a]).mouseout(function(){
                     $('#leftmenu').css('display','none');
                })


        }



    // =============================  ajax 加载抢购图片
    
     quickgoods();
    //封装函数发送ajax请求
        function quickgoods(){
            $.get('/quickgoods',{a:1},function(data){
                //获取所有的a标签
                    for (var i = 0; i < $('.MCUBE_MOD_ID_238815').find('a').length; i++) {
                      $('.MCUBE_MOD_ID_238815').find('a').eq(i).find('img').attr('src',data[i].gpic);
                      $('.MCUBE_MOD_ID_238815').find('a').eq(i).attr('href','home/goods/index?gid='+data[i].gid+'')
                    }

                    // $('.MCUBE_MOD_ID_238815').find('a')
            },'json')
        }

        //一元抢购入口
            $('.MCUBE_MOD_ID_238815').find('a').eq(1).mouseover(function(){
             $('.MCUBE_MOD_ID_238815').find('a').eq(1).attr('href','/buyone');
                
            });
     
       
       //=========== jquery 获取抢购时间
                   
                    setInterval(function(){
                         var d = new Date();
                        var hh = d.getHours();
                        var mm = d.getMinutes();
                        var ss = d.getSeconds();
                        var Time = Number(hh)+':'+Number(mm)+':'+Number(ss);
                        $('.h').html(Time);
                    },20);
        // =========================  ajax 加载猜你喜欢图片
        
        //  定义全局变量
        //  每页显示条数
             var love = 5;
         //当前为第几页
             var p = 1;
         //设置加载标识
            var isll = 1;
         //  封装函数进行ajax请求
            function like()
            {
                //改变标识
                    isll = 2;
                //发送ajax请求
                    $.get('/like',{'page':p,'num':love},function(data){
                      
                        //便利数据 把拿到的数据遍历到新的div中
                            for (var i = 0; i < data.length; i++) {
                                //复制div
                                    var newDiv = $('#div').clone();
                                //修改新的div的属性
                                    newDiv.css('display','inline-block');
                                    newDiv.find('a').eq(0).attr('href','/home/goods/index?gid='+data[i].gid);
                                    newDiv.find('a').eq(0).find('img').attr('src',data[i].gpic);
                                    newDiv.find('p').eq(0).html(data[i].gname);
                                    newDiv.find('a').eq(1).attr('href','/home/goods/index?gid='+data[i].gid);
                                    // newDiv.find('a').eq(1).find('p').html(data[i].gname);
                                    newDiv.find('a').eq(1).find('b').html('￥'+data[i].price);
                                    newDiv.find('a').eq(1).find('font').html(data[i].vcnt);
                                //插入div
                                    $('#J_scroll_wallbox').append(newDiv);

                                    // console.log(data[i]);
                                    // console.log(newDiv);
                            }

                    },'json');
                        //页数自增
                            p++;
                        //加载完毕改变标识
                         isll=1;

            }  
         
          //绑定文档滚动事件
                $(window).scroll(function(){
        //检测当前是否正在发起ajax请求
               if (isll==2) {return;}
        //获取整个文档的高度
                var sH = $(document).height();
        //获取文档滚动距离
                var sT = $(window).scrollTop();

        //获取可视区域高度
                var cH = $(window).height();
        //判断是否需要发起ajax请求 新的数据
                if(sH - sT - cH <= 650){
                    like();
                }
            })


	   