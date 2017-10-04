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
        <link rel="stylesheet" href="/css/aos.css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

        <div id="app">
        @include('includes.header')
        @include('includes/messages.messages')
            <section class="website">
                <flash></flash>
                <flash-errors></flash-errors>
                <router-view></router-view>
            </section>
        @include('includes.footer')
        </div>

        <script src="/js/app.js"></script>
        <script src="/js/aos.js"></script>
        <script>

            AOS.init({
              offset: 300,
              duration: 400,
              easing: 'ease-in-sine',
              delay: 80,
            });

        </script>
    </body>
</html>
