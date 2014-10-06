<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>ThaiSteel.com :: Admin</title>
	{{ HTML::style('css/bootstrap.min.css'); }}
	{{ HTML::style('font-awesome/css/font-awesome.css'); }}
	{{ HTML::style('css/chosen.css') }}
	{{ HTML::style('css/bootstrap-chosen.css') }}
	@yield('css')
</head>

<body>
	<div class="navbar navbar-default">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ asset('images/tst-logo.jpg') }}" border="0" width="36" /></a>
		</div>
		
		<div class="navbar-collapse collapse navbar-responsive-collapse">
		  <ul class="nav navbar-nav navbar-right">
			<?php if (isset($user) && ($user)) { ?>
			<li>
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					สวัสดี {{ $user->name }}
				</a>
				<ul class="dropdown-menu dropdown-user">
					<li>
						<a href="{{ URL::to('user_clients/' . $user->id . '/edit') }}"><i class="fa fa-user fa-fw"></i> ข้อมูลผู้ใช้งาน</a>
					</li>
					<li>
						<a href="{{ URL::to('user_clients/change_password') }}"><i class="fa fa-gear fa-fw"></i> เปลี่ยนรหัสผ่าน</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="{{ URL::to('user/orders') }}">ประวัติการซื้อ</a>
			</li>
			<li class="dropdown">
				<a href="{{ URL::to('user/logout') }}">ออกจากระบบ</a>
			</li>
			<?php } else { ?>
			<li class="dropdown">
				<a href="{{ URL::to('user_clients/create') }}">ลงทะเบียน</a>
			</li>
			<li class="dropdown">
				<a href="{{ URL::to('user_login') }}">เข้าสู่ระบบ</a>
			<?php } ?>
			</li>
		  </ul>
		</div>
	  </div>
			  
	@yield('content')
	
	{{ HTML::script('js/jquery-1.10.2.js'); }}
	{{ HTML::script('js/bootstrap.min.js'); }}
	{{ HTML::script('js/chosen.jquery.min.js'); }}
	@yield('javascript')
	<br/><br/><br/><br/><br/><br/>
</body>
</html>