<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

        <div id="app">
        @include('includes.header')
            <section class="section">
                <router-view></router-view>
                @include('includes.presentationCards')
                @include('includes.pricingAndOfferCards')
                @include('includes.thegirl')
                @include('includes/brands')
                @include('includes.workers')
                @include('includes.blog')
                @include('includes.pricing')
            </section>
            @include('includes.footer')
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
