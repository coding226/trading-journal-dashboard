@extends('landing.layout')
@section('title')
    <title>Contact us | Trading Buddy</title>
@endsection
@section('style')
@endsection
@section('content')
  <section class="hero-wrap hero-wrap-2">
      <div class="overlay"></div>
      <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
              <div class="col-md-9 pt-5 text-center">
                  <h1 class="mb-0 bread">Contact us</h1>
                  <p class="breadcrumbs"><span class="me-2"><a href="index.html">Home <i
                                  class="fa ion-ios-arrow-round-forward"></i></a></span> <span>Contact us <i
                              class="fa ion-ios-arrow-round-forward"></i></span></p>
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