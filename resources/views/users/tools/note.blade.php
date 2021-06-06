@extends('layouts.app')
@section('title')
<title>My Note | Trading Buddy</title>
@endsection
@section('style')
<style>
    .job-search .card-body{
        height: 360px;
    }
    .job-search .card-body img{
        width: 100%;
        max-height: 180px;
        margin-top: 30px;
    }
    .addnewnote svg{
        vertical-align: middle;
    }
</style>
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>My Note</h3>
                    <a class="addnewnote" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><i data-feather="plus-circle"></i> Add New</a>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">My Note</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 xl-100">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p>23 June, 2021<span class="badge badge-primary pull-right">New</span></p>
                                    <h6 class="f-w-600"><a href="#">The monkey-rope</a></h6>                                    
                                </div>
                            </div>
                            <p>We are looking for an experienced and Cuba designer and/or frontend engineer with expertise in accessibility to join our team , 3+ years of experience working in as a Frontend Engineer or comparable role. You won’t be a team of one though — you’ll be collaborating closely with other...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 xl-100">
                <div class="card">
                    <div class="job-search">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p>23 June, 2021<span class="badge badge-primary pull-right">New</span></p>
                                    <h6 class="f-w-600"><a href="#">The monkey-rope</a></h6>                                    
                                </div>
                            </div>
                            <img src="{{ url('/assets/images/lightgallry/04.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

    <script src="https://www.google.com/recaptcha/api.js?render=6LfEbRQbAAAAAM6FxVdjn-U-92V2iuG7wD0eu3cP"></script>
    <script>
             grecaptcha.ready(function() {
                 grecaptcha.execute('6LfEbRQbAAAAAM6FxVdjn-U-92V2iuG7wD0eu3cP', {action: 'contact'}).then(function(token) {
                    if (token) {
                      document.getElementById('recaptcha').value = token;
                    }
                 });
             });
    </script>
    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 12427134;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript><a href="https://www.livechatinc.com/chat-with/12427134/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->
@endsection
