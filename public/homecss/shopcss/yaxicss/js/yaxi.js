//当鼠标移动到商铺logo时 显示商铺的评分详细信息

//获取元素绑定鼠标移入事件

$('.shop-name').mouseover(function(){
	// alert(1);
	// 移入后给本身添加 class=hover
	$('.user-info').addClass('hover');
	$('.shop-info').css('display','block');
});

//绑定鼠标移出事件

$('.shop-name').mouseout(function(){
	//移除后自己的 hove 移出
	$('.user-info').removeClass('hover');
	$('.shop-info').css('display','none');
});


//全部商品菜单显示
$('.all').mouseover(function(){
	$('.slideer').css('display','block');
	
	$('.subMenu').mouseover(function(){
		$('.slideer').css('display','block');
	});
	$('.subMenu').mouseout(function(){
		$('.slideer').css('display','none');
	});

});

$('.all').mouseout(function(){
	$('.slideer').css('display','none');
});