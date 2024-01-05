<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title', 'Saas') - {{ config('app.name') }}
    </title>
    @vite('resources/css/app.css')
    @vite('frontend/index.js')
</head>

<body>
</body>
</html>
