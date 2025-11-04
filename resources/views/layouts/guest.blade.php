<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portal BEMKM Udinus') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Tailwind + Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-inter bg-[#ebe7ff] text-gray-900">

    <!-- Wrapper -->
    <div class="min-h-screen flex items-center justify-center">
        <!-- Main container -->
        <div class="flex w-[900px] max-w-[95%] bg-white rounded-3xl shadow-lg overflow-hidden">
            {{ $slot }}
        </div>
    </div>

</body>

</html>
