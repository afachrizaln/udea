
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Udea</title>
	<!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="{{ asset('ablepro/assets/images/favicon.ico') }}" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/bower_components/bootstrap/css/bootstrap.min.css') }}">
	<!-- waves.css -->
	<link rel="stylesheet" href="{{ asset('ablepro/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
	<!-- feather icon -->
	<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/assets/icon/feather/css/feather.css') }}">
	<!-- ico font -->
	<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/assets/icon/icofont/css/icofont.css') }}">
	@yield('styles')
	<!-- notify js Fremwork -->
	<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/bower_components/pnotify/css/pnotify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ablepro/bower_components/pnotify/css/pnotify.brighttheme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ablepro/bower_components/pnotify/css/pnotify.buttons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ablepro/bower_components/pnotify/css/pnotify.mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/assets/pages/pnotify/notify.css') }}">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('ablepro/assets/css/pages.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/my_custom.css') }}">
</head>

<body {{ Session::has('message') ? 'data-notification=true' : '' }} data-notification-type='{{ Session::get('alert-type', 'info') }}' data-notification-message='{{ json_encode(Session::get('message')) }}'>
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-bar"></div>
	</div>
	<!-- [ Pre-loader ] end -->
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<!-- [ Header ] start -->
			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
								<i class="feather icon-toggle-right"></i>
							</a>
						<a href="index.html">
								<img class="img-fluid" src="{{ asset('ablepro/assets/images/logo.png') }}" alt="Theme-Logo" />
							</a>
						<a class="mobile-options waves-effect waves-light">
								<i class="feather icon-more-horizontal"></i>
							</a>
					</div>
					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li class="header-search">
								<div class="main-search morphsearch-search">
									<div class="input-group">
										<span class="input-group-prepend search-close">
												<i class="feather icon-x input-group-text"></i>
											</span>
										<input type="text" class="form-control" placeholder="Enter Keyword">
										<span class="input-group-append search-btn">
												<i class="feather icon-search input-group-text"></i>
											</span>
									</div>
								</div>
							</li>
							<li>
								<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
										<i class="full-screen feather icon-maximize"></i>
									</a>
							</li>
						</ul>
						<ul class="nav-right">
							<li class="header-notification">
								<div class="dropdown-primary dropdown">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<i class="feather icon-bell"></i>
										<span class="badge bg-c-red">5</span>
									</div>
									<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
										<li>
											<h6>Notifications</h6>
											<label class="label label-danger">New</label>
										</li>
										<li>
											<div class="media">
												<img class="img-radius" src="{{ asset('ablepro/assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="notification-user">John Doe</h5>
													<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
													<span class="notification-time">30 minutes ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<img class="img-radius" src="{{ asset('ablepro/assets/images/avatar-3.jpg') }}" alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="notification-user">Joseph William</h5>
													<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
													<span class="notification-time">30 minutes ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<img class="img-radius" src="{{ asset('ablepro/assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="notification-user">Sara Soudein</h5>
													<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
													<span class="notification-time">30 minutes ago</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="user-profile header-notification">
								<div class="dropdown-primary dropdown">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<img src="{{ asset(Sentinel::getUser()->path_image) }}" class="img-radius" alt="User-Profile-Image">
										<span>{{ Sentinel::getUser()->name }}</span>
										<i class="feather icon-chevron-down"></i>
									</div>
									<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
										<li>
											<a href="#!">
												<i class="feather icon-settings"></i> Pengaturan

											</a>
										</li>
										<form action="{{ route('postLogout') }}" method="POST" id="logout-form">
										<li>
											<a href="#" onclick="document.getElementById('logout-form').submit()">
												<i class="feather icon-log-out"></i> Keluar
											</a>
										</li>
										</form>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- [ Header ] end -->

			<!-- [ chat message ] start -->
			<div class="showChat_inner">
				<div class="media chat-inner-header">
					<a class="back_chatBox">
							<i class="feather icon-x"></i> Josephin Doe
						</a>
				</div>
				<div class="main-friend-chat">
					<div class="media chat-messages">
						<a class="media-left photo-table" href="#!">
								<img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
							</a>
						<div class="media-body chat-menu-content">
							<div class="">
								<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
							</div>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
					<div class="media chat-messages">
						<div class="media-body chat-menu-reply">
							<div class="">
								<p class="chat-cont">Ohh! very nice</p>
							</div>
							<p class="chat-time">8:22 a.m.</p>
						</div>
					</div>
					<div class="media chat-messages">
						<a class="media-left photo-table" href="#!">
								<img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
							</a>
						<div class="media-body chat-menu-content">
							<div class="">
								<p class="chat-cont">can you come with me?</p>
							</div>
							<p class="chat-time">8:20 a.m.</p>
						</div>
					</div>
				</div>
				<div class="chat-reply-box">
					<div class="right-icon-control">
						<form class="form-material">
							<div class="form-group form-primary">
								<input type="text" name="footer-email" class="form-control" required="">
								<span class="form-bar"></span>
								<label class="float-label">
										<i class="feather icon-search m-r-10"></i>Share Your Thoughts
									</label>
							</div>
						</form>
						<div class="form-icon ">
							<button class="btn btn-success btn-icon  waves-effect waves-light">
									<i class="feather icon-message-circle"></i>
								</button>
						</div>
					</div>
				</div>
			</div>
			<!-- [ chat message ] end -->
			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					<!-- [ navigation menu ] start -->
					<nav class="pcoded-navbar">
						<div class="pcoded-inner-navbar main-menu">
							<div class="">
								<div class="main-menu-header">
									<img class="img-menu-user img-radius" src="{{ asset(Sentinel::getUser()->path_image) }}" alt="User-Profile-Image">
									<div class="user-details">
										<p id="more-details">{{ Sentinel::getUser()->name }}</p>
									</div>
								</div>
							</div>
							<div class="pcoded-navigation-label">Akademik</div>
							<ul class="pcoded-item pcoded-left-item">
								<li class="{{ request()->is('dashboard*') ? 'active ' : '' }}">
									<a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="feather icon-home"></i></span>
										<span class="pcoded-mtext">Beranda</span>
									</a>
								</li>
								<li class="{{ request()->is('course*') ? 'active ' : '' }}">
									<a href="{{ route('course') }}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="feather icon-book"></i></span>
										<span class="pcoded-mtext">Materi</span>
									</a>
								</li>
								<li class="{{ request()->is('discussion*') ? 'active ' : '' }}">
									<a href="{{ route('discussion') }}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="feather icon-message-circle"></i></span>
										<span class="pcoded-mtext">Diskusi</span>
									</a>
								</li>
								<li class="{{ request()->is('task*') ? 'active ' : '' }}">
									<a href="{{ route('task') }}" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="feather icon-paperclip"></i></span>
										<span class="pcoded-mtext">Tugas</span>
									</a>
								</li>
								<li class=""{{ request()->is('quis*') ? 'active ' : '' }}"">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="feather icon-feather"></i></span>
										<span class="pcoded-mtext">Kuis</span>
									</a>
								</li>
							</ul>
							<div class="pcoded-navigation-label">Profil</div>	
							<ul class="pcoded-item pcoded-left-item">
								<li class=" ">
									<a href="javascript:void(0)" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="feather icon-settings"></i></span>
										<span class="pcoded-mtext">Pengaturan</span>
									</a>
								</li>
								<li class=" ">
									<a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()" class="waves-effect waves-dark">
										<span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
										<span class="pcoded-mtext">Keluar</span>
									</a>
								</li>
							</ul>
						</div>
					</nav>
					@yield('navigation')
				</div>
			</div>
		</div>
	</div>
	<!-- Warning Section Starts -->
	<!-- Older IE warning message -->
	<!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
	<!-- Warning Section Ends -->
	<!-- Required Jquery -->
	<script type="text/javascript" src="{{ asset('ablepro/bower_components/jquery/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ablepro/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ablepro/bower_components/popper.js/js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ablepro/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- waves js -->
	<script src="{{ asset('ablepro/assets/pages/waves/js/waves.min.js') }}"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript" src="{{ asset('ablepro/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('ablepro/assets/js/pcoded.min.js') }}"></script>
	{{-- <script src="{{ asset('ablepro/assets/js/vertical/vertical-layout.min.js') }}"></script> --}}
	<!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('ablepro/bower_components/modernizr/js/modernizr.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ablepro/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
	<!-- pnotify js -->
	<script type="text/javascript" src="{{ asset('ablepro/bower_components/pnotify/js/pnotify.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ablepro/bower_components/pnotify/js/pnotify.buttons.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ablepro/bower_components/pnotify/js/pnotify.mobile.js') }}"></script>
	<script type="text/javascript" src="{{ asset('ablepro/assets/pages/pnotify/notify.js') }}"></script>
	@yield('scripts')
	<!-- Custom js -->
    <script type="text/javascript" src="{{ asset('ablepro/assets/js/script.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/my_custom.js') }}"></script>
</body>

</html>
