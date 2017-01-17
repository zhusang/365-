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
//移出鼠标后隐藏
$('.all').mouseout(function(){
	$('.slideer').css('display','none');
});

//给搜索本店绑定单击事件

$('#J_SearchInShop').click(function(){
	//获取到input框里的内容
	var res = $('#J_SearchKey').val();
	// console.log(res);
	var sid = $('input[name=sid]').val();
	// console.log(sid);
	// 设置跳转路径
	var url = '/shop?sid='+sid;
	// alert(url);
	window.location.href = url+'&chaxun='+res;
});