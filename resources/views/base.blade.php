<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <link rel="stylesheet" media="all" href="/css/app.css" type="text/css" />

        @yield('head')
    </head>
    <body>
        @yield('content')
        @yield('footer')
    </body>
</html>
