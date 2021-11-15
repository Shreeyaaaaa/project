<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>Medikus</title>
	<meta content="" name="description">
  <meta content="" name="keywords">

	<!-- Favicons -->
	<link type="image/x-icon" href="assets/img/favicon.png" rel="icon">

	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css"> 
	<!-- Main CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<!--Top Header 
		<div class="header-top">
			<div class="left-top ">
				<ul>
					<li><i class="fas fa-map-marker-alt top-icon"></i>123, washington street, uk</li>
					<li><i class="fas fa-phone-volume top-icon"></i>+19 123-456-7890</li>
					<li><i class="fas fa-envelope top-icon"></i>mail@yourdomain.com</li>
				</ul>
			</div>
			<div class="right-top ">
				<ul>
					<li><i class="fab fa-facebook-f top-icons"></i>
					</li>
					<li><i class="fab fa-instagram top-icons"></i>
					</li>
					<li><i class="fab fa-linkedin-in top-icons"></i>
					</li>
					<li><i class="fab fa-twitter top-icons"></i>
					</li>
				</ul>
			</div>
		</div>
		Top Header -->
		<!-- Header -->
		<header class="header">
			<nav class="navbar navbar-expand-lg header-nav">
				<div class="navbar-header">
					<a id="mobile_btn" href="javascript:void(0);">	<span class="bar-icon">
								<span></span>
						<span></span>
						<span></span>
						</span>
					</a>
					<a href="index-3" class="navbar-brand logo">
						<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
					</a>
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
						<a href="index.html" class="menu-logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
						<a id="menu_close" class="menu-close" href="javascript:void(0);">	<i class="fas fa-times"></i>
						</a>
					</div>
					<ul class="main-nav">

						<li >	<a href="/">Home </a>
						<!--li class="has-submenu active">	<a href="#">Home <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
									<li><a href="index">Home</a></li>
									<li><a href="index-1">Home 1</a></li>
									<li><a href="index-2">Home 2</a></li>
									<li class="active"><a href="index-3">Home slider 1</a></li>
									<li><a href="index-slide">Home slider 2</a></li>
							</ul-->
						</li>
						<li class="has-submenu">	<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="{{ url('/doctor-dashboard') }}">Doctor Dashboard</a>
								</li>
								<li><a href="appointments">Appointments</a>
								</li>
								<li><a href="schedule-timings">Schedule Timing</a>
								</li>
								<li><a href="my-patients">Patients List</a>
								</li>
								<li><a href="patient-profile">Patients Profile</a>
								</li>
								<li><a href="chat-doctor">Chat</a>
								</li>
								<li><a href="{{ url('/invoices') }}">Invoices</a>
								</li>
								<li><a href="doctor-profile-settings">Profile Settings</a>
								</li>
								<li><a href="reviews">Reviews</a>
								</li>
								<li><a href="doctor-register">Doctor Register</a>
								</li>
							</ul>
						</li>
						<li class="has-submenu">	<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li class="has-submenu">	<a href="#">Doctors</a>
									<ul class="submenu">
										<li><a href="map-grid">Map Grid</a>
										</li>
										<li><a href="map-list">Map List</a>
										</li>
									</ul>
								</li>
								<li><a href="search">Search Doctor</a>
								</li>
								<li><a href="doctor-profile">Doctor Profile</a>
								</li>
								<li><a href="booking">Booking</a>
								</li>
								<li><a href="checkout">Checkout</a>
								</li>
								<li><a href="booking-success">Booking Success</a>
								</li>
								<li><a href="patient-dashboard">Patient Dashboard</a>
								</li>
								<li><a href="favourites">Favourites</a>
								</li>
								<li><a href="chat">Chat</a>
								</li>
								<li><a href="profile-settings">Profile Settings</a>
								</li>
								<li><a href="change-password">Change Password</a>
								</li>
							</ul>
						</li>
						<!--li class="has-submenu">	<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="voice-call">Voice Call</a>
								</li>
								<li><a href="video-call">Video Call</a>
								</li>
								<li><a href="search">Search Doctors</a>
								</li>
								<li><a href="calendar">Calendar</a>
								</li>
								<li><a href="components">Components</a>
								</li>
								<li class="has-submenu">	<a href="invoices">Invoices</a>
									<ul class="submenu">
										<li><a href="invoices">Invoices</a>
										</li>
										<li><a href="invoice-view">Invoice View</a>
										</li>
									</ul>
								</li>
								<li><a href="blank-page">Starter Page</a>
								</li>
								<li><a href="login">Login</a>
								</li>
								<li><a href="register">Register</a>
								</li>
								<li><a href="forgot-password">Forgot Password</a>
								</li>
							</ul>
						</li-->
						<li class="has-submenu">	<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
							<ul class="submenu">
								<li><a href="blog-list">Blog List</a>
								</li>
								<li><a href="blog-grid">Blog Grid</a>
								</li>
								<li><a href="blog-details">Blog Details</a>
								</li>
							</ul>
						</li>
						<li>	<a href="admin/index" target="_blank">Admin</a>
						</li>
						<!--li class="login-link">	<a href="login">Login / Signup</a>
						</li-->
					</ul>
				</div>
				<ul class="nav header-navbar-rht">
					<!--li class="nav-item contact-item">
						<div class="header-contact-img">	<i class="far fa-hospital"></i>	
						</div>
						<div class="header-contact-detail">
							<p class="contact-header">Contact</p>
							<p class="contact-info-header">+1 315 369 5943</p>
						</div>
					</li-->
					<!--li class="nav-item">	<a class="nav-link header-login" href="login">login / Signup </a>
					</li-->
					 @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link header-login" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link header-login" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <i class="fas fa-chevron-down"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                             <li class="nav-item p-3">
                    <a href="{{ url('/booking') }}" class="nav-link header-login "><span class="d-none d-md-inline" style="color:black">Make an Appointment</span> </a>
                  </li>
                        @endguest
				</ul>

			</nav>
		</header>
		<!-- /Header -->

		 <main class="py-4">
            @yield('content')
        </main>

        	<footer class="footer">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-about">
								<div class="footer-logo">
									<img src="assets/img/footer-logo.png" alt="logo">
								</div>
								<div class="footer-about-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<div class="social-icon">
										<ul>
											<li>	<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
											</li>
											<li>	<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
											</li>
											<li>	<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
											</li>
											<li>	<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
											</li>
											<li>	<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">For Patients</h2>
								<ul>
									<li><a href="search">Search for Doctors</a>
									</li>
									<li><a href="login">Login</a>
									</li>
									<li><a href="register">Register</a>
									</li>
									<li><a href="booking">Booking</a>
									</li>
									<li><a href="patient-dashboard">Patient Dashboard</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">For Doctors</h2>
								<ul>
									<li><a href="appointments">Appointments</a>
									</li>
									<li><a href="chat">Chat</a>
									</li>
									<li><a href="login">Login</a>
									</li>
									<li><a href="doctor-register">Register</a>
									</li>
									<li><a href="doctor-dashboard">Doctor Dashboard</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-contact">
								<h2 class="footer-title">Contact Us</h2>
								<div class="footer-contact-info">
									<div class="footer-address">	<span><i class="fas fa-map-marker-alt"></i></span>
										<p>3556 Beech Street, San Francisco,
											<br>California, CA 94108</p>
									</div>
									<p>	<i class="fas fa-phone-alt"></i>
										+1 315 369 5943</p>
									<p class="mb-0">	<i class="fas fa-envelope"></i>
										doccure@example.com</p>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
					</div>
				</div>
			</div>
			<!-- /Footer Top -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container-fluid">
					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="copyright-text">
									<p class="mb-0">&copy; 2020 Doccure. All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<ul class="policy-menu">
										<li><a href="term-condition">Terms and Conditions</a>
										</li>
										<li><a href="privacy-policy">Policy</a>
										</li>
									</ul>
								</div>
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			<!-- /Footer Bottom -->
		</footer>
		<!-- /Footer -->
		</div>
		<!-- /Main Wrapper -->
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script> 
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from doccure-html.dreamguystech.com/template/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 19:28:17 GMT -->
</html>