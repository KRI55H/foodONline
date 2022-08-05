<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="{{asset('public/assets/img/favicon.png')}}">
    @yield('title')
    @include('web.layout.header-links')
</head>
<body>
@include('web.layout.header')
@yield('content')
@include('web.layout.footer')
@include('web.layout.footer-links')
@yield('js')
</body>
</html>
