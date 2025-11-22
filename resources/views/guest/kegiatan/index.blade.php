<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Portal BEMKM UDINUS') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Include Navbar -->
    @include('guest.components.navbar')
</body>

</html>
