<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The only trading journal that helps you find your buddy.">
    <meta name="keywords" content="trading buddy, trading, buy, sell, long, short, web app">
    <meta name="author" content="pixelstrap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    @yield('title')
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../assets/fonts/ionicons/4.5.6/css/ionicons.min.css">
	<link rel="stylesheet" href="../assets/css/A.animate.css%2bflaticon.css%2btiny-slider.css%2bglightbox.min.css%2baos.css%2bstyle.css%2cMcc.zyAd-cmIB-.css.pagespeed.cf.6s2mMaARr7.css" />
	@yield('style')
</head>

<body>
	<nav class="navbar navbar-expand-lg  ftco-navbar-light">
		<div class="container-xl">
			<a class="navbar-brand" href="{{ url('/') }}">
				Trading Buddy
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/pricing') }}">Pricing</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact us</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Sign In</a></li>
				</ul>
			</div>
		</div>
	</nav>