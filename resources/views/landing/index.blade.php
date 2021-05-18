@extends('landing.layout')
@section('title')
    <title>Welcome | Trading Buddy</title>
@endsection
@section('style')
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
											<h2>Marketing</h2>
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
											<h2>SEO</h2>
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
											<h2>UI/UX Design</h2>
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
											<h2>Creative</h2>
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
											<h2>Optimization</h2>
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
											<h2>Business Strategy</h2>
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
	<section class="ftco-section ftco-counter-section ftco-no-pt">
		<div class="container">
			<div class="row py-5 g-2">
				<div class="col-md-12">
					<div class="counter-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
						<div class="row g-0">
							<div class="col-lg img border" style="background-image: url(../assets/images/about.jpg);"></div>
							<div class="col-md-6 col-lg d-flex align-items-stretch">
								<div class="counter-wrap" data-aos="fade-up" data-aos-duration="1000">
									<div class="text">
										<span class="d-block number gradient-text"><span id="count1" class="counter"
												data-count="900">0</span>+</span>
										<p>Project Done</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg d-flex align-items-stretch">
								<div class="counter-wrap even" data-aos="fade-up" data-aos-delay="100"
									data-aos-duration="1000">
									<div class="text">
										<span class="d-block number gradient-text"><span id="count2" class="counter"
												data-count="500">0</span>+</span>
										<p>Optimize Sites</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg d-flex align-items-stretch">
								<div class="counter-wrap" data-aos="fade-up" data-aos-delay="200"
									data-aos-duration="1000">
									<div class="text">
										<span class="d-block number gradient-text"><span id="count2" class="counter"
												data-count="770">0</span>+</span>
										<p>Coffee Cups</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg d-flex align-items-stretch">
								<div class="counter-wrap even" data-aos="fade-up" data-aos-delay="300"
									data-aos-duration="1000">
									<div class="text">
										<span class="d-block number gradient-text"><span id="count2" class="counter"
												data-count="1000">0</span>+</span>
										<p>Happy People</p>
									</div>
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
			<div class="row justify-content-center mt-md-5 mt-4" data-aos="fade-up" data-aos-delay="100"
				data-aos-duration="1000">
				<div class="col-md-8">
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in Bookmarksgrove.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section">
		<div class="container-fluid">
			<div class="row justify-content-center pb-5">
				<div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
					<span class="subheading">Our Portfolio</span>
					<h2 class="mb-3">Our Awesome Work</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in Bookmarksgrove.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="work-wrap" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="100">
						<div class="img" style="background-image: url(../assets/images/work-1.jpg);"></div>
						<div class="text">
							<span class="category">Branding, Printing</span>
							<h3><a href="#">High Quality Design Concept</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="work-wrap" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
						<div class="img" style="background-image: url(../assets/images/work-2.jpg);"></div>
						<div class="text">
							<span class="category">Graphic Design</span>
							<h3><a href="#">High Quality Design Concept</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="work-wrap" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
						<div class="img" style="background-image: url(../assets/images/work-3.jpg);"></div>
						<div class="text">
							<span class="category">Web Development</span>
							<h3><a href="#">High Quality Design Concept</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="work-wrap" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
						<div class="img" style="background-image: url(../assets/images/work-4.jpg);"></div>
						<div class="text">
							<span class="category">Web Development</span>
							<h3><a href="#">High Quality Design Concept</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p><a href="#" class="btn btn-custom">View More Portfolio <span
								class="ion-ios-arrow-round-forward"></span></a></p>
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
	<!-- <section class="ftco-intro py-5 bg-primary">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-10">
					<div class="row g-lg-5">
						<div class="col-md-7 text-lg-right">
							<h2 class="mb-0">Newsletter - Stay tune and get the latest update</h2>
							<p>Far far away, behind the word mountains</p>
						</div>
						<div class="col-md-5 border-left d-flex align-items-center">
							<form action="#" class="subscribe-form">
								<div class="form-group d-flex align-items-center">
									<input type="text" class="form-control" placeholder="Enter email address">
									<a href="#" class="btn-icon"><span class="fa fa-paper-plane"></span></a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
@endsection
@section('script')
@endsection