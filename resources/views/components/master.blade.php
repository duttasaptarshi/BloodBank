<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-4 py-4">
            <header class="lg:flex container mx-auto">
                    <img
                        src="/images/logo.svg"
                        class="object-sale-down h-16"
                        alt="logo"
                    >
                    <div class="px-1 py-4 font-bold text-green-500 text-xl">
                        BloodBank
                    </div>
            </header>
        </section>
       
        {{ $slot }}
    </div>
</body>
</html>
