<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>App - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- App Style -->
        <link href="/css/app.css"  rel="stylesheet" type="text/css">

        <!-- Styles -->
    @stack('styles')

        <!-- Scripts -->
    @stack('head_scripts')
    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">
            @component('components.topnav')
            @endcomponent
            <div class="content">
                @yield('content')
            </div>
        </div>
        <script src="/js/manifest.js"></script>
        <script src="/js/vendor.js"></script>
        <script src="/js/app.js"></script>
        @stack('footer_scripts')
    </body>
</html>
