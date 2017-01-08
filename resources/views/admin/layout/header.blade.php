		<ul class="user-info-menu right-links list-inline list-unstyled">
			<li class="dropdown user-profile">
				<a href="#" data-toggle="dropdown">
					<img src="{{$user->pic}}" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
					<span>
						{{$user->uname}}
						<i class="fa-angle-down"></i>
					</span>
				</a>
				
				<ul class="dropdown-menu user-profile-menu list-unstyled">
					<li class="last">
						<a href="/admin/login">
							<i class="fa-lock"></i>
							退出
						</a>
					</li>
				</ul>
			</li>	
		</ul>