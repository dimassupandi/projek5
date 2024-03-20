<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        @vite('resources/js/app.js')
    </body>
</html>