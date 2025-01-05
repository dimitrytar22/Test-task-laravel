<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans flex flex-col min-h-screen">

<header class="bg-blue-500 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Films</h1>
        <nav class="space-x-4">
            <a href="{{route('main')}}" class="hover:underline">Home</a>
            <a href="{{route('films.index')}}" class="hover:underline">Films</a>
            <a href="{{route('genres.index')}}" class="hover:underline">Genres</a>
        </nav>
    </div>
</header>

<main class="container mx-auto py-8 flex-grow">
    @yield('content')
</main>

<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p class="text-sm">All rights reserved</p>
    </div>
</footer>

</body>
</html>
