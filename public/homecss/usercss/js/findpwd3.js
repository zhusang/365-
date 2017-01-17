// alert($);
//获取输入的密码
var pwd1 = '';
var pwd2 = '';
var AA = false;
var BB = false;
var CC = false;
var DD = false;

//获取焦点
$('.newpwd1').focus(function(){
	$('.s1').css('display','none');
	$('.span1').html('请输入6-20位的字母、数字或者字符');
});
//丧失焦点事件
$('.newpwd1').blur(function(){
	//获取写的密码
	pwd1 = $('.newpwd1').val();
	//修改为空字符串
	$('.span1').html('');
	// 判断是不是为空
	if(pwd1 == ''){
		//为空的话修改样式
		$('.s1').css('display','inline-block');
		CC = false;
	}else{
		CC = true;
	}
	//验证正则
	var reg = /^\w{6,20}$/;

	if(!reg.test(pwd1)){
		$('.s1').css('display','inline-block').html('密码需要是字母或数字，最小6位，最大20位');
		DD = false;
	}else{
		DD = true;
	}
	
});

//获取焦点事件
$('.newpwd2').focus(function(){
	$('.s2').css('display','none');
	$('.span2').html('请再次确认密码');
});
//创建全局变量来判断按钮是否可以点击

//丧失焦点事件
$('.newpwd2').blur(function(){
	pwd2 = $('.newpwd2').val();

	$('.span2').html('');

	if(pwd2 == ''){
		//为空的话修改样式
		$('.s2').css('display','inline-block');
		AA = false;
	}else{
		AA = true;
	}

	if(pwd1 != pwd2){
		$('.s2').css('display','inline-block').html('两次输入的密码不一致');
		BB = false;
	}else{
		BB = true;
	}
});

$('.btn_sub_form').click(function(){
	// alert(1);
	
	if(AA && BB && CC && DD){
		
		return true;
	
	};
	
	return false;
});