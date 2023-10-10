<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TIKETANI</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/css/home.css', 'resources/js/home.js'])

</head>

<body class="antialiased">
    @include('home.header')

    <div
        class="relative p-6 sm:flex min-h-screen bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="shadow-sm rounded-lg divide-y">
            <h2 class="text-2xl font-black">All upcoming Football Events</h2>

            @include('home.listing')
        </div>

    </div>

    <script src="https://cdn.tailwindcss.com/3.3.0"></script>

</body>

</html>
