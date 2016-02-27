<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css"/>
        <meta charset="utf-8"/>
        <title>@yield('title');</title>
    </head>
    <body>
        
        <div class="container">
            <article class="row">
                @yield('content')
            </article>
        </div>
    </body>
</html>