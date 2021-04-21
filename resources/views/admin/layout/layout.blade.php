<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{@config('constant.site_name')}} | @yield('page_title') </title>

	<!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{asset('admin_asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin_asset/css/font-awesome.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- iCheck -->
    <link href="{{asset('admin_asset/css/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="{{asset('admin_asset/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_asset/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin_asset/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="{{url('/admin/posts')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{@config('constant.site_name')}}</span></a>
					</div>

					<div class="clearfix"></div>
				<?php
					use App\Http\Controllers\admin;
					$user_name = session('name');
					$image = admin::user_image($user_name);
				?>
					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="{{@asset('storage/post/'.$image[0]->image)}}" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>{{session('name')}}</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a href="/admin/posts"><i class="fa fa-home"></i> Posts </a></li>
								<li><a href="/admin/pages"><i class="fa fa-file-text"></i> Page </a></li>
								<li><a href="/admin/contact/list"><i class="fa fa-address-book-o"></i> Contact Us </a></li>
								<!-- <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="form.html">General Form</a></li>
										<li><a href="form_advanced.html">Advanced Components</a></li>
										<li><a href="form_validation.html">Form Validation</a></li>
										<li><a href="form_wizards.html">Form Wizard</a></li>
										<li><a href="form_upload.html">Form Upload</a></li>
										<li><a href="form_buttons.html">Form Buttons</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="general_elements.html">General Elements</a></li>
										<li><a href="media_gallery.html">Media Gallery</a></li>
										<li><a href="typography.html">Typography</a></li>
										<li><a href="icons.html">Icons</a></li>
										<li><a href="glyphicons.html">Glyphicons</a></li>
										<li><a href="widgets.html">Widgets</a></li>
										<li><a href="invoice.html">Invoice</a></li>
										<li><a href="inbox.html">Inbox</a></li>
										<li><a href="calendar.html">Calendar</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="tables.html">Tables</a></li>
										<li><a href="tables_dynamic.html">Table Dynamic</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="chartjs.html">Chart JS</a></li>
										<li><a href="chartjs2.html">Chart JS2</a></li>
										<li><a href="morisjs.html">Moris JS</a></li>
										<li><a href="echarts.html">ECharts</a></li>
										<li><a href="other_charts.html">Other Charts</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
										<li><a href="fixed_footer.html">Fixed Footer</a></li>
									</ul>
								</li> -->
							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="{{url('admin/logout')}}">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<img src="{{@asset('storage/post/'.$image[0]->image)}}" alt="">{{session('name')}}
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="{{url('admin/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
				
         @section('container')
				 @show
      </div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
    <script src="{{asset('admin_asset/js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
   <script src="{{asset('admin_asset/js/bootstrap.bundle.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('admin_asset/js/icheck.min.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin_asset/js/custom.min.js')}}"></script>

</body></html>
