<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Shkolo Dashboard' }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
<div class="full-height">
    <nav class="navbar">
        <div class="navbar-content">
            <div class="navbar-logo">
                <a href="/">Shkolo</a>
            </div>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>
</div>
</body>
</html>
