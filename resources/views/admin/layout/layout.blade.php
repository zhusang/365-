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

	<script src="/admincss/assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body">

	<div class="settings-pane">
			
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		</div>
		
	</div>
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<a href="dashboard-1.html" class="logo-expanded">
							<img src="/homecss/logincss/images/logo.png" width="200" alt="" />
						</a>
					</div>
					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
						
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
					
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
				</header>
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					
					
					<!-- 管理员管理 -->
					@section('usersadmin')
						<li class="has-sub">
			                <a href="ui-panels.html">
			                    <i class="linecons-note"></i>
			                    <span class="title">管理员管理</span>
			                </a>
			                <ul style="display:none;">
			                    <li class="">
			                        <a href="{{url('/admin/users_admin/add')}}">
			                            <span class="title">管理员添加</span>
			                        </a>
			                    </li>
			                    <li class="">
			                        <a href="{{url('/admin/users_admin')}}">
			                            <span class="title">管理员列表</span>
			                        </a>
			                    </li>
			                </ul>
			            </li>						
					@show
					<!-- 用户管理 -->
					@section('user')
						<li class="has-sub">
			                <a href="ui-panels.html">
			                    <i class="linecons-note"></i>
			                    <span class="title">用户管理</span>
			                </a>
			                <ul style="display:none;">
			                    <li class="">
			                        <a href="{{url('/admin/users/add')}}">
			                            <span class="title">用户添加</span>
			                        </a>
			                    </li>
			                    <li class="">
			                        <a href="{{url('/admin/users')}}">
			                            <span class="title">用户列表</span>
			                        </a>
			                    </li>
			                </ul>
			            </li>						
					@show

					@section('type')
						<li class="has-sub">
			                <a href="ui-panels.html">
			                    <i class="linecons-note"></i>
			                    <span class="title">分类管理</span>
			                </a>
			                <ul style="display:none;">
			                    <li class="">
			                        <a href="{{url('/admin/type/add')}}">
			                            <span class="title">分类添加</span>
			                        </a>
			                    </li>
			                    <li class="">
			                        <a href="{{url('/admin/type/index')}}">
			                            <span class="title">分类列表</span>
			                        </a>
			                    </li>
			                </ul>
			            </li>						
					@show
					@section('goods')
						<li class="has-sub">
			                <a href="ui-panels.html">
			                    <i class="linecons-note"></i>
			                    <span class="title">商品管理</span>
			                </a>
			                <ul style="display:none;">
			                    <li class="">
			                        <a href="/admin/goods/add">
			                            <span class="title">商品添加</span>
			                        </a>
			                    </li>
			                    <li class="">
			                        <a href="{{url('/admin/goods')}}">
			                            <span class="title">商品列表</span>
			                        </a>
			                    </li>
			                </ul>
			            </li>						
					@show
					@section('shop')
						<li class="has-sub">
			                <a href="ui-panels.html">
			                    <i class="linecons-note"></i>
			                    <span class="title">商铺管理</span>
			                </a>
			                <ul style="display:none;">
			                    <li class="">
			                        <a href="{{url('/admin/shop/add')}}">
			                            <span class="title">商铺添加</span>
			                        </a>
			                    </li>
			                    <li class="">
			                        <a href="{{url('/admin/shop/index')}}">
			                            <span class="title">商铺列表</span>
			                        </a>
			                    </li>
			                </ul>
			            </li>						
					@show
					@section('coupon')
						<li class="has-sub">
			                <a href="ui-panels.html">
			                    <i class="linecons-note"></i>
			                    <span class="title">优惠券分类管理</span>
			                </a>
			                <ul style="display:none;">
			                    <li class="">
			                        <a href="{{url('/admin/coupontype/add')}}">
			                            <span class="title">优惠券分类添加</span>
			                        </a>
			                    </li>
			                    <li class="">
			                        <a href="{{url('/admin/coupontype/index')}}">
			                            <span class="title">优惠券分类列表</span>
			                        </a>
			                    </li>
			                </ul>
			            </li>						
					@show
					@section('coup')
						<li class="has-sub">
			                <a href="{{url('/admin/coupons/index')}}">
			                    <i class="linecons-note"></i>
			                    <span class="title">优惠券管理</span>
			                </a>
			                
			            </li>						
					@show
					@section('cout')
						<li class="has-sub">
			                <a href="{{url('/admin/cout/index')}}">
			                    <i class="linecons-note"></i>
			                    <span class="title">优惠券管理</span>
			                </a>
			                
			            </li>						
					@show
					





				</ul>
						
			</div>
			
		</div>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				<!-- 用户的头像 -->
				@section('header')
				{!! \App\Http\Controllers\Admin\IndexController::header() !!}
				@show
			</nav>
			<div class="col-lg-3 col-lg-offset-4">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissable success_y">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                            {{session('success')}}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissable error_y">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button"></button>
                            {{session('error')}}
                        </div>
                    @endif
            </div>
			@section('con')
			<!-- 标题区 -->
			 @if(session('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{session('success')}}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{session('error')}}
                    </div>
                @endif
			

			
			<!-- 内容区 -->
			<h2>欢迎回来,我的管理员.</h2>
			<!-- 内容区结束 -->
			@show
		<div id="chat" class="fixed">
			
			<div class="chat-inner">
			
				
				<h2 class="chat-header">
					<a href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>
					
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>
				
				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");
					
					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();
						
						$chat_conversation.toggleClass('is-open');
						
						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});
					
					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
				});
					</script>
	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="/admincss/assets/js/datatables/dataTables.bootstrap.css">

	<!-- Bottom Scripts -->
	<script src="/admincss/assets/js/bootstrap.min.js"></script>
	<script src="/admincss/assets/js/TweenMax.min.js"></script>
	<script src="/admincss/assets/js/resizeable.js"></script>
	<script src="/admincss/assets/js/joinable.js"></script>
	<script src="/admincss/assets/js/xenon-api.js"></script>
	<script src="/admincss/assets/js/xenon-toggles.js"></script>
	<script src="/admincss/assets/js/datatables/js/jquery.dataTables.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="/admincss/assets/js/datatables/dataTables.bootstrap.js"></script>
	<script src="/admincss/assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="/admincss/assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="/admincss/assets/js/xenon-custom.js"></script>


	<script type="text/javascript">
	// 		$('.has-sub').click(function(){
	// 			$(this).addClass('active').siblings().removeClass('active');
	// 		});
	// 		$('.has-sub ul li').click(function(){
	// 			$(this).addClass('active').siblings().removeClass('active');
	// 		});
	</script>
	 <script type="text/javascript">
    // alert($);
    $('.success_y').fadeOut(3000);

    $('.error_y').fadeOut(3000);
    $
    </script>
	@section('js')
		
	@show
</body>
</html>