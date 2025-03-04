<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="m-0 p-0">
        <header class="bg-black flex justify-center py-4">
            <img alt="{{ config('app.name') }} Logo" class="block" src="{{ asset('images/logo.png') }}">
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>@yield('footer')</p>
        </footer>
    </body>
</html>
