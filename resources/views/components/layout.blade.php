<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @props(['title' => null])
    <title>{{ $title ? $title . ' | ' . config('app.name') : config('app.name') }}</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="wrapper">
        <x-mobile-menu />

        <x-banner />

        <x-header />

        <main class="main">
            {{ $slot }}
        </main>

        <x-footer />
    </div>
</body>
</html>
