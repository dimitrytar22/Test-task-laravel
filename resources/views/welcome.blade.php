@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold mb-6 text-center">Random Films</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-white rounded shadow hover:shadow-lg transition-shadow duration-300">
            <img src="https://via.placeholder.com/300x400" alt="Movie Poster" class="rounded-t w-full h-64 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-700">Movie Title 1</h3>
                <p class="text-sm text-gray-600 mt-2">Genre: Action, Adventure</p>
                <p class="text-sm text-gray-600 mt-1">Rating: ⭐ 8.5</p>
                <button
                    class="mt-4 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">
                    View Details
                </button>
            </div>
        </div>

        <div class="bg-white rounded shadow hover:shadow-lg transition-shadow duration-300">
            <img src="https://via.placeholder.com/300x400" alt="Movie Poster" class="rounded-t w-full h-64 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-700">Movie Title 2</h3>
                <p class="text-sm text-gray-600 mt-2">Genre: Drama</p>
                <p class="text-sm text-gray-600 mt-1">Rating: ⭐ 7.9</p>
                <button
                    class="mt-4 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">
                    View Details
                </button>
            </div>
        </div>

        <div class="bg-white rounded shadow hover:shadow-lg transition-shadow duration-300">
            <img src="https://via.placeholder.com/300x400" alt="Movie Poster" class="rounded-t w-full h-64 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-700">Movie Title 3</h3>
                <p class="text-sm text-gray-600 mt-2">Genre: Comedy</p>
                <p class="text-sm text-gray-600 mt-1">Rating: ⭐ 8.1</p>
                <button
                    class="mt-4 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">
                    View Details
                </button>
            </div>
        </div>
    </div>

    <h2 class="text-3xl font-bold mt-6 mb-6 text-center">Random Genres</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-white rounded shadow hover:shadow-lg transition-shadow duration-300">
            <img src="https://via.placeholder.com/300x400" alt="Movie Poster" class="rounded-t w-full h-64 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-700">Movie Title 1</h3>
                <p class="text-sm text-gray-600 mt-2">Genre: Action, Adventure</p>
                <p class="text-sm text-gray-600 mt-1">Rating: ⭐ 8.5</p>
                <button
                    class="mt-4 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">
                    View Details
                </button>
            </div>
        </div>

        <div class="bg-white rounded shadow hover:shadow-lg transition-shadow duration-300">
            <img src="https://via.placeholder.com/300x400" alt="Movie Poster" class="rounded-t w-full h-64 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-700">Movie Title 2</h3>
                <p class="text-sm text-gray-600 mt-2">Genre: Drama</p>
                <p class="text-sm text-gray-600 mt-1">Rating: ⭐ 7.9</p>
                <button
                    class="mt-4 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">
                    View Details
                </button>
            </div>
        </div>

        <div class="bg-white rounded shadow hover:shadow-lg transition-shadow duration-300">
            <img src="https://via.placeholder.com/300x400" alt="Movie Poster" class="rounded-t w-full h-64 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold text-gray-700">Movie Title 3</h3>
                <p class="text-sm text-gray-600 mt-2">Genre: Comedy</p>
                <p class="text-sm text-gray-600 mt-1">Rating: ⭐ 8.1</p>
                <button
                    class="mt-4 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">
                    View Details
                </button>
            </div>
        </div>
    </div>

@endsection
