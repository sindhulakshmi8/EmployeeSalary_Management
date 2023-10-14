<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
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

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/animate.css/css/animate.css')}}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/pnotify.custom.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css')}}">

	<script type="text/javascript" src="{{ asset('public/assets/js/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('public/assets/js/jquery-ui/jquery-ui.min.js ')}}"></script>

	<style type="text/css">
		.invalid-feedback{display: block;}
		.row{width: 100%;}
	</style>


</head>

<body themebg-pattern="theme1">
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


					<!-- Authentication card start -->
					@yield('content')



    <script type="text/javascript" src="{{ asset('public/assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/bootstrap/js/bootstrap.min.js ')}}"></script>
    <!-- waves js -->
    <script src="{{ asset('public/assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery-slimscroll/jquery.slimscroll.js ')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('public/assets/js/modernizr/modernizr.js ')}}"></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{ asset('public/assets/js/SmoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/pnotify.custom.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/jquery.mCustomScrollbar.concat.min.js ')}}"></script>

    <?php /*
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('public/assets/js/chart.js/Chart.js')}}"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{ asset('public/assets/pages/widget/amchart/gauge.js')}}"></script>
    <script src="{{ asset('public/assets/pages/widget/amchart/serial.js')}}"></script>
    <script src="{{ asset('public/assets/pages/widget/amchart/light.js')}}"></script>
    <script src="{{ asset('public/assets/pages/widget/amchart/pie.min.js')}}"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    */ ?>


    <!-- menu js -->
    <script src="{{ asset('public/assets/js/pcoded.min.js')}}"></script>
    <script src="{{ asset('public/assets/js/vertical-layout.min.js ')}}"></script>
    <!-- custom js -->
    <?php /*<script type="text/javascript" src="{{ asset('public/assets/pages/dashboard/custom-dashboard.js')}}"></script>*/ ?>
    <script type="text/javascript" src="{{ asset('public/assets/js/script.js ')}}"></script>

    <script>


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