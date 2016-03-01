<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css"/>
        <link rel="stylesheet" href="/assets/css/queries.css"/>
        <meta charset="utf-8"/>
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="navbar">
            @include('includes.navbar')
        </div>
        <div class="main-content">
            @yield('content')
        </div>
        <script src="/assets/js/masonry.pkgd.min.js"></script>
    </body>
</html>