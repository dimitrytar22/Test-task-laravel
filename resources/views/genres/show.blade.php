@extends('layouts.app')

@section('title')
    {{$genre->title}}
@endsection

@section('content')
    <a href="{{ route('genres.index')}}"
       class="inline-block mb-2 px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded shadow hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 transition">
        Back
    </a>

    <div class="bg-white rounded shadow hover:shadow-lg transition-shadow duration-300">

        <div class="p-4">
            <h3 class="text-lg font-bold text-gray-700">Title: {{$genre->title}}</h3>
            <a href="{{route('genres.edit', $genre->id)}}"
               class="mb-2 mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                Edit
            </a>
            <form method="POST" action="{{route('genres.destroy', $genre->id)}}">
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
