<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="{{asset('public/assets/img/favicon.png')}}">
    <title>@yield('title')</title>
    @include('web.layout.header-links')
</head>
<body>
@include('web.layout.header')
@yield('content')
@include('web.layout.footer-links')
@include('web.layout.footer')
@yield('js')
</body>
</html>
