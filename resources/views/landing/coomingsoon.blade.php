<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The only trading journal that helps you find your buddy.">
    <meta name="keywords" content="trading buddy, trading, buy, sell, long, short, web app">
    <meta name="author" content="James">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}" type="image/x-icon">
    <title>Cooming Soon | The Trading Buddy</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/scrollbar.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ url('assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/responsive.css') }}">
    <style>
        .comingsoon-bgimg img{
            width: 200px;
        }
        .comingsoon-inner p{
            font-size: 18px !important;
            max-width: 500px;
        }
        .success.font-success i{
            font-size: 200px;
        }
    </style>
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Body Start-->
        <div class="container-fluid p-0 m-0">
            <div class="comingsoon comingsoon-bgimg">
                <div class="comingsoon-inner text-center"><img src="../assets/images/logo/logo-blacktext.png" alt="">
                    <p class="m-20">
                        Please subscribe to our mailing list to become first to know when our platform is live and to recieve a Welcome Buddy Discount when we launch.
                    </p>
                    @if(session()->has('status'))
                    <div class="success font-success">
                        <i class="icofont icofont-check-circled"></i>
                    </div>
                    @else
                    <form action="{{ url('/colletemail') }}" method="post">
                    @csrf
                        <div class="mb-3 mt-5 m-form__group">
                            <div class="input-group"><span class="input-group-text">@</span>
                              <input class="form-control" type="email" name="comingsoonemail" placeholder="Email" required>
                            </div>
                        </div>
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ url('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ url('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ url('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ url('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{ url('assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ url('assets/js/script.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>
