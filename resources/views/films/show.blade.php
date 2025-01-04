@extends('layouts.app')

@section('title')
    {{$film->title}}
@endsection

@section('content')
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
                @endforeach</p>


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
