<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	<link rel="icon" href="/homecss/logincss/images/171169993508.ico" type="image/x-icon">
	<title>蘑菇街后台管理系统</title>
	
	<!-- <link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic"> -->
	<link rel="stylesheet" href="/admincss/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="/admincss/assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/admincss/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/admincss/assets/css/xenon-core.css">
	<link rel="stylesheet" href="/admincss/assets/css/xenon-forms.css">
	<link rel="stylesheet" href="/admincss/assets/css/xenon-components.css">
	<link rel="stylesheet" href="/admincss/assets/css/xenon-skins.css">
	<link rel="stylesheet" href="/admincss/assets/css/custom.css">
	<style type="text/css">
		#bgc{
			background-image:url('/admincss/assets/images/loginbg.jpg');
			background-size:100%;
	}
	</style>
	<script src="/admincss/assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>

<body class="page-body login-page" id="bgc">

	
	<div class="login-container">
	
		<div class="row">
		
			<div class="col-sm-6" class="col-offset-3">
			
				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						// Reveal Login form
						setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
						
						
						// Validation and Ajax action
						$("form#login").validate({
							rules: {
								username: {
									required: true
								},
								
								passwd: {
									required: true
								}
							},
							
							messages: {
								username: {
									required: '请输入用户名'
								},
								
								passwd: {
									required: '请输入密码'
								}
							},
							
							// Form Processing via AJAX
							submitHandler: function(form)
							{
								show_loading_bar(70); // Fill progress bar to 70% (just a given value)
								
								var opts = {
									"closeButton": true,
									"debug": false,
									"positionClass": "toast-top-full-width",
									"onclick": null,
									"showDuration": "300",
									"hideDuration": "1000",
									"timeOut": "5000",
									"extendedTimeOut": "1000",
									"showEasing": "swing",
									"hideEasing": "linear",
									"showMethod": "fadeIn",
									"hideMethod": "fadeOut"
								};
									
								$.ajax({
									url: "data/login-check.php",
									method: 'POST',
									dataType: 'json',
									data: {
										do_login: true,
										username: $(form).find('#username').val(),
										passwd: $(form).find('#passwd').val(),
									},
									success: function(resp)
									{
										show_loading_bar({
											delay: .5,
											pct: 100,
											finish: function(){
												
												// Redirect after successful login page (when progress bar reaches 100%)
												if(resp.accessGranted)
												{
													window.location.href = 'dashboard-1.html';
												}else{
													toastr.error("You have entered wrong password, please try again. User and password is <strong>demo/demo</strong> :)", "Invalid Login!", opts);
													$passwd.select();
												}
											}
										});
										
									}
								});
								
							}
						});
						
						// Set Form focus
						$("form#login .form-group:has(.form-control):first .form-control").focus();
					});
				</script>
				<!-- Add class "fade-in-effect" for login form effect -->
						
				<!-- <form action="/admin/login/dologin" method="post" id="login" class="login-form fade-in-effect"> -->
				<form action="/admin/login/dologin" method="post" class="login-form fade-in-effect">
					<h2>欢迎回来管理员</h2>
					<div style="width: 500px;height: 30px;">
					<p id="ppp">
							
							@if(session('success'))
							<p id="ppp">
                                    {{session('success')}}
                            </p>
                            @endif
                            @if(session('error'))
                            <p id="ppp">
                                    {{session('error')}} 
                            </p>
                            @endif
                    </p>
                    </div>        
					<div class="form-group">
						<label class="control-label" for="username">用户名</label>
						<input  maxlength="32"  type="text" class="form-control input-dark" name="uname" id="username" autocomplete="off" />
							
					</div>
					<div class="form-group">
						<label class="control-label" for="password">密码</label>
						<input  maxlength="18"  type="password" class="form-control input-dark" name="upwd" id="passwd" autocomplete="off" />
					</div>
					{{csrf_field()}}
					<div class="form-group">
						<button type="submit" class="btn btn-dark  btn-block text-left">
							<center>登录</center>
						</button>
					</div>
					
				</form>
			</div>
		</div>
		
	</div>



	<!-- Bottom Scripts -->
	<script src="/admincss/assets/js/bootstrap.min.js"></script>
	<script src="/admincss/assets/js/TweenMax.min.js"></script>
	<script src="/admincss/assets/js/resizeable.js"></script>
	<script src="/admincss/assets/js/joinable.js"></script>
	<script src="/admincss/assets/js/xenon-api.js"></script>
	<script src="/admincss/assets/js/xenon-toggles.js"></script>
	<script src="/admincss/assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script src="/admincss/assets/js/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="/admincss/assets/js/xenon-custom.js"></script>
	<script type="text/javascript">
	$('#ppp').fadeOut(5000);
	$('.btn').click(function(){
		var uname = $('input[name=username]').val();
		var pass = $('input[name=password]').val();
		if(uname == '' || pass == ''){
			$('#ppp').html('你输入的账号或密码为空');
			return false;
		}else{
			return true;
		}
	});
	
	</script>
</body>
</html>