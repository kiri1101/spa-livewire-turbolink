<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="turbolinks-cache-control" content="no-cache">
        <meta name="turbolinks-root" content="/">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        @yield('meta')

        <title>{{ $title }}</title>

        @vite(['resources/js/app.js'])
        @livewireStyles

        @yield('script')
    </head>
    <body class="antialiased">

        <main class="bg-white">
            {{ $slot }}
        </main>

        @livewireScripts
        <script defer src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    </body>
</html>
