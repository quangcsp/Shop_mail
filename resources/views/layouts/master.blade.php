<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.meta')
    @yield('title')
    @include('layouts.css')
    @yield('css')
</head>
<body role="document">
    <div id="header">
        @include('layouts.header')
    </div>

    <div id= "content">
        @yield('content')
    </div>

    <div id="footer">
        @include('layouts.footer')
    </div>

    @include('layouts.scripts')
    @yield('scripts')
</body>
</html>
