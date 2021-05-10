@isset($url)
    @include('layouts.admin_header')
@else
    @include('layouts.header')
@endisset
@yield('content')
@include('layouts.footer')