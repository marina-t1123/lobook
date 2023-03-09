<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <!-- viteではなく、Laravel-mixを使用する為コメントアウトしている。 -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        <!-- Laravel-mixを使用する際は、下記２つを追加で読み込む必要がある -->
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
