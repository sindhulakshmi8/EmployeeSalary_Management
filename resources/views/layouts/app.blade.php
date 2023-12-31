	<!DOCTYPE html>

	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
	<!-- waves.css -->
	<link rel="stylesheet" href="{{ asset('public/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap/css/bootstrap.min.css')}}">
	<!-- themify icon -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/themify-icons/themify-icons.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/font-awesome/css/font-awesome.min.css')}}">
	<!-- scrollbar.css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/jquery.mCustomScrollbar.css')}}">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
	<!-- am chart export.css -->
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/animate.css/css/animate.css')}}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/pnotify.custom.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css')}}">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">

	<?php /*<script type="text/javascript" src="https://unpkg.com/turbolinks"></script>*/ ?>
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/jquery/jquery.min.js')}}"></script>
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/jquery-ui/jquery-ui.min.js ')}}"></script>


	<style type="text/css">
	.invalid-feedback{display: block;}
	.row{width: 100%;}
	</style>
	@yield('style')

	</head>

	<body>
	<div class='notifications top-right'></div>
	<!-- Pre-loader start -->
	<div class="theme-loader">
	<div class="loader-track">
	<div class="preloader-wrapper">
	<div class="spinner-layer spinner-blue">
	<div class="circle-clipper left">
	<div class="circle"></div>
	</div>
	<div class="gap-patch">
	<div class="circle"></div>
	</div>
	<div class="circle-clipper right">
	<div class="circle"></div>
	</div>
	</div>
	<div class="spinner-layer spinner-red">
	<div class="circle-clipper left">
	<div class="circle"></div>
	</div>
	<div class="gap-patch">
	<div class="circle"></div>
	</div>
	<div class="circle-clipper right">
	<div class="circle"></div>
	</div>
	</div>

	<div class="spinner-layer spinner-yellow">
	<div class="circle-clipper left">
	<div class="circle"></div>
	</div>
	<div class="gap-patch">
	<div class="circle"></div>
	</div>
	<div class="circle-clipper right">
	<div class="circle"></div>
	</div>
	</div>

	<div class="spinner-layer spinner-green">
	<div class="circle-clipper left">
	<div class="circle"></div>
	</div>
	<div class="gap-patch">
	<div class="circle"></div>
	</div>
	<div class="circle-clipper right">
	<div class="circle"></div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<!-- Pre-loader end -->
	<div id="pcoded" class="pcoded">
	<div class="pcoded-overlay-box"></div>
	<div class="pcoded-container navbar-wrapper">
	<nav class="navbar header-navbar pcoded-header">
	<div class="navbar-wrapper">
	<div class="navbar-logo">
	<a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
	<i class="ti-menu"></i>
	</a>
	<div class="mobile-search waves-effect waves-light">
	<div class="header-search">
	<div class="main-search morphsearch-search">
	<div class="input-group">
	<span class="input-group-addon search-close"><i class="ti-close"></i></span>
	<input type="text" class="form-control" placeholder="Enter Keyword">
	<span class="input-group-addon search-btn"><i class="ti-search"></i></span>
	</div>
	</div>
	</div>
	</div>
	<a href="index.html">
	
	</a>
	<a class="mobile-options waves-effect waves-light">
	<i class="ti-more"></i>
	</a>
	</div>

	<div class="navbar-container container-fluid">
	<ul class="nav-left">
	<li>
	<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
	</li>
	<li class="header-search">
	<div class="main-search morphsearch-search">
	<div class="input-group">
	<span class="input-group-addon search-close"><i class="ti-close"></i></span>
	<input type="text" class="form-control">
	<span class="input-group-addon search-btn"><i class="ti-search"></i></span>
	</div>
	</div>
	</li>
	<li>
	<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
	<i class="ti-fullscreen"></i>
	</a>
	</li>
	<li>
	<h3 style="padding-top: 10px;color: white;"><i>Employee Salary Management</i></h3>
	</li>
	</ul>


	<ul class="nav-right">
	<li class="header-notification">
	<a href="#!" class="waves-effect waves-light">
	<i class="ti-bell"></i>
	<span class="badge bg-c-red"></span>
	</a>
	<!-- <ul class="show-notification">
	<li>
	<h6>Notifications</h6>
	<label class="label label-danger">New</label>
	</li>
	<li class="waves-effect waves-light">
	<div class="media">
	<img class="d-flex align-self-center img-radius" src="{{ asset('public/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image">
	<div class="media-body">
	<h5 class="notification-user">John Doe</h5>
	<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
	<span class="notification-time">30 minutes ago</span>
			</div>
	</div>
	</li>
	<li class="waves-effect waves-light">
	<div class="media">
	<img class="d-flex align-self-center img-radius" src="{{ asset('public/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
			<div class="media-body">
	<h5 class="notification-user">Joseph William</h5>
	<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
	<span class="notification-time">30 minutes ago</span>
			</div>
	</div>
	</li>
	<li class="waves-effect waves-light">
	<div class="media">
			<img class="d-flex align-self-center img-radius" src="{{ asset('public/assets/images/avatar-3.jpg')}}" alt="Generic placeholder image">
			<div class="media-body">
	<h5 class="notification-user">Sara Soudein</h5>
	<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
	<span class="notification-time">30 minutes ago</span>
			</div>
	</div>
	</li>
	</ul> -->
	</li>

	<li class="user-profile header-notification">
	<a href="#!" class="waves-effect waves-light">
	<img src="{{ asset('public/assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
	<span>{{ Auth::user()->name }}</span>
	<i class="ti-angle-down"></i>
	</a>
	<ul class="show-notification profile-notification">
	<!-- <li class="waves-effect waves-light">
	<a href="#!">
			<i class="ti-settings"></i> Settings
	</a>
	</li> -->
	<!-- <li class="waves-effect waves-light">
	<a href="user-profile.html">
			<i class="ti-user"></i> Profile
	</a>
	</li> -->
	<!-- <li class="waves-effect waves-light">
	<a href="email-inbox.html">
			<i class="ti-email"></i> My Messages
	</a>
	</li> -->
	<!-- <li class="waves-effect waves-light">
	<a href="auth-lock-screen.html">
			<i class="ti-lock"></i> Lock Screen
	</a>
	</li> -->
	<li class="waves-effect waves-light">
	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect waves-dark">
			<i class="ti-layout-sidebar-left"></i> Click to Logout
	</a>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
	</form>
	</li>
	</ul>
	</li>
	</ul>
	</div>
	</div>
	</nav>

	<div class="pcoded-main-container">
	<div class="pcoded-wrapper">
	<nav class="pcoded-navbar">
	<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
	<div class="pcoded-inner-navbar main-menu">
	<div class="">
	<div class="main-menu-header">
	<img class="img-80 img-radius" src="{{ asset('public/assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
	<div class="user-details">
	<span id="more-details">{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></span>
	</div>
	</div>

	
	</div>
	
	<div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
	<ul class="pcoded-item pcoded-left-item">
	
	<li @if(Request::path() == "Dashboard") class="active" @endif >
	<a href="{{ route('Dashboard') }}" class="waves-effect waves-dark">
	<span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
	<span class="pcoded-mtext" data-i18n="nav.form-components.main">Dashboard</span>
	<span class="pcoded-mcaret"></span>
	</a>
	</li>
	<li @if(Request::path() == "Employee/Employeelist") class="active" @endif >
	<a href="{{ route('employee.list') }}" class="waves-effect waves-dark">
	<span class="pcoded-micon"><i class="fa fa-users fa-1x"></i><b>FC</b></span>
	<span class="pcoded-mtext" data-i18n="nav.form-components.main">Manage Employee</span>
	<span class="pcoded-mcaret"></span>
	</a>
	</li>
	<li @if(Request::path() == "Salary/Salarylist") class="active" @endif >
	<a href="{{ route('salary.list') }}" class="waves-effect waves-dark">
	<span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
	<span class="pcoded-mtext" data-i18n="nav.form-components.main">Manage Salary </span>
	<span class="pcoded-mcaret"></span>
	</a>
	</li>
	<li class="waves-effect waves-light">
	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect waves-dark">
			<span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>FC</b></span>
	<span class="pcoded-mtext" data-i18n="nav.form-components.main"> Logout</span>
	<span class="pcoded-mcaret"></span>
	</a>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
	</form>
	</li>
	
	</ul>
	
	</div>
	</nav>


	<div class="pcoded-content">

	<div class="pcoded-inner-content">
	<!-- Main-body start -->
	<div class="main-body">
	@yield('content')
	</div>
	<!-- Main-body end -->
	</div>

	</div>
	</div>
	</div>
	</div>
	</div>


	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/popper.js/popper.min.js')}}"></script>
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/bootstrap/js/bootstrap.min.js ')}}"></script>
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/pages/widget/excanvas.js ')}}"></script>
	<!-- waves js -->
	<script crossorigin="anonymous" src="{{ asset('public/assets/pages/waves/js/waves.min.js')}}"></script>
	<!-- jquery slimscroll js -->
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/jquery-slimscroll/jquery.slimscroll.js ')}}"></script>
	<!-- modernizr js -->
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/modernizr/modernizr.js ')}}"></script>
	<!-- slimscroll js -->
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/SmoothScroll.js')}}"></script>
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/pnotify.custom.min.js')}}"></script>
	<script crossorigin="anonymous" src="{{ asset('public/assets/js/jquery.mCustomScrollbar.concat.min.js ')}}"></script>

	<script crossorigin="anonymous" src="{{ asset('public/assets/js/jquery.dataTables.min.js') }}"></script>
	<script crossorigin="anonymous" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

	<script crossorigin="anonymous" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
	<script crossorigin="anonymous" src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>

	<?php /*
	<script crossorigin="anonymous" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script crossorigin="anonymous" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
	<script crossorigin="anonymous" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


	<?php /*
	<!-- Chart js -->
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/chart.js/Chart.js')}}"></script>
	<!-- amchart js -->
	<script crossorigin="anonymous" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script crossorigin="anonymous" src="{{ asset('public/assets/pages/widget/amchart/gauge.js')}}"></script>
	<script crossorigin="anonymous" src="{{ asset('public/assets/pages/widget/amchart/serial.js')}}"></script>
	<script crossorigin="anonymous" src="{{ asset('public/assets/pages/widget/amchart/light.js')}}"></script>
	<script crossorigin="anonymous" src="{{ asset('public/assets/pages/widget/amchart/pie.min.js')}}"></script>
	<script crossorigin="anonymous" src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	*/ ?>


	<!-- menu js -->
	<script crossorigin="anonymous" src="{{ asset('public/assets/js/pcoded.min.js')}}"></script>
	<script crossorigin="anonymous" src="{{ asset('public/assets/js/vertical-layout.min.js ')}}"></script>
	<!-- custom js -->
	<?php /*<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/pages/dashboard/custom-dashboard.js')}}"></script>*/ ?>
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/script.js ')}}"></script>
	<script crossorigin="anonymous" type="text/javascript" src="{{ asset('public/assets/js/bootbox.min.js ')}}"></script>



	<script type="text/javascript">


	@if(Session::has('success'))
	$(document).ready(function() {
	$(function(){ new PNotify({title: "Success",text: "{{ Session::get('success') }}",type: "success",icon:"fa fa-check-circle"}); });
	});
	@php
	Session::forget('success');
	@endphp
	@endif


	@if(Session::has('info'))
	$(document).ready(function() {
	$(function(){ new PNotify({title: "Info",text: "{{ Session::get('info') }}",type: "info",icon:"fa fa-check-circle"}); });
	});
	@php
	Session::forget('info');
	@endphp
	@endif


	@if(Session::has('warning'))
	$(document).ready(function() {
	$(function(){ new PNotify({title: "Warning",text: "{{ Session::get('warning') }}",type: "warning",icon:"fa fa-check-circle"}); });
	});
	@php
	Session::forget('warning');
	@endphp
	@endif


	@if(Session::has('error'))
	$(document).ready(function() {
	$(function(){ new PNotify({title: "Error",text: "{{ Session::get('error') }}",type: "error",icon:"fa fa-check-circle"}); });
	});
	@php
	Session::forget('error');
	@endphp
	@endif
	</script>


	@yield('script')

	</body>
	</html>