<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Sample') -Laravel SNS</title>
        <link rel="stylesheet" href="/css/app.scss">
    </head>
    <body>
        @include('layouts/_header')
        <div class="container">
            @yield('content')
            @include('layouts/_footer')
        </div>
    </body>
</html>
