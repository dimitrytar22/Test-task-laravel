@extends('layouts.app')

@section('title')
    {{$film->title}}
@endsection

@section('content')
    <a href="{{ route('films.index')}}"
       class="inline-block mb-2 px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded shadow hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 transition">
        Back
    </a>
    @if(session()->has('success'))
        <div class="container mx-auto mb-4 mt-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="bg-white rounded shadow hover:shadow-lg transition-shadow duration-300">
        <img src="{{asset('images/'.$film->poster_link)}}" alt="Movie Poster"
             class="rounded-t w-full h-64 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-bold text-gray-700">Title: {{$film->title}}</h3>
            <p class="text-sm text-gray-600 mt-2">Genres:
                @foreach($film->genres as $genre)
                    <span
                        class="text-blue-500 font-semibold underline decoration-dotted decoration-blue-300 hover:text-blue-600 transition mr-2">
                                    {{$genre->title}}
                                </span>
                @endforeach
            </p>
            <div class="mt-2 mb-2">
                @if($film->published == 0)
                    <p class="font-bold text-red-500">Not Published</p>
                    <form action="{{route('films.publish', $film->id)}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="flex justify-left">
                            <button type="submit"
                                    class="bg-green-500 text-white px-6 py-2 rounded shadow hover:bg-green-600 transition duration-300">
                                Publish
                            </button>
                        </div>
                    </form>
                @else
                    <p class="font-bold text-green-500">Published</p>
                @endif
            </div>


            <a href="{{route('films.edit', $film->id)}}"
               class="mb-2 mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                Edit
            </a>
            <form method="POST" action="{{route('films.destroy', $film->id)}}">
                @csrf
                @method('DELETE')
                <button
                    class=" mb-2 mt-2 inline-block bg-red-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                    Delete
                </button>
            </form>

        </div>
    </div>
@endsection
