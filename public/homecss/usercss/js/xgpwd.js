//文档加载完毕更换标题
$(function(){
	
	$('title').html('设置密码_蘑菇街');
})
// 定义全局变量
var q = false;
var w = false;
var e = false;
//给input绑定丧失焦点事件
$('.currentpwd').blur(function(){
	//获取框中的值
	var pwd = $('.currentpwd').val();
	// 判断是否为空
	if(pwd == ''){
		//修改样式样式显示提示语
		$('.a').addClass('error').html('请输入密码');
		return false;
	};
	// console.log(pwd);
	// 获取到密码后发送ajax查询密码是否正确
	$.get('pwd',{pwd:pwd},function(data){
		if(data){
			$('.a').removeClass('error').html('');
			q = true;
		}else{
			$('.a').addClass('error').html('密码错误');
		}

	});
});

//第二个框绑定丧失焦点事件
$('.newpwd').blur(function(){
	var pwd = $('.newpwd').val();
	if(pwd == ''){
		//修改样式样式显示提示语
		$('.b').addClass('error').html('密码需要是字母或数字，最小6位，最大20位');
		return false;
	}else{
		$('.b').removeClass('error').html('');
		w = true;
	}
});

//第三个框绑定丧失焦点事件
$('.confirmpwd').blur(function(){
	var pwd = $('.newpwd').val();
	var pwda =  $('.confirmpwd').val();
	if(pwd == '' || pwd!=pwda){
		//修改样式样式显示提示语
		$('.c').addClass('error').html('2次输入的密码不一致');
		return false;
	}else{
		$('.c').removeClass('error').html('');
		e = true;
	}
});
//确定按钮默认动作
$('.confirm_button').click(function() {
	if(q && w && e){
		return true;
	};
	return false;
});


//给弹出来的框绑定单击事件
$('.s').click(function(){
	window.location.href = '/user/login';
});

$('.e').click(function(){
	window.location.href = window.location.href;
});
