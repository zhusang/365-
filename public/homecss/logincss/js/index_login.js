	//给所有的input绑定获取焦点事件
	$('input').focus(function(){
		$('.error_tip').css('display','none');
	});
	//用户名绑定丧失焦点事件
	//定义一些全局变量
	var YUNAME = false;
	var YPASS = false;
	$('input[name=uname]').blur(function(){
		//获取值
		var name = $(this).val();
		// console.log(name);
		//如果为空修改提示文本
		if(name == ''){
			$('.error_tip').css('display','block');
			$('.error_tip').html('请输入昵称/邮箱/手机号');
			YUNAME = false;
		}else{
			YUNAME = true;
		}
	});
	//密码绑定丧失焦点事件
	$('input[name=pass]').blur(function(){
		//获取值
		var pass = $(this).val();
		// console.log(pass);
		//如果为空修改提示文本

		if(pass == ''){
			$('.error_tip').css('display','block');
			$('.error_tip').html('请输入密码');
			YPASS = false;
		}else{
			YPASS = true;
		}
	});
	//给登录绑定丧失焦点事件
	$('.lg_login').click(function(){

		$('input').trigger('blur');
		// 当用户名密码都填了的情况下就让他能够提交
		if(YUNAME && YPASS){
			return true;
		};
		return false;
	});

