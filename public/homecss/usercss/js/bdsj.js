//文档加载完毕更换标题
$(function(){
	
	$('title').html('绑定手机_蘑菇街');
});
var code = '1';
//单击时获取手机号发送ajsx
$('.code_get').click(function(){

	var phone = $('input[name=phone]').val();

	$.get('/pcode',{phone:phone},function(data){
		console.log(data);
		code = data;
	})
});
var pcode = '1';
//点击时确定变更时
$('#bg').click(function(){
	pcode = $('.code').val();
	// alert(pcode);
	if(pcode != '1' && code != '1' && pcode == code){
		$('.changetip').css('display','none');
		$('.bindedinfo').css('display','none');
		$('.yzm').css('display','none');
		$('.aaa').css('display','block');
		$('#bg').css('display','none');
		$('#bd').css('display','block');
		return true;
	}else{
		$('.codea').addClass('error').html('验证码错误');
		return false;
	}
	
});

	//发送手机验证码
	//定义一个全局变量
	var cc = 1;
	// 正则验证手机号是否正确
	$('input[name=nphone]').blur(function(){
		// 获取填写的手机号
		var phone = $('.phone').val();
		//正则
		var reg = /^1\d{10}$/;
		if(!reg.test(phone)){
			$('.error_tip').css('display','inline-block');
			$('.error_tip').addClass('error').html('您输入的手机号不符合标准');
			cc = 2;
		}else{
			$('.error_tip').css('display','none');
			cc = 1;
			//发送ajax来验证手机号是否被注册
			$.get('/user/phone',{phone:phone},function(data){
				if(data){
				$('.error_tip').css('display','inline-block');
				$('.error_tip').addClass('error').html('该手机号已注册');
				cc=2;
				}else{
				$('.error_tip').css('display','none');
				cc=1;
				}
			});
		}
	});
var cccc = '';
	//点击事件
	$('.code_getb').click(function(){
			// 判断是不是禁止点击状态
			if (cc == 1 ){
				// 获取填的手机号
				var phone = $('#userphone').val();
				// console.log(phone);
				// 发送ajax请求
				$.get('/pcode',{phone:phone},function(data){
					console.log(data);
					cccc = data;
				})
				$('.code_getb').attr('disabled',true);
				$('.code_getb').html('重新获取(60)');
				var a = 60;
				var inte = setInterval(function(){
					// 修改样式
					
					a = a-1;
					
					$('.code_getb').html('重新获取('+a+')');
					
					if (a < 1){
						$('.code_getb').attr('disabled',false);
						$('.code_getb').html('获取验证码');
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


//点击绑定手机时触发
$('#bd').click(function(){
	//获取到输入的验证码
	var cddd = $('.codeb').val();
	
	if(cccc == cddd){
		return true;
	};
		
	$('.codebb').addClass('error').html('验证码错误');
	
	return false;
});

$('.s').click(function(){
	window.location.href = window.location.href;
});

$('.e').click(function(){
	window.location.href = window.location.href;
});