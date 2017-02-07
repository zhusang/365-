// alert($);
//绑定单击事件
// 定义全局变量
var a = 1;
$('.title').click(function(){
	// alert(1);
	if(a == 1){
		$(this).find('.liImg1').css('display','none');
		$(this).find('.liImg2').css('display','inline-block');
		$(this).next().css('display','block');
		a = 2;
	}else{
		$(this).find('.liImg1').css('display','inline-block');
		$(this).find('.liImg2').css('display','none');
		$(this).next().css('display','none');
		a = 1;
	}
 	
});