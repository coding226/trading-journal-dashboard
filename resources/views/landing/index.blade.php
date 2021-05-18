@extends('landing.layout')
@section('title')
    <title>Welcome | Trading Buddy</title>
@endsection
@section('style')
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
</style>
@endsection
@section('content')
	<section class="hero-wrap">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-between align-items-stretch">
				<div class="col-md-6 col-lg-5 text d-flex align-items-center">
					<div>
						<h1 class="">Your Online Trading Journal</h1>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
						</p>
						<p class="d-flex">
							<a href="{{ url('/login') }}" class="btn btn-primary d-flex align-items-center"><span>GET STARTED FREE</span></a>
							<a href="#" class="btn btn-secondary"><span class="call">Call us for any inquiry</span>
								<span>+01 2345 5678 910</span></a>
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
								<span class="subheading">Our Services</span>
								<h2 class="mb-4">We Provide A Lot of Cool Services</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and
									Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
									at the coast of the Semantics, a large language ocean.</p>
								<p><a href="#" class="btn btn-secondary">Our Services</a></p>
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
											<h2>Something</h2>
											<p>Even the all-powerful Pointing has no control about the blind texts </p>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="200" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-seo"></span></div>
										<div class="text">
											<h2>Something</h2>
											<p>Even the all-powerful Pointing has no control about the blind texts </p>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="300" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-vector"></span></div>
										<div class="text">
											<h2>Something</h2>
											<p>Even the all-powerful Pointing has no control about the blind texts </p>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="400" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-business"></span></div>
										<div class="text">
											<h2>Something</h2>
											<p>Even the all-powerful Pointing has no control about the blind texts </p>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="400" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-search-engine"></span></div>
										<div class="text">
											<h2>Something</h2>
											<p>Even the all-powerful Pointing has no control about the blind texts </p>
										</div>
									</a>
								</div>
								<div class="col-md-4 col-lg-4 text-center d-flex align-items-stretch" data-aos="fade-up"
									data-aos-delay="400" data-aos-duration="1000">
									<a href="#" class="services">
										<div class="icon d-flex align-items-center justify-content-center"><span
												class="flaticon-rocket"></span></div>
										<div class="text">
											<h2>Something</h2>
											<p>Even the all-powerful Pointing has no control about the blind texts </p>
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
						<h2 class="mb-4">About tradding Buddy</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
							Semantics, a large language ocean.</p>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
							It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<p><a href="#" class="btn btn-primary">Learn more</a></p>
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
	<section class="ftco-section ftco-about-section ftco-no-pt ftco-no-pb">
		<div class="container-xl">
			<div class="row g-xl-5">
				<div class="col-md-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100"
					data-aos-duration="1000">
					<img src="../assets/images/about.svg" class="img-fluid" alt="">
				</div>
				<div class="col-md-6 py-5 heading-section" data-aos="fade-up" data-aos-delay="200"
					data-aos-duration="1000">
					<div class="py-md-5">
						<span class="subheading">About Us</span>
						<h2 class="mb-4">Tradding Buddy</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
							Semantics, a large language ocean.</p>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
							It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<p><a href="#" class="btn btn-primary">More About us</a></p>
					</div>
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
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in Bookmarksgrove.</p>
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
					<h2 class="mb-4">Easy Management for Your Businesses</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in Bookmarksgrove.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="services text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
						<div class="icon d-flex align-items-center justify-content-center"><span
								class="flaticon-settings"></span></div>
						<div class="text">
							<h2>Easy Management</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
								your mouth.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="services text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
						<div class="icon d-flex align-items-center justify-content-center"><span
								class="flaticon-padlock"></span></div>
						<div class="text">
							<h2>Protect Your Profile</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
								your mouth.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="services text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
						<div class="icon d-flex align-items-center justify-content-center"><span
								class="flaticon-secret-file"></span></div>
						<div class="text">
							<h2>Private Community</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
								your mouth.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="services text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
						<div class="icon d-flex align-items-center justify-content-center"><span
								class="flaticon-help"></span></div>
						<div class="text">
							<h2>24/7 Help Support</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia. It is a paradisematic country, in which roasted parts of sentences fly into
								your mouth.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<hr>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
					<span class="subheading">Pricing</span>
					<h2>Choose Your Pricing Plan</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in Bookmarksgrove.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><sup>$</sup> <span class="number">49</span></span>
							<span class="excerpt d-block">Personal</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>Strategic Alliance</li>
								<li><span class="fa fa-check me-2"></span>Growth Expansion</li>
								<li><span class="fa fa-check me-2"></span>Business Planning</li>
								<li><span class="fa fa-check me-2"></span>Contact Negotiation</li>
								<li><span class="fa fa-check me-2"></span>Market Positioning</li>
							</ul>
							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><sup>$</sup> <span class="number">79</span></span>
							<span class="excerpt d-block">Professional</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>Strategic Alliance</li>
								<li><span class="fa fa-check me-2"></span>Growth Expansion</li>
								<li><span class="fa fa-check me-2"></span>Business Planning</li>
								<li><span class="fa fa-check me-2"></span>Contact Negotiation</li>
								<li><span class="fa fa-check me-2"></span>Market Positioning</li>
							</ul>
							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><sup>$</sup> <span class="number">109</span></span>
							<span class="excerpt d-block">Medium Business</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>Strategic Alliance</li>
								<li><span class="fa fa-check me-2"></span>Growth Expansion</li>
								<li><span class="fa fa-check me-2"></span>Business Planning</li>
								<li><span class="fa fa-check me-2"></span>Contact Negotiation</li>
								<li><span class="fa fa-check me-2"></span>Market Positioning</li>
							</ul>
							<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
					<div class="block-7">
						<div class="text-center">
							<span class="price"><sup>$</sup> <span class="number">149</span></span>
							<span class="excerpt d-block">Gigantic Business</span>
							<ul class="pricing-text mb-5">
								<li><span class="fa fa-check me-2"></span>Strategic Alliance</li>
								<li><span class="fa fa-check me-2"></span>Growth Expansion</li>
								<li><span class="fa fa-check me-2"></span>Business Planning</li>
								<li><span class="fa fa-check me-2"></span>Contact Negotiation</li>
								<li><span class="fa fa-check me-2"></span>Market Positioning</li>
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
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in Bookmarksgrove.</p>
				</div>
				<div class="row default-according style-1 faq-accordion" id="accordionoc">
				    <div class="col-xl-6 xl-60 col-lg-6 col-md-6">
						<div class="faq-title">
				            <h6>Something Property</h6>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon" aria-expanded="false" aria-controls="collapseicon"><i
				                            data-feather="help-circle"></i> Integrating WordPress with Your Website?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon" aria-labelledby="collapseicon" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
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
				                            data-feather="help-circle"></i>Meta Tags in WordPress ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon3" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon4" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i> WordPress in Your Language ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon4" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="faq-title">
				            <h6>Intellectual Property</h6>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon5" aria-expanded="false"><i data-feather="help-circle"></i>
				                        WordPress Site Maintenance ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon5" aria-labelledby="collapseicon5" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon7" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i> WordPress in Your Language ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon7" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon8" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i>Integrating WordPress with Your Website ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon8" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				    </div>
					<div class="col-xl-6 xl-60 col-lg-6 col-md-6">
				        <div class="faq-title">
				            <h6>Selling And Buying</h6>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon9" aria-expanded="false"><i data-feather="help-circle"></i>
				                        WordPress Site Maintenance ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon9" aria-labelledby="collapseicon9" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon10" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i>Meta Tags in WordPress ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon10" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon11" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i>Validating a Website ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon11" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon12" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i>Know Your Sources ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon12" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="faq-title">
				            <h6>User Accounts</h6>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon13" aria-expanded="false"><i
				                            data-feather="help-circle"></i>Integrating WordPress with Your Website ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon13" aria-labelledby="collapseicon13"
				                data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon14" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i>WordPress Site Maintenance ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon14" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon16" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i> WordPress in Your Language ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon16" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon17" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i> Validating a Website ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon17" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
				            </div>
				        </div>
				        <div class="card">
				            <div class="card-header">
				                <h5 class="mb-0">
				                    <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
				                        data-bs-target="#collapseicon18" aria-expanded="false" aria-controls="collapseicon2"><i
				                            data-feather="help-circle"></i>Meta Tags in WordPress ?</button>
				                </h5>
				            </div>
				            <div class="collapse" id="collapseicon18" data-bs-parent="#accordionoc">
				                <div class="card-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
				                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
				                    nascetur ridiculus mus.</div>
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
              <div class="col-md-3">
                  <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
              </div>
              <div class="col-md-3">
                  <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
              </div>
              <div class="col-md-3">
                  <p><span>Email:</span> <a
                          href="https://preview.colorlib.com/cdn-cgi/l/email-protection#f79e999198b78e988285849e8392d994989a"><span
                              class="__cf_email__"
                              data-cfemail="b0d9ded6dff0c9dfc5c2c3d9c4d59ed3dfdd">[email&#160;protected]</span></a></p>
              </div>
              <div class="col-md-3">
                  <p><span>Website</span> <a href="#">yoursite.com</a></p>
              </div>
          </div>
          <div class="row g-md-0 block-9">
              <div class="col-md-6 order-md-last d-flex">
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
              <div class="col-md-6 d-flex">
                  <div id="map" class="bg-white"></div>
              </div>
          </div>
      </div>
  </section>
@endsection
@section('script')
@endsection