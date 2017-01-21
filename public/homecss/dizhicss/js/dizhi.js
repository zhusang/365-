// alert($);
//设置全局变量
var a = 1;

//点击显示添加地址表单
$('#J_saddAddress').click(function(){
	// alert(1);
	if(a == 1){
		$('.biao').css('display','block');
		a = 2;
	}else{
		$('.biao').css('display','none');
		a = 1;
	}
});
//绑定取消按键
$('.J_cancelbtn').click(function(){
	$('.biao').css('display','none');
		a = 1;
});

//给设置默认地址加点击事件
$('.J_default').click(function(){
	//变颜色
	$(this).parents('div').addClass('default').siblings().removeClass('default');
	// $(this).html('默认地址').siblings('.J_default').html('设为默认');
	console.log($(this).siblings());
});