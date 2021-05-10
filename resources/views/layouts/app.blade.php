@empty($url)
    @include('layouts.header')
@else
    @include('layouts.admin_header')
@endempty
@yield('content')
@include('layouts.footer')