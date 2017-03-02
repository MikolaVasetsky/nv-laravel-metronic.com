<!DOCTYPE html>

<html lang="en">
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Metronic Admin Theme #1 | Admin Dashboard</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
		<meta content="" name="author" />

		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/global/plugins/jquery-notific8/jquery.notific8.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- END GLOBAL MANDATORY STYLES -->

		<!-- BEGIN PAGE LEVEL PLUGINS -->
		@yield('page_plugin_css')
		<!-- END PAGE LEVEL PLUGINS -->

		<!-- BEGIN THEME GLOBAL STYLES -->
		<link href="{{asset('assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
		<link href="{{asset('assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- END THEME GLOBAL STYLES -->

		<!-- BEGIN THEME LAYOUT STYLES -->
		<link href="{{asset('assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
		<link href="{{asset('assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
		<!-- END THEME LAYOUT STYLES -->
		<link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
	</head>
	<!-- END HEAD -->

	<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
		<div class="page-wrapper">

			@if ( $flash = session('success') )
				<input type="hidden" value="{{$flash}}" id="notific8_text_success">
			@endif

			<!-- BEGIN HEADER -->
			@include('admin.layouts.header')
			<!-- END HEADER -->

			<!-- BEGIN CONTAINER -->
			<div class="page-container">
				<!-- BEGIN SIDEBAR -->
				@include('admin.layouts.sidebar')
				<!-- END SIDEBAR -->

				<!-- BEGIN CONTENT -->
				@yield('content')
				<!-- END CONTENT -->

				<!-- BEGIN QUICK SIDEBAR -->
				@include('admin.layouts.quick-sidebar')
				<!-- END QUICK SIDEBAR -->
			</div>
			<!-- END CONTAINER -->

			<!-- BEGIN FOOTER -->
			@include('admin.layouts.footer')
			<!-- END FOOTER -->
		</div>

		<!-- BEGIN CORE PLUGINS -->
		<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

		<script src="{{asset('js/script.js')}}" type="text/javascript"></script>

		<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/global/plugins/jquery-notific8/jquery.notific8.min.js')}}" type="text/javascript"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		@yield('page_plugin_js')
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN THEME GLOBAL SCRIPTS -->
		<script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
		<!-- END THEME GLOBAL SCRIPTS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
		@yield('page_scripts_js')
		<!-- END PAGE LEVEL SCRIPTS -->
		<!-- BEGIN THEME LAYOUT SCRIPTS -->
		<script src="{{asset('assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
		<!-- END THEME LAYOUT SCRIPTS -->
	</body>

</html>