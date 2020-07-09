<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>@yield("page-title")</title>
    </head>
    <body>
        <main>
            @yield('content')
        </main>
    </body>
</html>
