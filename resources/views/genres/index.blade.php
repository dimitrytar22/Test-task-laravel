@extends('layouts.app')

@section('title')
    Genres
@endsection

@section('content')
    <a href="{{ route('genres.create') }}"
       class="inline-block bg-blue-500 text-white font-semibold px-6 py-2 rounded shadow hover:bg-blue-600 transition">
        Add genre
    </a>
    @if(session()->has('success'))
        <div class="container mx-auto mb-4 mt-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <h2 class="text-3xl font-bold mb-6 text-left">All Genres</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($genres as $genre)
            <a href="{{route('genres.show', $genre->id)}}">
                <div class="bg-white rounded shadow hover:shadow-lg transition-shadow duration-300">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-700">Title: {{$genre->title}}</h3>
                        <button
                            class="mt-4 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">
                            View Details
                        </button>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    {{$genres->links('pagination::tailwind')}}

@endsection
