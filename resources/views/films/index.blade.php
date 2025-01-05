@extends('layouts.app')

@section('title')
    Films
@endsection

@section('content')
    <a href="{{ route('films.create') }}"
       class="inline-block bg-blue-500 text-white font-semibold px-6 py-2 rounded shadow hover:bg-blue-600 transition">
        Add film
    </a>
    @if(session()->has('success'))
        <div class="container mx-auto mb-4 mt-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <h2 class="text-3xl font-bold mb-6 text-left">All Films</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($films as $film)
            <a href="{{route('films.show', $film->id)}}">
                <div class="bg-white rounded shadow hover:shadow-lg transition-shadow duration-300">
                    <img src="{{asset('images/'.$film->poster_link)}}" alt="Movie Poster"
                         class="rounded-t w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-gray-700">{{$film->title}}</h3>
                        <p class="text-sm text-gray-600 mt-2">Genres:
                            @foreach($film->genres as $genre)
                                <span
                                    class="text-blue-500 font-semibold underline decoration-dotted decoration-blue-300 hover:text-blue-600 transition mr-2">
                                    {{$genre->title}}
                                </span>
                            @endforeach</p>
                        @if($film->published == 0)
                            <p class="font-bold text-red-500">Not Published</p>
                        @else
                            <p class="font-bold text-green-500">Published</p>
                        @endif

                        <button
                            class="mt-4 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-300">
                            View Details
                        </button>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
        {{$films->links('pagination::tailwind')}}

@endsection
