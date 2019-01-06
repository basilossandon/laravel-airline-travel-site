<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="/css/navbar.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        @yield('header')
        <title>@yield('title') | LATAM.com</title>
        <style>

        </style>
    </head>
    <body>
        <div class="heading">
            <div class="container">
                @include('navbar.navbar')
            </div>
        </div>
        @include('carousel.carousel')

        <div class="container content">
            <h1 class="titulo"></h1> 
             @yield('content')
        </div>
    </body>
    <script src="/js/jquery-slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    @yield('scripts')
</html>
