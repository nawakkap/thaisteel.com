<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>ThaiSteel.com :: Admin</title>
	
	
	<!-- Chosen CSS -->
	
    <!-- Core CSS - Include with every page -->
	{{ HTML::style('css/bootstrap.min.css'); }}
	{{ HTML::style('font-awesome/css/font-awesome.css'); }}

    <!-- Page-Level Plugin CSS - Dashboard -->
	{{ HTML::style('css/plugins/morris/morris-0.4.3.min.css'); }}
	{{ HTML::style('css/plugins/timeline/timeline.css'); }}

    <!-- SB Admin CSS - Include with every page -->
	{{ HTML::style('css/sb-admin.css'); }}
	
	
	{{ HTML::style('css/chosen.css') }}
	{{ HTML::style('css/bootstrap-chosen.css') }}
	{{ HTML::style('css/datepicker.css') }}
	
	@yield('css')
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">ThaiSteel.com :: Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
						
                        <li><a href="{{ URL::to('admin/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->
		
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
					<li>
						<a href="{{ URL::to('admin/products') }}"><i class="fa fa-dashboard fa-fw"></i> Product</a></a>
					</li>
					<li>
                        <a href="{{ URL::to('admin/users') }}"><i class="fa fa-dashboard fa-fw"></i> User</a></a>
                    </li>
					<li>
                        <a href="{{ URL::to('admin/product_user_mapping') }}"><i class="fa fa-dashboard fa-fw"></i> Products of Users</a></a>
                    </li>
					<li>
                        <a href="{{ URL::to('admin/prices') }}"><i class="fa fa-dashboard fa-fw"></i> Price</a></a>
                    </li>
					<li>
                        <a href="{{ URL::to('admin/orders') }}"><i class="fa fa-dashboard fa-fw"></i> Order</a></a>
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('topic')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			@yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
	{{ HTML::script('js/jquery-1.10.2.js'); }}
	{{ HTML::script('js/bootstrap.min.js'); }}
	{{ HTML::script('js/plugins/metisMenu/jquery.metisMenu.js'); }}
	{{ HTML::script('js/chosen.jquery.min.js'); }}

    <!-- SB Admin Scripts - Include with every page -->
	{{ HTML::script('js/sb-admin.js'); }}
	{{ HTML::script('js/less-1.6.1.min.js'); }}
	
	
	@yield('javascript')
</body>

</html>