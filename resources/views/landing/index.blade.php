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
    <title>Welcome | The Trading Buddy</title>
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
	<link rel="stylesheet" href="../assets/fonts/ionicons/4.5.6/css/ionicons.min.css">
	<link rel="stylesheet" href="../assets/css/A.animate.css%2bflaticon.css%2btiny-slider.css%2bglightbox.min.css%2baos.css%2bstyle.css%2cMcc.zyAd-cmIB-.css.pagespeed.cf.6s2mMaARr7.css" />
	<style>
		.card button{
			padding: 0;
		}
		.card button:hover, button:active, button:focus{
			/* border: none; */
			outline: none !important;
			box-shadow: none;
			border-radius: 0;
		}
		.faq-section .card{
			padding: 10px 0;
		}
		.faq-section .card .card-header button{
			font-size: 18px;
			width: 100%;
			text-align: left;
			padding: 10px;
			padding-left: 20px;
		}
		.faq-section .card .card-body{
			padding: 20px;
		}
		.faq-title{
			margin-left: -10px;
			padding-top: 25px;
			padding-bottom: 10px;
		}
		.faq-title h6{
			font-size: 25px;
			color: #2a3a60;
		}
		.card .btn:focus{
			box-shadow: none;
			border-radius: 0;
		}
		.switch {
			position: relative;
			display: inline-block;
			width: 60px;
			height: 34px;
			margin: 0 35px;
		}
		.switch input {
			display: none;
		}
		.switch input:checked+.switch-state {
			background-color: #a366e1;
		}
		.switch-state {
			border-radius: 20px;
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #ccc;
			-webkit-transition: .4s;
			transition: .4s;
		}
		.switch input:checked+.switch-state:before {
			-webkit-transform: translateX(26px);
			transform: translateX(26px);
		}
		.switch-state:before {
			position: absolute;
			content: "";
			height: 26px;
			width: 26px;
			left: 4px;
			bottom: 4px;
			background-color: #fff;
			-webkit-transition: .4s;
			transition: .4s;
			border-radius: 20px;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg  ftco-navbar-light">
		<div class="container-xl">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img class="logo" src="../assets/images/logo/whitelogo.png" alt="logo">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Sign In</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="hero-wrap">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-between align-items-stretch">
				<div class="col-md-6 col-lg-5 text d-flex align-items-center">
					<div>
						<h1 class="">Your Online Trading Journal</h1>
						<p>The only tool you need to track your trading progress and data. You can give it a try for FREE!</p>
						<p class="d-flex">
							<a href="{{ url('/login') }}" class="btn btn-primary d-flex align-items-center"><span>Try For Free</span></a>
							<a href="#" class="btn btn-secondary"><span>Sign In</span></a>
						</p>
						<ul class="ftco-social">
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-7 svg d-flex align-items-center">
					<img src="../assets/images/bg_1.svg" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pb">
		<div class="container mb-md-4">
			<div class="row g-0">
				<div class="col-md-12">
					<div class="row g-3 justify-content-center">
						<div class="col-md-8 col-lg-4 heading-section d-flex align-items-center" data-aos="fade-up"
							data-aos-duration="1000">
							<div class="pe-md-5">
								<span class="subheading">Features</span>
								<h2 class="mb-4">Take A Look At Some Of The Trading Buddy Features</h2>
								<p>The Trading Buddy has been designed to provide a smooth user interface to make your experience the best possible whilst you continue to track all of your trading data in one place.</p>
								<p><a href="#" class="btn btn-secondary">Sign Up</a></p>
							</div>
						</div>
						<div class="col-md-12 col-lg-8">
							<div class="row">
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="100" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-user"></span></div>
										<div class="text">
											<h2>Personalised Account</h2>
											<p>Each user has a personalised account where they can add deposits and withdrawals.</p>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="200" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-seo"></span></div>
										<div class="text">
											<h2>Account Dashboard</h2>
											<p>User Friendly Dashboard that provides an overview of the trading account.</p>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="300" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-vector"></span></div>
										<div class="text">
											<h2>Account Analytics</h2>
											<p>Review Detailed Account Analytics for All Trades.</p>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="400" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-rocket"></span></div>
										<div class="text">
											<h2>Refined Account Analytics</h2>
											<p>Refine your Account Data between Long and Short Positions.</p>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="400" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-business"></span></div>
										<div class="text">
											<h2>Symbol Analytics</h2>
											<p> View your symbol leader board and detailed analytics for each symbol traded.</p>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="400" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-search-engine"></span></div>
										<div class="text">
											<h2>Import and Export Reports</h2>
											<p>You can import your trade history and export trade history using .xls and .csv formats.</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-about-section ftco-no-pt ftco-no-pb">
		<div class="container-xl">
			<div class="row g-xl-5">
				<div class="col-md-6 py-5 heading-section" data-aos="fade-up" data-aos-delay="200"
					data-aos-duration="1000">
					<div class="py-md-5">
						<span class="subheading">Introduction</span>
						<h2 class="mb-4">About The Trade Buddy</h2>
						<p>The Trading Buddy was created by Traders for Traders. We have an incentive to
							provide you with the necessary tools that can assist you in your performance as a trader, as well
							as give you better insights in your progress within the markets. The Trading Buddy allows you to
							review your performance and track your progress, whilst having a full control over your trading
							data.
						</p>
						<p>The Trading Buddy’s refined data analytics it allows you to dive deeper into each market
							specifically to see how you perform. There is nothing more powerful than data and that is exactly
							what The Trading Buddy does for you.
						</p>
						<p><a href="#" class="btn btn-primary">Sign Up</a></p>
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100"
					data-aos-duration="1000">
					<iframe width="100%" height="550" src="https://player.vimeo.com/video/403530213" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
					<!-- <video src="../assets/1.mp4" style="width:100%" controls autoplay loop></video> -->
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section testimony-section bg-light">
		<div class="container-xl">
			<div class="row justify-content-center pb-4">
				<div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
					<span class="subheading">Testimonial</span>
					<h2 class="mb-3">Happy Customers</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
					<div class="carousel-testimony">
						<div class="item">
							<div class="testimony-wrap">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(../assets/images/person_1.jpg)"></div>
										<div class="ps-3 tx">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(../assets/images/person_2.jpg)"></div>
										<div class="ps-3 tx">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image:url(../assets/images/person_3.jpg)"></div>
										<div class="ps-3 tx">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(../assets/images/person_1.jpg)"></div>
										<div class="ps-3 tx">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-quote-left"></div>
								<div class="text">
									<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
										Vokalia and Consonantia, there live the blind texts.</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(../assets/images/person_2.jpg)"></div>
										<div class="ps-3 tx">
											<p class="name">Roger Scott</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="img v-section ftco-section bg-light">
		<div class="overlay"></div>
		<div class="container-xl">
			<div class="row justify-content-center">
				<div class="col-md-8 heading-section heading-section-white text-center mb-5" data-aos="fade-up"
					data-aos-duration="1000">
					<span class="subheading">Why Choose Us</span>
					<h2 class="mb-4">Know Your Trading Account Data Inside Out</h2>
					<p>From the moment you start using The Trading Buddy you wont look back, detailed analytics right at your finger tips. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="services text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
						<div class="icon d-flex align-items-center justify-content-center"><span
								class="flaticon-settings"></span></div>
						<div class="text">
							<h2>Getting Started</h2>
							<p>Getting Started with The Trading Buddy is very simple. You can import your existing
								data into the system using spreadsheets in .xls and .csv formats.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="services text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
						<div class="icon d-flex align-items-center justify-content-center"><span
								class="flaticon-padlock"></span></div>
						<div class="text">
							<h2>Tracking Your Data</h2>
							<p>All you have to do is input your trading data and The Trading Buddy does the rest.
								Our user-friendly interface will help you to track, analyse and understand the data in the most
								convenient way for you.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="services text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
						<div class="icon d-flex align-items-center justify-content-center"><span
								class="flaticon-secret-file"></span></div>
						<div class="text">
							<h2>Exporting Data</h2>
							<p>The Trading Buddy allows you to create filtered reports and export them in different
								file formats. The Trading buddy also allows you to export each trade as a PDF report.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="services text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
						<div class="icon d-flex align-items-center justify-content-center"><span
								class="flaticon-help"></span></div>
						<div class="text">
							<h2>Trading Buddy Support</h2>
							<p>The Trading Buddy Offers email and live chat support for users. You can get in touch
								with us with any queries or issues. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<hr>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 heading-section text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
					<span class="subheading">Pricing</span>
					<h2>Choose Your Pricing Plan</h2>
					<p>No matter if you have 1 or 10 trading accounts we have the plan for you!</p>
				</div>
				<div class="media-body justify-content-center d-flex mb-3" data-aos="fade-up" data-aos-duration="1000">
					<h4>Yearly</h4>
					<label class="switch">
						<input type="checkbox" id="monthoryear" checked><span class="switch-state"></span>
					</label>
					<h4>Monthly</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><span class="number">Free</span></span>
							<span class="excerpt d-block">1 Trading Account</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>10 Trade Entries</li>
								<li><span class="fa fa-check me-2"></span>Personalised Account</li>
								<li><span class="fa fa-check me-2"></span>Account Analytics</li>
								<li><span class="fa fa-check me-2"></span>Refined Analytics</li>
								<li><span class="fa fa-check me-2"></span>Symbol Analytics</li>
								<li><span class="fa fa-check me-2"></span>Import/Export Data</li>
								<li><span class="fa fa-check me-2"></span>Trading Buddy Support</li>
							</ul>
							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 monthly" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><sup>£</sup> <span class="number">7.99</span><span>/PM</span></span>
							<span class="excerpt d-block">1 Trading Account</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>Unlimited Trade Entries</li>
								<li><span class="fa fa-check me-2"></span>Personalised Account</li>
								<li><span class="fa fa-check me-2"></span>Account Analytics</li>
								<li><span class="fa fa-check me-2"></span>Refined Analytics</li>
								<li><span class="fa fa-check me-2"></span>Symbol Analytics</li>
								<li><span class="fa fa-check me-2"></span>Import/Export Data</li>
								<li><span class="fa fa-check me-2"></span>Trading Buddy Support</li>
							</ul>
							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 monthly" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><sup>£</sup> <span class="number">11.99</span><span>/PM</span></span>
							<span class="excerpt d-block">3 Trading Account</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>Unlimited Trade Entries</li>
								<li><span class="fa fa-check me-2"></span>Personalised Account</li>
								<li><span class="fa fa-check me-2"></span>Account Analytics</li>
								<li><span class="fa fa-check me-2"></span>Refined Analytics</li>
								<li><span class="fa fa-check me-2"></span>Symbol Analytics</li>
								<li><span class="fa fa-check me-2"></span>Import/Export Data</li>
								<li><span class="fa fa-check me-2"></span>Trading Buddy Support</li>
							</ul>
							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 monthly" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><sup>£</sup> <span class="number">19.99</span><span>/PM</span></span>
							<span class="excerpt d-block">Unlimited Trading Account</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>Unlimited Trade Entries</li>
								<li><span class="fa fa-check me-2"></span>Personalised Account</li>
								<li><span class="fa fa-check me-2"></span>Account Analytics</li>
								<li><span class="fa fa-check me-2"></span>Refined Analytics</li>
								<li><span class="fa fa-check me-2"></span>Symbol Analytics</li>
								<li><span class="fa fa-check me-2"></span>Import/Export Data</li>
								<li><span class="fa fa-check me-2"></span>Trading Buddy Support</li>
							</ul>
							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 yearly" style="display:none" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><sup>£</sup> <span class="number">76</span><span>/Per Year</span></span>
							<span class="excerpt d-block">1 Trading Account</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>Unlimited Trade Entries</li>
								<li><span class="fa fa-check me-2"></span>Personalised Account</li>
								<li><span class="fa fa-check me-2"></span>Account Analytics</li>
								<li><span class="fa fa-check me-2"></span>Refined Analytics</li>
								<li><span class="fa fa-check me-2"></span>Symbol Analytics</li>
								<li><span class="fa fa-check me-2"></span>Import/Export Data</li>
								<li><span class="fa fa-check me-2"></span>Trading Buddy Support</li>
							</ul>
							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 yearly" style="display:none" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><sup>£</sup> <span class="number">115</span><span>/Per Year</span></span>
							<span class="excerpt d-block">3 Trading Account</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>Unlimited Trade Entries</li>
								<li><span class="fa fa-check me-2"></span>Personalised Account</li>
								<li><span class="fa fa-check me-2"></span>Account Analytics</li>
								<li><span class="fa fa-check me-2"></span>Refined Analytics</li>
								<li><span class="fa fa-check me-2"></span>Symbol Analytics</li>
								<li><span class="fa fa-check me-2"></span>Import/Export Data</li>
								<li><span class="fa fa-check me-2"></span>Trading Buddy Support</li>
							</ul>
							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 yearly" style="display:none" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><sup>£</sup> <span class="number">191</span><span>/Per Year</span></span>
							<span class="excerpt d-block">Unlimited Trading Account</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>Unlimited Trade Entries</li>
								<li><span class="fa fa-check me-2"></span>Personalised Account</li>
								<li><span class="fa fa-check me-2"></span>Account Analytics</li>
								<li><span class="fa fa-check me-2"></span>Refined Analytics</li>
								<li><span class="fa fa-check me-2"></span>Symbol Analytics</li>
								<li><span class="fa fa-check me-2"></span>Import/Export Data</li>
								<li><span class="fa fa-check me-2"></span>Trading Buddy Support</li>
							</ul>
							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section faq-section" style="padding-top: 0">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center pb-5" data-aos="fade-up" data-aos-duration="1000">
					<h2>FAQ</h2>
				</div>
				<div class="row justify-content-center default-according style-1 faq-accordion" data-aos="fade-up" id="accordionoc">
				    <div class="col-xl-8 xl-60 col-lg-6 col-md-8">
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon" aria-expanded="false" aria-controls="collapseicon"><i
				                            data-feather="help-circle"></i>What Symbols Do We Include?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon" aria-labelledby="collapseicon" data-bs-parent="#accordionoc">
				                <div class="card-body">We provide a 106 Symbols. 14 Indices, 15 Commodities and 79 Forex Pairs. You can create a
									free account and see them for yourself.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon2" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i> WordPress Site Maintenance ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon2" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon3" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i>Can I import my previous trading history?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon3" data-bs-parent="#accordionoc">
				                <div class="card-body">Yes, You can import as many trades as you like.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon4" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i>Do you have videos how to use platform?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon4" data-bs-parent="#accordionoc">
				                <div class="card-body">Yes we have a Quick Course located inside the platform.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon5" aria-expanded="false"><i data-feather="help-circle"></i>
				                        What payment methods do we accept?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon5" aria-labelledby="collapseicon5" data-bs-parent="#accordionoc">
				                <div class="card-body">We accept Stripe and Paypal. Our payments are reassuring for both Monthly and Yearly
									Subscriptions.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon7" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i>Can suggestions be made to The Trading Buddy?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon7" data-bs-parent="#accordionoc">
				                <div class="card-body">Yes, We love to hear your feedback. Please send us an email and you will be heard.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon8" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i> Where do I cancel my subscription?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon8" data-bs-parent="#accordionoc">
				                <div class="card-body">You can do this in you account settings. </div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon9" aria-expanded="false"><i data-feather="help-circle"></i>
				                        What happens if I cancel my subscription?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon9" aria-labelledby="collapseicon9" data-bs-parent="#accordionoc">
				                <div class="card-body">You will still be able to view your account as a free account. You can still export the data but
									you will not be able to import new data.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon10" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i> Can I permanently have my account removed?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon10" data-bs-parent="#accordionoc">
				                <div class="card-body">Yes, of course. You just need to send us an email.</div>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section contact-section bg-light">
      <div class="container-xl">
          <div class="row d-flex mb-5 contact-info">
              <div class="col-md-12 mb-4">
                  <h2 class="h3">Contact Information</h2>
              </div>
              <div class="w-100"></div>
          </div>
          <div class="row justify-content-center g-md-0 block-9">
              <div class="col-md-9 order-md-last d-flex">
                  <form action="#" class="bg-white p-5 contact-form">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Email">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Subject">
                      </div>
                      <div class="form-group">
                          <textarea name="" id="" cols="30" rows="7" class="form-control"
                              placeholder="Message"></textarea>
                      </div>
                      <div class="form-group">
                          <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                      </div>
                  </form>
              </div>
          </div>
      </div>
  	</section>
	<footer class="ftco-footer">
		<div class="container-xl">
			<div class="row pb-5">
				<div class="col-md-5">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2 logo d-flex">
							<a class="navbar-brand" href="index.html">
								<img class="bottom-logo" src="../assets/images/logo/logo-blacktext.png" alt="logo">
							</a>
						</h2>
						<p>Email Address: Contact@thetradingbuddy.com
						</p>
						<ul class="ftco-footer-social list-unstyled mt-4">
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading">Explore</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Terms and Conditions</a></li>
							<li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Privacy Policy</a></li>
							<li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Cookie Policy</a></li>
							<li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Acceptable Use Policy </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Apps</h2>
						<div class="block-23 mb-3">
							<img src="../assets/images/logo/appstore.png" class="app-logo apple-store mb-3">
							<img src="../assets/images/logo/googlestore.png" class="app-logo google-store mb-3">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0 py-5 bg-wrap">
			<div class="container-xl">
				<div class="row">
					<div class="col-md-12 text-center">
						<p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">
							Copyright &copy;<script data-cfasync="false"
								src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
							<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved 
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/script.js"></script>
	<script src="../assets/js/tiny-slider.js"></script>
	<script src="../assets/js/glightbox.min.js%2brellax.min.js%2baos.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.WAj16U4E-j.js"></script>
	<script>
			$('#monthoryear').on('change', function(e) {
				$('.monthly').toggle();
				$('.yearly').toggle();
			})
	</script>
	<script>
		eval(mod_pagespeed_sczcemKaXI);
	</script>
	<script>
		eval(mod_pagespeed_iugTgh5gQT);
	</script>
	<script>
		eval(mod_pagespeed_fwjKd8Uu8i);
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
	</script>
	<script>
		eval(mod_pagespeed_3lnfIwbzoi);
	</script>
	<script>
		eval(mod_pagespeed_CehiAjdXZP);
	</script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>

</html>