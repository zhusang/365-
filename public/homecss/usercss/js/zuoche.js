//绑定单击事件
// 设置一个全局变量查看是否点击
var a = 1;

$('.mu_nav').click(function(){
	if(a==1){
		$(this).addClass('mu_expand').siblings().removeClass('mu_expand');
		a = 2;
	}else{
		$(this).removeClass('mu_expand');
		a = 1;
	}
});

//给li绑定单击事件当选中时变颜色
// $('li').click(function(){
	// $(this).addClass('c').siblings().removeClass('c');
// });
