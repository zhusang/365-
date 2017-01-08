	//发送手机验证码
	//定义一个全局变量
	var cc = 1;
	// 正则验证手机号是否正确
	$('input[name=phone]').blur(function(){
		// 获取填写的手机号
		var phone = $('#userphone').val();
		//正则
		var reg = /^1\d{10}$/;
		if(!reg.test(phone)){
			$('.error_tip').css('display','block');
			$('.error_tip').html('您输入的手机号不符合标准');
			cc = 2;
		}else{
			$('.error_tip').css('display','none');
			cc = 1;
		}
	});
	//点击事件
	$('.getCode').click(function(){
			// 判断是不是禁止点击状态
			if (cc == 1 ){
				// 获取填的手机号
				var phone = $('#userphone').val();
				// console.log(phone);
				// 发送ajax请求
				$.get('/pcode',{phone:phone},function(data){
					console.log(data);
				})
				$('.getCode').addClass('downing');
				$('.getCode').html('重新获取(60)');
				var a = 60;
				var inte = setInterval(function(){
					// 修改样式
					
					a = a-1;
					
					$('.getCode').html('重新获取('+a+')');
					
					if (a < 1){
						$('.getCode').removeClass('downing');
						$('.getCode').html('点击获取验证码');
						cc = 1;
						clearInterval(inte);
					};
				},1000);

			}else{
				//阻止默认行为
				return false;
			}
			//修改点击后的变量
			cc = 2;
	});